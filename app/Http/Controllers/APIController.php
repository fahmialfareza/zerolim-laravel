<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transaksi;

class APIController extends Controller
{
    public function users() {
        return User::all();
    }

    public function user($id) {
        return User::find($id);
    }

    public function semua_transaksi() {
        return Transaksi::all();
    }

    public function transaksi($id) {
        return Transaksi::find($id);
    }

    public function update_status_transaksi($id, Request $request) {
        $status = $request->status;
        $transaksi = Transaksi::find($id);
        $transaksi->status = $status;
        $transaksi->save();
        return $transaksi;
    }
}
