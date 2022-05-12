<?php

namespace App\Http\Controllers;

use App\Models\Disponible;
use Illuminate\Http\Request;

/**
 * Class DisponibleController
 * @package App\Http\Controllers
 */
class DisponibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disponibles = Disponible::paginate();

        return view('disponible.index', compact('disponibles'))
            ->with('i', (request()->input('page', 1) - 1) * $disponibles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disponible = new Disponible();
        return view('disponible.create', compact('disponible'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Disponible::$rules);

        $disponible = Disponible::create($request->all());

        return redirect()->route('disponibles.index')
            ->with('success', 'Disponible created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $disponible = Disponible::find($id);

        return view('disponible.show', compact('disponible'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disponible = Disponible::find($id);

        return view('disponible.edit', compact('disponible'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Disponible $disponible
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disponible $disponible)
    {
        request()->validate(Disponible::$rules);

        $disponible->update($request->all());

        return redirect()->route('disponibles.index')
            ->with('success', 'Disponible updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $disponible = Disponible::find($id)->delete();

        return redirect()->route('disponibles.index')
            ->with('success', 'Disponible deleted successfully');
    }
}
