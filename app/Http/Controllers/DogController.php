<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function listar()
{
    $dogs = Dog::all();
    return view('dogs.index', compact('dogs'));
}

public function criar()
{
    return view('dogs.create');
}

public function salvar(Request $request)
{
    Dog::create($request->all());
    return redirect('dogs')->with('success', 'Cachorro cadastrado com sucesso.');
}

public function editar($id)
{
    $dog = Dog::findOrFail($id);
    return view('dogs.edit', compact('dog'));
}

public function atualizar(Request $request, $id)
{
    $dog = Dog::findOrFail($id);
    $dog->update($request->all());
    return redirect('dogs')->with('success', 'Cachorro atualizado com sucesso.');
}

public function deletar($id)
{
    $dog = Dog::findOrFail($id);
    $dog->delete();
    return redirect('dogs')->with('success', 'Cachorro deletado com sucesso.');
}
}
