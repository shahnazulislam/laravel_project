<?php

namespace App\Http\Controllers;
use App\Models\Crud;
use Illuminate\Http\Request;
use Session;

class crudController extends Controller
{
    public function showData(){
        $showData = Crud::simplePaginate(5);
        return view('show_data', compact('showData'));
    }

    public function addData(){
        return view('add_data');
    }

    public function storeData(request $request)
    {
        $roles =[
            'name'=> 'required|max:15',
            'email'=> 'required|email',
        ];
        $rm = [
            'name.required'=> 'Please inter your name',
            'name.max'=> 'Name must be 15 carector',
            'email.required'=> 'Please inter your email',
            'email.email'=> 'Name must be valided',
        ];
        $this->validate($request, $roles, $rm);

        $crud = new crud();
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->save();
        Session::flash('msg', 'Data inserted successfuly');
        return redirect('/');
    }

    public function editData($id=null)
    {
        $editData = crud::find($id);
        return view('edit_data', compact('editData'));
    }
}
