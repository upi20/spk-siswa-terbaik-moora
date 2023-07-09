const can_update = "{{ $can_update == 'true' ? 'true' : 'false' }}" === "true";
const can_delete = "{{ $can_delete == 'true' ? 'true' : 'false' }}" === "true";
const table_html = $('#tbl_main');
let isUpdate = true;
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
        //
        scrollX: true,
        aAutoWidth: false,
        bAutoWidth: false,
        type: 'GET',
        ajax: {
            url: "{{ route(l_prefix($hpu)) }}",
            data: function (d) {
                // d['filter[active]'] = $('#filter_active').val();
                // d['filter[role]'] = $('#filter_role').val();
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
            data: 'name',
            name: 'name'
        },
        {
            data: 'guard_name',
            name: 'guard_name'
        },
        {
            data: 'created_at',
            name: 'created_at'
        },
        ...(can_update || can_delete ? [{
            data: 'id',
            name: 'id',
            render(data, type, full, meta) {
                const btn_update = can_update ? `<button type="button" data-toggle="tooltip" class="btn btn-rounded btn-primary btn-sm mr-1" title="Ubah Data"
                        data-id="${full.id}"
                        data-name="${full.name}"
                        data-guard_name="${full.guard_name}"
                        onClick="editFunc(this)">
                        <i class="fas fa-edit"></i></button>` : '';
                const btn_delete = can_delete ? `<button type="button" data-toggle="tooltip" class="btn btn-rounded btn-danger btn-sm mr-1" title="Hapus Data" onClick="deleteFunc('${data}')">
                        <i class="fas fa-trash"></i></button>` : '';
                return btn_update + btn_delete;
            },
            orderable: false
        }] : []),
        ],
        order: [
            [2, 'asc']
        ],
        language: {
            url: datatable_indonesia_language_url
        }
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
        var oTable = table_html.dataTable();
        oTable.fnDraw(false);
    });

    // insertForm ===================================================================================
    $('#MainForm').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        setBtnLoading('#btn-save', 'Simpan');
        resetErrorAfterInput();
        const route = isUpdate ? `{{ route(l_prefix($hpu,'update')) }}` :
            `{{ route(l_prefix($hpu,'store')) }}`;
        $.ajax({
            type: "POST",
            url: route,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                $("#modal-default").modal('hide');
                var oTable = table_html.dataTable();
                oTable.fnDraw(false);
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Data saved successfully',
                    showConfirmButton: false,
                    timer: 1500
                })

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
                    '<li class="fas fa-save mr-1"></li> Simpan',
                    false);
            }
        });
    });
});

function addFunc() {
    $('#modal-default').modal('show');
    if (!isUpdate) return;
    $('#MainForm').trigger("reset");
    $('#modal-default-title').html("Tambah Permission");
    $('#id').val('');
    $('#guard_name').val('web');
    resetErrorAfterInput();
    isUpdate = false;
}

function editFunc(datas) {
    isUpdate = true;
    const data = datas.dataset;
    $('#modal-default-title').html("Ubah Permission");
    $('#modal-default').modal('show');
    $('#MainForm').trigger("reset");
    $('#id').val(data.id);
    $('#name').val(data.name);
    $('#guard_name').val(data.guard_name);
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
                url: `{{ url(l_prefix_uri($hpu)) }}/${id}`,
                type: 'DELETE',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function () {
                    swal.fire({
                        title: 'Please Wait..!',
                        text: 'Is working..',
                        onOpen: function () {
                            Swal.showLoading()
                        }
                    })
                },
                success: function (data) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Permission deleted successfully',
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
                    swal.fire("!Opps ", "Something went wrong, try again later", "error");
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
                url: `{{ route(l_prefix($hpu, 'delete_bulk')) }}`,
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