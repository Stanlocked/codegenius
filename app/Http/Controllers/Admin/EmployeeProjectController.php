<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\employee_project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = DB::select('SELECT p.name, p.clients, p.completed, e.last_name FROM employee_projects pe 
        INNER JOIN projects p ON pe.projects_id = p.id INNER JOIN employees e ON pe.employee_id = e.id;');
        $employeesCount = DB::select('SELECT e.id, e.first_name, e.last_name, COUNT(ep.projects_id) AS project_count
        FROM employees AS e
        JOIN employee_projects AS ep ON e.id = ep.employee_id
        GROUP BY e.id, e.first_name, e.last_name
        ORDER BY project_count DESC;
        ');

        return view('admin.employee_project.index', ['employees' => $employees, 'employeesCount' => $employeesCount]);
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
    public function show(employee_project $employee_project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(employee_project $employee_project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, employee_project $employee_project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employee_project $employee_project)
    {
        //
    }
}
