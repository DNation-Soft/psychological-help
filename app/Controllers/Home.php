<?php

namespace App\Controllers;

use App\Models\ApplicantModel;

class Home extends BaseController
{
    protected $validation;
    protected $session;
    protected $applicantModel;


    protected $crop;
    protected $permission;

    public function __construct()
    {
        $this->applicantModel = new ApplicantModel();
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
        $this->crop = \Config\Services::image();
    }

    public function index(){
        $data['result'] = $this->applicantModel->where('status','1')->findAll();
        echo view('Frontend/index',$data);
    }

    public function applicant_action(){

        $data['name'] = $this->request->getPost('name');
        $data['gender'] = $this->request->getPost('gender');
        $data['nid'] = $this->request->getPost('nid');
        $data['date_of_barth'] = $this->request->getPost('date_of_barth');
        $data['mobile'] = $this->request->getPost('mobile');
        $data['present_address'] = $this->request->getPost('present_address');
        $data['problem'] = $this->request->getPost('problem');
        $data['transition_id'] = $this->request->getPost('transition_id');
        $data['number'] = $this->request->getPost('number');

        $this->validation->setRules([
            'name' => ['label' => 'Full Name', 'rules' => 'required'],
            'gender' => ['label' => 'Gender', 'rules' => 'required'],
            'nid' => ['label' => 'NID', 'rules' => 'required'],
            'date_of_barth' => ['label' => 'Date Of Barth', 'rules' => 'required'],
            'mobile' => ['label' => 'Mobile', 'rules' => 'required'],
            'present_address' => ['label' => 'Present Address', 'rules' => 'required'],
            'problem' => ['label' => 'Problem', 'rules' => 'required'],
            'transition_id' => ['label' => 'transition_id', 'rules' => 'required'],
            'number' => ['label' => 'number', 'rules' => 'required'],

        ]);

        if ($this->validation->run($data) == FALSE) {
            $this->session->setFlashdata('message', '<div class="alert alert-danger" role="alert">'.$this->validation->listErrors().'</div>');
            return redirect()->to('/');
        } else {
            $this->applicantModel->insert($data);

            $this->session->setFlashdata('message', '<div class="alert alert-success" role="alert"> Form submitted successfully! </div>');
            return redirect()->to('/');

        }
    }




}
