<?php include('include/header.php')?>

<link rel="stylesheet" href="css/js_search_result.css">
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
    <div class="right_shift">
       <div class="heading">
           Search
       </div>
       <div class="subHead">
            Search for jobs, candidates, clients and more
       </div><br><br><br>
       <div class="input-field2">
          <input
            name="searchForJobs"
            id="inputSearch"
            class="searchForJobs"
            placeholder="Machine Lear"
          />
          <!-- &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          &emsp;&emsp;&emsp; &emsp;&emsp; -->
          <button class="searchButton1"  style="color: #3598DB;margin-left: 600px;">
          <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </div><br><br>
        <div style="display:flex">
            <button class="addFilesMyTasks1" id="myBtn1" onclick="window.location.href = 'js_search_result_1.php';"> People </button>&emsp;&emsp;
            <button class="addFilesMyTasks1" id="myBtn2" > Jobs </button>&emsp;&emsp;
            <button class="addFilesMyTasks1" id="myBtn3" > Companies </button>&emsp;&emsp;
            <button class="addFilesMyTasks1" id="myBtn1" > &nbsp;Groups </button>&emsp;&emsp;
            <button class="addFilesMyTasks1" id="myBtn1" >&nbsp; Events </button>&emsp;&emsp;
            <button class="addFilesMyTasks1" id="myBtn1" > Courses </button>
        </div><br><br><br>
        <div class="card" style="width:1000px;height:500px">
            <p id="val1"><b>People </b></p><br>
            <div class="row">
                <div class="col-2">&emsp;&emsp;&emsp;&emsp;
                    <img src="img/prof.png" height="71px" width="71px">
                </div>
                <div class="col-10">
                    <span id="val1"><b>Lorem Member</b></span><br>
                    <span id="val2">Lea at Machine Vibration Engineering</span><br>
                    <span id="val3">India</span>
                    <hr id="val4"></hr>
                </div>
            </div>  
            <div class="row">
                <div class="col-2">&emsp;&emsp;&emsp;&emsp;
                    <img src="img/Ellipse 148-2.png" height="71px" width="71px">
                </div>
                <div class="col-10">
                    <span id="val1"><b>Lorem Member</b></span><br>
                    <span id="val2">Machine operator at Williams Lea</span><br>
                    <span id="val3">Great Norwich Area, United Kingdom</span>
                    <hr id="val4"></hr>
                </div>
            </div>  
            <div class="row">
                <div class="col-2">&emsp;&emsp;&emsp;&emsp;
                    <img src="img/Profile3.png" height="71px" width="71px">
                </div>
                <div class="col-10">
                    <span id="val1"><b>Lorem Member</b></span><br>
                    <span id="val2">Machine operator at de Lea rue</span><br>
                    <span id="val3">Malta</span>
                </div>
            </div>  
            <hr></hr><br>
            <p id="val5">See all result</p>
        </div>

        <br><br>

        <div class="card" style="width:1000px;height:500px">
            <p id="val1"><b>Companies</b></p><br>
            <div class="row">
                <div class="col-2">&emsp;&emsp;&emsp;&emsp;
                    <img src="img/m-circle.png" height="71px" width="71px">
                </div>
                <div class="col-10">
                    <span id="val1"><b>Lea Machine Service Inc</b></span><br>
                    <span id="val2">Industrial Automation, Hollywood, Florida</span><br>
                    <span id="val3">4 Jobs opening</span>
                    <hr id="val4"></hr>
                </div>
            </div>  
            <div class="row">
                <div class="col-2">&emsp;&emsp;&emsp;&emsp;
                    <img src="img/m-circle.png" height="71px" width="71px">
                </div>
                <div class="col-10">
                    <span id="val1"><b>Lea Machine Service Inc</b></span><br>
                    <span id="val2">Industrial Automation, Hollywood, Florida</span><br>
                    <span id="val3">4 Jobs opening</span>
                    <hr id="val4"></hr>
                </div>
            </div>  
            <div class="row">
                <div class="col-2">&emsp;&emsp;&emsp;&emsp;
                    <img src="img/m-circle.png" height="71px" width="71px">
                </div>
                <div class="col-10">
                    <span id="val1"><b>Lea Machine Service Inc</b></span><br>
                    <span id="val2">Industrial Automation, Hollywood, Florida</span><br>
                    <span id="val3">4 Jobs opening</span>
                </div>
            </div>  
            <hr></hr><br>
            <p id="val5">See all result</p>
        </div>

        <br><br>

        <div class="card" style="width:1000px;height:500px">
            <p id="val1"><b>Jobs </b></p><br>
            <div class="row">
                <div class="col-2">&emsp;&emsp;&emsp;&emsp;
                    <img src="img/icon.png" height="71px" width="71px">
                </div>
                <div class="col-10">
                    <span id="val1"><b>Machine Learning Engineering</b></span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <img src="img/share-icon.png" height="20px" width="22px">&emsp;
                    <img src="img/star-icon.png" height="20px" width="22px"><br>
                    <span id="val2">Quantipihi</span><br>
                    <span id="val3">Mumbai, Maharashtra, India</span><br>
                    <span id="val3"><img src="img/check.png" height="20px" width="20px">Actively recruiting</span><br>
                    <span id="val3">3 days ago . Easy apply</span>
                    <hr id="val4"></hr>
                </div>
            </div>  
            <div class="row">
                <div class="col-2">&emsp;&emsp;&emsp;&emsp;
                    <img src="img/icon3.png" height="71px" width="71px">
                </div>
                <div class="col-10">
                    <span id="val1"><b>Machine Learning Research Scientist</b></span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <img src="img/share-icon.png" height="22px" width="22px">&emsp;
                    <img src="img/star-icon.png" height="22px" width="22px"><br>
                    <span id="val2">Insilico</span><br>
                    <span id="val3">Bengaluru, Karnataka, India</span><br>
                    <span id="val3"><img src="img/check.png" height="20px" width="20px">Actively recruiting</span><br>
                    <span id="val3">3 days ago .<span class="subhead"> 1 applicant</span> </span>
                </div>
            </div>  
            <hr></hr><br>
            <p id="val5">See all result</p>
        </div>

        <br><br>
        <a href="#" class="previous">&laquo; Previous</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <span id="down-text">
            <a href="#" class="mid">1 </a>
            <a href="#" class="coming">2</a>
            <a href="#" class="coming">3</a>
            <a href="#" class="coming">4</a>
            <a href="#" class="coming">5</a>
            <a href="#" class="coming">6</a>
            <a href="#" class="coming">7</a>
            <a href="#" class="coming">. . . </a>
            <a href="#" class="coming">56</a>
        </span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <a href="#" class="next">Next &raquo;</a>
        <br><br><br><br><br><br><br><br><br><br>
    </div>

</body>