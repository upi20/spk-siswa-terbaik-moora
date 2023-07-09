const can_update = "{{ $can_update == 'true' ? 'true' : 'false' }}" === "true";
const can_delete = "{{ $can_delete == 'true' ? 'true' : 'false' }}" === "true";
let isEdit = true;
const table_html = $('#tbl_main');
let dt_checkbox = new Map();
const btn_checkbox_list = [
    '#btnCheckboxDelete',
];

$(document).ready(function () {
    // datatable ====================================================================================
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    const new_table = table_html.DataTable({
        searchDelay: 500,
        processing: true,
        serverSide: true,
        scrollX: true,
        aAutoWidth: false,
        bAutoWidth: false,
        type: 'GET',
        ajax: {
            url: "{{ route(l_prefix($hpu, 'datatable',1)) }}",
            data: function (d) {
                d['filter[kriteria_id]'] = $('#kriteria_id').val();
            },
            complete: function (data) {
                data.responseJSON.data.forEach(e => {
                    const id = String(e.id);
                    if (dt_checkbox.get(id) == undefined) {
                        dt_checkbox.set(id, false);
                    }
                    checkBoxRefresh();
                });
            }
        },
        columns: [{
            data: 'id',
            name: 'id',
            orderable: false,
            render(data, type, full, meta) {
                return `<input type="checkbox" id="checkbox-${data}" data-id="${data}" class="form-check-input position-relative ml-1" class="checkbox-bulk" onclick="checkBoxSet(this)">`;
            },
        },
        {
            data: null,
            name: 'id',
            orderable: false,
        },
        {
            data: 'nama',
            name: 'nama'
        },
        {
            data: 'nilai',
            name: 'nilai'
        },
        {
            data: 'dari',
            name: 'dari'
        },
        {
            data: 'sampai',
            name: 'sampai'
        },
        ...(can_update || can_delete ? [{
            data: 'id',
            name: 'id',
            render(data, type, full, meta) {
                const btn_update = can_update ? `<button type="button" class="btn btn-rounded btn-primary btn-sm mr-1 mt-1" onClick="editFunc('${data}')">
                        <i class="fas fa-edit"></i></button>` : '';
                const btn_delete = can_delete ? `<button type="button" class="btn btn-rounded btn-danger btn-sm mr-1 mt-1"  onClick="deleteFunc('${data}')">
                        <i class="fas fa-trash"></i></button>` : '';
                return btn_update + btn_delete;
            },
            orderable: false
        }] : []),
        ],
        language: { url: datatable_indonesia_language_url },
        order: [
            [3, 'desc']
        ],
    });

    new_table.on('draw.dt', function () {
        tooltip_refresh();
        var PageInfo = table_html.DataTable().page.info();
        new_table.column(1, {
            page: 'current'
        }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });

    $('#FilterForm').submit(function (e) {
        e.preventDefault();
        checkBoxBtnReset();
        var oTable = table_html.dataTable();
        oTable.fnDraw(false);
    });

    // insertForm ===================================================================================
    $('#MainForm').submit(function (e) {
        e.preventDefault();
        resetErrorAfterInput();
        const formData = new FormData(this);
        setBtnLoading('#btn-save', 'Simpan Perubahan');
        const route = ($('#id').val() == '') ?
            "{{ route(l_prefix($hpu,'insert', 1)) }}" :
            "{{ route(l_prefix($hpu,'update', 1)) }}";
        $.ajax({
            type: "POST",
            url: route,
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                $("#modal-default").modal('hide');
                var oTable = table_html.dataTable();
                oTable.fnDraw(false);
                Swal.fire({ position: 'center', icon: 'success', title: 'Data saved successfully', showConfirmButton: false, timer: 1500 });
                isEdit = true;

            },
            error: function (data) {
                const res = data.responseJSON ?? {};
                errorAfterInput = [];
                for (const property in res.errors) {
                    errorAfterInput.push(property);
                    setErrorAfterInput(res.errors[property], `#${property}`);
                }
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: res.message ?? 'Something went wrong',
                    showConfirmButton: false,
                    timer: 1500
                })
            },
            complete: function () {
                setBtnLoading('#btn-save',
                    '<li class="fas fa-save mr-1"></li> Simpan Perubahan',
                    false);
            }
        });
    });
});

