<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Melding;
use App\Models\Garage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{

    public function index() {

        // bereken pechmelding per garage
        

        // berkenen gemiddelde reviewcijfer
        $reviewsTotal = DB::table('reviews')->sum('score');
        $totalSubmitted = DB::table('reviews')->count('id');

        $averageScore = $reviewsTotal / $totalSubmitted;

        // bereken percentage voltooide pechmeldingen
        $meldingenTotal = DB::table('meldingen')->count('id');
        $activeMeldingen = DB::table('meldingen')->where('status', '1')->count('status');

        $activePrecentage = (100 / $meldingenTotal) * $activeMeldingen;

        // bereken pechmeldingen die langer duren dan een dag
        $meldingen = Melding::All();

        foreach ($meldingen as $melding) {
            $difference = $melding->created_at->diffInHours(Carbon::now());
            
            if ($difference >= 24) {
               $result = $melding->count();
            }
        }
        
        return view('roles.admin',[
            'reviewsTotal' => $reviewsTotal,
            'totalSubmitted' => $totalSubmitted,
            'averageScore' => $averageScore,
            'meldingenTotal' => $meldingenTotal,
            'activeMeldingen' => $activeMeldingen,
            'activePrecentage' => $activePrecentage,
            'meldingen' => $meldingen,
            'result' => $result,
            'melding' => $melding,
            'difference' => $difference,
        ]);
    }

    
}
