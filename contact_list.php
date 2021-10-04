<?php include('header.php') ?>
<title>Dashboard</title>
<link rel="stylesheet" href="css/contact_list.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>
<br>
    <div class="main_body">  
        <div class="head_txt">
            My Contact
        </div>

        <div>
            <a href="/" class="sub_1">Create new contact and manage old ones</a>
            <button class="addFilesMyTasks1" >Add + </button>
        </div>

      <div class="container" style="margin-left:-2%;">
        <div class="row">
            <div class="col-7">
                <div class="input-field" style="width:585px">
                <img src="img/person.png" alt="" height="25px" width="25px" class="box_1"><span id="m1">Company&nbsp;</span>
                <input type="text"  name="searchForJobs" id="inputSearch_12" class="searchForJobs" 
                    placeholder="| &emsp;&emsp;Search by name "
                />
                <button class="searchButton">
                    <img src="img/search-icon-blue.png" width="15" height="15" style="font:right" />
                </button>  
                </div>
            </div>
            <div class="col-5">
                <span class="sortByMyTasks">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Sort By: </span>
                <span class="recentMyTasks"><a href="/" class="active-breadcrumb-link">Recent </a></span>
                <span class="sortByMyTasks" style="color:black">Last Edited &nbsp;<img src="img/dropdown.png" width="15" height="10" style="font:right" /></span>
            </div>
        </div><br>
     </div>

        <div class="singleTasks_containerDiv">

            <div class="singletask_myTasks">
                <input type="checkbox" name="checkBoxItem" style="border: 1px solid #3598db;" >
                <img src="img/Profile3.png" width="65" height="65">
                <span >
                    <p id="k1">Chris Do</p>
                    <p id="k2">Company Name</p>
                </span>
                &emsp;&emsp;&emsp;&emsp;&emsp;
                <span >
                    <p class="sub_1">Web Developer</p>
                    <p id="k2">Lorem Ipsum</p>
                </span>&emsp;
                <span >
                    <p class="sub_1">+91 9090909090</p>
                    <p class="sub_1" style="line-height: 0.5;">example@gmail.com</p>
                </span>&emsp;&emsp;
                <span style="color:#979797">
                    <img src="img/location-pin.png" width="15" height="16">Hyderabad
                </span>&emsp;&emsp;
                <span>
                    <p id="k2">Added on
                    <span style="color:#333333"> 05-05-2020</span></o>
                    <div class="button-div_myTasks">
                        <p style="color:#3598DB">&nbsp;Edit <i class="fa fa-edit" aria-hidden="true"></i>
                        <span style="font-size:14px;color:#EC4551">&emsp;&emsp;&emsp;&emsp;&emsp;Delete <i class="fa fa-trash" aria-hidden="true"></i></span></p>
                    </div>
                </span>
                                        
            </div>

            <div class="singletask_myTasks">
                <input type="checkbox" name="checkBoxItem" style="border: 1px solid #3598db;" >
                <img src="img/Profile1.png" width="65" height="65">
                <span >
                    <p id="k1">Chris Do</p>
                    <p id="k2">Company Name</p>
                </span>
                &emsp;&emsp;&emsp;&emsp;&emsp;
                <span >
                    <p class="sub_1">Web Developer</p>
                    <p id="k2">Lorem Ipsum</p>
                </span>&emsp;
                <span >
                    <p class="sub_1">+91 9090909090</p>
                    <p class="sub_1" style="line-height: 0.5;">example@gmail.com</p>
                </span>&emsp;&emsp;
                <span style="color:#979797">
                    <img src="img/location-pin.png" width="15" height="16">Hyderabad
                </span>&emsp;&emsp;
                <span>
                    <p id="k2">Added on
                    <span style="color:#333333"> 05-05-2020</span></o>
                    <div class="button-div_myTasks">
                        <p style="color:#3598DB">&nbsp;Edit <i class="fa fa-edit" aria-hidden="true"></i>
                        <span style="font-size:14px;color:#EC4551">&emsp;&emsp;&emsp;&emsp;&emsp;Delete <i class="fa fa-trash" aria-hidden="true"></i></span></p>
                    </div>
                </span>
                                        
            </div>

            <div class="singletask_myTasks">
                <input type="checkbox" name="checkBoxItem" style="border: 1px solid #3598db;" >
                <img src="img/Prof-2.png" width="65" height="65">
                <span >
                    <p id="k1">Chris Do</p>
                    <p id="k2">Company Name</p>
                </span>
                &emsp;&emsp;&emsp;&emsp;&emsp;
                <span >
                    <p class="sub_1">Web Developer</p>
                    <p id="k2">Lorem Ipsum</p>
                </span>&emsp;
                <span >
                    <p class="sub_1">+91 9090909090</p>
                    <p class="sub_1" style="line-height: 0.5;">example@gmail.com</p>
                </span>&emsp;&emsp;
                <span style="color:#979797">
                    <img src="img/location-pin.png" width="15" height="16">Hyderabad
                </span>&emsp;&emsp;
                <span>
                    <p id="k2">Added on
                    <span style="color:#333333"> 05-05-2020</span></o>
                    <div class="button-div_myTasks">
                        <p style="color:#3598DB">&nbsp;Edit <i class="fa fa-edit" aria-hidden="true"></i>
                        <span style="font-size:14px;color:#EC4551">&emsp;&emsp;&emsp;&emsp;&emsp;Delete <i class="fa fa-trash" aria-hidden="true"></i></span></p>
                    </div>
                </span>
                                        
            </div>
            <div class="singletask_myTasks">
                <input type="checkbox" name="checkBoxItem" style="border: 1px solid #3598db;" >
                <img src="img/Ellipse 148-1.png" width="65" height="65">
                <span >
                    <p id="k1">Chris Do</p>
                    <p id="k2">Company Name</p>
                </span>
                &emsp;&emsp;&emsp;&emsp;&emsp;
                <span >
                    <p class="sub_1">Web Developer</p>
                    <p id="k2">Lorem Ipsum</p>
                </span>&emsp;
                <span >
                    <p class="sub_1">+91 9090909090</p>
                    <p class="sub_1" style="line-height: 0.5;">example@gmail.com</p>
                </span>&emsp;&emsp;
                <span style="color:#979797">
                    <img src="img/location-pin.png" width="15" height="16">Hyderabad
                </span>&emsp;&emsp;
                <span>
                    <p id="k2">Added on
                    <span style="color:#333333"> 05-05-2020</span></o>
                    <div class="button-div_myTasks">
                        <p style="color:#3598DB">&nbsp;Edit <i class="fa fa-edit" aria-hidden="true"></i>
                        <span style="font-size:14px;color:#EC4551">&emsp;&emsp;&emsp;&emsp;&emsp;Delete <i class="fa fa-trash" aria-hidden="true"></i></span></p>
                    </div>
                </span>
                                        
            </div>
        </div>
        <br><br>
    </div> 




