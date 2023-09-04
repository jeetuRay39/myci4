<?php
namespace App\Controllers;
use App\Models\Studentmodel;
class Studentscontroller extends BaseController
{
    public function index()
    {
        $student = new Studentmodel();
        $data['students']=$student->findAll();
        return view('students/index.php',$data);
    }
    public function create(){
        return view('students/create.php');
    }
    public function store(){
        $students = new Studentmodel();
        $file=$this->request->getFile('image');
        if($file->isValid()&& !$file->hasMoved()){
            $imageName=$file->getRandomName();
            $file->move('uploads/',$imageName);
        }
        $data = [
            'name'=>$this->request->getPost('name'),
            'email'=>$this->request->getPost('email'),
            'phone'=>$this->request->getPost('phone'),
            'course'=>$this->request->getPost('course'),
            'image'=>$imageName,
        ];
        $students->save($data);
        return redirect('students')->with('status','inserted successfully');
    }
    public function edit($id=null){
        $student = new Studentmodel();
        $data['student']=$student->find($id);
        return view('students/edit.php',$data);

    }
    public function update($id=null){
        $students = new Studentmodel();
        

        $data = [
            'name'=>$this->request->getPost('name'),
            'email'=>$this->request->getPost('email'),
            'phone'=>$this->request->getPost('phone'),
            'course'=>$this->request->getPost('course'),
            
        ];
        $students->update($id,$data);
        return redirect('students')->with('status','inserted successfully');

    }
    public function delete($id=null){
        $student=new Studentmodel();
        $student->delete($id);
        return redirect()->back()->with('status','inserted successfully');

    }
}
