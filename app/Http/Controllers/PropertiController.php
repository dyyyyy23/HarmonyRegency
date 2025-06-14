<?php

namespace App\Http\Controllers;

use App\Models\Properti;
use Illuminate\Http\Request;

class PropertiController extends Controller
{
    public function index()
    {
        $propertis = Properti::all();
        return view('pages.properti.index', compact('propertis'));
    }

    public function create()
    {
        return view('pages.properti.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|integer'
        ]);
        Properti::create($request->all());
        return redirect()->route('properti.index')->with('success', 'Properti berhasil ditambahkan!');
    }

    public function show(Properti $properti)
    {
        return view('pages.properti.show', compact('properti'));
    }

    public function edit(Properti $properti)
    {
        return view('pages.properti.edit', compact('properti'));
    }

    public function update(Request $request, Properti $properti)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|integer'
        ]);
        $properti->update($request->all());
        return redirect()->route('properti.index')->with('success', 'Properti berhasil diupdate!');
    }

    public function destroy(Properti $properti)
    {
        $properti->delete();
        return redirect()->route('properti.index')->with('success', 'Properti berhasil dihapus!');
    }
}
