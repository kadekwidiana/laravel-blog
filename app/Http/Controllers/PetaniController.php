<?php

namespace App\Http\Controllers;

use App\Models\Petani;
use Illuminate\Http\Request;

class PetaniController extends Controller
{
    public function index()
    {
        $petanis = Petani::all();
        return response()->json($petanis);
    }
}
