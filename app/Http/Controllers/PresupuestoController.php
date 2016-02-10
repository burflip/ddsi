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
            $this->silentSave($presupuesto,$request);
        } catch (ModelNotFoundException $e) {
            session()->flash('flash_message', 'Ha habido un error');
        }

        session()->flash('flash_message', 'Se ha creado el presupuesto #'.$presupuesto->id.' con éxito');
        return redirect()->route("presupuesto.index");
    }

    /**
     * Basic save operation used for update & store.
     *
     * @param $presupuesto
     * @param Request $request
     * @param bool $save
     * @return mixed
     */
    public function silentSave(&$presupuesto, Request $request,$save = true)
    {
        $presupuesto->last_modification_user_id=Auth::id();
        $presupuesto->proyecto_id=$request->input('name');
        $presupuesto->cliente_id=$request->input('img_url');

        $presupuesto->r_invoicing_name=$request->input('r_invoicing_name');
        $presupuesto->r_entity_type=$request->input('r_entity_type');
        $presupuesto->r_nif=$request->input('r_nif');
        $presupuesto->r_country=$request->input('r_country');
        $presupuesto->r_state=$request->input('r_state');
        $presupuesto->r_city=$request->input('r_city');
        $presupuesto->r_zip_code=$request->input('r_zip_code');
        $presupuesto->r_address_1=$request->input('r_address_1');
        $presupuesto->r_address_2=$request->input('r_address_2');

        $presupuesto->e_invoicing_name=$request->input('e_invoicing_name');
        $presupuesto->e_entity_type=$request->input('e_entity_type');
        $presupuesto->e_nif=$request->input('e_nif');
        $presupuesto->e_country=$request->input('e_country');
        $presupuesto->e_state=$request->input('e_state');
        $presupuesto->e_city=$request->input('e_city');
        $presupuesto->e_zip_code=$request->input('e_zip_code');
        $presupuesto->e_address_1=$request->input('e_address_1');
        $presupuesto->e_address_2=$request->input('e_address_2');

        $presupuesto->aceptation_days=$request->input('aceptation_days');
        $presupuesto->percentage_discount=$request->input('percentage_discount');
        $presupuesto->amount_discount=$request->input('amount_discount');
        $presupuesto->notes=$request->input('notes');
        
        ($save) ? $presupuesto->save() : null;
        return $presupuesto;
        
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
        return view('proyectos.show',compact('presupuesto'));
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
        return view('prespuestos.edit',compact('presupuesto'));
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
            $this->silentSave($presupuesto,$request);
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
        return view("productos.show",compact("presupuesto"));
    }
    
}
