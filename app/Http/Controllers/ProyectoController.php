<?php

namespace App\Http\Controllers;

use App\Proyecto;
use Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::orderBy('created_at', 'desc')->paginate(15);
        return view('proyectos.index',compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyectos.create');
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
            $proyecto = new Proyecto();
            $proyecto->user_id = Auth::id();
            $this->silentSave($proyecto,$request);
        } catch (ModelNotFoundException $e) {
            session()->flash('flash_message', 'Ha habido un error');
        }

        session()->flash('flash_message', 'Se ha creado el proyecto #'.$proyecto->id.' - '.$proyecto->name.' con éxito');
        return redirect()->route("proyecto.index");
    }

    /**
     * Basic save operation used for update & store.
     *
     * @param $proyecto
     * @param Request $request
     * @param bool $save
     * @return mixed
     */
    public function silentSave(&$proyecto, Request $request,$save = true)
    {
        $proyecto->last_modification_user_id=Auth::id();
        $proyecto->name=$request->input('name');
        $proyecto->img_url=$request->input('img_url');
        $proyecto->total_amount=$request->input('total_amount');
        $proyecto->starting_date=$request->input('starting_date');
        $proyecto->ending_date=$request->input('ending_date');
        $proyecto->notes=$request->input('notes');
        ($save) ? $proyecto->save() : null;
        return $proyecto;
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto=Proyecto::findOrFail($id);
        return view('proyectos.show',compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto=Proyecto::findOrFail($id);
        return view('proyectos.edit',compact('proyecto'));
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
            $proyecto = Proyecto::findOrFail($id);
            $this->silentSave($proyecto,$request);
        } catch (ModelNotFoundException $e) {
            session()->flash('flash_message', 'Ha habido un error');
        }

        session()->flash('flash_message', 'Se ha modificado el proyecto #'.$proyecto->id.' - '.$proyecto->name.' con éxito');
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
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->delete();
        session()->flash('flash_message', 'Se ha eliminado el proyecto #'.$id.' con éxito');
        return redirect()->route("proyecto.index");
    }

    /**
     * Returns an specific searched element
     *
     * @param $id
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function find($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view("productos.show",compact("proyecto"));
    }

    /**
     * Searches for an especific product name
     *
     * @param $name
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function search($name)
    {
        $proyectos = Proyecto::where("name",$name)->orderBy('created_at', 'desc')->paginate(10);
        return view("proyectos.index",compact("proyectos"));
    }

}
