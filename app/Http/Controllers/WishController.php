<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWishRequest;
use App\Http\Requests\UpdateWishRequest;
use Illuminate\Http\Request;
use App\Models\Wish;

class WishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wishes = Wish::all();
        return view('wishes.index', compact('wishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wishes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Wish::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return to_route('wish.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wish $wish)
    {
        return view('wishes.show')->with('wish', $wish);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wish $wish)
    {
        return view('wishes.edit')->with('wish', $wish);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wish $wish)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $wish->update([
            'name' => $request->name,
            'price' => $request->price,
        ]);
        return to_route('wishes.show', $wish)->with('success', 'Wish updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wish $wish)
    {
        $wish->delete();
        return to_route('wishes.index')->with('success', 'Wish deleted successfully');
    }
}
