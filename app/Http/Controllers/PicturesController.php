<?php

namespace App\Http\Controllers;
use App\Picture;
use Illuminate\Http\Request;

class PicturesController extends Controller
{
    public function getPic($picture_id)
    {
 	return Picture::find($picture_id);
    }
}
