<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index() {
        $data['title'] = 'Larapos | Admin Home';
        $data['tabel'] = DB::select("SELECT DATE_FORMAT(tanggal, '%M') AS `bulan`, SUM(`pendapatan`) AS `totalpendapatan`
                FROM `view_pendapatan` GROUP BY `bulan` ORDER BY `id` ASC", []);
        return view('adminhome', $data);
    }

    public function getPendapatan(Request $request) {
        $result = DB::select("SELECT DATE_FORMAT(tanggal, '%M') AS `bulan`, SUM(`pendapatan`) AS `totalpendapatan`
             FROM `view_pendapatan` GROUP BY `bulan` ORDER BY `id` ASC", []);
        return response($result);
    }
}
