<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // Tampilkan daftar buku
    public function index()
    {
        $books = Book::all();
        return view('home', compact('books'));
    }

    // Tampilkan detail buku
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('book', compact('book'));
    }
    
    // Tampilkan baca buku
    public function read($id)
    {
        $book = Book::findOrFail($id);
        return view('book_read', compact('book'));
    }    
    
    // Tampilkan form tambah buku
    public function create()
    {
        return view('buku_create');
    }

    // Proses simpan buku baru
    public function store(Request $request)
{
    $request->validate([
        'title'       => 'required',
        'description' => 'required',
        'content'     => 'required',  
        'author'      => 'required',
        'cover_image' => 'nullable|image|max:2048',
        'published_at'=> 'nullable|date'
    ]);

    $coverPath = null;
    if ($request->hasFile('cover_image')) {
        $coverPath = $request->file('cover_image')->store('covers', 'public');
    }

    Book::create([
        'title'       => $request->title,
        'description' => $request->description,
        'content'     => $request->content,  
        'author'      => $request->author,
        'cover_image' => $coverPath,
        'published_at'=> $request->published_at,
    ]);

    return redirect('/')->with('success', 'Buku berhasil ditambahkan!');
}
};
