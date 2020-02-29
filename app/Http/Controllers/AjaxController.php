<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class AjaxController extends Controller
{
    function index()
    {
     return view('student.ajaxdata');
     //http://127.0.0:8000/ajaxdata
    }

    function getdata()
    {
     $students = user::select('id', 'first_name', 'last_name');
     return $students;
     return Datatables::of($students)
            ->addColumn('action', function($student){
                return '<a href="#" class="btn btn-xs btn-primary edit" id="'.$student->id.'"><i class="glyphicon glyphicon-edit"></i> Edit</a><a href="#" class="btn btn-xs btn-danger delete" id="'.$student->id.'"><i class="glyphicon glyphicon-remove"></i> Delete</a>';
            })
            ->addColumn('checkbox', '<input type="checkbox" name="student_checkbox[]" class="student_checkbox" value="{{$id}}" />')
            ->rawColumns(['checkbox','action'])
            ->make(true);
    }

    function postdata(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name'  => 'required',
        ]);

        $error_array = array();
        $success_output = '';
        if ($validation->fails())
        {
            foreach($validation->messages()->getMessages() as $field_name => $messages)
            {
                $error_array[] = $messages;
            }
        }
        else
        {
            if($request->get('button_action') == "insert")
            {
                $student = new Student([
                    'first_name'    =>  $request->get('first_name'),
                    'last_name'     =>  $request->get('last_name')
                ]);
                $student->save();
                $success_output = '<div class="alert alert-success">Data Inserted</div>';
            }

            if($request->get('button_action') == 'update')
            {
                $student = Student::find($request->get('student_id'));
                $student->first_name = $request->get('first_name');
                $student->last_name = $request->get('last_name');
                $student->save();
                $success_output = '<div class="alert alert-success">Data Updated</div>';
            }

        }
        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);
    }

    function fetchdata(Request $request)
    {
        $id = $request->input('id');
        $student = Student::find($id);
        $output = array(
            'first_name'    =>  $student->first_name,
            'last_name'     =>  $student->last_name
        );
        echo json_encode($output);
    }

    function removedata(Request $request)
    {
        $student = Student::find($request->input('id'));
        if($student->delete())
        {
            echo 'Data Deleted';
        }
    }

    function massremove(Request $request)
    {
        $student_id_array = $request->input('id');
        $student = Student::whereIn('id', $student_id_array);
        if($student->delete())
        {
            echo 'Data Deleted';
        }
    }
}
