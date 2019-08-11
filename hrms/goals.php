<?php include('includes/header.php');?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-default mb-4 h3">Goals</h2>
                        <ul class="nav nav-tabs tabs-design">
                            <li class="nav-item">
                                <a class="nav-link active" href="goals.php">Personal Goals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="employee-goals.php">Employee Goals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="company-goals.php">Company Goals</a>
                            </li>
                        </ul>
                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <h3 class="mb-1">Personal Goals</h3>
                                <h5 class="text-left text-gray mb-3">Goals for myself</h5>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_personal_goal">Add Goal</a>
                            </div>
                            <div class="col-md-4">
                                <div class="jumbotron p-4 bg-light-gray">
                                    <h4>Goal Title
                                        <span class="dropdown">
                                            <a href="#" class="float-right dropdown-toggle after-none" data-toggle="dropdown">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list">
                                                        <ul class="dropdown-ul">
                                                            <li>
                                                                <a href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                        </span>
                                    </h4><hr>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p class="mdi mdi-calendar mb-1 font-weight-bold"> 20 days left (30/05/2019)</p>
                                    <p class="mdi mdi-eye mb-0 font-weight-bold"> Public</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="jumbotron p-4 bg-light-gray">
                                    <h4>Goal Title
                                        <span class="dropdown">
                                            <a href="#" class="float-right dropdown-toggle after-none" data-toggle="dropdown">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list">
                                                        <ul class="dropdown-ul">
                                                            <li>
                                                                <a href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                        </span>
                                    </h4><hr>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p class="mdi mdi-calendar mb-1 font-weight-bold"> 20 days left (30/05/2019)</p>
                                    <p class="mdi mdi-eye mb-0 font-weight-bold"> Public</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- The Modal -->
    <div class="modal fade" id="add_personal_goal">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Personal Goal</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" placeholder="Enter Title" class="form-control" name="title" required/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description (optional)</label>
                                    <textarea placeholder="Enter Description" class="form-control" name="description">
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Dates</label>
                                    <select class="form-control" name="dates">
                                        <option>Q1 - 2019</option>
                                        <option>Q2 - 2019</option>
                                        <option>Q3 - 2019</option>
                                        <option>Q4 - 2019</option>
                                        <option>Q1 - 2020</option>
                                        <option>Q2 - 2020</option>
                                        <option>Q3 - 2020</option>
                                        <option>Q4 - 2020</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Visibility</label>
                                    <div>
                                        <div class="form-radio d-inline-block">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="" checked>Public
                                                <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-radio d-inline-block">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">Private
                                                <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" id="" class="btn btn-success">Add Goal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php');?>