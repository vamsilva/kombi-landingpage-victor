<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
    $banners = Banner::all();
    return view ('admin.banners.index', compact('banners'));
    }


public function store(Request $request)
{
    $data = $request->validate([
        'titulo' => 'required|string|max:255',
        'subtitulo' => 'nullable|string|max:255',
        'imagem' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('imagem')) {
        $path = $request->file('imagem')->store('banners', 'public');
        $data['img'] = $path;
    }

    unset($data['imagem']); // remove o campo temporário

    Banner::create($data);

    return redirect()->route('banners.index')->with('success', 'Banner criado com sucesso');
}

    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $data = $request->validate([
            'titulo' => 'required|string|max:255',
            'subtitulo' => 'nullable|string|max:255',
            'img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('imagem')) {
            $path = $request->file('img')->store('banners', 'public');
            $data['img'] = $path;
        }

        $banner->update($data);

        return redirect()->route('banners.index')->with('success', 'Banner atualizado com sucesso');
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->back()->with('success', 'Banner removido com sucesso');
    }

}
