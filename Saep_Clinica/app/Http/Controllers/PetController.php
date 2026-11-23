<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Tutor;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function listar()
    {
        $pets = Pet::all();

        return view('pets.listar', compact('pets'));
    }

    public function create()
    {
        $tutores = Tutor::all();

        return view('pets.create', compact('tutores'));
    }

    public function store(Request $request)
    {
        Pet::create([
            'placa' => $request->placa,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'tutor_id' => $request->tutor_id,
        ]);

        return redirect()->back()->with('success','Cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $pet = Pet::findOrFail($id);

        $tutores = Tutor::all();

        return view('pets.edit', compact('pet', 'tutores'));
    }

    public function update(Request $request, $id)
    {
        $pet = Pet::findOrFail($id);

        $pet->update([
            'placa' => $request->placa,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'tutor_id' => $request->tutor_id,
        ]);

        return redirect()->back()->with('success','Atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Pet::destroy($id);

        return redirect()->back()->with('success','Deletado com sucesso!');
    }
}