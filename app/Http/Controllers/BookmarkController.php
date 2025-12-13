<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookmarkRequest;
use App\Http\Requests\UpdateBookmarkRequest;

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
        $categories = Bookmark::select('kategori')->distinct()->get();

        return view('bookmark.form', compact('categories'));
    }

    public function save(StoreBookmarkRequest $request)
    {
        Bookmark::create($request->validated());

        return redirect('/table');
    }

    public function edit(Bookmark $bookmark)
    {
        $categories = Bookmark::select('kategori')->distinct()->get();

        return view('bookmark.edit', compact('bookmark', 'categories'));
    }

    public function update(UpdateBookmarkRequest $request, Bookmark $bookmark)
    {
        $bookmark->update($request->validated());

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
