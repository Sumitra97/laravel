<?php

namespace App\Http\Controllers;
use App\Http\Requests\UnitFormRequest;
use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('units.index',[
            'units'=>Unit::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UnitFormRequest $request)
    {
        $unit=new Unit();
        $unit->name=$request->input('name');
        $unit->code=$request->input('code');
        $unit->status=$request->has('status'); 
        $unit->save();
        return redirect(url('/admin/units'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return View('units.edit',[
            'unit'=>Unit::find($id)

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(UnitFormRequest $request, Unit $unit)
    {
        $unit->name=$request->input('name');
        $unit->code=$request->input('code');
        $unit->status=$request->has('status'); 
        $unit->save();
        return redirect(url('/admin/units'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        //
    }
}
