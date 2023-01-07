<?php

namespace App\Controllers;

use App\Models\Ajaxstudent;

use App\Models\StudentModel;

class AjaxStudentController extends BaseController
{
    public function index()
    {
        return view('ajaxStudent/index');
    }
    
    public function store()
    {
        $students = new Ajaxstudent();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'course' => $this->request->getPost('course')

        ];

        $students->save($data);
        $data = ['status' => 'Student Inserted Successfully'];
        return $this->response->setJSON($data);

    }

    public function fetch ()
    {
        $students = new Ajaxstudent();
        $data['students'] = $students->findAll();
        return $this->response->setJSON($data);
        
    }

    public function view ()
    {
        $students = new Ajaxstudent();
        $student_id = $this->request->getPost('stud_id');
        $data['students'] = $students->find($student_id);
        return $this->response->setJSON($data);
        
    }

    public function edit()
    {
        $students = new Ajaxstudent();
        $student_id = $this->request->getPost('stud_id');
        $data['students'] = $students->find($student_id);
        return $this->response->setJSON($data);
        
    }

    public function update()
    {
        $student = new Ajaxstudent();
        $student_id = $this->request->getPost('stud_id');
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'course' => $this->request->getPost('course')

        ];
        $student->update($student_id,$data );
        $message = ['status'=>'Updated Successfully'];

        return $this->response->setJSON($message);

    }

    public function delete ()
    {
        $student = new Ajaxstudent();
        $student->delete($this->request->getPost('stud_id'));
        $message = ['status'=>'Deleted Successfully'];

        return $this->response->setJSON($message);

    }
   

    
}
