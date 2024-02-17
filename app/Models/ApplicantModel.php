<?php

namespace App\Models;

use CodeIgniter\Model;

class ApplicantModel extends Model
{
    /**
     * Called during initialization. Appends
     * our custom field to the module's model.
     */
    protected $table = 'applicant';
    protected $primaryKey = 'applicant_id';
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['applicant_id','name', 'gender','nid','date_of_barth','mobile','present_address','problem','number','transition_id','status','createdDtm'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;
}