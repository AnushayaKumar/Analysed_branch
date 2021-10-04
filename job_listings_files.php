<?php include('include/header.php') ?>
<title>Dashboard</title>
      
<link rel="stylesheet" href="css/job_listings_files.css">


   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    
<body>

<div class="main_body">
    <div class="small_container" style="margin-top:0%;"><br>
        <div class="bread-crumbs_Mytools-recruiter">
            <a href="" class="active-breadcrumb-link">&emsp;&emsp;&emsp;Dashboard</a> >  <a href="" class="active-breadcrumb-link">My Database</a> >  <a href="" class="active-breadcrumb-link">Job_Listings</a>
            >  <a href="" class="active-breadcrumb-link"><u>Actural Assistant</u></a>
        </div>
         <br>
        <div class="heading_dash1">
            <div class="row-flex-jobj">
                <h1 class="mainHeadingDash" style="font-size:35px;">&emsp;&emsp;Actural Assistant</h1>
            </div>
           
            <div class="row-flex-jobj">
                <a href="#">&emsp;&emsp;&emsp;&emsp;XYZ Pharmaceuticals- </a> #1544-1
            </div> 
            <p><br>&emsp;&emsp;&emsp;&emsp;05-05-2020</p>
        </div>
    </div>

    <div class="container" style="width:100%;margin-left:120px;margin-top:-2%;">
        <div class="row">
            <div class="col-2 mb-4">

                <div class="options">
                    <p><a href="job_listings_activity_res.php"style="color:#979797;" id="te1">At a glance </a></p>
                    <p><a href="jobs_listings_activity_eval-1.php"style="color:#979797;" id="te1">Applicants </a></p>
                    
                    <p><a href="job_listings_activity_res.php"style="color:#979797;" id="te1">Activity</a></p>
                    <!-- <div class="option1"> -->
                        <span style="color:#3598DB;"id="te1" > <b>|  Files</b></span>
                    <!-- </div>  -->
                    <p><a href="job_listings_notes.php"style="color:#979797;" id="te1"> Notes </a></p>
                    <p><a href="job_listings_pub-2.php"style="color:#979797;" id="te1">Publish </a></p>
                </div>

            </div>
            <div class="col-9 mb-4">
                 <div class="row">
                    <div class="filterSection_myTasks">
                      <div class="leftFilter_myTasks">
                        <img src="img/page.png" height="16px" width="16px">
                        <select id="k1">
                            <option value="none" selected disabled hidden >File type</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <input type="text" name="FileName_myTasks" placeholder=" Search by File name" class="centered_span_myTasks">
                        &emsp;<img src="img/search-icon-blue.png" height="15px" width="15px">
                      </div>
                      <button class="addFilesMyTasks" id="myBtn" >Add +</button>

                      <div class="row">
                            <span class="sortByMyTasks">Sort By: </span><span class="recentMyTasks">Recent</span>
                            <select name="" id="" class="sortFilter_myTasks">
                                <option value="0">Last Edited ∨</option>
                                <option value="1">Sort A-Z</option>
                                <option value="2">Sort Z-A</option>
                            </select>
                      </div>
                      <div class="row">
                            <div class="filterSmall_myTasks">
                                <div class="selectAllActions_filterSmall_myTasks" style="margin-left: 570px;"><br>
                                    <input type="checkbox" name="checkboxSelectAll_myTasks" id="checkboxSelectAll_myTasks">
                                    <label for="checkboxSelectAll_myTasks">Select All</label>
                                    <select name="Select action">
                                        <option value="0">Select action</option>
                                        <option value="1">Copy</option>
                                        <option value="2">Cut</option>
                                    </select>
                                </div>
                            </div>
                      </div>
                    </div>
                    
                  

                  </div> 
                  <br>
                  <div class="row">
                        <div class="singletask_myTasks">
                            <input type="checkbox" name="checkBoxItem" class="largerCheckbox">
                            <span>
                                <p class="light_spanItem_singleTask_myTasks">Added on</p>
                                <p class="j1">05-05-2021</p>
                            </span>
                            <span style="margin-left:30px">
                                <p style="color:#297FB8;margin-bottom:5px;font-size:16px">Filename.pdf</p>
                                <p class="j1">300kb</p>
                            </span>
                            <span>
                                <p class="j1" style="margin-bottom:4px;">Resume</p>
                                <p style="color:#51C46D">View <img src="img/greeneye.png" width="20px" height="17px"></p>
                           </span>
                            <span style="margin-left:30px">
                                <p class="j1" style="margin-bottom:4px;">Internal</p>
                                <p class="j1">System Verified</p>
                            </span>
                            <span>
                                <p><img src="img/Prof-1.png" height="50px" width="50px"></p>
                            </span>
                            <span style="margin-right:30px">
                                <p class="light_spanItem_singleTask_myTasks">Uploaded by</p>
                                <p class="j1">Sasuke Uchiha</p>
                            </span>
                            <div class="button-div_myTasks">
                                <button style="font-size:14px;color:#EC4551">Delete <i class="fa fa-trash" aria-hidden="true"></i></button><br>
                                <button style="font-size:14px;color:#3598DB">Download <i class="fa fa-file" aria-hidden="true"></i></button>
                            </div>
                        </div>
                  </div>

                  <div class="row">
                        <div class="singletask_myTasks">
                            <input type="checkbox" name="checkBoxItem" class="largerCheckbox">
                            <span>
                                <p class="light_spanItem_singleTask_myTasks">Added on</p>
                                <p class="j1">05-05-2021</p>
                            </span>
                            <span style="margin-left:30px">
                                <p style="color:#297FB8;margin-bottom:5px;font-size:16px">Filename.pdf</p>
                                <p class="j1">300kb</p>
                            </span>
                            <span>
                                <p class="j1" style="margin-bottom:4px;">Resume</p>
                                <p style="color:#51C46D">View <img src="img/greeneye.png" width="20px" height="17px"></p>
                           </span>
                            <span style="margin-left:30px">
                                <p class="j1" style="margin-bottom:4px;">Internal</p>
                                <p class="j1">System Verified</p>
                            </span>
                            <span>
                                <p><img src="img/Prof-1.png" height="50px" width="50px"></p>
                            </span>
                            <span style="margin-right:30px">
                                <p class="light_spanItem_singleTask_myTasks">Uploaded by</p>
                                <p class="j1">Sasuke Uchiha</p>
                            </span>
                            <div class="button-div_myTasks">
                                <button style="font-size:14px;color:#EC4551">Delete <i class="fa fa-trash" aria-hidden="true"></i></button><br>
                                <button style="font-size:14px;color:#3598DB">Download <i class="fa fa-file" aria-hidden="true"></i></button>
                            </div>
                        </div>
                  </div>

                  <div class="row">
                        <div class="singletask_myTasks">
                            <input type="checkbox" name="checkBoxItem" class="largerCheckbox">
                            <span>
                                <p class="light_spanItem_singleTask_myTasks">Added on</p>
                                <p class="j1">05-05-2021</p>
                            </span>
                            <span style="margin-left:30px">
                                <p style="color:#297FB8;margin-bottom:5px;font-size:16px">Filename.pdf</p>
                                <p class="j1">300kb</p>
                            </span>
                            <span>
                                <p class="j1" style="margin-bottom:4px;">Resume</p>
                                <p style="color:#51C46D">View <img src="img/greeneye.png" width="20px" height="17px"></p>
                           </span>
                            <span style="margin-left:30px">
                                <p class="j1" style="margin-bottom:4px;">Internal</p>
                                <p class="j1">System Verified</p>
                            </span>
                            <span>
                                <p><img src="img/Prof-1.png" height="50px" width="50px"></p>
                            </span>
                            <span style="margin-right:30px">
                                <p class="light_spanItem_singleTask_myTasks">Uploaded by</p>
                                <p class="j1">Sasuke Uchiha</p>
                            </span>
                            <div class="button-div_myTasks">
                                <button style="font-size:14px;color:#EC4551">Delete <i class="fa fa-trash" aria-hidden="true"></i></button><br>
                                <button style="font-size:14px;color:#3598DB">Download <i class="fa fa-file" aria-hidden="true"></i></button>
                            </div>
                        </div>
                  </div>
            </div>
            <div class="col-1 mb-4" >
                       <div class="card" style="width:300px;">
                                <div class="card-body">
                                    
                                  <div class="right-panel" style="text-align:center">
                                    <!-- <div class="status1"> -->
                                   
                                      <div style="font-size:14px;">
                                        <b>#JB1554-1&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</b>
                                        <span style="color:#979797;">05-05-2020</span>
                                    </div><br>
                                    <div class="status-name">
                                      <!-- <div> -->
                                        <span id="r1"><img src="img/red-logo.png" width="13" height="13"> <b>Acturial Assistant</b></span>
                                        <p style="color:#3598DB;line-height: 40%;font-size: 16px">XYZ Pharmaceuticals<img src="img/launch-24px.png" width="15" height="17"><br><br><br>
                                        <span style="color:#979797;font-size:14px;"><img src="img/location-pin.png" width="13" height="13">Hyderabad</span><br><br><br>
                                        <span style="color:#979797;line-height: 150%;font-size:14px;"> Full-time</p>
                                        <hr style="color:#979797;width:100%"></hr>
                                    </div>
                                   <!-- <div class="displayname">  -->
                                       <div>
                                         
                                        <img src="img/eye-icon.jpg" width="25" height="20">&emsp;&emsp;
                                        <img src="img/task-icon.png" width="23" height="25">&emsp;&emsp;
                                        <img src="img/person-icon.png" width="23" height="20">
                                    </div>
                                    <!-- <div class="displayname">  -->
                                    <div>
                                        <p><b>10 &nbsp;&emsp;&emsp;6 &nbsp;&emsp;&emsp;1/4</b></p>
                                    </div><br><br>
                                    <!-- <div class="displayname">  -->
                                        <div>
                                            <p style="color:#979797; line-height:10%; font-size:14px;">Status &emsp;&emsp;&emsp;&emsp;&emsp;Last Contact</p>
                                            <p><span style="color:#51C46D;font-size:16px;">Active&nbsp;&emsp;&emsp;&emsp;&emsp;</span><span style="font-size:15px;font-weight:500">20-05-2020</span></p>
                                        </div><br>
                                        <!-- <div class="displayname">  -->
                                        <div>
                                            <p style="color:#979797; line-height:10%;font-size:14px;">&emsp;&emsp;Industry&emsp;&emsp;&emsp;&emsp;Qualification req</p>
                                            <p style="color:#333333;font-size:16px;font-weight:600; ">&emsp;&emsp;IT&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; PG&emsp;&emsp;&emsp;</p>
                                        </div><br>
                                    <!-- <div class="displayname"> -->
                                    <div class="info1">
                                       <div>
                                            <p style="color:#979797; ">Created by</p>
                                            <p style="color:#3598DB; ">Curtis Kelley</p>
                                            <p style="color:#333333; line-height:10%">philipmartin@gmail.com</p>
                                            <p style="color:#333333; line-height:30%">+91 9000900090</p>
                                        </div><br>

                                        <!-- <div class="displayname"> -->
                                        <div>
                                            <p style="color:#979797; ">Active Contact</p>
                                            <p style="color:#3598DB; ">Curtis Kelley</p>
                                            <p style="color:#333333; line-height:10%">philipmartin@gmail.com</p>
                                            <p style="color:#333333; line-height:30%">+91 9000900090</p>
                                        </div><br>

                                        <!-- <div class="displayname"> -->
                                        <div>
                                            <p style="color:#979797; ">Assigned to</p>
                                            <p style="color:#3598DB; ">Curtis Kelley</p>
                                            <p style="color:#333333; line-height:10%">philipmartin@gmail.com</p>
                                            <p style="color:#333333; line-height:30%">+91 9000900090</p>
                                        </div><br>

                                        <!-- <div class="displayname"> -->
                                        <div>
                                            <p style="color:#979797; ">Contact info</p>
                                            <p style="color:#3598DB; ">Emailid@gmail.com</p>
                                            <p style="color:#333333; line-height:10%">+91 90009009090</p>
                                            <p style="color:#333333; line-height:30%">+91 9000900090</p>
                                        </div><br>
                                    <!-- <div class="displayname"> -->
                                    <div>
                                            <p style="color:#979797; ">Address</p>
                                            <p style="color:#333333; ">Address Line 1, <br>City - 530032, <br>State, Country</p>
                                        </div><br>
                                  </div>
                                </div>



                        </div>
                            <!-- end of card body -->
                    </div>
                        <!-- end of card -->
                       
             
            </div>
            <!--end of col -->
        </div>
    </div>
    <!--end of container -->

    </div>
<!-- end of main_body -->

</body>


    
