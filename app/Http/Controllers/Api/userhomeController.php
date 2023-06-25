<?php

namespace App\Http\Controllers\Api;

use App\Models\movitable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userhomeController extends Controller
{
    public function index()
    {
         $moviapidata = movitable::latest()->get();
       
            return view('user.index', [
                'moviapidata' => $moviapidata,
            ]);
    }

    public function show($id){
        $singlemovidata = movitable::where('id',$id)->first();
        return view('user.show',[
            'movie' => $singlemovidata,
        ]);
    }
}
