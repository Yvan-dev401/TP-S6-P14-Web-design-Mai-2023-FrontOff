<?php

namespace App\Http\Controllers;

use App\Models\Contenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContenuController extends Controller
{
    public function single(Request $request)
    {
        $idcontenu = $request->input('idcontenu');

        $contenu = DB::table('contenu')->where('idcontenu', '=', $idcontenu)->first();

        return view('singleContenu', ['contenu' => $contenu]);
    }
}
