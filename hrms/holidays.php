<?php include('includes/header.php');?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="mb-4 h3"><i class="mdi mdi-calendar-remove"></i> &nbsp; Holidays List
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#add_holiday" class="btn btn-primary float-right">Add New</a></h2><hr>
                        <div class="">
                            <h4 class="ml-3">January</h4>
                            <ul class="holidays_list">
                                <li><a href="#" class="btn-primary">01</a>
                                    <h5 class="text-uppercase text-gray mb-1">Wed</h5>
                                    <h4>Holiday</h4>
                                </li>
                                <li><a href="#" class="btn-danger">09</a>
                                    <h5 class="text-uppercase text-gray mb-1">Thr</h5>
                                    <h4>Makar Shakranti</h4>
                                </li>
                                <li><a href="#" class="btn-success">26</a>
                                    <h5 class="text-uppercase text-gray mb-1">Fri</h5>
                                    <h4>Republic Day</h4>
                                </li>
                                <li><a href="#" class="btn-warning">31</a>
                                    <h5 class="text-uppercase text-gray mb-1">Sun</h5>
                                    <h4>Good Friday</h4>
                                </li>
                            </ul><hr>
                            <h4 class="ml-3">February</h4>
                            <ul class="holidays_list">
                                <li><a href="#" class="btn-primary">01</a>
                                    <h5 class="text-uppercase text-gray mb-1">Wed</h5>
                                    <h4>Holiday</h4>
                                </li>
                                <li><a href="#" class="btn-danger">09</a>
                                    <h5 class="text-uppercase text-gray mb-1">Thr</h5>
                                    <h4>Makar Shakranti</h4>
                                </li>
                                <li><a href="#" class="btn-success">14</a>
                                    <h5 class="text-uppercase text-gray mb-1">Fri</h5>
                                    <h4>Republic Day</h4>
                                </li>
                                <li><a href="#" class="btn-warning">21</a>
                                    <h5 class="text-uppercase text-gray mb-1">Sun</h5>
                                    <h4>Good Friday</h4>
                                </li>
                                <li><a href="#" class="btn-primary">25</a>
                                    <h5 class="text-uppercase text-gray mb-1">Wed</h5>
                                    <h4>Holiday</h4>
                                </li>
                                <li><a href="#" class="btn-danger">31</a>
                                    <h5 class="text-uppercase text-gray mb-1">Thr</h5>
                                    <h4>Makar Shakranti</h4>
                                </li>
                            </ul><hr>
                            <h4 class="ml-3">March</h4>
                            <ul class="holidays_list">
                                <li><a href="#" class="btn-primary">01</a>
                                    <h5 class="text-uppercase text-gray mb-1">Wed</h5>
                                    <h4>Holiday</h4>
                                </li>
                                <li><a href="#" class="btn-danger">09</a>
                                    <h5 class="text-uppercase text-gray mb-1">Thr</h5>
                                    <h4>Makar Shakranti</h4>
                                </li>
                                <li><a href="#" class="btn-success">26</a>
                                    <h5 class="text-uppercase text-gray mb-1">Fri</h5>
                                    <h4>Republic Day</h4>
                                </li>
                                <li><a href="#" class="btn-warning">31</a>
                                    <h5 class="text-uppercase text-gray mb-1">Sun</h5>
                                    <h4>Good Friday</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- The Modal -->
    <div class="modal fade" id="add_holiday">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Holiday</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST">
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" class="form-control" name="date"/>
                        </div>
                        <div class="form-group">
                            <label>Holiday Name</label>
                            <input type="text" class="form-control" name="holiday_name" placeholder="Enter Holiday Name"/>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" id="" class="btn btn-success">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php');?>
