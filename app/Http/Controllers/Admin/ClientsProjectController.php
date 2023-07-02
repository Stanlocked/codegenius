<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientsProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = DB::select('SELECT * FROM projects');
        $pCount = DB::select('SELECT clients, COUNT(id) AS total_projects FROM projects GROUP BY clients;');
        return view('admin.clients.index', ['clients' => $clients, 'pCount' => $pCount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(clients $clients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(clients $clients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, clients $clients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(clients $clients)
    {
        //
    }
}
