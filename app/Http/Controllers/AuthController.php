<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index() {
        $data['title'] = 'Larapos | Login';

        if(Session::get('role') == 2) {
            $data['jumlahcart'] = DB::table('t_nota')->where([
                ['status_transaksi','pending'],
                ['jenis_faktur','penjualan'],
                ['id_customer', Session::get('id_user')]
            ])->count();
        } else {
            $data['jumlahcart'] = 0;
        }

        return view('login', $data);
    }

    public function cek_login(Request $request) {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;
        $hash = md5($password);

        $check = DB::select("SELECT * FROM `t_user` WHERE `email` = '$email' AND `password` = '$hash'");

        if (!empty($check)) {
            foreach( $check as $data ) {
                $id = $data->id;
                $nama = $data->nama;
                $email = $data->email;
                $id_role = $data->id_role;
            }

            Session::put('id_user', $id);
            Session::put('nama', $nama);
            Session::put('email', $email);
            Session::put('role', $id_role);
            Session::put('login',TRUE);

            if ($id_role == 1) {
                return redirect('a/home')->with(['success' => 'Selamat datang ' .$nama.' !']);
            } elseif ($id_role == 2) {
                return redirect('/')->with(['success' => 'Selamat datang ' .$nama.' !']);
            }

        } else {
            return redirect('/login')->with(['error' => 'Email atau password anda Salah !']);
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/login')->with(['success' => 'Anda telah logout']);
    }
}
