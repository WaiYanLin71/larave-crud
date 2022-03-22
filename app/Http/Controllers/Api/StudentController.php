<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\StudentStoreRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students =  Student::all();

        return response()->json(['students' => $students ]);
    }

    public function create(StudentStoreRequest $request)
    {
        $data = ['name' => $request->name,'email'=>$request->email];

        $data = Student::create($data);

        return response()->json($data);
    }

    public function update(StudentUpdateRequest $request,$id)
    {
        Student::where('id',$id)->update(['name'=>$request->edit_name,'email' => $request->edit_email]);

        return response()->json(['message'=>'updated Successfully']);
    }

    public function destroy($id) {

        Student::destroy($id);

        return response()->json(['message' => 'Successfully Deleted','id' =>$id]);
    }

    public function upload(StoreImageRequest $request)
    {
        $fileName =time().'.'.$request->file('file')->extension();

        $upload = $request->file('file')->move(public_path('file'),$fileName);

        return response()->json(['message' => 'Image Uploaded Successfully' ]);
    }
}