function addFunc() {
    $('#modal-default').modal('show');
    if (!isEdit) return false;
    $('#MainForm').trigger("reset");
    $('#modal-default-title').html("Tambah");
    $('#id').val('');
    isEdit = false;
    return true;
}

function editFunc(id) {
    $.LoadingOverlay("show");
    $.ajax({
        type: "GET",
        url: `{{ route(l_prefix($hpu,'find',1)) }}`,
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data: { id },
        success: (data) => {
            isEdit = true;
            $('#modal-default-title').html("Ubah");
            $('#modal-default').modal('show');
            $('#id').val(data.id);
            $('#kriteria_id').val(data.kriteria_id);
            $('#dari').val(data.dari);
            $('#sampai').val(data.sampai);
            $('#nama').val(data.nama);
            $('#nilai').val(data.nilai);
        },
        error: function (data) {
            Swal.fire({ position: 'center', icon: 'error', title: 'Something went wrong', showConfirmButton: false, timer: 1500 })
        },
        complete: function () {
            $.LoadingOverlay("hide");
        }
    });

}

function deleteFunc(id) {
    swal.fire({
        title: 'Are you sure?',
        text: "Are you sure you want to proceed ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes'
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: `{{ url(l_prefix_uri($hpu,min:1)) }}/${id}`,
                type: 'DELETE',
                dataType: 'json',
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                beforeSend: function () {
                    swal.fire({ title: 'Please Wait..!', text: 'Is working..', onOpen: function () { Swal.showLoading() } });
                },
                success: function (data) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Data deleted successfully',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    var oTable = table_html.dataTable();
                    oTable.fnDraw(false);
                    checkBoxBtnReset();
                },
                complete: function () {
                    swal.hideLoading();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    swal.hideLoading();
                    const res = jqXHR.responseJSON ?? {};
                    Swal.fire({ position: 'center', icon: 'error', text: res.message ?? 'Something went wrong', showConfirmButton: true, })
                }
            });
        }
    });
}

// Datatable Checkbox =================================================================================================
function checkBoxSet(element) {
    const id = element.dataset.id;
    const checked = element.checked;
    dt_checkbox.set(String(id), checked);
    checkBoxRefresh(id);
}

function checkBoxRefresh(except = 0) {
    let all = true;
    let btn_show = false;
    for (const [key, value] of dt_checkbox) {
        if (value == false) all = false;
        if (value) btn_show = true;
        if (key == except) continue;
        $(`#checkbox-${key}`).prop("checked", value);
    }
    $('#checkboxAll').prop("checked", all);
    checkBoxBtn(btn_show);
}

function checkBoxSetAll(element) {
    const checked = element.checked;
    let btn_show = false;
    for (const [key, value] of dt_checkbox) {
        $(`#checkbox-${key}`).prop("checked", checked);
        dt_checkbox.set(key, checked);
    }
    checkBoxBtn(checked);
}

function checkBoxBtn(show) {
    btn_checkbox_list.forEach(e => {
        const el = $(e);
        if (show && dt_checkbox.size > 0) {
            el.fadeIn();
        } else {
            el.fadeOut();
        }
    });
}

function checkBoxBtnReset() {
    dt_checkbox = new Map();
    checkBoxBtn(false);
}

// Datatable Checkbox Action ==========================================================================================
function checkBoxActionDelete() {
    const form = new FormData();
    let jml_data = 0;
    // preproces
    for (const [key, value] of dt_checkbox) {
        if (value == false) continue;
        form.append('ids[]', key);
        jml_data++;
    }

    console.log(form);
    swal.fire({
        title: 'Are you sure?',
        text: `Are you sure you want to delete ${jml_data} data?`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes'
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: `{{ route(l_prefix($hpu, 'delete_bulk',1)) }}`,
                type: 'POST',
                data: form,
                cache: false,
                contentType: false,
                processData: false,
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                beforeSend: function () {
                    swal.fire({ title: 'Please Wait..!', text: 'Is working..', onOpen: function () { Swal.showLoading() } });
                },
                success: function (data) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Data deleted successfully',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    checkBoxBtnReset();
                    console.log(dt_checkbox);
                    var oTable = table_html.dataTable();
                    oTable.fnDraw(false);
                },
                complete: function () {
                    swal.hideLoading();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    swal.hideLoading();
                    const res = jqXHR.responseJSON ?? {};
                    Swal.fire({ position: 'center', icon: 'error', text: res.message ?? 'Something went wrong', showConfirmButton: true, })
                }
            });
        }
    });
}
