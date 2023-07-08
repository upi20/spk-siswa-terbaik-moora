<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {
        setlocale(LC_ALL, 'IND');
        DB::statement("SET lc_time_names = 'id_ID'");
        Paginator::useBootstrapFive();
    }
}
