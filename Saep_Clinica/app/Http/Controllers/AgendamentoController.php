<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Tutor;
use App\Models\Pet;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function listar()
    {
        $agendamentos = Agendamento::orderBy('data')
            ->orderBy('hora')
            ->get();

        return view('agendamento.listar', compact('agendamentos'));
    }

    public function create()
    {
        $tutores = Tutor::all();
        $pets = Pet::all();

        return view('agendamento.create', compact('pets', 'tutores'));
    }

    public function store(Request $request)
    {
        Agendamento::create([
            'data' => $request->data,
            'hora' => $request->hora,
            'descricao' => $request->descricao,
            'pet_id' => $request->pet_id,
        ]);

        return redirect()->back()->with('success','Cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $agendamento = Agendamento::findOrFail($id);

        $pets = Pet::all();

        return view('agendamento.edit',compact('agendamento', 'pets'));
    }

    public function update(Request $request, $id)
    {
        $agendamento = Agendamento::findOrFail($id);

        $agendamento->update([
            'data' => $request->data,
            'hora' => $request->hora,
            'descricao' => $request->descricao,
            'pet_id' => $request->pet_id,
        ]);

        return redirect()->back()->with('success','Atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Agendamento::destroy($id);

        return redirect()->back()->with('success','Deletado com sucesso!');
    }
}