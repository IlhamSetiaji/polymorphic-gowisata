<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $tours = array();
        $hotels = array();
        if (request()->has('tour')) {
            $packages = Package::where('packageable_type', 'App\Models\Tour')->get();
            foreach ($packages as $package) {
                array_push($tours, $package);
            }
        }
        if (request()->has('hotel')) {
            $packages = Package::where('packageable_type', 'App\Models\Hotel')->get();
            foreach ($packages as $package) {
                array_push($hotels, $package);
            }
        }
        return response()->json([
            'tours' => $tours,
            'hotels' => $hotels,
        ]);
    }
}
