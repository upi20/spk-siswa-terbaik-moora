<?php
// ====================================================================================================================
// utility ============================================================================================================

use App\Http\Controllers\Admin\AlternatifController;
use App\Http\Controllers\Admin\AlternatifNilaiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

// ====================================================================================================================
// Admin ==============================================================================================================
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;

// User Access ========================================================================================================
use App\Http\Controllers\Admin\UserAccess\PermissionController;
use App\Http\Controllers\Admin\UserAccess\RoleController;

// Menu ===============================================================================================================
use App\Http\Controllers\Admin\Menu\AdminController as MenuAdminController;

// Setting ============================================================================================================
use App\Http\Controllers\Admin\Setting\AdminController;
use App\Http\Controllers\Admin\Setting\DashboardController as SettingDashboardController;

// Import =============================================================================================================
use App\Http\Controllers\Admin\Import\AlternatifController as ImportAlternatifController;
use App\Http\Controllers\Admin\KriteriaController;
use App\Http\Controllers\Admin\KriteriaNilaiController;
use App\Http\Controllers\Admin\PerhitunganController;

// ====================================================================================================================



$name = 'admin';
$prefix = 'dashboard';
Route::group(
    [
        'prefix' => $prefix,
        'middleware' => "permission:$name.$prefix",
        'controller' => DashboardController::class
    ],
    function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.dashboard
        Route::get('/', 'index')->name($name);
        Route::get('/vistor_counter', 'vistor_counter')->name("$name.vistor_counter");
    }
);

Route::get('/', fn () => Redirect::route('admin.dashboard'));

$prefix = 'user';
Route::controller(UserController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.user
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::get('/excel', 'excel')->name("$name.excel")->middleware("permission:$name.excel");

    Route::post('/', 'store')->name("$name.store")->middleware("permission:$name.insert");
    Route::delete('/{id}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");

    Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
    Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
});

$prefix = 'user_access';
Route::group(['prefix' => $prefix], function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.user_access

    $prefix = 'permission';
    Route::controller(PermissionController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.user_access.permission
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::post('/', 'store')->name("$name.store")->middleware("permission:$name.insert");
        Route::delete('/{id}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::post('/delete', 'delete_bulk')->name("$name.delete_bulk")->middleware("permission:$name.delete");
    });

    $prefix = 'role';
    Route::controller(RoleController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.user_access.role
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/create', 'create')->name("$name.create")->middleware("permission:$name.insert");
        Route::get('/edit/{model}', 'edit')->name("$name.edit")->middleware("permission:$name.update");
        Route::post('/', 'store')->name("$name.store")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{id}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });
});

$prefix = 'menu';
Route::prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.menu

    $prefix = 'admin';
    Route::controller(MenuAdminController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.menu.admin
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::put('/save', 'save')->name("$name.save")->middleware("permission:$name.save");

        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");

        Route::get('/list', 'list')->name("$name.list")->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::get('/parent_list', 'parent_list')->name("$name.parent_list")->middleware("permission:$name");
    });
});

$prefix = "setting";
Route::prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.setting

    $prefix = 'admin';
    $name_ = "$name.$prefix"; // admin.setting.admin
    Route::group([
        'controller' => AdminController::class,
        'prefix' => $prefix,
        'middleware' => "permission:$name_"
    ], function () use ($name_) {
        Route::get('/', 'index')->name($name_);
        Route::post('/save/app', 'save_app')->name("$name_.save.app");
        Route::post('/save/meta', 'save_meta')->name("$name_.save.meta");

        Route::get('/meta', 'meta_list')->name("$name_.meta");
        Route::post('/meta/insert', 'meta_insert')->name("$name_.meta.insert");
        Route::post('/meta/update', 'meta_update')->name("$name_.meta.update");
        Route::delete('/meta/delete', 'meta_delete')->name("$name_.meta.delete");
    });

    $prefix = 'dashboard';
    Route::controller(SettingDashboardController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.setting.dashboard
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    });
});


$prefix = "profile";
Route::controller(UserController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.profile
    Route::get('/', 'profile')->name($name)->middleware("permission:$name");
    Route::post('/save', 'save_profile')->name("$name.save")->middleware("permission:$name.save");
    Route::post('/save/password', 'save_password')->name("$name.password.save")->middleware("permission:$name.password.save");
});

$prefix = "password";
Route::controller(UserController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.password
    Route::get('/', 'change_password')->name($name)->middleware("permission:$name");
    Route::post('/save', 'save_password')->name("$name.save")->middleware("permission:$name.save");
});

$prefix = 'kriteria';
Route::prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.kriteria
    Route::controller(KriteriaController::class)->group(function () use ($name, $prefix) {
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::post('/delete', 'delete_bulk')->name("$name.delete_bulk")->middleware("permission:$name.delete");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    $prefix = 'nilai';
    Route::controller(KriteriaNilaiController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.kriteria.nilai
        Route::get('/datatable', 'datatable')->name("$name.datatable")->middleware("permission:$name");
        Route::get('/format', 'format')->name("$name.format")->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::get('/{kriteria:slug}', 'index')->name($name)->middleware("permission:$name");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/delete', 'delete_bulk')->name("$name.delete_bulk")->middleware("permission:$name.delete");
    });
});

$prefix = 'alternatif';
Route::prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.alternatif
    Route::controller(AlternatifController::class)->group(function () use ($name, $prefix) {
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::get('/export', 'export')->name("$name.export")->middleware("permission:$name");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::post('/delete', 'delete_bulk')->name("$name.delete_bulk")->middleware("permission:$name.delete");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    $prefix = 'nilai';
    Route::controller(AlternatifNilaiController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.alternatif.nilai
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/datatable', 'datatable')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::get('/datatable', 'datatable')->name("$name.datatable")->middleware("permission:$name");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });
});

$prefix = 'import';
Route::prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.import

    $prefix = 'alternatif';
    Route::controller(ImportAlternatifController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.import.alternatif
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::get('/format', 'format')->name("$name.format")->middleware("permission:$name");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });
});

$prefix = 'perhitungan';
Route::controller(PerhitunganController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.calon.perhitungan
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
});
