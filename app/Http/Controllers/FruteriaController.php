<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruteria;
use Illuminate\Routing\Controller;

class FruteriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',
        ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frutas = Fruteria::all();
        return view('index', compact('frutas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fruta = $request->all();
        Fruteria::create($fruta);
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('show', ['fruta' => Fruteria::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fruta = Fruteria::findOrFail($id);
        return view('edit', compact('fruta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

            $validateData = $request->validate([
                'nombre' => 'required|string|max:64',
                'imagen' => 'nullable|string',
                'temporada' => 'required|string|min:2',
                'precio' => 'required|numeric',
                'stock' => 'required|numeric',
            ]);

            Fruteria::findOrFail($id)->update($validateData);
            return redirect()->route('index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Fruteria::findOrFail($id)->delete();
        return redirect()->route('index');}
}
