<?php

namespace App\Http\Controllers;

use App\Presupuesto;
use Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PresupuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presupuestos=Presupuesto::orderBy('created_at', 'desc')->paginate(15);
        return view('presupuestos.index',compact('presupuestos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('presupuestos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{

            $presupuesto = new Presupuesto();
            $presupuesto->user_id = Auth::id();
            FacturaController::silentSave($presupuesto,$request);
            if($request->input("proyecto_id") != null && $request->input("proyecto_id") != "") {
                $proyecto = Proyecto::findOrFail($request->input("proyecto_id"));
                $presupuesto->proyecto()->save($proyecto);
            } elseif($request->input("cliente_id") != null && $request->input("cliente_id") != "") {
                $cliente = Cliente::findOrFail($request->input("cliente_id"));
                $presupuesto->cliente()->save($cliente);
            }
        } catch (ModelNotFoundException $e) {
            session()->flash('flash_message', 'Ha habido un error');
        }

        session()->flash('flash_message', 'Se ha creado el presupuesto #'.$presupuesto->id.' con éxito');
        return redirect()->route("presupuesto.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $presupuesto=Presupuesto::findOrFail($id);
        return view('presupuestos.show',compact('presupuesto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $presupuesto=Presupuesto::findOrFail($id);
        return view('presupuestos.edit',compact('presupuesto'));
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
        try{
            $presupuesto = Presupuesto::findOrFail($id);
            FacturaController::silentSave($presupuesto,$request);
        } catch (ModelNotFoundException $e) {
            session()->flash('flash_message', 'Ha habido un error');
        }

        session()->flash('flash_message', 'Se ha actualizado el prespuesto #'.$presupuesto->id.' con éxito');
        return redirect()->route("dashboard");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $presupuesto = Presupuesto::findOrFail($id);
        $presupuesto->delete();
        session()->flash('flash_message', 'Se ha eliminado el presupuesto #'.$id.' con éxito');
        return redirect()->route("presupuesto.index");
    }

    /**
     * Returns an specific searched element
     *
     * @param $id
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function find($id)
    {
        $presupuesto = Presupuesto::findOrFail($id);
        return view("presupuesto.show",compact("presupuesto"));
    }

}
