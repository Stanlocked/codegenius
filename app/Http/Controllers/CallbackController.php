<?php

namespace App\Http\Controllers;

use App\Models\Callback;
use App\Models\departments;
use Illuminate\Http\Request;

class CallbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_callback = new Callback();
        $new_callback->message = $request->message;
        $new_callback->email = $request->email;
        $new_callback->save();
        return redirect()->back()->withSuccess('Завка подана');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
