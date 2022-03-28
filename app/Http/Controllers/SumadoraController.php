<?php

namespace App\Http\Controllers;

use App\Models\Sumadora;
use Illuminate\Http\Request;

class SumadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('funcion.suma');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $resultado;
        $resultado = $_REQUEST['numero1']+$_REQUEST['numero2'];
    
        $consola = "<script>console.log('Resultado: " . $resultado . "' );</script>";
 
        return ("Resultado es ".$resultado.$consola);

          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sumadora  $sumadora
     * @return \Illuminate\Http\Response
     */
    public function show(Sumadora $sumadora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sumadora  $sumadora
     * @return \Illuminate\Http\Response
     */
    public function edit(Sumadora $sumadora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sumadora  $sumadora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sumadora $sumadora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sumadora  $sumadora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sumadora $sumadora)
    {
        //
    }
}
