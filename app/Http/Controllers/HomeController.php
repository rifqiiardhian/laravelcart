<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index() {
        $data['title'] = 'Larapos | Home';

        if(Session::get('role') == 2) {
            $data['jumlahcart'] = DB::table('t_nota')->where([
                ['status_transaksi','pending'],
                ['jenis_faktur','penjualan'],
                ['id_customer', Session::get('id_user')]
            ])->count();
        } else {
            $data['jumlahcart'] = 0;
        }

        return view('home', $data);
    }
}
