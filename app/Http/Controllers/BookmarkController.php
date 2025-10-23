<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index()
    {
        $bookmarks = Bookmark::orderBy('id', 'desc')->paginate(10);
        return view('bookmark.table', compact('bookmarks'));
    }

    public function create()
    {
        return view('bookmark.form');
    }

    public function store(Request $request)
    {
        $data = [
            'nama'      => $request->input('nama'),
            'kategori'  => $request->input('kategori'),
            'link'      => $request->input('link'),
            'deskripsi' => $request->input('deskripsi'),
        ];

        Bookmark::create($data);
        return redirect('/table');
    }

    public function edit(Bookmark $bookmark)
    {
        return view('bookmark.edit', compact('bookmark'));
    }

    public function update(Request $request, Bookmark $bookmark)
    {
        $data = [
            'nama'      => $request->input('nama'),
            'kategori'  => $request->input('kategori'),
            'link'      => $request->input('link'),
            'deskripsi' => $request->input('deskripsi'),
        ];

        $bookmark->update($data);
        return redirect('/table');
    }

    public function destroy(Bookmark $bookmark)
    {
        $bookmark->delete();
        return back();
    }
}
