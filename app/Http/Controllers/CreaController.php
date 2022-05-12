<?php

namespace App\Http\Controllers;

use App\Models\Crea;
use Illuminate\Http\Request;

/**
 * Class CreaController
 * @package App\Http\Controllers
 */
class CreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creas = Crea::paginate();

        return view('crea.index', compact('creas'))
            ->with('i', (request()->input('page', 1) - 1) * $creas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $crea = new Crea();
        return view('crea.create', compact('crea'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Crea::$rules);

        $crea = Crea::create($request->all());

        return redirect()->route('creas.index')
            ->with('success', 'Crea created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crea = Crea::find($id);

        return view('crea.show', compact('crea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crea = Crea::find($id);

        return view('crea.edit', compact('crea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Crea $crea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crea $crea)
    {
        request()->validate(Crea::$rules);

        $crea->update($request->all());

        return redirect()->route('creas.index')
            ->with('success', 'Crea updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $crea = Crea::find($id)->delete();

        return redirect()->route('creas.index')
            ->with('success', 'Crea deleted successfully');
    }
}
