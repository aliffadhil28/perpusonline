<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Collection;
use App\Models\User;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Collection::orderBy('id', 'desc')->get();
        $users = User::all();
        $books = Book::where('quantity', '>', 0)->get();

        return view('admin.peminjaman.index', compact('peminjaman', 'users', 'books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
            'returned_at' => 'required|date',
            'borrowed_at' => 'required|date',
        ]);

        $book = Book::find($request->book_id);
        $book->quantity = $book->quantity - 1;
        $book->save();

        $collection = new Collection();
        $collection->user_id = $request->user_id;
        $collection->book_id = $request->book_id;
        $collection->returned_at = $request->returned_at;
        $collection->borrowed_at = $request->borrowed_at;
        $collection->is_returned = false;
        $collection->save();

        notify()->success('Berhasil menambahkan data peminjaman');
        return redirect()->route('peminjaman.index');
    }

    public function return(Collection $peminjaman)
    {
        $peminjaman->is_returned = true;
        $peminjaman->save();

        $book = Book::find($peminjaman->book_id);
        $book->quantity = $book->quantity + 1;
        $book->save();

        notify()->success('Berhasil mengembalikan buku');
        return redirect()->route('peminjaman.index');
    }

    public function destroy($id)
    {
        $peminjaman = Collection::find($id);
        $peminjaman->delete();

        notify()->success('Berhasil menghapus data peminjaman');
        return redirect()->route('peminjaman.index');
    }
}
