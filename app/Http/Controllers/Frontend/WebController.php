<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MakeModel;
use App\Models\Variants;
use App\Models\PolicyInsurer;
use App\Models\Brand;
use Session;

class WebController extends Controller
{
    public function car_insurence(Request $request)
    {
        return view('frontend.car-insurance');
    }

}
