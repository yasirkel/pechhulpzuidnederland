<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Garage;
use App\Models\User;
use App\Models\Area;
use Illuminate\Support\Facades\DB;

class GaragesController extends Controller
{
    public function getGarages() {

        $garages = Garage::join('areas', 'areas.id', '=', 'garages.area_id')
            ->get(['garages.id as id', 'garages.garage_naam as name', 'areas.plaats as plaats', 'garages.status as status']);

        return view('garages', [
            'garages' => $garages,
        ]);
    }

    public function disableGarage($id) {

        $garage = Garage::findOrFail($id);
        $garage->status = 0;
        $garage->save();

        return redirect()->route('garages-overzicht');
    }

    public function enableGarage($id) {

        $garage = Garage::findOrFail($id);
        $garage->status = 1;
        $garage->save();

        return redirect()->route('garages-overzicht');

    }

    public function viewCreateGarage() {
        $users = User::all();
        $areas = Area::all();

        return view('addgarage', [
            'users' => $users,
            'areas' => $areas,
        ]);
    }

    public function createGarage(Request $request) {

        $garage = new Garage;

        $garage->user_id = $request->input('username');
        $garage->area_id = $request->input('plaats');
        $garage->status = $request->input('status');
        $garage->garage_naam = $request->input('garage-naam');
        $garage->save();

        return redirect()->route('garages-overzicht');

    }

}
