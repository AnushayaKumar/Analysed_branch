<?php include('include/header.php')?>
<html>
<head>
  <link rel="stylesheet" href="css/js_task_1.css">

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


<style type="text/css">
 #successcard
  {
    background-color: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    left: 0%;
    top: 0%;
    position: fixed;
    z-index: 2;
    display: none;
  }
  #success-msg
  {
    width: 850px;
    height: 500px;
    background-color: white;
    border-radius: 10px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    padding: 10px;
    /* text-align: center; */
          
  }
</style>
</head>
<body>
    <div id="successcard">
      <div id="success-msg">
          <center>
        <img src="img/tick.png" height="250px" width="400px">
        <p class="c1">Task file uploaded successfully</p>
        <p>lorem ipsum reto alsuy adonti asoplre nkis aypign qnikaam</p>
        <hr style="width:80%;margin-left:10px"></hr>
        <br>
        <button id="btnfinish" onclick="window.location.href = 'js_task.php';">Finish</button></center>
      </div>
    </div>

  
    <div id="upload-modal">
		<div id="upload-container">
			<p class="bot4" style="margin-left:50px;margin-top:50px">Upload task file
            <span id="closeit" class="content_2" style="margin-left:700px">Close</span><br>
            <span class="content_2" style="line-height:0.1">lorem ipsum lorem ipsum</span></p><br>
            <div class="ro" style="margin-left:150px">
                <p style="margin-left:60px;margin-top:40px"><img src="img/upload-box.svg" height="70px" width="80px">
                <span id="sub_3">Drag and drop a task file and watch me go!</span></p>
                <p class="bot4" style="margin-left:250px"> or </p>
                <button class="addFilesMyTasks1" id="myBtn1" onclick=""> Upload </button>
            </div>
        </div>
    </div>

    <br><br><br>
    <div class="head_ele">
        <div class="content_1"><b>Task Name | MCQ  
            <span class="sub_1">Instructions</span></b>
            <span class="sub_2" style="margin-left: 220px;">Added by XYZ</span>
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
                <div class="card" style="width:470px;height:220px">
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
                <div class="card" style="width:470px;height:220px">
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
        
        <div class="card" id="content_3">
            <p class="sub_2" id="box_1"><b>Deadline Countdown</b></p>
            <p class="val_1"><b>72 : 35 : 04</b></p>
            <p class="val_2">Hrs&emsp; &emsp; &emsp; &nbsp; Min&nbsp;&emsp; &emsp; &emsp;  Sec</p>
        </div>
        <br><br><br>
        <div class="row" style="margin-left:220px;margin-right:200px">
            <div class="col-6">
                <button class="val3" onclick="window.location.href = 'js_task.php';">&emsp;&emsp;End Task </button>
            </div>
            <div class="col-6">
                <button id="submittask" class="val4" onclick=""> &emsp;&emsp;Submit Task </button>
            </div>
        </div>
        <br><br><br>
        <div class="card" style="width:950px;height:920px">
            <p class="bot1"><b>Ask query</b>
            <span class="bot2">Newest first</span>&emsp;
            <span class="sub_2"><b>Solved</b></span>
            <img src="img/up.png" height="20px" width="20px"></p><br><br>

            <p class="bot3"><b>Query topic</b>
            <span class="content_2" style="margin-left:570px">24, Jul 2020&emsp; 9:00PM</span></p>
            <p id="box_2" style="margin-left:40px;margin-right:40px">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
                accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
            <p class="content_2" style="margin-left:40px">Response:</p>
            <p style="margin-left:40px" ><img src="img/Ellipse 148.png" height="50px" width="50px"> &nbsp;<span class="bot4"><b>Responder name</b></span>
            <span class="content_2" style="margin-left:500px">24, Jul 2020&emsp; 9:00PM</span></p>
            <p id="box_2" style="margin-left:40px;margin-right:40px">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
                accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
            <p class="bot5">Reply<img src="img/reply.png" height="20px" width="20px"></p>
            <hr style="margin-left:40px;margin-right:30px"></hr>

            <p class="bot3"><b>Query topic</b>
            <span class="content_2" style="margin-left:570px">24, Jul 2020&emsp; 9:00PM</span></p>
            <p id="box_2" style="margin-left:40px;margin-right:40px">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
                accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
            <p class="content_2" style="margin-left:40px">Response:</p>
            <p style="margin-left:40px" ><img src="img/Profile1.png" height="50px" width="50px"> &nbsp;<span class="bot4"><b>Responder name</b></span>
            <span class="content_2" style="margin-left:500px">24, Jul 2020&emsp; 9:00PM</span></p>
            <p id="box_2" style="margin-left:40px;margin-right:40px">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod 
                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
                accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
            <p class="bot5">Reply<img src="img/reply.png" height="20px" width="20px"></p>

        </div>
        <br><br><Br>

    </div>


    <script type="text/javascript">
       $(document).ready(() => {
                $("#submittask").click(() => {
                    $("#upload-modal").show();
                });   

                $("#closeit").click(() => {
                    $("#upload-modal").hide();
                });   

                 $("#myBtn1").click(() => {
                    $("#successcard").show();
                    $("#upload-modal").hide();
                });  

                 $("#btnfinish").click(() => {
                    $("#successcard").hide();
                    $("#upload-modal").hide();
                });        
                
          });
      
    </script>
</body>
</html>