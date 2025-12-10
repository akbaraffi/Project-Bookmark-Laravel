<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index()
    {
        return view('bookmark.index');
    }

    public function list()
    {
        $bookmarks = Bookmark::all();
        return view('bookmark.table', compact('bookmarks'));
    }

    public function create()
    {
        return view('bookmark.form');
    }

    public function save(Request $request)
    {
        $request->validate([
            'nama'      => 'required',
            'kategori'  => 'required',
            'link'      => 'required|url',
            'deskripsi' => 'nullable',
        ]);

        Bookmark::create($request->only(['nama', 'kategori', 'link', 'deskripsi']));

        return redirect('/table');
    }

    public function edit(Bookmark $bookmark)
    {
        return view('bookmark.edit', compact('bookmark'));
    }

    public function update(Request $request, Bookmark $bookmark)
    {
        $request->validate([
            'nama'      => 'required',
            'kategori'  => 'required',
            'link'      => 'required|url',
            'deskripsi' => 'nullable',
        ]);

        $bookmark->update($request->only(['nama', 'kategori', 'link', 'deskripsi']));

        return redirect('/table');
    }

    public function delete(Bookmark $bookmark)
    {
        $bookmark->delete();
        return redirect('/table');
    }

    public function search(Request $request)
    {
        $q = $request->input('q');

        $bookmarks = Bookmark::when($q, function ($query) use ($q) {
            $query->where('nama', 'like', "%{$q}%");
        })->get();

        return view('bookmark.table', compact('bookmarks'));
    }
}
