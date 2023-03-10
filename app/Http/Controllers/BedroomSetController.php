<?php

namespace App\Http\Controllers;

use App\Models\BedroomSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
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
        $bedroomSets = BedroomSet::find(Crypt::decrypt($id));
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
        $bedroomSets = BedroomSet::find(Crypt::decrypt($id))->delete();
        return redirect('/categories/bedroomSet');
    }

    public function detail_pageBedroom($id)
    {
        $detail_bedroomSets = BedroomSet::find(Crypt::decrypt($id));
        $bedroomSets = BedroomSet::all();
        return view('bedroomSet.detail_bedroomSet', compact(["detail_bedroomSets", "bedroomSets"]));
    }

    public function update_bedroom_spec($id, Request $request)
    {
        $bedroomSets = BedroomSet::find($id);

        $panjang = str_replace(',', '.', $request->panjang);
        $lebar = str_replace(',', '.', $request->lebar);
        $tinggi = str_replace(',', '.', $request->tinggi);

        $bedroomSets->panjang = $panjang;
        $bedroomSets->lebar = $lebar;
        $bedroomSets->tinggi = $tinggi;

        if ( $tinggi <= 1 && $lebar >= 0.35 ) {
            $bedroomSets->tinggi = $tinggi;
            $bedroomSets->harga = $panjang * 1 * 1 * 1800.000;

        } elseif ( $tinggi <= 1 && $lebar < 0.35 ) {
            $bedroomSets->tinggi = $tinggi;
            $bedroomSets->harga = $panjang * 1 * 1 * 1500.000;

        } elseif ( $tinggi <= 1 && $lebar >= 0.35 && $panjang <= 0.5 ) {
            $bedroomSets->tinggi = $tinggi;
            $bedroomSets->harga = 1 * 1 * 1 * 1800.000;

        } elseif ( $tinggi >= 1 && $lebar >= 0.35 && $panjang <= 0.5 ) {
            $bedroomSets->tinggi = $tinggi;
            $bedroomSets->harga = 1 * $lebar * $tinggi * 1800.000;

        } elseif ( $tinggi >= 1 && $lebar < 0.35 && $panjang <= 0.5 ) {
            $bedroomSets->tinggi = $tinggi;
            $bedroomSets->harga = 1 * 1 * $tinggi * 1300.000;
        }

        elseif ( $tinggi < 1 && $lebar < 0.35 && $panjang <= 0.5 ) {
            $bedroomSets->tinggi = $tinggi;
            $bedroomSets->harga = 1 * 1 * 1 * 1200.000;
        }

        else {
            $bedroomSets->harga = $panjang * $lebar * $tinggi * 1800.000;
        }

        $bedroomSets->save();
        return redirect('/categories/bedroomSet')->with('updateBedroom', "Spesifikasi Bedroom Set Telah Di Dapatkan");
    }
}
