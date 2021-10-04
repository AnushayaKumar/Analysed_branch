<?php include('header.php') ?>
<link rel="stylesheet" href="css/my_files.css">
<title>My Files</title>

<div class="main_body">
        <div class="heading_dash">
            <h1 class="head_txt">My files</h1><br>
            <p class="sub_txt">Manage Your Files<button class="addFilesMyTasks" id="myBtn">Add +</button></p>
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
                <input type="text" name="FileName_myTasks" placeholder=" Search by File name" class="centered_span_myTasks">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
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
            <div class="selectAllActions_filterSmall_myTasks" style="margin-left:850px">
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
                <span>
                    <p><img src="img/Prof-1.png" height="50px" width="50px"></p>
                </span>
                <span style="margin-right:30px">
                    <p class="light_spanItem_singleTask_myTasks">Candidate name</p>
                    <p class="j1"><b>Sasuke Uchiha</b></p>
                </span>
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
                <span>
                    <p><img src="img/Ellipse 148-1.png" height="50px" width="50px"></p>
                </span>
                <span style="margin-right:30px">
                    <p class="light_spanItem_singleTask_myTasks">Candidate name</p>
                    <p class="j1"><b>Jiraiya Sama</b></p>
                </span>
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
                <span>
                    <p><img src="img/Profile1.png" height="50px" width="50px"></p>
                </span>
                <span style="margin-right:30px">
                    <p class="light_spanItem_singleTask_myTasks">Candidate name</p>
                    <p class="j1"><b>Hinata Hyuga</b></p>
                </span>
                <div class="button-div_myTasks">
                    <button style="font-size:14px;color:#EC4551">Delete <i class="fa fa-trash" aria-hidden="true"></i></button><br><br>
                    <button style="color:#3598DB">Download <i class="fa fa-file" aria-hidden="true"></i></button>
                </div>
            </div><br><br><br>
        </div>
</div>