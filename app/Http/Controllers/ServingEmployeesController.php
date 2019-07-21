<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\ServingEmployee;
use Illuminate\Http\Request;

class ServingEmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servingEmployee = ServingEmployee::all();
        return view('serving_employee.index',compact('servingEmployee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('serving_employee.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ServingEmployee::create(request()->all());
        return redirect('serving_employee/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServingEmployee  $servingEmployee
     * @return \Illuminate\Http\Response
     */
    public function show(ServingEmployee $servingEmployee)
    {
        return view('serving_employee.show',compact('servingEmployee'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServingEmployee  $servingEmployee
     * @return \Illuminate\Http\Response
     */
    public function edit(ServingEmployee $servingEmployee)
    {
        return view('serving_employee.edit',compact('servingEmployee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServingEmployee  $servingEmployee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServingEmployee $servingEmployee)
    {
        $servingEmployee->update(request()->all());
        return redirect('serving_employee/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServingEmployee  $servingEmployee
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServingEmployee $servingEmployee)
    {
        $servingEmployee->delete();
        return redirect('serving_employee/create');
    }
}
