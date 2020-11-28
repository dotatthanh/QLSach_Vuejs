<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function getAuthors()
	{
    	$response = Author::all();
        return response()->json($response);
	}
}
