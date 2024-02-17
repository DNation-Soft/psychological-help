<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Application</title>
        <link href="<?php echo base_url()?>web_assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center mt-5">
                    <h4>Application form</h4>
                </div>
                <div class="col"></div>
                <div class="col mt-5">
                    <?php echo  isset(newSession()->message) ? newSession()->message :''; ?>

                    <form action="<?php echo base_url('applicant_action');?>" method="post" >
                        <div class="mb-3">
                            <label for="input1" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" id="input1" placeholder="Full Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="input2" class="form-label">Gender</label>
                            <select name="gender"  class="form-control" id="input2">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="input3" class="form-label">NID</label>
                            <input type="number" name="nid" class="form-control" id="input3" placeholder="NID" required>
                        </div>
                        <div class="mb-3">
                            <label for="input4" class="form-label">Date Of Barth</label>
                            <input type="date" name="date_of_barth" class="form-control" id="input4" placeholder="Date Of Barth" required>
                        </div>
                        <div class="mb-3">
                            <label for="input5" class="form-label">Mobile</label>
                            <input type="number" name="mobile" class="form-control" id="input5" placeholder="Mobile" required>
                        </div>
                        <div class="mb-3">
                            <label for="input6" class="form-label">Present Address</label>
                            <input type="text" name="present_address" class="form-control" id="input6" placeholder="Present Address" required>
                        </div>
                        <div class="mb-3">
                            <label for="textarea1" class="form-label">Problem</label>
                            <textarea class="form-control" name="problem" id="textarea1" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="input7" class="form-label">Payment Option</label>
                            <input type="text" name="payment_option" class="form-control" id="input7" placeholder="Payment Option" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>


        <script src="<?php echo base_url()?>web_assets/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    </body>
</html>