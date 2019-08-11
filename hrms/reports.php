<?php include('includes/header.php');?>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                            <h2 class="text-default d-inline h3">Reports</h2>
                            <h5 class="float-right text-primary">Today: 05 May, 2019</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="mb-3">Employees Daily Report</h4>
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
                                                <th>Time</th>
                                                <th>Employee Name</th>
                                                <th>Job Title</th>
                                                <th>Reporting To</th>
                                                <th class="w-350">Description</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>01/05/2019</td>
                                                <td>06:32 PM</td>
                                                <td>Trishnik Arora</td>
                                                <td>Tele Marketing Executive</td>
                                                <td>Zuber</td>
                                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</td>
                                                <td><a href="#" class="custom-circle-btn"><i class="mdi mdi-delete"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>01/05/2019</td>
                                                <td>06:32 PM</td>
                                                <td>Trishnik Arora</td>
                                                <td>Tele Marketing Executive</td>
                                                <td>Zuber</td>
                                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</td>
                                                <td><a href="#" class="custom-circle-btn"><i class="mdi mdi-delete"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>01/05/2019</td>
                                                <td>06:32 PM</td>
                                                <td>Trishnik Arora</td>
                                                <td>Tele Marketing Executive</td>
                                                <td>Zuber</td>
                                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</td>
                                                <td><a href="#" class="custom-circle-btn"><i class="mdi mdi-delete"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>01/05/2019</td>
                                                <td>06:32 PM</td>
                                                <td>Trishnik Arora</td>
                                                <td>Tele Marketing Executive</td>
                                                <td>Zuber</td>
                                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</td>
                                                <td><a href="#" class="custom-circle-btn"><i class="mdi mdi-delete"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>01/05/2019</td>
                                                <td>06:32 PM</td>
                                                <td>Trishnik Arora</td>
                                                <td>Tele Marketing Executive</td>
                                                <td>Zuber</td>
                                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</td>
                                                <td><a href="#" class="custom-circle-btn"><i class="mdi mdi-delete"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>01/05/2019</td>
                                                <td>06:32 PM</td>
                                                <td>Trishnik Arora</td>
                                                <td>Tele Marketing Executive</td>
                                                <td>Zuber</td>
                                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</td>
                                                <td><a href="#" class="custom-circle-btn"><i class="mdi mdi-delete"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>01/05/2019</td>
                                                <td>06:32 PM</td>
                                                <td>Trishnik Arora</td>
                                                <td>Tele Marketing Executive</td>
                                                <td>Zuber</td>
                                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</td>
                                                <td><a href="#" class="custom-circle-btn"><i class="mdi mdi-delete"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>01/05/2019</td>
                                                <td>06:32 PM</td>
                                                <td>Trishnik Arora</td>
                                                <td>Tele Marketing Executive</td>
                                                <td>Zuber</td>
                                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</td>
                                                <td><a href="#" class="custom-circle-btn"><i class="mdi mdi-delete"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>01/05/2019</td>
                                                <td>06:32 PM</td>
                                                <td>Trishnik Arora</td>
                                                <td>Tele Marketing Executive</td>
                                                <td>Zuber</td>
                                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</td>
                                                <td><a href="#" class="custom-circle-btn"><i class="mdi mdi-delete"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>01/05/2019</td>
                                                <td>06:32 PM</td>
                                                <td>Trishnik Arora</td>
                                                <td>Tele Marketing Executive</td>
                                                <td>Zuber</td>
                                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</td>
                                                <td><a href="#" class="custom-circle-btn"><i class="mdi mdi-delete"></i></a></td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



<?php include('includes/footer.php');?>