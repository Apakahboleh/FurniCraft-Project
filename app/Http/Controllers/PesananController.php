<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Models\Auth as modelAuth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function page_pesanan()
    {
        $user = auth()->user();
        $pesanan = Pesanan::with('KitchenSet')->where('user_id', $user->id)->latest()->get();
        $alamat = modelAuth::all();
        return view('pesananCustomer', compact(["pesanan", "alamat"]));
    }

    public function pesanbyDetail( $id, Request $request )
    {
        User::find($id);
        $pesanan = new Pesanan();
        $pesanan = new Pesanan;
        $pesanan->nama = $request->nama;
        $pesanan->user_id = Auth::user()->id;
        $pesanan->cart_id = Auth::user()->id;
        $pesanan->harga = $request->harga;
        $pesanan->quantity = $request->quantity;
        $pesanan->image = $request->image;
        $pesanan->save();

        return redirect('/pesanan');
    }

    public function view_adminChecks()
    {
        $datas = User::all();
        $pesanan = Pesanan::latest()->get();
        return view('adminChecksPesanan', compact(["pesanan", 'datas']));
    }

    public function status_update( $id, Request $request )
    {
        $status = $request->input('status');
        DB::table('pesan')
        ->where('id', '=', $id)
        ->update([
            "status" => $status,
        ]);

        return redirect("/admin/checks/pesanan");
    }
}

