<?php

namespace App\Http\Controllers;

use App\Models\OfficeFurn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Intervention\Image\Facades\Image;

class OfficeFurnController extends Controller
{
    public function view_officeFurn()
    {
        $office_furnitures = OfficeFurn::latest()->get();
        return view('officeFurniture.showOfficeFurn', (['office_furnitures' => OfficeFurn::latest()->paginate(5)]));
    }

    public function create_pageOffice()
    {
        return view('officeFurniture.createOffice');
    }

    public function create_storeOffice( Request $request )
    {
        $office_furniture = OfficeFurn::create($request->except('_token', 'tambah'));

        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $fileName = $image->getClientOriginalName();
            $image = Image::make($image)->resize(479, 340);
            $image->save("image/items/".$fileName);
            $office_furniture->image = $fileName;
            $office_furniture->save();
        }
        return redirect('/categories/officeFurniture');
    }

    public function edit_pageOffice( $id )
    {
        $office_furnitures = OfficeFurn::find(Crypt::decrypt($id));
        return view('officeFurniture.editOffice', compact(['office_furnitures']));
    }

    public function edit_Office_store( $id, Request $request )
    {
        $office_furnitures = OfficeFurn::find($id);
        $office_furnitures->update($request->except('_token', 'editOFfice'));

        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $fileName = $image->getClientOriginalName();
            $image = Image::make($image)->resize(479, 340);
            $image->save("image/items/".$fileName);
            $office_furnitures->image = $fileName;
            $office_furnitures->save();
        }

        // if ( $request -> hasFile("image2") ) {
        //     $request -> file("image2")->move("image/items/", $request->file("image2")->getClientOriginalName());
        //     $office_furnitures -> image2 = $request -> file("image2")->getClientOriginalName();
        //     $office_furnitures -> save();
        // }

        if ($request->hasFile("image2")) {
            $image2 = $request->file("image2");
            $fileName = $image2->getClientOriginalName();
            $image2 = Image::make($image2)->resize(479, 340);
            $image2->save("image/items/".$fileName);
            $office_furnitures->image2 = $fileName;
            $office_furnitures->save();
        }

        if ($request->hasFile("image3")) {
            $image3 = $request->file("image3");
            $fileName = $image3->getClientOriginalName();
            $image3 = Image::make($image3)->resize(479, 340);
            $image3->save("image/items/".$fileName);
            $office_furnitures->image3 = $fileName;
            $office_furnitures->save();
        }

        return redirect('categories/officeFurniture');
    }

    public function destroy_office( $id )
    {
        $office_furniture = OfficeFurn::find(Crypt::decrypt($id))->delete();
        return redirect('categories/officeFurniture');
    }

    public function detail_pageOfficeFurn( $id, Request $request )
    {
        $detail_office = OfficeFurn::find(Crypt::decrypt($id));
        $office_furnitures = OfficeFurn::all();
        return view('officeFurniture.detail_officeFurniture', compact(['detail_office', 'office_furnitures']));
    }

    public function update_officeFurn( $id, Request $request )
    {
        $office_furnitures = OfficeFurn::find($id);

        $panjang = str_replace(',', '.', $request->panjang);
        $lebar = str_replace(',', '.', $request->lebar);
        $tinggi = str_replace(',', '.', $request->tinggi);

        $office_furnitures->panjang = $panjang;
        $office_furnitures->lebar = $lebar;
        $office_furnitures->tinggi = $tinggi;

        if ( $tinggi <= 1 && $lebar >= 0.35 ) {
            $office_furnitures->tinggi = $tinggi;
            $office_furnitures->harga = $panjang * 1 * 1 * 1800.000;

        } elseif ( $tinggi <= 1 && $lebar < 0.35 ) {
            $office_furnitures->tinggi = $tinggi;
            $office_furnitures->harga = $panjang * 1 * 1 * 1500.000;

        } elseif ( $tinggi <= 1 && $lebar >= 0.35 && $panjang <= 0.5 ) {
            $office_furnitures->tinggi = $tinggi;
            $office_furnitures->harga = 1 * 1 * 1 * 1800.000;

        } elseif ( $tinggi >= 1 && $lebar >= 0.35 && $panjang <= 0.5 ) {
            $office_furnitures->tinggi = $tinggi;
            $office_furnitures->harga = 1 * $lebar * $tinggi * 1800.000;

        } elseif ( $tinggi >= 1 && $lebar < 0.35 && $panjang <= 0.5 ) {
            $office_furnitures->tinggi = $tinggi;
            $office_furnitures->harga = 1 * 1 * $tinggi * 1300.000;
        }

        elseif ( $tinggi < 1 && $lebar < 0.35 && $panjang <= 0.5 ) {
            $office_furnitures->tinggi = $tinggi;
            $office_furnitures->harga = 1 * 1 * 1 * 1200.000;
        }

        else {
            $office_furnitures->harga = $panjang * $lebar * $tinggi * 1800.000;
        }

        $office_furnitures->save();
        return redirect('/categories/officeFurniture');
    }
}
