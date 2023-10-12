<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Developers;

class DevelopersController extends Controller
{
    public function index() 
    {
        $datas = Developers::all();
        return view('admin.pages.developers.index', compact('datas'));
    }
}
