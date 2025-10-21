<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PortofolioController extends Controller
{
    public function index()
{
    $projects = Project::all();
    return view('projects.index', compact('projects'));
}
public function create()
{
    return view('projects.create');
}

public function store(Request $request)
{
    $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
        'gambar' => 'nullable|image|mimes:jpg,png,jpeg,gif,webp|max:2048',
    ]);

    $gambarPath = null;
    if ($request->hasFile('gambar')) {
        $gambarPath = $request->file('gambar')->store('projects', 'public');
    }

    Project::create([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'gambar' => $gambarPath,
    ]);

    return redirect()->route('projects.index')->with('success', 'Project berhasil ditambah!');
}


}
