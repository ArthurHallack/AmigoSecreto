<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {   
        // dd('oi');
        $test = usuarios::all();
        //return response ($test);
        return view ('usuarios.index')->with('list',$test) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view ('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            usuarios::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
        ]);
        return redirect()->route('usuarios');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view ('usuarios.create');
        
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $test = usuarios::findOrFail($id);

        $test->nome = $request->input('nome');
        $test->email = $request->input('email');

        $test->save();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        usuarios::findOrFail($id)->delete();        
        // return redirect('/index')->with('msg', 'evento excluido com sucesso');
        return redirect('/usuarios')->with('success', 'Usuário excluído com sucesso!');
    }
}
