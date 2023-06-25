<?php

namespace App\Http\Controllers\Api;

use App\Models\movitable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class MoviController extends Controller
{
    //handling crud operation here
    public function index()
    {
         //testing api
        //     return response()->json([
        //         'movitable' => $movitable
        //     ],200);
        
         $movitable = movitable::latest()->paginate(5);
            return view('admin.index', [
                'movitable' => $movitable,
            ]);
       
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required|mimes:jpeg,jpg,png,gif|max:5000',
            'title'=> 'required',
            'publicationdate'=> 'required',
            'runtime'=> 'required',
            'description' => 'required',
        ]);


        //uplod images
        // dd($request->all());
        $imageName = time().'.'.$request->img->extension();
        $request->img->move(public_path('movimages'), $imageName);

        $movitable = new movitable;
        $movitable->img=$imageName;
        $movitable->title=$request->title;
        $movitable->publicationdate=$request->publicationdate;
        $movitable->runtime=$request->runtime;
        $movitable->description=$request->description;

        $movitable->save();

        return back()->withSuccess('Movi uploaded !!!!!');
    }

    public function edit($id)
    {
        $adminedit = movitable::where('id',$id)->first();

        return view('admin.edit',[
            'adminedit' => $adminedit,
        ]); 
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'img' => 'nullable|mimes:jpeg,jpg,png,gif|max:5000',
            'title'=> 'required',
            'publicationdate'=> 'required',
            'runtime'=> 'required',
            'description' => 'required',
        ]);

        $movitable = movitable::where('id',$id)->first();
        if(isset($request->img)){
        //uplod images
        $imageName = time().'.'.$request->img->extension();
        $request->img->move(public_path('movimages'), $imageName);
        $movitable->img=$imageName;
        }

        $movitable->title=$request->title;
        $movitable->publicationdate=$request->publicationdate;
        $movitable->runtime=$request->runtime;
        $movitable->description=$request->description;

        $movitable->save();
        return back()->withSuccess('Movi Updated !!!!!');
    }



    public function destroy($id){
        $admindelete = movitable::where('id',$id)->first();
        $admindelete->delete();
        return back()->withSuccess('Movi Deleted !!!!!');
    }



    public function view($id){
        $adminview = movitable::where('id',$id)->first();
        return view('admin.view',[
            'adminview' => $adminview,
        ]);
    }
}
