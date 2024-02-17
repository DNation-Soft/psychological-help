<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Applicant</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/applicant')?>">Home</a></li>
                        <li class="breadcrumb-item active">Applicant</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
<!--                            <a href="--><?php //echo base_url('super_admin/customer_type_create');?><!--" class="btn btn-xs btn-primary w-25 float-right">Create</a>-->
                            <h3 class="card-title">Applicant list</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <span id="message"></span>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Status</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>NID</th>
                                    <th>Barth</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Number</th>
                                    <th>Transition Id</th>
                                    <th>Problem</th>
<!--                                    <th>Action</th>-->
                                </tr>
                                </thead>
                                <tbody>
                                <?php  foreach ($applicant as $val){ ?>
                                    <tr>
                                        <td width="8"><?php echo $val->applicant_id;?></td>
                                        <td width="100">
                                            <select name="status" class="form-control" onchange="update_status(this.value,'<?php echo $val->applicant_id;?>')" >
                                                <?php echo globalStatus($val->status);?>
                                            </select>
                                        </td>
                                        <td><?php echo $val->name;?></td>
                                        <td><?php echo $val->gender;?></td>
                                        <td><?php echo $val->nid;?></td>
                                        <td><?php echo $val->date_of_barth;?></td>
                                        <td><?php echo $val->mobile;?></td>
                                        <td><?php echo $val->present_address;?></td>
                                        <td><?php echo $val->transition_id;?></td>
                                        <td><?php echo $val->number;?></td>
                                        <td><?php echo $val->problem;?></td>


                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Status</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>NID</th>
                                    <th>Date Of Barth</th>
                                    <th>Mobile</th>
                                    <th>Present Address</th>
                                    <th>Number</th>
                                    <th>Transition Id</th>
                                    <th>Problem</th>

                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->