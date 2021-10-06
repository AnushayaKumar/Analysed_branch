<?php include('include/header.php')?>

<link rel="stylesheet" href="css/admin_panel1.css">
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
#resource_cards
{
  display:none;
}
#vmore
{
  display:none;
}
#collapse
{
  display:none;
}
#extra_cards
{
  display:none;
}
#vless
{
    display:none;
}
</style>
<body>
    <div class="main_body">
        
        <p class="Heading_Dash_1">Admin panel</p>
        <p class="sub_1">Create and manage your user types.<br><br></p>
        <p style="display:flex">
            <button class="addFilesMyTasks1" id="myBtn" > &emsp;Clients &emsp;<i class="fas fa-building"></i>&emsp; </button>
            <button class="addFilesMyTasks1" id="myBtn" > &emsp;Contacts &emsp;<i class="fa fa-address-book"></i>&emsp;</button>
            <button class="addFilesMyTasks1" id="myBtn" >&nbsp;Placements &emsp;<i class="fa fa-user-check"></i>&emsp;</button>
        </p>

      <div class="container" style="margin-left:-1%;">
        <div class="row">
            <div class="col-9"><br>
                <p class="input-field1" style="width:561px;height: 35px;">
                    <a href="/" class="active-breadcrumb-link"><i class="fa fa-filter" aria-hidden="true"></i>&emsp;All types   &emsp;  <span style="color:#979797">|  &emsp;</span></a>   
                    <input type="text" name="searchForJobs" id="inputSearch" class="searchForJobs" placeholder="Search for users"/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <button class="searchButton">
                        <img src="img/search-icon-blue.png" width="15" height="15" style="font:right" />
                    </button>  
                </p>
            </div>
            <div class="col-3"><br>
                <button class="addFilesMyTasks" id="myBtn" >Create New User +</button>
            </div>
        </div>
         <br><br>

        <div class="row">

            <div class="col-10">
                <p class="t1"> Resource team </p>
                <div id="profile_icons">
                    <br>
                    <p>
                    <img src="img/Profile1.png" id="img_e">
                    <img src="img/Prof-1.png" id="img_e">
                    <img src="img/Profile3.png" id="img_e">
                    <img src="img/Profile1.png" id="img_e">
                    <span class="l2"> +2 </span>
                    </p>
                </div>
                <div id="resource_cards">
                <div class="task_5" >
                            <br>
                            <div class="card" id="c5">
                                <div class="int_5">
                                    <p style="color:#EC4551"><i class="fa fa-trash" aria-hidden="true"></i>
                                    <span id="mp1">profile <i class="fas fa-external-link-alt" aria-hidden="true"></i></span></p>

                                    <center>
                                        <img src="img/Ellipse 148.png" height="130px" width="130px">
                                        <p class="l1"><br>Naruto Uzumaki</p>
                                        <p class="l2">Last login <span class="l3">1hr ago</span></p>
                                    </center>
                                </div>
                            </div>
                            <div class="card" id="c5">
                            <div class="int_5">
                                <p style="color:#EC4551"><i class="fa fa-trash" aria-hidden="true"></i>
                                <span id="mp1">profile <i class="fas fa-external-link-alt" aria-hidden="true"></i></span></p>

                                <center>
                                    <img src="img/Ellipse 148-1.png" height="130px" width="130px">
                                    <p class="l1"><br>Naruto Uzumaki</p>
                                    <p class="l2">Last login <span class="l3">1hr ago</span></p>
                                </center>
                            </div>
                        </div>
                        <div class="card" id="c5">
                            <div class="int_5">
                                <p style="color:#EC4551"><i class="fa fa-trash" aria-hidden="true"></i>
                                <span id="mp1">profile <i class="fas fa-external-link-alt" aria-hidden="true"></i></span></p>

                                <center>
                                    <img src="img/Ellipse 148-2.png" height="130px" width="130px">
                                    <p class="l1"><br>Naruto Uzumaki</p>
                                    <p class="l2">Last login <span class="l3">1hr ago</span></p>
                                </center>
                            </div>
                        </div>
                        <div class="card" id="c5">
                            <div class="int_5">
                                <p style="color:#EC4551"><i class="fa fa-trash" aria-hidden="true"></i>
                                <span id="mp1">profile <i class="fas fa-external-link-alt" aria-hidden="true"></i></span></p>

                                <center>
                                    <img src="img/Profile1.png" height="130px" width="130px">
                                    <p class="l1"><br>Naruto Uzumaki</p>
                                    <p class="l2">Last login <span class="l3">1hr ago</span></p>
                                </center>
                            </div>
                        </div>
                </div>
                <!--end of task_5 -->
                </div>
                <br>

                    <div id="extra_cards">
                      <div class="task_5">
                        <div class="card" id="c5">
                            <div class="int_5">
                                <p style="color:#EC4551"><i class="fa fa-trash" aria-hidden="true"></i>
                                <span id="mp1">profile <i class="fas fa-external-link-alt" aria-hidden="true"></i></span></p>

                                <center>
                                    <img src="img/Ellipse 148-2.png" height="130px" width="130px">
                                    <p class="l1"><br>Naruto Uzumaki</p>
                                    <p class="l2">Last login <span class="l3">1hr ago</span></p>
                                </center>
                            </div>
                        </div>
                        <div class="card" id="c5">
                            <div class="int_5">
                                <p style="color:#EC4551"><i class="fa fa-trash" aria-hidden="true"></i>
                                <span id="mp1">profile <i class="fas fa-external-link-alt" aria-hidden="true"></i></span></p>

                                <center>
                                    <img src="img/Profile1.png" height="130px" width="130px">
                                    <p class="l1"><br>Naruto Uzumaki</p>
                                    <p class="l2">Last login <span class="l3">1hr ago</span></p>
                                </center>
                            </div>
                        </div>
                      </div>
                     <!--end of extracards task_5 -->
                    </div>
                
                
                

            </div>
            <div class="col-2">
                <span class="b1" id="expand"> Expand </span>
                <span class="b1" id="collapse"> Collapse </span>
                <div class="b1" id="vmore">View more+</div>
                <div class="b1" id="vless">View lessꟷ</div>
            </div>
        </div>

        <div class="row">
            <div class="col-10">
               <br>
                <p class="t1" style="color:#FFBD06">Finance team<p>
                <p>
                <img src="img/Profile1.png" id="img_e">
                <img src="img/Prof-1.png" id="img_e">
                <img src="img/Profile3.png" id="img_e">
                <span class="l2"> +1 </span>
                </p>
            </div>
            <div class="col-2">
                <br><br>
               <span class="b1">Expand</span>
            </div>
        </div>

        <div class="row">
            <div class="col-10">
               <br><br>
                <p class="t1" style="color:#E84BC4">Master admin</p>
                <p>
                <img src="img/Prof-1.png" id="img_e">
                <img src="img/Profile3.png" id="img_e">
                </p>
            </div>
            <div class="col-2">
                <br><br>
               <span class="b1">Expand</span>
            </div>
        </div>

        <div class="row">
            <div class="col-10">
               <br><br>
               <p class="t1" style="color:#297FB8">Contract care</p>
                <p>
                <img src="img/Profile1.png" id="img_e">
                <img src="img/Prof-1.png" id="img_e">
                <img src="img/Profile3.png" id="img_e">
                <img src="img/Ellipse 148-1.png" id="img_e">
                <span class="l2"> +3 </span>
                </p>
            </div>
            <div class="col-2">
                <br><br>
               <span class="b1">Expand</span>
            </div>
        </div>
        
        <div class="row">
            <div class="col-10">
               <br><br>
               <p class="t1" style="color:#8C60EB">Recruiters</p>
                <p>
                <img src="img/Prof-1.png" id="img_e">
                </p>
            </div>
            <div class="col-2">
                <br><br>
               <span class="b1">Expand</span>
            </div>
        </div>

    </div>
    <!-- end of container -->
</div>
<!-- end of main_body-->


<script type="text/javascript">
 $(document).ready(() => {

        $("#expand").click(function(){
            $("#profile_icons").hide();
            $("#resource_cards").show();
            $("#collapse").show();
            $("#vmore").show();
            $("#expand").hide();
        });

        $("#vmore").click(function(){
            $("#extra_cards").show();
            $("#vmore").hide();
            $("#vless").show();
        });

        $("#vless").click(function(){
            $("#extra_cards").hide();
            $("#vless").hide();
            $("#vmore").show();
        });

        $("#collapse").click(function(){
            $("#extra_cards").hide();
            $("#resource_cards").hide();
            $("#vmore").hide();
            $("#vless").hide();
            $("#profile_icons").show();
            $("#collapse").hide();
            $("#expand").show();
        });

 });
</script>
</body>