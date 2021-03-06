
<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Employee::paginate(5)->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return $employee;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //$validateData = $request->validate([
	//	'emp_no' => 'integer',
	//	'first_name' => 'string|max:255',
	//	'last_name' => 'string|max:255',
	//	'birth_date' => 'date',
	//	'hire_date' => 'date|after:birth_date',
	//	'gender' => 'string|in:M,F',
	//]);
	//$employee->update($validateData);
	//return $employee;

	$data = $request->validate([
	  'emp_no' => 'integer',
	  'first_name' => 'string|max:255',
	  'last_name' => 'string|max:255',
	  'birth_date' => 'date',
	  'hire_date' => 'date|after;birth_date',
	  'gender' => 'string|in:M,F',
	]);

	$no = $request->emp_no;
//	Employee::where('no', $no)->update([
//	  'emp_no' => $request->emp_no,
//	  'first_name' => $request->last_name,
//	  'last_name' => $request->last_name,
//	  'birth_date' => $request->birth_date,
//	  'hire_date' => $request->hire_date,
//	  'gender' => $request->gender,
//	]);
	$employee->update($data->toArray());
	jfhdgkfehjfezkrze;
	return $employee;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $e = $employee;
	$employee->delete();
	return $e->toJson();
    }
}
