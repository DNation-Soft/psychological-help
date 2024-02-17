<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ApplicantModel;

class Applicant extends BaseController {

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
        $isLoggedInAdmin = $this->session->isLoggedInAdmin;
        if (!isset($isLoggedInAdmin) || $isLoggedInAdmin != TRUE) {
            return redirect()->to(site_url("admin"));
        } else {

            $data['applicant'] =  $this->applicantModel->findAll();

            echo view('Admin/header');
            echo view('Admin/sidebar');
            echo view('Admin/Applicant/index',$data);
            echo view('Admin/footer');
        }
    }

    public function update_status(){
        $data['status'] = $this->request->getPost('status');
        $data['applicant_id'] = $this->request->getPost('applicant_id');
        $this->applicantModel->update($data['applicant_id'],$data);
        print '<div class="alert alert-success alert-dismissible" role="alert">Update Record Success <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }
}
