<?php include('include/header.php') ?>
<link rel="stylesheet" href="css/js_files.css">


<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<title>My Files</title>
<style type="text/css">
#second2
{
    display: none;
}
</style>
<body>


<div id="upload-modal">
		<div id="upload-container">
			<p class="bot4" style="margin-left:50px;margin-top:50px">Upload task file
            <span id="closeit" class="content_2" style="margin-left:700px">Close</span><br>
            <span class="content_2" style="line-height:0.1">lorem ipsum lorem ipsum</span></p><br>

            <!-- <div class="categories-mytasks-1-active">
                    <p class="category-mytasks1 active" id="category-mytasks1-1">Documents</p>
                    <p class="category-mytasks1 " id="category-mytasks1-2"><a href="jobsNearYou.php" style="color:#333333;">Task Files</a></p>
            </div> -->
            <div class="categories-mytasks-1-active">
                <button class="x1" id="ac" > Documents</button>
                <button class="x1" id="nac"> Task files </button>
            </div>
            
            <div id="first1">
                <div id="ff2" class="filterSmall_myTasks">
                    <select name="" id="">
                        <option value="0">Type of Document </option>
                        <option value="1">10th class result</option>
                        <option value="2">12th class result</option>
                        <option value="1">Degree</option>
                        <option value="2">Post graduation certificate</option>
                    </select>
                </div>
                 <br>
          
              <div class="ro" style="margin-left:150px">
                <div class="cont1">
                    <p><img src="img/upload-box.svg" height="70px" width="80px">
                </div>

                <div id="sub_3">
                    <span>Drag and drop a task <br>file and watch me go!</span></p><br>
                    <p class="bot4" style="margin-left:-2%"> or </p>
                    <br>
                    <button class="addFilesMyTasks1" id="myBtn1" onclick="window.open('js_files.php')"> Upload </button>
                </div>

              </div>
            </div>
            <!--end of first1-->
            <div id="second2">
                <br>
                <br>
              <div class="ro" style="margin-left:150px">
                <div class="cont1">
                    <p><img src="img/upload-box.svg" height="70px" width="80px">
                </div>

                <div id="sub_3">
                    <span>Drag and drop a task <br>file and watch me go!</span></p><br>
                    <p class="bot4" style="margin-left:-2%"> or </p>
                    <br>
                    <button class="addFilesMyTasks1" id="myBtn1" onclick="window.open('js_files.php')"> Upload </button>
                </div>

              </div>
            </div>
            <!--end of second2-->
            
        </div>
</div>

