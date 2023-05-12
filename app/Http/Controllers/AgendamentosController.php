<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamento;
class AgendamentosController extends Controller
{
    public function index(){
        return view('index');
    }

    public function consulta(){
        $agendamentos = Agendamento::all();
        return view('consulta', ['agendamentos' => $agendamentos]);
    }

    public function store(Request $request){
        try{
            $agendamento = new Agendamento;

            $agendamento->nome = $request->txtNome;
            $agendamento->telefone = $request->txtTelefone;
            $agendamento->origem = $request->txtOrigem;
            $agendamento->data_contato = $request->txtDataContato;
            $agendamento->observacao = $request->txtObservacao;
    
            $agendamento->save();
    
            return redirect('/consulta');
        }
        catch(Exeption $e){
            return redirect('/consulta');
        }
    }

    public function editar(){
        $agendamento = Agendamento::all()->where('id', $_GET['agendamento'])->first();
        return view('/editar', ['agendamento' => $agendamento]);
    }


    public function atualizar(Request $request){
        try {
            $agendamento = Agendamento::find($_GET['agendamento']);

            $agendamento->nome = $request->txtNome;
            $agendamento->telefone = $request->txtTelefone;
            $agendamento->origem = $request->txtOrigem;
            $agendamento->data_contato = $request->txtDataContato;
            $agendamento->observacao = $request->txtObservacao;

            $agendamento->save();
            return redirect('/consulta');
        } catch (Exeption $e) {
            return redirect('/consulta');
        }
    }

    public function excluir(){
        try{
            $agendamento=Agendamento::where('id', $_GET['agendamento'])->delete();
            return redirect('/consulta');
        }catch(Exeption $e){
            return redirect('/consulta');
        }
    }
}
