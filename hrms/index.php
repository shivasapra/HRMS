<?php include('includes/header.php');?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                  <div class="card card-statistics">
                      <a href="view-employee.php" class="hover-underline-none">
                      <div class="card-body">
                          <div class="clearfix">
                              <div class="float-left">
                                  <i class="mdi mdi-account-location text-info icon-lg"></i>
                              </div>
                              <div class="float-right">
                                  <p class="mb-0 text-right text-dark">Employees</p>
                                  <div class="fluid-container">
                                      <h3 class="font-weight-medium text-right mb-0 h1 text-dark">246</h3>
                                  </div>
                              </div>
                          </div>
                          <p class="text-muted mt-3 mb-0">
                              <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Total Forbcorp Employees
                          </p>
                      </div>
                      </a>
                  </div>
              </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                  <a href="absent.php" class="hover-underline-none">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                        <i class="mdi mdi-poll-box text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right text-dark">Absent</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0 h1 text-dark">36</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Today's Absent
                  </p>
                </div>
                  </a>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                  <a href="present.php" class="hover-underline-none">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                        <i class="mdi mdi-poll-box text-success icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right text-dark">Present</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0 h1 text-dark">210</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i>  Today's Presents
                  </p>
                </div>
                  </a>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                        <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Salary</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0 h1">Rs. 1,50,000</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Paid This Month
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 grid-margin stretch-card">
              <!--weather card-->
              <div class="card card-weather">
                <div class="card-body">
                  <div class="weather-date-location">
                    <h3 class="h1"><?php echo date('M');?></h3>
                    <p class="text-gray">
                      <span class="weather-date"><?php echo date('d D Y');?>,</span>
                      <span class="weather-location">India</span>
                    </p>
                  </div>
                  <div class="weather-data d-flex">
                    <div class="mr-auto">
                      <h4 class="display-3">21
                        <span class="symbol">&deg;</span>C</h4>
                      <p>
                        Mostly Cloudy
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!--weather card ends-->
            </div>

              <div class="col-lg-4 grid-margin stretch-card upcoming-birthday">
                  <!--weather card-->
                  <div class="card">
                      <div class="card-body">
                          <h2 class="mb-4 h3"><i class="mdi mdi-cake"></i> Upcoming Birthdays</h2><hr>
                          <div class="h-447 custom-scroll">
                          <p>Today's Birthday</p>
                          <div class="media">
                              <img class="mr-3" src="images/faces/face20.jpg" alt="pdf">
                              <div class="media-body text-left align-self-center">
                                  <h3 class="mt-0 mb-1 h4">Deepika Sharwan</h3>
                                  <p class="m-0"><span class="text-dark-red">24 May | </span> <span class="text-gray"> 24 Years old</span></p>
                              </div>
                          </div>
                          <div class="media">
                              <img class="mr-3" src="images/faces/face21.jpg" alt="pdf">
                              <div class="media-body text-left align-self-center">
                                  <h3 class="mt-0 mb-1 h4">Ankit Mahajan</h3>
                                  <p class="m-0"><span class="text-dark-red">09 December | </span> <span class="text-gray"> 27 Years old</span></p>
                              </div>
                          </div>
                          <p class="mt-4">Upcoming</p>
                          <div class="media">
                              <img class="mr-3" src="images/faces/face22.jpg" alt="pdf">
                              <div class="media-body text-left align-self-center">
                                  <h3 class="mt-0 mb-1 h4">Deepika Sharwan</h3>
                                  <p class="m-0"><span class="text-dark-red">24 May | </span> <span class="text-gray"> 24 Years old</span></p>
                              </div>
                          </div>
                          <div class="media">
                              <img class="mr-3" src="images/faces/face23.jpg" alt="pdf">
                              <div class="media-body text-left align-self-center">
                                  <h3 class="mt-0 mb-1 h4">Ankit Mahajan</h3>
                                  <p class="m-0"><span class="text-dark-red">09 December | </span> <span class="text-gray"> 27 Years old</span></p>
                              </div>
                          </div>
                          </div>
                      </div>
                  </div>
                  <!--weather card ends-->
              </div>

            <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h2 class="mb-4 h3"><i class="mdi mdi-calendar"></i> Employee Calender</h2><hr>
                  <div class="row">
                      <div class="col-md-12">
                          <select class="form-control mb-3" name="job_title">
                              <option value="0">-- Select Employee--</option>
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
                    <div class="calendar"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="mb-4 h3">Age Group</h2>
                          <canvas id="barChart" style="height:250px"></canvas>
                          <p class="text-center text-gray mb-0 mt-2">Employees</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="mb-4 h3">Hired in last 30 days</h2>
                          <canvas id="areaChart" style="height:250px"></canvas>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <!-- content-wrapper ends -->

          <?php include('includes/footer.php');?>