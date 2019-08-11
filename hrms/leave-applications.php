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
                                <a class="nav-link active" href="leave-applications.php">Leave List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="assign-leave.php">Assign Leave</a>
                            </li>
                        </ul>

                        <div class="table-responsive">
                            <form>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Employee Name" class="form-control" name="employee_name" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select class="form-control" name="month">
                                            <option>---Select Leave Type----</option>
                                            <option value="2">FMLA US</option>
                                            <option value="3">Maternity US</option>
                                            <option value="4">Paternity US</option>
                                            <option value="1">Vacation US</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <a href="#" class="btn btn-success">SEARCH</a>
                                </div>
                            </div>
                            </form>
                            <table class="table table-bordered">
                                <thead class="bg-light-gray">
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Date</th>
                                    <th>Employee Name</th>
                                    <th>Leave Type</th>
                                    <th>No of Days</th>
                                    <th>View</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>07/01/2019</td>
                                    <td>Ankit Mahagan</td>
                                    <td>Sick Leave</td>
                                    <td>03</td>
                                    <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#leave_view">View</a></td>
                                    <td><label class="badge badge-warning">In progress</label></td>
                                    <td><a href="#" class="btn btn-icons btn-rounded btn-danger"><i class="mdi mdi-delete"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#leave_status" class="btn btn-icons btn-rounded btn-success"><i class="mdi mdi-send"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>07/01/2019</td>
                                    <td>Mohd Aslam</td>
                                    <td>Sick Leave</td>
                                    <td>03</td>
                                    <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#leave_view">View</a></td>
                                    <td><label class="badge badge-success">Approved</label></td>
                                    <td><a href="#" class="btn btn-icons btn-rounded btn-danger"><i class="mdi mdi-delete"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#leave_status" class="btn btn-icons btn-rounded btn-success"><i class="mdi mdi-send"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>07/01/2019</td>
                                    <td>Ruby Devi</td>
                                    <td>Sick Leave</td>
                                    <td>03</td>
                                    <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#leave_view">View</a></td>
                                    <td><label class="badge badge-danger">Rejected</label></td>
                                    <td><a href="#" class="btn btn-icons btn-rounded btn-danger"><i class="mdi mdi-delete"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#leave_status" class="btn btn-icons btn-rounded btn-success"><i class="mdi mdi-send"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>07/01/2019</td>
                                    <td>Vivek Sharma</td>
                                    <td>Sick Leave</td>
                                    <td>03</td>
                                    <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#leave_view">View</a></td>
                                    <td><label class="badge badge-warning">In progress</label></td>
                                    <td><a href="#" class="btn btn-icons btn-rounded btn-danger"><i class="mdi mdi-delete"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#leave_status" class="btn btn-icons btn-rounded btn-success"><i class="mdi mdi-send"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>07/01/2019</td>
                                    <td>Deepika Kakkar</td>
                                    <td>Sick Leave</td>
                                    <td>03</td>
                                    <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#leave_view">View</a></td>
                                    <td><label class="badge badge-success">Approved</label></td>
                                    <td><a href="#" class="btn btn-icons btn-rounded btn-danger"><i class="mdi mdi-delete"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#leave_status" class="btn btn-icons btn-rounded btn-success"><i class="mdi mdi-send"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>07/01/2019</td>
                                    <td>Mohd Aslam</td>
                                    <td>Sick Leave</td>
                                    <td>03</td>
                                    <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#leave_view">View</a></td>
                                    <td><label class="badge badge-warning">In progress</label></td>
                                    <td><a href="#" class="btn btn-icons btn-rounded btn-danger"><i class="mdi mdi-delete"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#leave_status" class="btn btn-icons btn-rounded btn-success"><i class="mdi mdi-send"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>07/01/2019</td>
                                    <td>Vineet Chauhan</td>
                                    <td>Sick Leave</td>
                                    <td>03</td>
                                    <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#leave_view">View</a></td>
                                    <td><label class="badge badge-success">Approved</label></td>
                                    <td><a href="#" class="btn btn-icons btn-rounded btn-danger"><i class="mdi mdi-delete"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#leave_status" class="btn btn-icons btn-rounded btn-success"><i class="mdi mdi-send"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>07/01/2019</td>
                                    <td>Ankit Mahagan</td>
                                    <td>Sick Leave</td>
                                    <td>03</td>
                                    <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#leave_view">View</a></td>
                                    <td><label class="badge badge-warning">In progress</label></td>
                                    <td><a href="#" class="btn btn-icons btn-rounded btn-danger"><i class="mdi mdi-delete"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#leave_status" class="btn btn-icons btn-rounded btn-success"><i class="mdi mdi-send"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>07/01/2019</td>
                                    <td>Ankit Mahagan</td>
                                    <td>Sick Leave</td>
                                    <td>03</td>
                                    <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#leave_view">View</a></td>
                                    <td><label class="badge badge-warning">In progress</label></td>
                                    <td><a href="#" class="btn btn-icons btn-rounded btn-danger"><i class="mdi mdi-delete"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#leave_status" class="btn btn-icons btn-rounded btn-success"><i class="mdi mdi-send"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>07/01/2019</td>
                                    <td>Ankit Mahagan</td>
                                    <td>Sick Leave</td>
                                    <td>03</td>
                                    <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#leave_view">View</a></td>
                                    <td><label class="badge badge-danger">Rejected</label></td>
                                    <td><a href="#" class="btn btn-icons btn-rounded btn-danger"><i class="mdi mdi-delete"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#leave_status" class="btn btn-icons btn-rounded btn-success"><i class="mdi mdi-send"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>07/01/2019</td>
                                    <td>Ankit Mahagan</td>
                                    <td>Sick Leave</td>
                                    <td>03</td>
                                    <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#leave_view">View</a></td>
                                    <td><label class="badge badge-warning">In progress</label></td>
                                    <td><a href="#" class="btn btn-icons btn-rounded btn-danger"><i class="mdi mdi-delete"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#leave_status" class="btn btn-icons btn-rounded btn-success"><i class="mdi mdi-send"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="leave_status">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Leave Status</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Add Status</label>
                                    <select class="form-control" name="leave_status">
                                        <option>---Select---</option>
                                        <option>Approved</option>
                                        <option>Rejected</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Comment</label>
                                    <textarea placeholder="Enter Message" class="form-control" name="comment" style="height:70px;">
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

    <!-- The Modal -->
    <div class="modal fade" id="leave_view">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Leave Application</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <embed src="files/sick-leave.pdf" width="100%" height="500px" />
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php');?>
