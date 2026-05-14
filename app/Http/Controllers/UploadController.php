<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048'
        ]);

        $path = $request->file('image')->store('images', 'public');

        return back()->with('success', 'Imagem enviada com sucesso!')
                     ->with('path', $path);
    }
}
