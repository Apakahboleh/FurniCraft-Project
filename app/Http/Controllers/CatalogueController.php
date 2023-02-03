<?php

namespace App\Http\Controllers;

use App\Models\BedroomSet;
use App\Models\KitchenSet;
use App\Models\LivingRoom;
use App\Models\OfficeFurn;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function catalogue_page()
    {
        return view('catalogue', (
            ['kitchenSets' => KitchenSet::latest()->filter(request(['search']))->get(),
            'bedroomSets' => BedroomSet::latest()->filter(request(['search']))->get(),
            'livingRooms' => LivingRoom::latest()->filter(request(['search']))->get(),
            'office_furnitures' => OfficeFurn::latest()->filter(request(['search']))->get(),
            // "active" => 'catalogue'
        ]));
    }

    // $kitchenSets = KitchenSet::latest()->get();
    // $bedroomSets = BedroomSet::latest()->get();
    // $livingRooms = LivingRoom::latest()->get();
    // $office_furnitures = OfficeFurn::latest()->get();
    // return view('catalogue', compact(['kitchenSets', 'bedroomSets', 'livingRooms', 'office_furnitures']));
}
