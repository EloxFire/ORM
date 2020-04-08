<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Title;
use App\Employee;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *  @param Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function index(Employee $employee)
    {
      retun $employee->titles;
    }

    /**
     * Store a newly created resource in storage.
     * @param \APp\Employee $employee
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Employee $employee)
    {
      $title = $employee->titles->where('to_date', '>', now());
      $title->update(['to-date' => date_format(now(), 'Y-m-d')]);

      $new_title = new Title();
      $new_title->emp_no = employee->emp_no;
      $new_title->title = $request->title;
      $new_title->from_date = date_format(now(), 'Y-m-d');
      $new_title->to_date = date_format('9999-01-01', 'Y-m-d');
      $new_title->save()
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function show(Title $title)
    {
        return $title;
    }

    /**
     * Return the curent title for a given enployee
     *
     * @param  Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function current(Employee $employee)
    {
        return $employee->titles()->orderBy('to_date', 'desc')->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Title $title)
    {
        //
    }
}
