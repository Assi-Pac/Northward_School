<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index(Student $student){
        return view('students.index', compact('student'));
    }

    public function show()
    {
        return view('auth.students.login');
    }

    public function login(Request $request){
        // dd('hello world');
        $formFields = $request->validate([
            'matric_number' => 'required',
            'password' => 'required'
        ]);
        
        if(Auth::guard('student')->attempt($formFields)){
            $request->session()->regenerate();

            $id = Auth::guard('student')->id();
            // dd($id);
            return redirect('/students/' . $id);
        }else{
            return back()->with('mssg', 'Invalid credentials');
        }
    }

     public function create(){
        return view('students.register');
    }

    public function store(Request $request){
        // dd($request);
        $formFields = $request->validate([
            'last_name' => 'required',
            'other_names' => 'required',
            'matric_number' => 'required | unique:students',
            // 'matric_number' => ['required', Rule::unique('students', 'matric_number')],
            'faculty' => 'required',
            'department' => 'required',
            'gender' => 'required',
            'email' => 'required | unique:students',
            'phone' => 'required',
            'state_of_origin' => 'required',
            'level' => 'required',
            'year_of_admission' => 'required',
            'school_fess_status' => 'required',
            'password' => 'confirmed | required | min:6',
            // 'passport' => 'required',
            'age' => 'required',
        ]);
        if ($request->hasFile('passport')) {
            $formFields['passport'] = $request->file('passport')->store('profile', 'public');
        };
        $formFields['password'] = bcrypt($formFields['password']);
        
        $student = Student::create($formFields);

        Auth::guard('student')->login($student);
        // dd($formFields);

        if($student){
            return redirect('/login')->with('mssg', "sucess on registration");
        }else{
            return back()->with('mssg', 'Invalid registration credentials');
        }
    }
    public function updateEmail(Student $student){
        // dd('hey');
        $email = request()->validate([
            'email' => 'required'
        ]);

        $student->update($email);
        // $student->update()
        if($student->update($email)){
            return back()->with('mssg', 'Successfuly updated email');
        }else{
            return back()->with('mssg', 'Failed to update');
        }
    }
    public function updatePhone(Student $student)
    {
        $phone = request()->validate([
            'phone' => 'required'
        ]);

        $student->update($phone);
        // $student->update()
        if ($student->update($phone)) {
            return back()->with('mssg', 'Successfuly updated phone');
        } else {
            return back()->with('mssg', 'Failed to update');
        }

    }
    public function showPassport(Student $student){
        return view('students\passport', compact('student'));
    }
    public function updatePassport(Student $student){
        $formFields = request()->validate([
            'passport' => 'required'
        ]);
        if (request()->hasFile('passport')) {
            $formFields['passport'] = request()->file('passport')->store('profile', 'public');

        };
        // $student->update()
            $student->update($formFields);

        if ($student->update($formFields)) {
            return back()->with('mssg', 'Successfuly updated Image');
        } else {
            return back()->with('mssg', 'Img Upload Failed');
        }
    }
    public function destroy(Request $request){
        auth()->logout($request->user());

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('mssg', 'User Logged Out');
    }
}

