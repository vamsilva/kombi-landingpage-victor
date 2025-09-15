<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function store(Request $request)
    {
            $data = $request->validate([
                'name'  => 'required|string|max:255',
                'email'  => 'required|email',
                'celular'  => 'required|string|max:20',
                'acordo'  => 'accepted'
            ]);

            $data['acordo'] = true;

            Contato::create($data);


            return redirect()->back()->with('success', 'Sua solicitação foi enviada com sucesso!');
    }
}
