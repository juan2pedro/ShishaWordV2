<?php

namespace App\Http\Controllers;

use App\Models\Mezcla;
use Illuminate\Http\Request;

/**
 * Class MezclaController
 * @package App\Http\Controllers
 */
class MezclaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mezclas = Mezcla::paginate();

        return view('mezcla.index', compact('mezclas'))
            ->with('i', (request()->input('page', 1) - 1) * $mezclas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mezcla = new Mezcla();
        return view('mezcla.create', compact('mezcla'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mezcla::$rules);

        $mezcla = Mezcla::create($request->all());

        return redirect()->route('mezclas.index')
            ->with('success', 'Mezcla created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mezcla = Mezcla::find($id);

        return view('mezcla.show', compact('mezcla'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mezcla = Mezcla::find($id);

        return view('mezcla.edit', compact('mezcla'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mezcla $mezcla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mezcla $mezcla)
    {
        request()->validate(Mezcla::$rules);

        $mezcla->update($request->all());

        return redirect()->route('mezclas.index')
            ->with('success', 'Mezcla updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mezcla = Mezcla::find($id)->delete();

        return redirect()->route('mezclas.index')
            ->with('success', 'Mezcla deleted successfully');
    }
}
