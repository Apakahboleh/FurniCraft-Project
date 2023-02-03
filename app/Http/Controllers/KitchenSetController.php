<?php

namespace App\Http\Controllers;

use App\Models\KitchenSet;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class KitchenSetController extends Controller
{
    public function show()
    {
        // $kitchenSets = KitchenSet::latest()->get();
        return view('kitchenSet.showKitchen', (['kitchenSets' => KitchenSet::latest()->paginate(5)]));
    }

    public function create_page()
    {
        return view('kitchenSet.createKitchen');
    }

    public function create_store(Request $request)
    {
        $kitchenSets = KitchenSet::create($request->except('_token', 'tambah'));

        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $fileName = $image->getClientOriginalName();
            $image = Image::make($image)->resize(479, 340);
            $image->save("image/items/".$fileName);
            $kitchenSets->image = $fileName;
            $kitchenSets->save();
            }

        return redirect('/categories/kitchenSet')->with('tambahSukses', "Kitchen Set Berhasil Ditambah");
    }

    public function edit_page( $id )
    {
        $kitchenSets = KitchenSet::find($id);
        return view('kitchenSet.editKitchen', compact(['kitchenSets']));
    }

    public function edit_store( $id, Request $request )
    {
        $kitchenSets = KitchenSet::find($id);
        $kitchenSets->update($request->except("_token", "edit"));

        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $fileName = $image->getClientOriginalName();
            $image = Image::make($image)->resize(479, 340);
            $image->save("image/items/".$fileName);
            $kitchenSets->image = $fileName;
            $kitchenSets->save();
        }

        if ($request->hasFile("image2")) {
            $image2 = $request->file("image2");
            $fileName = $image2->getClientOriginalName();
            $image2 = Image::make($image2)->resize(479, 340);
            $image2->save("image/items/".$fileName);
            $kitchenSets->image2 = $fileName;
            $kitchenSets->save();
        }

        // if ( $request -> hasFile("image2") ) {
        //     $request -> file("image2")->move("image/items/", $request->file("image2")->getClientOriginalName());
        //     $kitchenSets -> image2 = $request -> file("image2")->getClientOriginalName();
        //     $kitchenSets -> save();
        // }

        if ($request->hasFile("image3")) {
            $image3 = $request->file("image3");
            $fileName = $image3->getClientOriginalName();
            $image3 = Image::make($image3)->resize(479, 340);
            $image3->save("image/items/".$fileName);
            $kitchenSets->image3 = $fileName;
            $kitchenSets->save();
        }
        
        return redirect('/categories/kitchenSet')->with('editKitchen', "Kitchen Set Berhasil Di Edit");
    }

    public function destroy( $id, Request $request )
    {
        $kitchenSets = KitchenSet::find($id)->delete();
        return redirect('/categories/kitchenSet')->with('hapusKitchen', "Kitchen Set Berhasil Di Hapus");
    }

    public function detail_page( $id )
    {
        $detail_kitchenSets = KitchenSet::find($id);
        $kitchenSets = KitchenSet::all();
        return view('kitchenSet.detail_kitchenSet', compact(["detail_kitchenSets", "kitchenSets"]));
    }

    public function update_kitchenSet( $id, Request $request )
    {
        // $kitchenSets->update($request->except("_token", "update"));
        $kitchenSets = KitchenSet::find($id);
        // $kitchenSets->satuan = $request->satuan;
        $kitchenSets->panjang = $request->panjang;
        $kitchenSets->lebar = $request->lebar;
        $kitchenSets->tinggi = $request->tinggi;
        //
        if ( $request->tinggi <= 1 && $request->lebar >= 0.35 ) {
            $kitchenSets->tinggi = $request->tinggi;
            $kitchenSets->harga = $request->panjang * 1 * 1 * 1800.000;

        } elseif ( $request->tinggi <= 1 && $request->lebar < 0.35 ) {
            $kitchenSets->tinggi = $request->tinggi;
            $kitchenSets->harga = $request->panjang * 1 * 1 * 1500.000;

        } elseif ( $request->tinggi <= 1 && $request->lebar >= 0.35 && $request->panjang <= 0.5 ) {
            $kitchenSets->tinggi = $request->tinggi;
            $kitchenSets->harga = 1 * 1 * 1 * 1800.000;

        } elseif ( $request->tinggi >= 1 && $request->lebar >= 0.35 && $request->panjang <= 0.5 ) {
            $kitchenSets->tinggi = $request->tinggi;
            $kitchenSets->harga = 1 * $request->lebar * $request->tinggi * 1800.000;

        } elseif ( $request->tinggi >= 1 && $request->lebar < 0.35 && $request->panjang <= 0.5 ) {
            $kitchenSets->tinggi = $request->tinggi;
            $kitchenSets->harga = 1 * 1 * $request->tinggi * 1300.000;
        }

        elseif ( $request->tinggi < 1 && $request->lebar < 0.35 && $request->panjang <= 0.5 ) {
            $kitchenSets->tinggi = $request->tinggi;
            $kitchenSets->harga = 1 * 1 * 1 * 1200.000;
        }

        else {
            $kitchenSets->harga = $request->panjang * $request->lebar * $request->tinggi * 1800.000;
        }

        $kitchenSets->save();
        return redirect('/categories/kitchenSet')->with('updateKitchen', "Spesifikasi Kitchen Set Telah Di Dapatkan");
    }
}
