<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salary = DB::select('SELECT * FROM employees ORDER BY salary DESC');
        return view('admin.salary.index', ['salary' => $salary]);
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
    public function show(Salary $salary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salary $salary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Salary $salary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salary $salary)
    {
        //
    }
}
