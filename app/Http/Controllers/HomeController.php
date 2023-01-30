<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Collection;
use App\Models\GuestBook;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.index');
    }

    public function showKatalog(Request $request)
    {
        if ($request->has('q') && $request->q != '') {
            $data = [
                'books' => Book::where('title', 'like', '%' . $request->q . '%')->get(),
            ];
        } else {
            $data = [
                'randomBooks' => Book::inRandomOrder()->take(15)->get(),
                'categories' => Book::select('category')->distinct()->get(),
                'books' => Book::all(),
            ];
        }

        return view('katalog_buku', $data);
    }

    public function storeGuestBook(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            'class' => 'required',
        ]);

        $guestBook = new GuestBook();
        $guestBook->name = $request->name;
        $guestBook->date = $request->date;
        $guestBook->class = $request->class;
        $guestBook->save();

        notify()->success('Guest Book Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function storeBook(Request $request)
    {
        $this->validate($request, [
            'title'     => 'required|min:5',
            'author'   => 'required',
            'publisher'   => 'required',
            'year'   => 'required',
            'category'   => 'required',
            'quantity'   => 'required',
            'cover'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //upload image
        $image = $request->file('cover');
        $image->storeAs('public/covers', $image->hashName());

        //create book
        Book::create([
            'title'     => $request->title,
            'publisher'   => $request->publisher,
            'year'   => $request->year,
            'quantity'   => $request->quantity,
            'category'   => $request->category,
            'cover'     => $image->hashName(),
        ]);

        notify()->success('Buku Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function showBukuPinjaman()
    {
        $collections = Collection::where('user_id', auth()->user()->id)->orderBy('borrowed_at', 'desc')->get();

        return view('buku_dipinjam', compact('collections'));
    }

    public function showActivity(Request $request)
    {
        $logs = DB::table('activity_log')
            ->join('users', 'activity_log.causer_id', '=', 'users.id')
            ->select('activity_log.*', 'users.name as causer_name')
            ->get();
        return view('admin_log_aktivitas',compact('logs'));
    }
    public function showGuestBook(Request $request)
    {
        $gb = GuestBook::all();
        return view('admin_buku_tamu',compact('gb'));
    }

    public function showBook()
    {
        $book = Book::all();
        return view('admin_katalog',compact('book'));
    }
}
