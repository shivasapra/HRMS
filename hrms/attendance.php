<?php include('includes/header.php');?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                        <h2 class="text-default h3 d-inline">Employee Attendance</h2>
                        <h5 class="float-right text-primary">Today: 05 May, 2019</h5>
                        </div>
                        <div class="table-responsive">
                            <form method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Filter By</h4>
                                </div>
                                <div class="col-md-3 col-6">
                                    <input type="date" class="form-control" name="date"  required/>
                                </div>
                                <div class="col-md-3 col-6">
                                    <input type="text" placeholder="Employee Name" class="form-control" name="employee_name" required/>
                                </div>
                                <div class="col-md-3 col-6">
                                    <select class="form-control" name="month">
                                        <option>---Select Month----</option>
                                        <option>Jan</option>
                                        <option>Feb</option>
                                        <option>Mar</option>
                                        <option>Apr</option>
                                        <option>May</option>
                                        <option>Jun</option>
                                        <option>Jul</option>
                                        <option>Aug</option>
                                        <option>Sep</option>
                                        <option>Oct</option>
                                        <option>Nov</option>
                                        <option>Dec</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-6">
                                    <a href="#" class="btn btn-primary">SEARCH</a>
                                </div>
                            </div>
                            </form><hr class="mt-4 mb-4">
                            <table id="my_table" class="table table-bordered">
                                <thead class="bg-light-gray">
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Date</th>
                                    <th>Day</th>
                                    <th>Employee Name</th>
                                    <th>Designation</th>
                                    <th>Punch In</th>
                                    <th>Punch Out</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>04/05/2019</td>
                                    <td>Saturday</td>
                                    <td>Ankita Mahajan</td>
                                    <td>TME</td>
                                    <td>09:36 AM</td>
                                    <td>07:06 PM</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>05/05/2019</td>
                                    <td>Sunday</td>
                                    <td>Mohd Zuber</td>
                                    <td>TMS</td>
                                    <td>09:36 AM</td>
                                    <td>07:06 PM</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>06/05/2019</td>
                                    <td>Monday</td>
                                    <td>Ruby Devi</td>
                                    <td>TME</td>
                                    <td>09:36 AM</td>
                                    <td>07:06 PM</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>07/05/2019</td>
                                    <td>Tuesday</td>
                                    <td>Sangeeta Sharma</td>
                                    <td>TMS</td>
                                    <td>09:36 AM</td>
                                    <td>07:06 PM</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>08/05/2019</td>
                                    <td>Wednesday</td>
                                    <td>Vineet Chauhan</td>
                                    <td>Web Developer</td>
                                    <td>09:36 AM</td>
                                    <td>07:06 PM</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php');?>
