<?php

namespace App\Http\Controllers;

use App\Models\Sabore;
use Illuminate\Http\Request;

/**
 * Class SaboreController
 * @package App\Http\Controllers
 */
class SaboreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sabores = Sabore::paginate();

        return view('sabore.index', compact('sabores'))
            ->with('i', (request()->input('page', 1) - 1) * $sabores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sabore = new Sabore();
        return view('sabore.create', compact('sabore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sabore::$rules);

        $sabore = Sabore::create($request->all());

        return redirect()->route('sabores.index')
            ->with('success', 'Sabore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sabore = Sabore::find($id);

        return view('sabore.show', compact('sabore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sabore = Sabore::find($id);

        return view('sabore.edit', compact('sabore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sabore $sabore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sabore $sabore)
    {
        request()->validate(Sabore::$rules);

        $sabore->update($request->all());

        return redirect()->route('sabores.index')
            ->with('success', 'Sabore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sabore = Sabore::find($id)->delete();

        return redirect()->route('sabores.index')
            ->with('success', 'Sabore deleted successfully');
    }
}
