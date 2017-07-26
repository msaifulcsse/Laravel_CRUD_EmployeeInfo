<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use paginate;
use DB;


class EmployeesController extends Controller
{
    public function showEmployeeInfo(){
    	$employees = Employee::paginate();
        $dt=[];

        foreach ($employees as $key => $employee){
         $dt[]= $employee->created_at->diffForHumans();
        }
       return view('show',compact('employees','dt'));
       // $employees = DB::table('employee')->paginate();
    	//$employee = DB::table('employee')->get();
        // return view('show',compact('employees'));
    }

    public function createEmployeeInfo(){
    	return view('create');
    }

    public function storeEmployeeInfo(Request $request){

     $this->validate($request,[
        'name'=>'required',
        'address'=>'required',
        'salary'=>'required',
        'email'=>'required',
        'password'=>'required',
        ]);
    	$employee = new Employee();

        $employee->name= $request->name;
    	$employee->address=$request->address;
    	$employee->salary=$request->salary;
    	$employee->email=$request->email;
    	$employee->password=$request->password;

    	$employee->save();
        return view('store');

    }

    public function editEmployeeInfo($id){
        $employee = Employee::find($id);
        return view('edit',compact('employee'));
    }

     public function updateEmployeeInfo(Request $request, $id){
         $employee = Employee::find($id);

         $employee->name= $request->name;
         $employee->address=$request->address;
         $employee->salary=$request->salary;
         $employee->email=$request->email;
         $employee->password=$request->password;

         $employee->save();
         return redirect('/show');
    }
    //delete or destroy
    public function deleteEmployeeInfo($id){
    	 $employee = Employee::find($id);
         $employee->delete();
         return redirect('/show');
    }
}
