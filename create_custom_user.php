<?php include('header.php')?>


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
<link rel="stylesheet" href="css/create_custom_user.css">
<body>
        <p class="head_t">Create custom user</p>
        <p class="sub_1">Provide details and give the user access controls</p><br>
        <p class="sub_22">Personal details</p>
    <div class="main_body" style="margin-left:-1%;">
       <div class="container">
        <div class="row">
            <div class="col-4">
                <p class="sub_3">user type <span style="color:#3598DB"> *</span></p>
                <p class="color:#3598DB;">
                    <select id="opt1">
                        <option value="0" default>&emsp;Recruiter</option>
                        <option value="1">Open</option>
                        <option value="2">Closed</option>
                        <option value="3">Working</option>
                    </select>
                </p>
            </div>
            <div class="col-4">
                <p class="sub_3">Name <span style="color:#3598DB"> *</span></p>
                <input type="text" name="FileName_myTasks" placeholder="&emsp;Enter name of the user" class="inp_1">
            </div>
            <div class="col-4">
                <p class="sub_3">Designation <span style="color:#3598DB"> *</span></p>
                <input type="text" name="FileName_myTasks" placeholder="&emsp;Enter name of the user" class="inp_1">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-4">
                <p class="sub_3">Phone number <span style="color:#3598DB"> *</span></p>
                <input type="text" name="FileName_myTasks" placeholder="&emsp;Enter a 10 digit phone number" class="inp_1">
            </div>
            <div class="col-4">
                <p class="sub_3">Email <span style="color:#3598DB"> *</span></p>
                <input type="text" name="FileName_myTasks" placeholder="&emsp;Write the associated email id" class="inp_1">
            </div>
            <div class="col-4">
                <p class="sub_3">Password <span style="color:#3598DB"> *</span></p>
                <input type="text" name="FileName_myTasks" placeholder="&emsp;Set a password for the account" class="inp_1">
            </div>
        </div>
        <br><br><br>
        <p class="sub_2" style="margin-left:-0px;">Notification details</p><br>
        <input id="individual" type="radio" name="user" value="Individual" checked>
        <label for="individual" id="tem1"><span></span>Allow Email notifications</label>&emsp;&emsp;&emsp;&emsp;

        <input id="organization" type="radio" name="user" value="Organization">
        <label for="organization" id="tem1"><span></span>Allow user to choose settings</label>&emsp;&emsp;&emsp;&emsp;

        <input id="organization" type="radio" name="user" value="Organization">
        <label for="organization" id="tem1"><span></span>Don't allow Email notifications</label><br><br><br>
        <p class="sub_2" style="margin-left:-0px;">User access details  &emsp;&emsp;
            <input type="checkbox" name="checkboxSelectAll_myTasks" class="box_2">
            <label id="te2">&nbsp;Select All</label>
        </p>
        <div class="row">
            <div class="col-3">
                <input type="checkbox" name="checkboxSelectAll_myTasks" class="box_2">
                <label id="te3">&nbsp;Access to database</label>
            </div>
            <div class="col-3">
                <input type="checkbox" name="checkboxSelectAll_myTasks" class="box_2">
                <label id="te3">&nbsp;Can create a job</label>
            </div>
            <div class="col-3">
                <input type="checkbox" name="checkboxSelectAll_myTasks" class="box_2">
                <label id="te3">&nbsp;Can Shortlist candidates</label>
            </div>
            <div class="col-3">
                <input type="checkbox" name="checkboxSelectAll_myTasks" class="box_2">
                <label id="te3">&nbsp;Can add a company</label>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <input type="checkbox" name="checkboxSelectAll_myTasks" class="box_2">
                <label id="te3">&nbsp;Can add tasks</label>
            </div>
            <div class="col-3">
                <input type="checkbox" name="checkboxSelectAll_myTasks" class="box_2">
                <label id="te3">&nbsp;Can hire candidates</label>
            </div>
            <div class="col-3">
                <input type="checkbox" name="checkboxSelectAll_myTasks" class="box_2">
                <label id="te3">&nbsp;Can view analytics</label>
            </div>
            <div class="col-3">
                <input type="checkbox" name="checkboxSelectAll_myTasks" class="box_2">
                <label id="te3">&nbsp;Can view billing details</label>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <input type="checkbox" name="checkboxSelectAll_myTasks" class="box_2">
                <label id="te3">&nbsp;Can start or join video calls</label>
            </div>
            <div class="col-3">
                <input type="checkbox" name="checkboxSelectAll_myTasks" class="box_2">
                <label id="te3">&nbsp;Can schedule interviews</label>
            </div>
            <div class="col-3">
                <input type="checkbox" name="checkboxSelectAll_myTasks" class="box_2">
                <label id="te3">&nbsp;Can add candidaes</label>
            </div>
            <div class="col-3">
                <input type="checkbox" name="checkboxSelectAll_myTasks" class="box_2">
                <label id="te3">&nbsp;Can reply to queries</label>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <input type="checkbox" name="checkboxSelectAll_myTasks" class="box_2">
                <label id="te3">&nbsp;Can create contracts</label>
            </div>
            <div class="col-3">
                <input type="checkbox" name="checkboxSelectAll_myTasks" class="box_2">
                <label id="te3">&nbsp;Can details organisation</label>
            </div>
            <div class="col-3"></div>
            <div class="col-3"></div>
        </div><br><br>
        <button class="addFilesMyTasks1" id="myBtn1" >&emsp; Create User </button><br><br>
     </div>
    </div>
</body>