<?php

namespace App\Http\Controllers;

use App\Models\GuestBook;
use Illuminate\Http\Request;

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

    public function showKatalog()
    {

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
}
