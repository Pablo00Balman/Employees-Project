<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function list(){

        $employees = DB::select(
        "SELECT e.first_name, e.last_name, e.birth_date, e.gender, s.salary, d.dept_name From employees e 
        INNER JOIN (
                Select emp_no, MAX(salary) AS salary
                From salaries 
                GROUP BY emp_no
            ) s 
            ON e.emp_no = s.emp_no
        INNER JOIN current_dept_emp cd ON e.emp_no = cd.emp_no 
        Inner JOIN departments d ON cd.dept_no = d.dept_no 
        LIMIT 20;"
        );
        //dd($employees);
        foreach($employees as $e)
        {
            $time = strtotime($e->birth_date);
            $newformat = date('d/m/Y',$time);
            $e->birth_date = $newformat; 

            if ($e->gender == 'M') 
                $e->gender = "Male";
            else
                $e->gender = "Female";
        }
        return view("employees", ['employees'=>$employees]);
    }
}
