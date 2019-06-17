<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('suppliers.index',[
            'suppliers'=>Supplier::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers.create');
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
            'supplier_name'=>'required|min:3',
            'supplier_email'=>'required|email',
            'contact_no'=>'required',
            'address'=>'required'

        ]);
        $supplier=new Supplier();
        $supplier->supplier_name=$request->input('supplier_name');
        $supplier->supplier_email=$request->input('supplier_email');
        $supplier->contact_no=$request->input('contact_no');
        $supplier->address=$request->input('address');
        $supplier->status=$request->has('supplier_status');
        $supplier->save();
        return redirect('/suppliers');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier=Supplier::find($id);
        if(is_null( $supplier))
        {
            return redirect('/suppliers');
        }
        return view('suppliers.edit',[
         'supplier'=>$supplier
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        
        $supplier->supplier_name=$request->input('supplier_name');
        $supplier->supplier_email=$request->input('supplier_email');
        $supplier->contact_no=$request->input('contact_no');
        $supplier->address=$request->input('address');
        $supplier->modified_date=date('Y-m-d h:i:s');
        $supplier->status=$request->has('supplier_status');
        $supplier->save();
        return redirect('/suppliers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->forceDelete();
        return redirect('/suppliers');
    }
}
