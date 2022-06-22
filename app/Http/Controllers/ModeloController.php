<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use App\Models\Marca;
use Illuminate\Http\Request;

/**
 * Class ModeloController
 * @package App\Http\Controllers
 */
class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelos = Modelo::paginate();
        $marcas = Marca::pluck('nombre','id');
        return view('modelo.index', compact('modelos','marcas'))
            ->with('i', (request()->input('page', 1) - 1) * $modelos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modelo = new Modelo();
        $marcas = Marca::pluck('nombre','id');
        return view('modelo.create', compact('modelo','marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modelo= new Modelo();
        request()->validate(Modelo::$rules);
        if($request->file('imagenes')){
            $file= $request->file('imagenes');
            $destinationPath = "public/media/";
            $filename= time()."-".$file->getClientOriginalName();
            $uploadSucesses = $request->file('imagenes')->move($destinationPath, $filename);
        }
        $modelo = Modelo::create($request->all());
        $modelo['imagenes']= $filename;
        $modelo->save();


        
        return redirect()->route('modelos.index')
            ->with('success', 'Modelo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelo = Modelo::find($id);

        return view('modelo.show', compact('modelo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelo = Modelo::find($id);
        $marcas = Marca::pluck('nombre','id');
        return view('modelo.edit', compact('modelo','marcas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Modelo $modelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modelo $modelo)
    {
        //request()->validate(Modelo::$rules);
        if($request->file('imagenes')){
            $file= $request->file('imagenes');
            $destinationPath = "public/media/";
            $filename= time()."-".$file->getClientOriginalName();
            $uploadSucesses = $request->file('imagenes')->move($destinationPath, $filename);
        } 
         $modelo->update($request->all());
        $modelo['imagenes']= $filename;
        $modelo->save();

      

        return redirect()->route('modelos.index')
            ->with('success', 'Modelo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $modelo = Modelo::find($id)->delete();

        return redirect()->route('modelos.index')
            ->with('success', 'Modelo deleted successfully');
    }
}
