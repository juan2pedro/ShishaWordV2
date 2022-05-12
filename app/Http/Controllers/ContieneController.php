<?php

namespace App\Http\Controllers;

use App\Models\Contiene;
use Illuminate\Http\Request;

/**
 * Class ContieneController
 * @package App\Http\Controllers
 */
class ContieneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contienes = Contiene::paginate();

        return view('contiene.index', compact('contienes'))
            ->with('i', (request()->input('page', 1) - 1) * $contienes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contiene = new Contiene();
        return view('contiene.create', compact('contiene'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Contiene::$rules);

        $contiene = Contiene::create($request->all());

        return redirect()->route('contienes.index')
            ->with('success', 'Contiene created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contiene = Contiene::find($id);

        return view('contiene.show', compact('contiene'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contiene = Contiene::find($id);

        return view('contiene.edit', compact('contiene'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Contiene $contiene
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contiene $contiene)
    {
        request()->validate(Contiene::$rules);

        $contiene->update($request->all());

        return redirect()->route('contienes.index')
            ->with('success', 'Contiene updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $contiene = Contiene::find($id)->delete();

        return redirect()->route('contienes.index')
            ->with('success', 'Contiene deleted successfully');
    }
}
