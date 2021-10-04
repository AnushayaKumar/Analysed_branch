<?php include('include/header.php')?>
<link rel="stylesheet" href="css/company_my_task.css">
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

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<body>
    
    <br><br>
    <div class="main_body">
        <p class="mainHeadingDash" style="font-size:30px">My Tasks</p>
        <p class="sub_1">View and manage your tasks</p>
        <br><br>

        <!-- search bar -->
        <div class="row">
            <div class="col-6">
                <div class="input-field" style="width:450px;height:40px">
                    <span id="m1"><i class="fa fa-filter" aria-hidden="true"></i>
                    All tasks&emsp;</span>
                    <input type="text"  name="searchForJobs" id="inputSearch" class="searchForJobs"
                    placeholder="| &emsp;Search for a task "/>
                    <button class="searchButton"><i class="fa fa-search" aria-hidden="true"></i></button>  
                </div>
            </div>
            <div class="col-6">
                <span class="sortByMyTasks">&emsp;&emsp;&emsp;Sort By: </span>
                <span class="recentMyTasks"><a href="/" class="active-breadcrumb-link">Newest first </a></span>
                <span class="sortByMyTasks" style="color:black">Deadline &nbsp;<i class="fa fa-angle-up"style="font-size:24px"></i></span>
                <span class="sortByMyTasks" style="color:black">Progress &nbsp;<i class="fa fa-angle-up"style="font-size:24px"></i></span>
            </div>
        </div><br><br>

        <!-- dropdown -->

        <div class="row">
            <div class="col-3">
                <p id="m2">Company</p>
                <select id="opt1">
                    <option value="0" default>&emsp;All</option>
                    <option value="1">Open</option>
                    <option value="2">Closed</option>
                    <option value="3">Working</option>
                </select>
            </div>
            <div class="col-9">
                <p id="m2">Job</p>
                <select id="opt1">
                    <option value="0" default>&emsp;All</option>
                    <option value="1">Open</option>
                    <option value="2">Closed</option>
                    <option value="3">Working</option>
                </select>
            </div>
        </div>
        <br><br>

        <!-- list  -->
    
        <a href="company_my_task_individual.php">
        <div class="row" id="ro1">
            <div class="col-6">
                <div class="card" id="car1">
                    <div class="cont_1">
                        <div class="row">
                            <div class="col-3"><img src="img/facebook.jpg" height="50px" width="50px"></div>
                            <div class="col-9">
                                <p id="n1">Facebook</p>
                                <p id="n2" style="line-height:0.5"><span style="color:#3598DB"><i class="fa fa-external-link"></i></span>&nbsp;www.facebook.com</p>
                            </div>
                        </div>
                        
                        <p id="n3">Task name</p>
                        <p id="n2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed 
                            diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>

                        <div>
                            <progress value="60" max="100" id="p1" ></progress>
                            <span id="n9">&emsp; 60%</span >
                        </div><br>

                        <p>
                            <span style="color:#3598DB"><i class="fas fa-comment-alt"></i></span> &nbsp;7&emsp;
                            <button id="n8"><i class="fas fa-bell"></i>&nbsp;due in 3 days</button>
                            <span style="margin-left:80px">
                            <img src="img/Profile1.png" height="41px" width="41px">
                            <img src="img/Profile1.png" height="41px" width="41px">
                            <img src="img/Profile1.png" height="41px" width="41px"> </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card" id="car1">
                <div class="cont_1">
                        <div class="row">
                            <div class="col-3"><img src="img/target.png" height="50px" width="50px"></div>
                            <div class="col-9">
                                <p id="n1">Target</p>
                                <p id="n2" style="line-height:0.5"><span style="color:#3598DB"><i class="fa fa-external-link"></i></span>&nbsp;www.target.com</p>
                            </div>
                        </div>
                        
                        <p id="n3">Task name</p>
                        <p id="n2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed 
                            diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>

                        <div>
                            <progress value="60" max="100" id="p1" ></progress>
                            <span id="n9">&emsp; 60%</span >
                        </div><br>

                        <p>
                            <span style="color:#3598DB"><i class="fas fa-comment-alt"></i></span> &nbsp;7&emsp;
                            <button id="n8" style="background-color:#FFBD0633;color:#FFBD06"><i class="fas fa-bell"></i>&nbsp;due in 5 days</button>
                            <span style="margin-left:80px">
                            <img src="img/Profile1.png" height="41px" width="41px">
                            <img src="img/Profile1.png" height="41px" width="41px">
                            <img src="img/Profile1.png" height="41px" width="41px"> </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row" id="ro1">
            <div class="col-6">
                <div class="card" id="car1">
                    <div class="cont_1">
                        <div class="row">
                            <div class="col-3"><img src="img/flipcart.png" height="50px" width="50px"></div>
                            <div class="col-9">
                                <p id="n1">Flipkart</p>
                                <p id="n2" style="line-height:0.5"><span style="color:#3598DB"><i class="fa fa-external-link"></i></span>&nbsp;www.flipkart.com</p>
                            </div>
                        </div>
                        
                        <p id="n3">Task name</p>
                        <p id="n2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed 
                            diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>

                        <div>
                            <progress value="60" max="100" id="p1" ></progress>
                            <span id="n9">&emsp; 60%</span >
                        </div><br>

                        <p>
                            <span style="color:#3598DB"><i class="fas fa-comment-alt"></i></span> &nbsp;7&emsp;
                            <button id="n8" style="background-color:#F5F5F5;color:#979797"><i class="fas fa-bell"></i>&nbsp;due in 7 days</button>
                            <span style="margin-left:80px">
                            <img src="img/Profile1.png" height="41px" width="41px">
                            <img src="img/Profile1.png" height="41px" width="41px">
                            <img src="img/Profile1.png" height="41px" width="41px"> </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card" id="car1">
                <div class="cont_1">
                        <div class="row">
                            <div class="col-3"><img src="img/Adobe icon.png" height="50px" width="50px"></div>
                            <div class="col-9">
                                <p id="n1">Adobe</p>
                                <p id="n2" style="line-height:0.5"><span style="color:#3598DB"><i class="fa fa-external-link"></i></span>&nbsp;www.adobe.com</p>
                            </div>
                        </div>
                        
                        <p id="n3">Task name</p>
                        <p id="n2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed 
                            diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>

                        <div>
                            <progress value="60" max="100" id="p1" ></progress>
                            <span id="n9">&emsp; 60%</span >
                        </div><br>

                        <p>
                            <span style="color:#3598DB"><i class="fas fa-comment-alt"></i></span> &nbsp;7&emsp;
                            <button id="n8"><i class="fas fa-bell"></i>&nbsp;due in 3 days</button>
                            <span style="margin-left:80px">
                            <img src="img/Profile1.png" height="41px" width="41px">
                            <img src="img/Profile1.png" height="41px" width="41px">
                            <img src="img/Profile1.png" height="41px" width="41px"> </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </a>
        <br><br>


    </div>
</body>