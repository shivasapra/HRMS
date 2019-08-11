<?php include('includes/header.php');?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-default mb-4 h3">Leave Applications</h2>
                        <ul class="nav nav-tabs tabs-design">
                            <li class="nav-item">
                                <a class="nav-link" href="leave-applications.php">Leave List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="assign-leave.php">Assign Leave</a>
                            </li>
                        </ul>
                        <form method="POST" class="mt-4 col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Employee Name*</label>
                                        <input type="text" placeholder="Enter Employee Name" class="form-control" name="employee_name" required/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Leave Type</label>
                                        <select class="form-control" name="month">
                                            <option>---Select Leave Type----</option>
                                            <option value="2">FMLA US</option>
                                            <option value="3">Maternity US</option>
                                            <option value="4">Paternity US</option>
                                            <option value="1">Vacation US</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>From Date</label>
                                            <input type="date" placeholder="" class="form-control" name="start_date" required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <input type="date" placeholder="" class="form-control" name="start_date" required/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Comment</label>
                                        <textarea placeholder="Enter Message" class="form-control" name="comment" style="height:100px;">
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" id="" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php');?>
