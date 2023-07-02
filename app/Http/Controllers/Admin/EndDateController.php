<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EndDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EndDateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $endDate = DB::select('SELECT * FROM projects Where projects.completed = 1');
        $endDateNull = DB::select('SELECT * FROM projects Where projects.completed = 0');
        return view('admin.enddate.index', ['endDate' => $endDate, 'endDateNull' => $endDateNull]);
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
    public function show(EndDate $endDate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EndDate $endDate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EndDate $endDate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EndDate $endDate)
    {
        //
    }
}
