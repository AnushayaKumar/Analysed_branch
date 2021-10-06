<?php include('include/header.php')?>
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

<link rel="stylesheet" href="css/user_profile_files.css">
<body>

    <br><br>
    <div class="container">
    <div class="row" style="margin-left:20px">
        <div class="col-2">
            <div class="card" id="m1">
                <img src="img/img1.png" height="220px" width="278px" id="m2"><br>
                <div class="main_b">
                <p class="v1">Naruto Uzumaki</p>
                <p class="v2">Web developer</p>
                <p class="v3"><img src="img/locat.png" height="14px" width="13px"> Bangalore</p><br>
                <p class="v4">About</p>
                <p class="v3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p><br>
                <p class="v4">naruto@gmail.com</p>
                <p class="v4">+91 9000900090</p><br>
                <p class="v6"><button class="v5" id="myBtn1" > PHP </button>&nbsp;&nbsp;
                <button class="v5" id="myBtn2" > MySQL </button>&nbsp;<br><br>
                <button class="v5" id="myBtn3" > Node.js </button></p>
                </div>
            </div>
        </div>
        <div class="col-10" >
            <div class="categories-mytasks-1-active">
                <button class="x1" id="nac" onclick="location.href='user_activity.php'"> Activity Log </button>
                <button class="x1" id="nac" onclick="location.href='user_profile_login.php'"> Login activity </button>
                <button class="x1" id="ac" onclick="location.href='user_profile_files.php'"> Shared files </button>
            </div><br><br>
               
                    <div class="row" style="margin-left:13%;">
                        <div class="col-4">
                            <div class="card" style="height:80px;width:245px">
                                <div class="row">
                                    <div class="col-3" style="padding-top:10px;">
                                        <img src="img/file_code.png" height="48px" width="45px">
                                    </div>
                                    <div class="col-6">
                                        <span class="v1" style="line-height: 1.7;">File name.py</span><br>
                                        <span class="l1">Added on 03-05-2020 file size</span>
                                    </div>
                                    <div class="col-3" style="margin-left:-5%;margin-top:14px;">
                                         <img src="img/down.png" height="35px" width="35px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 ">
                        <div class="card" style="height:80px;width:245px">
                                <div class="row">
                                    <div class="col-3" style="padding-top:10px;">
                                        <img src="img/file_code.png" height="48px" width="45px">
                                    </div>
                                    <div class="col-6">
                                        <span class="v1" style="line-height: 1.7;">File name.py</span><br>
                                        <span class="l1">Added on 03-05-2020 file size</span>
                                    </div>
                                    <div class="col-3" style="margin-left:-5%;margin-top:14px;">
                                         <img src="img/down.png" height="35px" width="35px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 ">
                        <div class="card" style="height:80px;width:245px">
                                <div class="row">
                                    <div class="col-3" style="padding-top:10px;">
                                        <img src="img/file_code.png" height="48px" width="45px">
                                    </div>
                                    <div class="col-6">
                                        <span class="v1" style="line-height: 1.7;">File name.py</span><br>
                                        <span class="l1">Added on 03-05-2020 file size</span>
                                    </div>
                                    <div class="col-3" style="margin-left:-5%;margin-top:14px;">
                                         <img src="img/down.png" height="35px" width="35px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                  

                    <div class="row" style="margin-left:13%;">
                        <div class="col-4 md-3">
                            <div class="card" style="height:80px;width:245px">
                                <div class="row">
                                    <div class="col-3" style="padding-top:10px;">
                                        <img src="img/file_code.png" height="48px" width="45px">
                                    </div>
                                    <div class="col-6">
                                        <span class="v1" style="line-height: 1.7;">File name.py</span><br>
                                        <span class="l1">Added on 03-05-2020 file size</span>
                                    </div>
                                    <div class="col-3" style="margin-left:-5%;margin-top:14px;">
                                         <img src="img/down.png" height="35px" width="35px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 md-3">
                        <div class="card" style="height:80px;width:245px">
                                <div class="row">
                                    <div class="col-3" style="padding-top:10px;">
                                        <img src="img/file_code.png" height="48px" width="45px">
                                    </div>
                                    <div class="col-6">
                                        <span class="v1" style="line-height: 1.7;">File name.py</span><br>
                                        <span class="l1">Added on 03-05-2020 file size</span>
                                    </div>
                                    <div class="col-3" style="margin-left:-5%;margin-top:14px;">
                                         <img src="img/down.png" height="35px" width="35px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 md-3">
                        <div class="card" style="height:80px;width:245px">
                                <div class="row">
                                    <div class="col-3" style="padding-top:10px;">
                                        <img src="img/file_code.png" height="48px" width="45px">
                                    </div>
                                    <div class="col-6">
                                        <span class="v1" style="line-height: 1.7;">File name.py</span><br>
                                        <span class="l1">Added on 03-05-2020 file size</span>
                                    </div>
                                    <div class="col-3" style="margin-left:-5%;margin-top:14px;">
                                         <img src="img/down.png" height="35px" width="35px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
    </div>
    <br><br><br>
</div>
</body>