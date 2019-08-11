<?php include('includes/header.php');?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-default mb-4 h3">Add Employee</h2>
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>First Name*</label>
                                        <input type="text" placeholder="Enter First Name" class="form-control" name="first_name" required/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Middle Name</label>
                                        <input type="text" placeholder="Enter Middle Name" class="form-control" name="middle_name"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Last Name*</label>
                                        <input type="text" placeholder="Enter Last Name" class="form-control" name="last_name" required/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Employee ID</label>
                                        <input type="text" placeholder="" class="form-control" name="employee_id" value="1526600" disabled/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Department</label>
                                        <select class="form-control" name="department">
                                            <option value="0">-- Select --</option>
                                            <option value="0">Accountant</option>
                                            <option value="0">Collection Manager</option>
                                            <option value="0">HR Manager</option>
                                            <option value="0">HR Executive</option>
                                            <option value="0">Branch Marketing Manager (BMM)</option>
                                            <option value="0">Tele Marketing Manager (TMM)</option>
                                            <option value="0">Tele Marketing Supervisor (TMS)</option>
                                            <option value="0">Tele Marketing Executive (TME)</option>
                                            <option value="0">Data Operator</option>
                                            <option value="0">OPC Supervisor</option>
                                            <option value="0">OPC Executive</option>
                                            <option value="0">Relationship Manager</option>
                                            <option value="0">MRD Executive</option>
                                            <option value="0">Corporate Operations</option>
                                            <option value="0">Operations Head</option>
                                            <option value="0">Unit Manager</option>
                                            <option value="0">Operation Team Manager</option>
                                            <option value="0">Sr. Travel Consultant</option>
                                            <option value="0">Travel Consultant</option>
                                            <option value="0">Cheif Sale Officer</option>
                                            <option value="0">Relational Manager</option>
                                            <option value="0">Branch Manager</option>
                                            <option value="0">Unit Manager</option>
                                            <option value="0">Sale Team Manager</option>
                                            <option value="0">Take Over Manager</option>
                                            <option value="0">Senior Holiday Consultant</option>
                                            <option value="0">Holiday Consultant</option>
                                            <option value="0">Business Develop Manager</option>
                                            <option value="0">Business Develop Executive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Job Title</label>
                                        <select class="form-control" name="job_title">
                                            <option value="0">-- Select --</option>
                                            <option value="0">Accountant</option>
                                            <option value="0">Collection Manager</option>
                                            <option value="0">HR Manager</option>
                                            <option value="0">HR Executive</option>
                                            <option value="0">Branch Marketing Manager (BMM)</option>
                                            <option value="0">Tele Marketing Manager (TMM)</option>
                                            <option value="0">Tele Marketing Supervisor (TMS)</option>
                                            <option value="0">Tele Marketing Executive (TME)</option>
                                            <option value="0">Data Operator</option>
                                            <option value="0">OPC Supervisor</option>
                                            <option value="0">OPC Executive</option>
                                            <option value="0">Relationship Manager</option>
                                            <option value="0">MRD Executive</option>
                                            <option value="0">Corporate Operations</option>
                                            <option value="0">Operations Head</option>
                                            <option value="0">Unit Manager</option>
                                            <option value="0">Operation Team Manager</option>
                                            <option value="0">Sr. Travel Consultant</option>
                                            <option value="0">Travel Consultant</option>
                                            <option value="0">Cheif Sale Officer</option>
                                            <option value="0">Relational Manager</option>
                                            <option value="0">Branch Manager</option>
                                            <option value="0">Unit Manager</option>
                                            <option value="0">Sale Team Manager</option>
                                            <option value="0">Take Over Manager</option>
                                            <option value="0">Senior Holiday Consultant</option>
                                            <option value="0">Holiday Consultant</option>
                                            <option value="0">Business Develop Manager</option>
                                            <option value="0">Business Develop Executive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Employee Photo</label>
                                        <input type="file" class="form-control" name="employee_id" accept="image/.jpg, .jpeg, .png"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Employment Status</label>
                                        <input type="text" class="form-control" placeholder="Enter Employment Status" name="employment_status"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h2 class="text-default mb-4 h4 mt-4">Create Login Details <i data-toggle="collapse" data-target="#show_login_details" class="menu-icon mdi mdi-plus btn btn-primary pl-2 pr-2"></i></h2>
                                    </div>
                                </div>
                            </div>
                            <div id="show_login_details" class="collapse">
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>User Name*</label>
                                        <input type="text" placeholder="Enter User Name" class="form-control" name="user_name" required/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Password*</label>
                                        <input type="password" placeholder="Enter Password" class="form-control" name="password" required/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Confirm Password*</label>
                                        <input type="text" placeholder="Confirm Password" class="form-control" name="confirm_password" required/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option>---Select---</option>
                                            <option>Enabled</option>
                                            <option>Disabled</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Add Employee</button>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php');?>
