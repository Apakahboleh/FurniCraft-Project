<?php

namespace App\Http\Controllers;

use App\Models\BedroomSet;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BedroomSetController extends Controller
{

    public function view_bedroomSet()
    {
        return view('bedroomSet.showBedroom', (['bedroomSets' => BedroomSet::latest()->paginate(5)]));
    }

    public function create_pageBedroomSet( Request $request )
    {
        return view('bedroomSet.createBedroom');
    }

    public function create_storeBedroomSet( Request $request )
    {
        $bedroomSets = BedroomSet::create($request->except('_token', 'tambah'));
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $fileName = $image->getClientOriginalName();
            $image = Image::make($image)->resize(479, 340);
            $image->save("image/items/".$fileName);
            $bedroomSets->image = $fileName;
            $bedroomSets->save();
        }

        return redirect('/categories/bedroomSet');
    }

    public function edit_pageBedroom($id)
    {
        $bedroomSets = BedroomSet::find($id);
        return view('bedroomSet.editBedroom', compact(['bedroomSets']));
    }

    public function edit_pageBedroom_store($id, Request $request)
    {
        $bedroomSets = BedroomSet::find($id);
        $bedroomSets->update($request->except('_token', 'edit'));

        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $fileName = $image->getClientOriginalName();
            $image = Image::make($image)->resize(479, 340);
            $image->save("image/items/".$fileName);
            $bedroomSets->image = $fileName;
            $bedroomSets->save();
        }

        if ($request->hasFile("image2")) {
            $image2 = $request->file("image2");
            $fileName = $image2->getClientOriginalName();
            $image2 = Image::make($image2)->resize(479, 340);
            $image2->save("image/items/".$fileName);
            $bedroomSets->image2 = $fileName;
            $bedroomSets->save();
        }

        // if ( $request -> hasFile("image2") ) {
        //     $request -> file("image2")->move("image/items/", $request->file("image2")->getClientOriginalName());
        //     $bedroomSets -> image2 = $request -> file("image2")->getClientOriginalName();
        //     $bedroomSets -> save();
        // }

        if ($request->hasFile("image3")) {
            $image3 = $request->file("image3");
            $fileName = $image3->getClientOriginalName();
            $image3 = Image::make($image3)->resize(479, 340);
            $image3->save("image/items/".$fileName);
            $bedroomSets->image3 = $fileName;
            $bedroomSets->save();
        }
        return redirect('/categories/bedroomSet');

    }

    public function destroy_bedroom( $id )
    {
        $bedroomSets = BedroomSet::find($id)->delete();
        return redirect('/categories/bedroomSet');
    }

    public function detail_pageBedroom($id)
    {
        $detail_bedroomSets = BedroomSet::find($id);
        $bedroomSets = BedroomSet::all();
        return view('bedroomSet.detail_bedroomSet', compact(["detail_bedroomSets", "bedroomSets"]));
    }

    public function update_bedroom_spec($id, Request $request)
    {
        // $bedroomSets->update($request->except("_token", "update"));
        $bedroomSets = BedroomSet::find($id);
        // $bedroomSets->satuan = $request->satuan;
        $bedroomSets->panjang = $request->panjang;
        $bedroomSets->lebar = $request->lebar;
        $bedroomSets->tinggi = $request->tinggi;
        //
        if ( $request->tinggi <= 1 && $request->lebar >= 0.35 ) {
            $bedroomSets->tinggi = $request->tinggi;
            $bedroomSets->harga = $request->panjang * 1 * 1 * 1800.000;

        } elseif ( $request->tinggi <= 1 && $request->lebar < 0.35 ) {
            $bedroomSets->tinggi = $request->tinggi;
            $bedroomSets->harga = $request->panjang * 1 * 1 * 1500.000;

        } elseif ( $request->tinggi <= 1 && $request->lebar >= 0.35 && $request->panjang <= 0.5 ) {
            $bedroomSets->tinggi = $request->tinggi;
            $bedroomSets->harga = 1 * 1 * 1 * 1800.000;

        } elseif ( $request->tinggi >= 1 && $request->lebar >= 0.35 && $request->panjang <= 0.5 ) {
            $bedroomSets->tinggi = $request->tinggi;
            $bedroomSets->harga = 1 * $request->lebar * $request->tinggi * 1800.000;

        } elseif ( $request->tinggi >= 1 && $request->lebar < 0.35 && $request->panjang <= 0.5 ) {
            $bedroomSets->tinggi = $request->tinggi;
            $bedroomSets->harga = 1 * 1 * $request->tinggi * 1300.000;
        }

        elseif ( $request->tinggi < 1 && $request->lebar < 0.35 && $request->panjang <= 0.5 ) {
            $bedroomSets->tinggi = $request->tinggi;
            $bedroomSets->harga = 1 * 1 * 1 * 1200.000;
        }

        else {
            $bedroomSets->harga = $request->panjang * $request->lebar * $request->tinggi * 1800.000;
        }

        $bedroomSets->save();
        return redirect('/categories/bedroomSet')->with('updateBedroom', "Spesifikasi Bedroom Set Telah Di Dapatkan");
    }
}
