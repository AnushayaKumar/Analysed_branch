<?php include('include/header.php') ?>
<title>Job Listings</title>
<link rel="stylesheet" href="css/job_listings.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>
<br>
<div class="bread-crumbs_Mytools-recruiter">
    <a href="/" class="active-breadcrumb-link">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Dashboard</a> > <a href="" class="active-breadcrumb-link">My Dashboard</a> > <a href="" class="active-breadcrumb-link">Job Listing</a> 
</div>

<div class="container" style="margin-left:150px">
    <div class="small_container">  

        <div class="row-flex-jobs-j alignitemsstart-shortlisted">
            <div class="heading_dash">
                <div class="row-flex-jobj">
                    <h1 class="head_main">Job listings</h1>
                </div>
                <div>
                    <a href="/" class="active-breadcrumb-link">Check and manage all your job listings</a>
                </div><br>
            <div>
        </div>

        <div class="row" style="display: flex">
            <div class="col-8">
                <div class="input-field" style="width:571px">
                <img src="img/location_icon.png" alt="" width="15" height="15" >
                <a href="/" class="active-breadcrumb-link">All Jobs   &emsp;   <span style="color:#979797">|&emsp; &emsp;</span></a>   
                <input
                    type="text"
                    name="searchForJobs"
                    id="inputSearch"
                    class="searchForJobs"
                    placeholder="Search for Jobs by ID   "
                />&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;
                <button class="searchButton">
                    <img src="img/search-icon-blue.png" width="15" height="15" style="font:right" />
                </button>  
                </div>
            </div>
            <div class="col-4">
                <span class="sortByMyTasks" style="margin-left:40px">Sort By: </span>
                <span class="recentMyTasks"><a href="/" class="active-breadcrumb-link">Recent </a></span>
                <span class="sortByMyTasks" style="color:black">Priority &nbsp;<img src="img/dropdown.png" width="15" height="10" style="font:right" /></span>
            </div>
        </div><br>

        <div class="row">
            <div class="col-4" style="margin-left:800px">
                <img src="img/red-icon.png" width="30" height="20"> High&emsp;
                <img src="img/orange-icon.png" width="17" height="18">&nbsp;&nbsp;Medium&emsp;
                <img src="img/Yellow-icon.png" width="17" height="18">&nbsp;&nbsp;Low
            </div>
            <div class="col-8"><br>
                <div class="categories-mytasks-1-active">
                    <p class="category-mytasks1 active" id="category-mytasks1-1">All</p>
                    <p class="category-mytasks1 " id="category-mytasks1-2">Active</p>
                    <p class="category-mytasks1 " id="category-mytasks1-3">Completed</p>
                    <p class="category-mytasks1 " style="color:#3598DB">Select All</p>
                </div>
            </div>
            
        </div>

        <div class="singleTasks_containerDiv">

            <div class="singletask_myTasks">
                <input type="checkbox" name="checkBoxItem" style="border: 1px solid #3598db;" >
                <img src="img/red-icon.png" width="30" height="20">
                <span>
                    <p class="light_spanItem_singleTask_myTasks">Added on</p>
                    <p class="date_s">05-05-2020</p>
                </span>
                <span>
                    <p class="ac_assis">Acturial Assistant</p>
                    <p class="id_num">#1544-1</p>
                    <p class="loc_pin"><i class="fa fa-map-marker"></i> Hyderabad</p>
                </span>
                <span>
                    <p style="color:#333333;font-size:14px;line-height:1px ">Full-time</p>
                    <p style="color:#979797;font-size:14px ">X openings</p>
                </span>
                <button class="x1" onclick="location.href='job_listings_individual.php'"><img src="img/Prof-2.png" width="55" height="55"></button>
                
                <span>
                    <p style="color:#979797;line-height:1px ">Company contact</p>
                    <p style="color:#3598DB;line-height:1px "><b>Philip Martin</b></p>
                    <p style="color:#333333">XYZ pharmaceuticals</p>
                </span>
                <span>
                    <img src="img/eye-icon.jpg" width="25" height="15"><br>
                    <p style="color:#333333; "><b>&nbsp;10</b></p>
                </span>
                <span>
                    <img src="img/task-icon.png" width="20" height="20"><br>
                    <p style="color:#333333; "><b>&nbsp;6</b></p>
                </span>
                <span>
                    <img src="img/person-icon.png" width="25" height="20"><br>
                    <p style="color:#333333; "><b>&nbsp;1/4</b></p>
                </span>
                <img src="img/Prof-1.png" width="55" height="55">
                <span>
                    <p style="color:#979797;line-height:1px ">Recruiter</p>
                    <p style="color:#3598DB;line-height:1px "><b>Sandro Vicente</b></p>
                    <p style="color:#333333">sandrovicente@gmail.com</p>
                </span>
            </div>

            <div class="singletask_myTasks">
                <input type="checkbox" name="checkBoxItem" style="border: 1px solid #3598db;" >
                <img src="img/orange-icon.png" width="20" height="20">
                <span>
                    <p class="light_spanItem_singleTask_myTasks">Added on</p>
                    <p class="date_s">05-05-2020</p>
                </span>
                <span>
                    <p class="ac_assis">Acturial Assistant</p>
                    <p class="id_num">#1544-1</p>
                    <p class="loc_pin"><i class="fa fa-map-marker"></i> Hyderabad</p>
                </span>
                <span>
                    <p style="color:#333333;font-size:14px;line-height:1px ">Full-time</p>
                    <p style="color:#979797;font-size:14px ">X openings</p>
                </span>
                <button class="x1" onclick="location.href='job_listings_individual.php'"><img src="img/Prof-2.png" width="55" height="55"></button>
                
                <span>
                    <p style="color:#979797;line-height:1px ">Company contact</p>
                    <p style="color:#3598DB;line-height:1px "><b>Philip Martin</b></p>
                    <p style="color:#333333">XYZ pharmaceuticals</p>
                </span>
                <span>
                    <img src="img/eye-icon.jpg" width="25" height="15"><br>
                    <p style="color:#333333; "><b>&nbsp;10</b></p>
                </span>
                <span>
                    <img src="img/task-icon.png" width="20" height="20"><br>
                    <p style="color:#333333; "><b>&nbsp;6</b></p>
                </span>
                <span>
                    <img src="img/person-icon.png" width="25" height="20"><br>
                    <p style="color:#333333; "><b>&nbsp;1/4</b></p>
                </span>
                <img src="img/Prof-1.png" width="55" height="55">
                <span>
                    <p style="color:#979797;line-height:1px ">Recruiter</p>
                    <p style="color:#3598DB;line-height:1px "><b>Sandro Vicente</b></p>
                    <p style="color:#333333">sandrovicente@gmail.com</p>
                </span>
            </div>

            <div class="singletask_myTasks">
                <input type="checkbox" name="checkBoxItem" style="border: 1px solid #3598db;" >
                <img src="img/Yellow-icon.png" width="20" height="20">
                <span>
                    <p class="light_spanItem_singleTask_myTasks">Added on</p>
                    <p class="date_s">05-05-2020</p>
                </span>
                <span>
                    <p class="ac_assis">Acturial Assistant</p>
                    <p class="id_num">#1544-1</p>
                    <p class="loc_pin"><i class="fa fa-map-marker"></i> Hyderabad</p>
                </span>
                <span>
                    <p style="color:#333333;font-size:14px;line-height:1px ">Full-time</p>
                    <p style="color:#979797;font-size:14px ">X openings</p>
                </span>
                <button class="x1" onclick="location.href='job_listings_individual.php'"><img src="img/Prof-2.png" width="55" height="55"></button>
                
                <span>
                    <p style="color:#979797;line-height:1px ">Company contact</p>
                    <p style="color:#3598DB;line-height:1px "><b>Philip Martin</b></p>
                    <p style="color:#333333">XYZ pharmaceuticals</p>
                </span>
                <span>
                    <img src="img/eye-icon.jpg" width="25" height="15"><br>
                    <p style="color:#333333; "><b>&nbsp;10</b></p>
                </span>
                <span>
                    <img src="img/task-icon.png" width="20" height="20"><br>
                    <p style="color:#333333; "><b>&nbsp;6</b></p>
                </span>
                <span>
                    <img src="img/person-icon.png" width="25" height="20"><br>
                    <p style="color:#333333; "><b>&nbsp;1/4</b></p>
                </span>
                <img src="img/Prof-1.png" width="55" height="55">
                <span>
                    <p style="color:#979797;line-height:1px ">Recruiter</p>
                    <p style="color:#3598DB;line-height:1px "><b>Sandro Vicente</b></p>
                    <p style="color:#333333">sandrovicente@gmail.com</p>
                </span>
            </div>
        </div>



        <div class="addnew"><img src="img/plus.png" width="50" height="50" style="margin-left:1000px" /></div>
        <br><br><br>
    </div> 




