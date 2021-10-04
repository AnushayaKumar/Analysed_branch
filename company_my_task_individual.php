<?php include('include/header.php')?>

<html>
<head>
  <link rel="stylesheet" href="css/company_my_task_individual.css">

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


</head>
<body>
    
    <br><br><br>
    <div class="head_ele">
        <div class="content_1"><b>Task Name | MCQ  
            <span class="sub_1">Instructions</span></b>
            <span class="sub_2" style="margin-left: 250px;">Added by XYZ</span>
        </div><br>
        <div class="sub_2">Which Job | Which Company</div><br><br>
        <div class="sub_2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam 
            nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam 
            voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
            no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur 
            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
            sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd 
            gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.  <br><br>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor
            sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
        </div><br><br><br>
        <div class="content_1"><b>Expected output</b></div><br><br>
        <div class="row">
            <div class="col-6">
                <div class="card" style="width:460px;height:250px">
                  <div id="box_1">
                    <p class="content_2">Example input</p>
                    <p id="box_2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam 
                        nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                    <p id="box_2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam 
                        nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                  </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card" style="width:460px;height:250px">
                  <div id="box_1">
                    <p class="content_2">Example input</p>
                    <p id="box_2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam 
                        nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                    <p id="box_2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam 
                        nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                  </div>
                </div>
            </div>
        </div><br><br><br>
        <div class="content_1"><b>Constraints</b></div><br>
        <div class="row" id="gh1">
            <div class="col-9">
            <img src="img/screen_1.svg" height="63px" width="63px" style="margin-left:30px;">
            <img src="img/user_2.png" height="63px" width="63px" style="margin-left:80px">
            <img src="img/phone_1.svg" height="63px" width="63px" style="margin-left:80px">
            <img src="img/face1.png" height="63px" width="63px" style="margin-left:50px;">
                <br>
            <span class="sc1">Screen monitoring</span>
            <span class="sc1" style="line-height:3">&emsp;candidate monitoring</span>
            <span class="sc1">&emsp;&emsp;&emsp;Tab lock</span>
            <span class="sc1">&emsp;&emsp;&emsp;Face Unlock</span>
            </div>
            <div class="col-3">
            <span class="button_3" >&emsp;&emsp;End Task </span>
            </div>
        </div>
        <br><br>

        <div class="row">
            <div class="col-6">
                <div class="card" id="cont_1">
                    <p class="sub_2" id="box_1"><b>Deadline Countdown</b></p>
                    <p class="val_1"><b>72 : 35 : 04</b></p>
                    <p class="val_2">Hrs&emsp; &emsp; &nbsp; Min&nbsp;&emsp; &emsp;  Sec</p>
                </div>
                <br>
                <div class="card" style="width:460px;height:500px">
                    <p class="bot1"><b>Assigned to</b>
                    <span class="b2">Newest first</span>&emsp;
                    <span class="sub_2">Alphabetical</span>
                    <img src="img/up.png" height="20px" width="20px"></p>
                    <br>
                    
                    <p style="display:flex">
                        <button class="addFilesMyTasks1"  > &emsp;All </button>&emsp;&emsp;
                        <button class="addFilesMyTasks2"  > &emsp;In progress </button>&emsp;&emsp;
                        <button class="addFilesMyTasks3"  >&nbsp; Waiting for review </button>
                    </p>

                    <br>
                    <div class="row" style="margin-left:25px">
                        <div class="col-2">
                            <img src="img/Ellipse 148.png" height="40px" width="40px">
                        </div>
                        <div class="col-6">
                            <span class="sub_2"><b>Jean Gray</b></span><br>
                            <span class="c9">Android studio developer</span>
                        </div>
                        <div class="col-4" >
                            <span class="c9">&emsp;Assigned on</span><br>
                            <span class="c8" >24, Jul 2020</span>
                        </div>
                    </div>
                    <br>
                    <div class="row" style="margin-left:25px">
                        <div class="col-2">
                            <img src="img/Profile1.png" height="40px" width="40px">
                        </div>
                        <div class="col-6">
                            <span class="sub_2"><b>Cyclops</b></span><br>
                            <span class="c9">MERN stack developer</span>
                        </div>
                        <div class="col-4" >
                            <span class="c9">&emsp;Assigned on</span><br>
                            <span class="c8" >24, Jul 2020</span>
                        </div>
                    </div>
                    <br>
                    <div class="row" style="margin-left:25px">
                        <div class="col-2">
                            <img src="img/Profile3.png" height="40px" width="40px">
                        </div>
                        <div class="col-6">
                            <span class="sub_2"><b>Thor</b></span><br>
                            <span class="c9">Data scientist</span>
                        </div>
                        <div class="col-4" >
                            <span class="c9">&emsp;Assigned on</span><br>
                            <span class="c8" >24, Jul 2020</span>
                        </div>
                    </div>
                    <br>
                    <div class="row" style="margin-left:25px">
                        <div class="col-2">
                            <img src="img/Prof-1.png" height="40px" width="40px">
                        </div>
                        <div class="col-6">
                            <span class="sub_2"><b>Tony Stark</b></span><br>
                            <span class="c9">Android studio developer</span>
                        </div>
                        <div class="col-4" >
                            <span class="c9">&emsp;Assigned on</span><br>
                            <span class="c8" >24, Jul 2020</span>
                        </div>
                    </div>
                    <br>
                    <p class="more_1">Load More +</p>
                </div>
            </div>
            <div class="col-6">
                <div class="card" style="width:480px;height:1200px">
                    <p class="bot1"><b>Queries</b>
                    <span class="bot2">Newest first</span>&emsp;
                    <span class="sub_2"><b>Solved</b></span>
                    <img src="img/up.png" height="20px" width="20px"></p>

                    <p class="bot3"><br>
                    <span class="content_9" >&emsp;Today</span></p>
                    <br>
                    <div class="row" style="margin-left:25px">
                        <div class="col-2">
                            <img src="img/Ellipse 148.png" height="50px" width="50px">
                        </div>
                        <div class="col-5">
                            <span class="sub_2"><b>Doubt 1</b></span><br>
                            <span class="sub_9">Username</span>
                        </div>
                        <div class="col-5">
                            <span class="content_2" >24, Jul 2020&emsp; 9:00PM</span>
                        </div>
                    </div>
                    <br>
                    <p id="box_9" style="margin-left:40px;margin-right:20px">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
                        accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                        <p class="bot5">Reply<img src="img/reply.png" height="15px" width="15px"></p>
                        <br>

                    <div class="row" style="margin-left:25px">
                        <div class="col-2">
                            <img src="img/Profile1.png" height="50px" width="50px">
                        </div>
                        <div class="col-5">
                            <span class="sub_2"><b>Doubt 1</b></span><br>
                            <span class="sub_9">Username</span>
                        </div>
                        <div class="col-5">
                            <span class="content_2" >24, Jul 2020&emsp; 9:00PM</span>
                        </div>
                    </div>
                    <br>
                    <p id="box_9" style="margin-left:40px;margin-right:20px">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
                        accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                        <p class="bot5">Reply<img src="img/reply.png" height="15px" width="15px"></p>
                    <hr style="width:85%;margin-left:40px"></hr>

                    <p class="bot3"><br>
                    <span class="content_9" >&emsp;Last 3 days</span></p>
                    <br>
                    <div class="row" style="margin-left:25px">
                        <div class="col-2">
                            <img src="img/Ellipse 148.png" height="50px" width="50px">
                        </div>
                        <div class="col-5">
                            <span class="sub_2"><b>Doubt 1</b></span><br>
                            <span class="sub_9">Username</span>
                        </div>
                        <div class="col-5">
                            <span class="content_2" >24, Jul 2020&emsp; 9:00PM</span>
                        </div>
                    </div>
                    <br>
                    <p id="box_9" style="margin-left:40px;margin-right:20px">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
                        accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                        <p class="bot5">Reply<img src="img/reply.png" height="15px" width="15px"></p>
                        <br>

                    <div class="row" style="margin-left:25px">
                        <div class="col-2">
                            <img src="img/Profile1.png" height="50px" width="50px">
                        </div>
                        <div class="col-5">
                            <span class="sub_2"><b>Doubt 1</b></span><br>
                            <span class="sub_9">Username</span>
                        </div>
                        <div class="col-5">
                            <span class="content_2" >24, Jul 2020&emsp; 9:00PM</span>
                        </div>
                    </div>
                    <br>
                    <p id="box_9" style="margin-left:40px;margin-right:20px">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
                        accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                        <p class="bot5">Reply<img src="img/reply.png" height="15px" width="15px"></p>
                    <p class="more_1">Load More +</p>
                </div>
            </div>
        </div><br><br><br>

    </div>


</body>
</html>