<div class="main_body">
        <div class="heading_dash">
            <h1 class="head_txt">My files</h1><br>
            <p class="sub_txt">Manage Your Files<button class="addFilesMyTasks" id="myBtn20">Add +</button></p>
        </div>
        

        <div class="cards_myTasks">
            <div class="cardItem_myTasks">
                    <p class="memoryUsed_myTasks">30MB/100GB <span class="v1"> Used&emsp;&emsp;&emsp;&emsp;&emsp; Available space</span><br><br>
                    <progress value="7" max="20" ></progress></p>
            </div>
            <div class="cardItem_myTasks">
                <img src="img/Icon material-image.png">
                <span class="centered_span_myTasks">367KB</span>
                <h4 class="headingInCard_myTasks">13</h4>
            </div>
            <div class="cardItem_myTasks">
                <img src="img/Icon awesome-file-pdf.png">
                <span class="centered_span_myTasks">110MB</span>
                <h4 class="headingInCard_myTasks">3</h4>
            </div>
            <div class="cardItem_myTasks">
                <img src="img/Icon awesome-file-alt.png">
                <span class="centered_span_myTasks">500KB</span>
                <h4 class="headingInCard_myTasks">2</h4>
            </div>
        </div><br>
        <div class="filterSection_myTasks">
            <div class="leftFilter_myTasks"><br>
                <img src="img/page.png" height="15px" width="15px">
                <select id="k1">
                    <option value="none" selected disabled hidden >File type</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
                <input type="text" name="FileName_myTasks" placeholder=" Search by File name" class="centered_span_myTasks">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <img src="img/search-icon-blue.png" height="15px" width="15px">
            </div>
            <div class="rightFilter_myTasks">
                <span class="sortByMyTasks">Sort By: </span><span class="recentMyTasks">Recent</span>
                <select name="" id="" class="sortFilter_myTasks">
                    <option value="0">Last Edited ∨</option>
                    <option value="1">Sort A-Z</option>
                    <option value="2">Sort Z-A</option>
                </select>
            </div>
        </div>
        
        <div class="filterSmall_myTasks">
            <select name="" id="">
                <option value="0">All </option>
                <option value="1">Document</option>
                <option value="2">Task file</option>
            </select>
            <div class="selectAllActions_filterSmall_myTasks" style="margin-left:650px">
                <input type="checkbox" name="checkboxSelectAll_myTasks" id="checkboxSelectAll_myTasks">
                <label for="checkboxSelectAll_myTasks">Select All</label>
                <select name="Select action">
                    <option value="0">Select action</option>
                    <option value="1">Copy</option>
                    <option value="2">Cut</option>
                </select>
            </div>
        </div>
        <div class="singleTasks_containerDiv">
            <div class="singletask_myTasks">
                <input type="checkbox" name="checkBoxItem" class="largerCheckbox">
                <span>
                    <p class="light_spanItem_singleTask_myTasks">Added on</p>
                    <p class="j1"><b>05-05-2021</b></p>
                </span>
                <span style="margin-left:30px">
                    <p style="color:#297FB8;margin-bottom:5px;font-size:16px">Filename.pdf</p>
                    <p class="j1"><b>300kb</b></p>
                </span>
                <span style="margin-left:30px">
                    <p class="light_spanItem_singleTask_myTasks">Type of Doc</p>
                    <p class="j1"><b>Resume</b></p>
                </span>
                <!-- <span>
                    <p><img src="img/Prof-1.png" height="50px" width="50px"></p>
                </span>
                <span style="margin-right:30px">
                    <p class="light_spanItem_singleTask_myTasks">Candidate name</p>
                    <p class="j1"><b>Sasuke Uchiha</b></p>
                </span> -->
                <div class="button-div_myTasks">
                    <button style="font-size:14px;color:#EC4551">Delete <i class="fa fa-trash" aria-hidden="true"></i></button><br><br>
                    <button style="color:#3598DB">Download <i class="fa fa-file" aria-hidden="true"></i></button>
                </div>
            </div>
            <div class="singletask_myTasks">
                <input type="checkbox" name="checkBoxItem" class="largerCheckbox">
                <span>
                    <p class="light_spanItem_singleTask_myTasks">Added on</p>
                    <p class="j1"><b>05-05-2021</b></p>
                </span>
                <span style="margin-left:30px">
                    <p style="color:#297FB8;margin-bottom:5px;font-size:16px">Filename.pdf</p>
                    <p class="j1"><b>300kb</b></p>
                </span>
                <span style="margin-left:30px">
                    <p class="light_spanItem_singleTask_myTasks">Type of Doc</p>
                    <p class="j1"><b>Resume</b></p>
                </span>
                <!-- <span>
                    <p><img src="img/Ellipse 148-1.png" height="50px" width="50px"></p>
                </span>
                <span style="margin-right:30px">
                    <p class="light_spanItem_singleTask_myTasks">Candidate name</p>
                    <p class="j1"><b>Jiraiya Sama</b></p>
                </span> -->
                <div class="button-div_myTasks">
                    <button style="font-size:14px;color:#EC4551">Delete <i class="fa fa-trash" aria-hidden="true"></i></button><br><br>
                    <button style="color:#3598DB">Download <i class="fa fa-file" aria-hidden="true"></i></button>
                </div>
            </div>
            <div class="singletask_myTasks">
                <input type="checkbox" name="checkBoxItem" class="largerCheckbox">
                <span>
                    <p class="light_spanItem_singleTask_myTasks">Added on</p>
                    <p class="j1"><b>05-05-2021</b></p>
                </span>
                <span style="margin-left:30px">
                    <p style="color:#297FB8;margin-bottom:5px;font-size:16px">Filename.pdf</p>
                    <p class="j1"><b>300kb</b></p>
                </span>
                <span style="margin-left:30px">
                    <p class="light_spanItem_singleTask_myTasks">Type of Doc</p>
                    <p class="j1"><b>Resume</b></p>
                </span>
                <!-- <span>
                    <p><img src="img/Profile1.png" height="50px" width="50px"></p>
                </span>
                <span style="margin-right:30px">
                    <p class="light_spanItem_singleTask_myTasks">Candidate name</p>
                    <p class="j1"><b>Hinata Hyuga</b></p>
                </span> -->
                <div class="button-div_myTasks">
                    <button style="font-size:14px;color:#EC4551">Delete <i class="fa fa-trash" aria-hidden="true"></i></button><br><br>
                    <button style="color:#3598DB">Download <i class="fa fa-file" aria-hidden="true"></i></button>
                </div>
            </div><br><br><br>
        </div>
</div>
<script type="text/javascript">
       $(document).ready(() => {
           
                $("#myBtn20").click(() => {
                    $("#upload-modal").show();
                }); 

                $("#closeit").click(() => {
                    $("#upload-modal").hide();
                }); 
                
                $("#ac").click(function(){
                    $("#ac").css({"border-bottom": "3px solid #3598DB"});
                    $("#nac").css({"border-bottom": "#000000"});
                    $("#ac").css({"color": "#3598DB"});
                    $("#nac").css({"color": "#979797"});
                    $("#second2").hide();
                    $("#first1").show();
                });

                $("#nac").click(function(){
                    $("#nac").css({"border-bottom": "3px solid #3598DB"});
                    $("#ac").css({"border-bottom": "#000000"});
                    $("#nac").css({"color": "#3598DB"});
                    $("#ac").css({"color": "#979797"});
                    $("#first1").hide();
                    $("#second2").show();
                });

                $("button").click(function(){
                    $("nac").css({"background-color": "yellow", "font-size": "200%"});
                });
                
          });
      
    </script>
</body>