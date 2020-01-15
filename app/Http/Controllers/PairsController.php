<?php

namespace App\Http\Controllers;
use App\Pair;
use Response;
use Illuminate\Http\Request;

class PairsController extends Controller
{
    public function getPair($pair_id)
    {
	return Pair::find($pair_id);
    }
    public function votePic1($pair_id)
    {
	$pair = Pair::find($pair_id);
	$pair->pic1_votes = $pair->pic1_votes + 1;
	$pair->save();

	return Response::json($pair);
    }
    public function votePic2($pair_id)
    {
        $pair = Pair::find($pair_id);
        $pair->pic2_votes = $pair->pic2_votes + 1;
        $pair->save();

        return Response::json($pair);
    }
}
