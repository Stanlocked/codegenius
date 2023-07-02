<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = DB::select('SELECT * FROM employees');
        return view('admin.employees.index', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_employee = new Employees();
        $new_employee->first_name=$request->fname;
        $new_employee->last_name=$request->lname;
        $new_employee->salary=$request->salary;
        $new_employee->hire_date=$request->hdate;
        $new_employee->departments_id=$request->did;
        $new_employee->save();
        return redirect()->back()->withSuccess('Сотрудник добавлен');
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
