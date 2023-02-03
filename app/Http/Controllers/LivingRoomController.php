<?php

namespace App\Http\Controllers;

use App\Models\LivingRoom;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class LivingRoomController extends Controller
{

    public function ft_products_guestHome()
    {
        $livingRooms = LivingRoom::latest()->get();
        return view('homeGuest', compact(['livingRooms']));
    }
    public function ft_products()
    {
        $livingRooms = LivingRoom::latest()->get();
        return view('home', compact(['livingRooms']));
    }

    public function view_livingRoom()
    {
        // $livingRooms = LivingRoom::latest()->get();
        return view('livingRoom.showLivingRoom', (['livingRooms' => LivingRoom::latest()->paginate(5)]));
    }

    public function create_pageLivingRoom()
    {
        return view('livingRoom.createLivingRoom');
    }

    public function create_storeLivingRoom( Request $request )
    {
        $livingRooms = LivingRoom::create($request->except('_token', 'tambah'));
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $fileName = $image->getClientOriginalName();
            $image = Image::make($image)->resize(479, 340);
            $image->save("image/items/".$fileName);
            $livingRooms->image = $fileName;
            $livingRooms->save();
        }

        return redirect('/categories/livingRoom');
    }

    public function destroy_livingRoom( $id )
    {
        $livingRooms = LivingRoom::find($id)->delete();
        return redirect('/categories/livingRoom');
    }

    public function edit_pageLivingRoom($id)
    {
        $livingRooms = LivingRoom::find($id);
        return view('livingRoom.editLiving_Room', compact(['livingRooms']));
    }

    public function edit_pageLivingRoom_store( $id, Request $request )
    {
        $livingRooms = LivingRoom::find($id);
        $livingRooms->update($request->except('edit', '_token'));

        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("image/items/", $request->file("image")->getClientOriginalName());
            $livingRooms -> image = $request -> file("image")->getClientOriginalName();
            $livingRooms -> save();
        }

        if ( $request -> hasFile("image2") ) {
            $request -> file("image2")->move("image/items/", $request->file("image2")->getClientOriginalName());
            $livingRooms -> image2 = $request -> file("image2")->getClientOriginalName();
            $livingRooms -> save();
        }

        if ( $request -> hasFile("image3") ) {
            $request -> file("image3")->move("image/items/", $request->file("image3")->getClientOriginalName());
            $livingRooms -> image3 = $request -> file("image3")->getClientOriginalName();
            $livingRooms -> save();
        }

        return redirect('/categories/livingRoom');
    }

    public function detail_pageLivingRoom($id)
    {
        $detail_livingRooms = LivingRoom::find($id);
        $livingRooms = LivingRoom::all();
        return view('livingRoom.detail_livingRoom', compact(["detail_livingRooms", "livingRooms"]));
    }

    public function update_livingRoom_spec($id, Request $request)
    {
        // $livingRooms->update($request->except("_token", "update"));
        $livingRooms = LivingRoom::find($id);
        // $livingRooms->satuan = $request->satuan;
        $livingRooms->panjang = $request->panjang;
        $livingRooms->lebar = $request->lebar;
        $livingRooms->tinggi = $request->tinggi;
        //
        if ( $request->tinggi <= 1 && $request->lebar >= 0.35 ) {
            $livingRooms->tinggi = $request->tinggi;
            $livingRooms->harga = $request->panjang * 1 * 1 * 1800.000;

        } elseif ( $request->tinggi <= 1 && $request->lebar < 0.35 ) {
            $livingRooms->tinggi = $request->tinggi;
            $livingRooms->harga = $request->panjang * 1 * 1 * 1500.000;

        } elseif ( $request->tinggi <= 1 && $request->lebar >= 0.35 && $request->panjang <= 0.5 ) {
            $livingRooms->tinggi = $request->tinggi;
            $livingRooms->harga = 1 * 1 * 1 * 1800.000;

        } elseif ( $request->tinggi >= 1 && $request->lebar >= 0.35 && $request->panjang <= 0.5 ) {
            $livingRooms->tinggi = $request->tinggi;
            $livingRooms->harga = 1 * $request->lebar * $request->tinggi * 1800.000;

        } elseif ( $request->tinggi >= 0.8 && $request->lebar < 0.35 && $request->panjang <= 0.5 ) {
            $livingRooms->tinggi = $request->tinggi;
            $livingRooms->harga = 1 * 1 * $request->tinggi * 1300.000;
        }

        elseif ( $request->tinggi < 1 && $request->lebar < 0.35 && $request->panjang <= 0.5 ) {
            $livingRooms->tinggi = $request->tinggi;
            $livingRooms->harga = 1 * 1 * 1 * 1200.000;
        }

        elseif ( $request->tinggi >= 1 && $request->lebar >= 0.35 && $request->panjang >= 0.5) {
            $livingRooms->tinggi = $request->tinggi;
            $livingRooms->harga = $request->tinggi * 1 * 1 * 1800.000;
        }

        else {
            $livingRooms->harga = $request->panjang * $request->lebar * $request->tinggi * 1800.000;
        }

        $livingRooms->save();

        return redirect('/categories/livingRoom');
    }
}
