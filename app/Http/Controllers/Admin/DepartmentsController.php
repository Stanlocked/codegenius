<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\departments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department = DB::select('SELECT employees.*, departments.name FROM employees 
        JOIN departments ON employees.departments_id = departments.id ORDER BY departments.name');
        $departmentsAll = DB::select('SELECT * FROM departments');
        return view('admin.departments.index', ['departments' => $department, 'departmentsAll' => $departmentsAll]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_department = new departments();
        $new_department->name = $request->name;
        $new_department->save();
        return redirect()->back()->withSuccess('Отдел добавлен');
    }

    /**
     * Display the specified resource.
     */
    public function show(departments $departments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(departments $department)
    {
        return view('admin.departments.edit', [
            'department' => $department
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, departments $department)
    {
        $department->name = $request->name;
        $department->save();
        return redirect()->back()->withSuccess('Отдел обновлён');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(departments $department)
    {
        $department->delete();
        return redirect()->back()->withSuccess('Отдел удалён');
    }
}
