<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function listar(Request $request)
    {
        $query = Tutor::query();

        if ($request->filled('nome')) {
            $query->where(
                'nome',
                'like',
                '%' . $request->nome . '%'
            );
        }

        $tutores = $query->get();

        return view('tutores.listar', compact('tutores'));
    }

    public function create()
    {
        return view('tutores.create');
    }

    public function store(Request $request)
    {
        Tutor::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success','Cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $tutor = Tutor::findOrFail($id);

        return view('tutores.edit', compact('tutor'));
    }

    public function update(Request $request, $id)
    {
        $tutor = Tutor::findOrFail($id);

        $tutor->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success','Atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Tutor::destroy($id);

        return redirect()->back()->with('success','Deletado com sucesso!');
    }
}