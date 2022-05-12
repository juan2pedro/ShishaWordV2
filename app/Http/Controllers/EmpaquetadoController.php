<?php

namespace App\Http\Controllers;

use App\Models\Empaquetado;
use Illuminate\Http\Request;

/**
 * Class EmpaquetadoController
 * @package App\Http\Controllers
 */
class EmpaquetadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empaquetados = Empaquetado::paginate();

        return view('empaquetado.index', compact('empaquetados'))
            ->with('i', (request()->input('page', 1) - 1) * $empaquetados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empaquetado = new Empaquetado();
        return view('empaquetado.create', compact('empaquetado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Empaquetado::$rules);

        $empaquetado = Empaquetado::create($request->all());

        return redirect()->route('empaquetados.index')
            ->with('success', 'Empaquetado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empaquetado = Empaquetado::find($id);

        return view('empaquetado.show', compact('empaquetado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empaquetado = Empaquetado::find($id);

        return view('empaquetado.edit', compact('empaquetado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empaquetado $empaquetado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empaquetado $empaquetado)
    {
        request()->validate(Empaquetado::$rules);

        $empaquetado->update($request->all());

        return redirect()->route('empaquetados.index')
            ->with('success', 'Empaquetado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empaquetado = Empaquetado::find($id)->delete();

        return redirect()->route('empaquetados.index')
            ->with('success', 'Empaquetado deleted successfully');
    }
}
