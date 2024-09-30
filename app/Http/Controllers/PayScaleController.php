<?php

namespace App\Http\Controllers;

use App\Models\PayScale;
use Illuminate\Http\Request;

class PayScaleController extends Controller
{
    public function index()
    {
        $scales = PayScale::all();

        return response()->json($scales, 200);
    }
}
