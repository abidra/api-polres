<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tilang;

class TilangController extends Controller
{
    public function show($no)
    {
		$tilang = new Tilang;
		$result = $tilang->where('no_tilang', $no)->first();
		return $result->toJson();
    }
}
