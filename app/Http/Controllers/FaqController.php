<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'duvida' => 'required|string|max:255',
            'resposta' => 'required|string',
        ]);

        Faq::create($data);

        return redirect()->route('faqs.index')->with('success', 'FAQ adicionada com sucesso!');
    }

    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $faq->update($request->validate([
            'duvida' => 'required|string|max:255',
            'resposta' => 'required|string',
        ]));

        return redirect()->route('faqs.index')->with('success', 'FAQ atualizada com sucesso!');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faqs.index')->with('success', 'FAQ removida com sucesso!');
    }
}
