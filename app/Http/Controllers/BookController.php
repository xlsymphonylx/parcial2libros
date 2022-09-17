<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getAll()
    {
        return Book::all();
    }
    public function index()
    {
        $books = Book::all();
        return view('welcome', $books);
    }
    public function delete($id)
    {
        return Book::find($id)->delete();
    }
    public function edit(Request $request, $id)
    {
        $data = $this->validateForm($request);
        Book::find($id)->update($data);
    }
    public function create(Request $request)
    {
        $data = $this->validateForm($request);
        Book::insert($data);
    }
    public function validateForm(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'isbn' => 'required',
            'year' => 'required',
            'genre' => 'required',
            'author' => 'required',
        ]);
    }
}
