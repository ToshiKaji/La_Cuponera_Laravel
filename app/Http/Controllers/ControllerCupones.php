<?php

namespace App\Http\Controllers;

use App\Models\Cupone;
use Illuminate\Http\Request;

class ControllerCupones extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cupone $cupone)
    {
        $datos['cupones']=Cupone::all();
        return view('Cupones.PorAutorizar',$datos);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cupone $cupone)
    {
        $datos['cupones']=Cupone::all()->where('activado','=',0);
        return view('Cupones.PorAutorizar',$datos);
       
    }
   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cupone $cupone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cupone $cupone)
    {
        //
    }
}
