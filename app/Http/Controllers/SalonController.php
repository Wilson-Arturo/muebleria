<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salon;

class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salons = Salon::all();
        return view('salon.index')->with('salons',$salons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salons = new Salon();
        $salons->id = $request->get('id');
        $salons->nombre = $request->get('nombre');

        $salons->save();

        return redirect('/salons');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salon = Salon::find($id);
        return view('salon.edit')->with('salon',$salon);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $salon = Salon::find($id);
        $salon->id = $request->get('id');
        $salon->nombre = $request->get('nombre');
        $salon->save();
        return redirect('/salons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salon = Salon::find($id);
        $salon->delete();
        return redirect('/salons');
    }
}
