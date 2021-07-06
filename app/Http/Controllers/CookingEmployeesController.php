<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\CookingEmployee;
use Illuminate\Http\Request;

class CookingEmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cookingEmployee = CookingEmployee::all();
        return view('cooking_employee.index',compact('cookingEmployee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cooking_employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        cookingEmployee::create(request()->all());
        // dd(request()->all());
        return redirect('cooking_employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CookingEmployee  $cookingEmployee
     * @return \Illuminate\Http\Response
     */
    public function show(CookingEmployee $cookingEmployee)
    {
        return view('cooking_employee.show',compact('cookingEmployee'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CookingEmployee  $cookingEmployee
     * @return \Illuminate\Http\Response
     */
    public function edit(CookingEmployee $cookingEmployee)
    {
        return view('cooking_employee.edit',compact('cookingEmployee'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CookingEmployee  $cookingEmployee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CookingEmployee $cookingEmployee)
    {
        $cookingEmployee->update(request()->all());
        return redirect('cooking_employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CookingEmployee  $cookingEmployee
     * @return \Illuminate\Http\Response
     */
    public function destroy(CookingEmployee $cookingEmployee)
    {
        $cookingEmployee->delete();
        return redirect('cooking_employee');
    }
}
