<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BallotUnit;
use App\ControlUnit;
use App\VVPat;
use Illuminate\Support\Facade\DB;

class RandomisationController extends Controller
{
    public function randomise()
    {
        //BallotUnit::update(['status' => '']);
        BallotUnit::inRandomOrder()
                        ->where('ware_house_id',1)
                        ->take(250)
                        ->update(['status' => 'T']);

        dd(BallotUnit::where('status','T')->compact());
    }
}
