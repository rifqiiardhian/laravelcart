<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index() {
        $data['title'] = 'Larapos | Product';

        if(Session::get('role') == 2) {
            $data['jumlahcart'] = DB::table('t_nota')->where([
                ['status_transaksi','pending'],
                ['jenis_faktur','penjualan'],
                ['id_customer', Session::get('id_user')]
            ])->count();
        } else {
            $data['jumlahcart'] = 0;
        }

        $data['produk'] = DB::table('t_produk')->orderBy('id', 'desc')->paginate(12);

        return view('product', $data);
    }

    public function detail($id) {
        $data['title'] = 'Larapos | Product';

        if(Session::get('role') == 2) {
            $data['jumlahcart'] = DB::table('t_nota')->where([
                ['status_transaksi','pending'],
                ['jenis_faktur','penjualan'],
                ['id_customer', Session::get('id_user')]
            ])->count();
        } else {
            $data['jumlahcart'] = 0;
        }
        
        $data['produk'] = DB::table('v_produk_kategori')->where('id', $id)->get();

        return view('product_detail', $data);
    }
}
