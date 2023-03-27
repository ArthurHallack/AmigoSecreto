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
            $usuario =usuarios::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
        ]);
        return redirect()->route('usuarios.edit', ['id' => $usuario->id]);
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
        $usuario = usuarios::findOrFail($id);
        return view('usuarios.create', ['usuario' => $usuario]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = usuarios::findOrFail($id);
        $usuario->nome = $request->input('nome');
        $usuario->email = $request->input('email');
        $usuario->save();
        return redirect()->route('usuarios.edit', ['id' => $usuario->id]);

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
    public function sorteio()
{
    $usuarios = usuarios::all();

    $pares = [];

    $usuarios = $usuarios->shuffle();

    for ($i = 0; $i < count($usuarios); $i++) {
        if ($i == count($usuarios) - 1) {
            // Se for o último usuário, forma um par com o primeiro
            $pares[] = [$usuarios[$i], $usuarios[0]];
        } else {
            $pares[] = [$usuarios[$i], $usuarios[$i + 1]];
        }
    }

    return view('usuarios.sorteio', ['pares' => $pares]);
}
}

