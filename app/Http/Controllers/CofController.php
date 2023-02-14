<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\coffeshop;


class CofController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    } 
   
   
   
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('coffe.index',[
            'coffes' => coffeshop::all()
        ]);
    }

    // public function welcome()
    // {
    //     return view('welcome',[
    //         'coffes' => coffeshop::all()
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view("coffe.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $coffe = new coffeshop();

        $coffe -> name = strip_tags($request ->input('name'));
        $coffe -> description =strip_tags($request ->input('description'));
        $coffe -> price = strip_tags($request ->input('price'));

        $coffe->save();

        return redirect()->route('coffe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('coffe.edit',[
            'coffes' => coffeshop::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $coffe)
    {
         $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $update = coffeshop::findOrFail($coffe);
        

        $update -> name = strip_tags($request ->input('name'));
        $update-> description =strip_tags($request ->input('description'));
        $update -> price = strip_tags($request ->input('price'));

        $update->save();

        return redirect()->route('coffe.index',$coffe);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($coffe)
    {

        $delet =coffeshop::findOrFail($coffe);
        $delet ->delete();
        return redirect()->route('coffe.index');
        
    }



}
