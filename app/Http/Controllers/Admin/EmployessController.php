<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\EmployeesRequest;
use App\Models\Contact;
use App\Models\Employees;
use App\Traits\FileUpload;
use Illuminate\Http\Request;

class EmployessController extends Controller
{
    use  FileUpload;

    public function index()
    {
        $employeess = Employees::all();
        return view('backend.employ.employees', compact('employeess'));
    }


    public function create()
    {
        return view('backend.employ.employees_create');
    }


    public function store(EmployeesRequest $employeesRequest)
    {

        $data = $employeesRequest->validated();
        $data = $this->fileUpload($data);
        Employees::create($data);
        return redirect()->route('backend.employ.index')->with('message', 'Post successfully create.');
    }


    public function edit($id)
    {
        $employees_edit = Employees::find($id);
        return view('backend.employ.employees_edit', compact('employees_edit'));
    }


    public function update(EmployeesRequest $employeesRequest, $id)
    {
        $data = $employeesRequest->validated();
        $post = Employees::find($id);
        if (isset($data['image'])) {
            $data = $this->fileUpload($data);

        }
        $post->update($data);

        return redirect()->route('backendemploy.index')->with('message', 'Post successfully update.');
    }


    public function destroy($id)
    {
        $request = request()->merge(['id' => $id]);
        $request->validate(['id' => 'required|exists:employ,id']);
        $post = Employees::find($id);
        unlink('storage/images/' . $post->image);
        $post->delete();
        return redirect()->route('backend.employ.index')->with('message', 'Post successfully delete.');
    }
}
