<?php include('include/header.php') ?>
<head>
<title>Dashboard</title>
        <!-- <link rel="stylesheet" href="job_listings_files2.css"> -->
       <link rel="stylesheet" href="css/job_listings_activity_res.css">
      

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

    <style type="text/css">
        #web_down_icon, #re_down_icon, #sr_down_icon,  #place_down_icon
       {
          display: none;
       }

       #webresponses,  #ResumeEvaluation, #SubmittedResumes,  #Placements
       {
          display: none;
       }
      
    </style>

</head> 
<body>
<div class="bread-crumbs_Mytools-recruiter" style="margin-left:100px">
            <a href="" class="active-breadcrumb-link">Dashboard</a> >  <a href="" class="active-breadcrumb-link">My Database</a> >  <a href="" class="active-breadcrumb-link"><u>Job_Listings</u></a>
            >  <a href="" class="active-breadcrumb-link"><u>Actural Assistant</u></a>
        </div>
<div class="container" style="margin-left:150px">
  <div class="small_container">
        
    
        <div class="heading_dash1">
            <div class="row-flex-jobj">
                <h1 class="mainHeadingDash">Actural Assistant</h1>
            </div>
                    <div class="row-flex-jobj">
                        <a href="#">XYZ Pharmaceuticals- </a> #1544-1
                        
                    </div> 
                    <p><br>05-05-2020</p>
        </div>


      <div class="row"> 
               <div class="col-lg-1 mb-4">
               <div class="options">
                <p ><a href="jobs_listings_activity_eval-1.php" style="color: #979797">Glance</a></p>
                <p><a href="jobs_listings_activity_eval-1.php" style="color: #979797">Applicants</a></p>
                <p style="color:#3598DB;margin-left:-2px"> <b style="margin-right: 5px;">|</b>Activity</p>
                <p><a href="Job_listings_files.php" style="color: #979797">Files</a></p>
                <p><a href="job_listings_notes.php" style="color: #979797">Notes</a></p>
                <p><a href="job_listings_pub-2.php" style="color: #979797">Publish</a></p>
            </div>
    </div>
              
             
               <div class="col-lg-8 mb-4">
               <p><br><br><b>Web responses</b>
                    <button id="web_right_icon"> <img src="img/dropdown_icon.jpeg" width="20px" height="20px"> </button>
                    <button id="web_down_icon"> <img src="img/dropdown_icon2.jpeg" width="20px" height="20px"> </button>
                </p>
               
               <br>
              <div id="webresponses">
                   <div class="row">
                       <div class="col-7">
                                <div class="leftFilter_myTasks" style="width:450px;">
                                    
                                        <img src="img/chrome.png" width="20px" height="20px">
                                   
                                    <select >

                                        <option value="none" selected disabled hidden id="value_sel">All sources</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                    <input type="text" name="FileName_myTasks" placeholder="Search by candidate" class="inputSearchFileName_myTasks">
                                    <button class="searchButton_myTasks"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    
                                </div>
                        </div>

                        <div class="col-5">
                             <div class="row">
                                <div class="rightFilter_myTasks">
                                        <span class="sortByMyTasks"style="margin-left:100px">Sort By: </span><span class="recentMyTasks">Recent </span>
                                             Source
                                            <!-- <img src="img/dropdown.png" width="5px" height="5px"> -->
                                 </div>
                             </div>
                             <div class="row">
                                    <div class="filterSmall_myTasks">
                                        <div class="selectAllActions_filterSmall_myTasks">
                                        &emsp;
                                            <input type="checkbox" name="checkboxSelectAll_myTasks" id="checkboxSelectAll_myTasks">
                                            <label for="checkboxSelectAll_myTasks">Select All</label>
                                            <select name="Select action" style="color:#979797;width:80px">
                                               
                                                <option value="0">Select Action &nbsp;v</option>
                                                <option value="1">Copy</option>
                                                <option value="2">Cut</option>
                                            </select>
                                        </div>
                                    </div>
                             </div>
                              
                        </div>
                   </div>
                        <div class="singleTasks_containerDiv">
                          <div class="singletask_myTasks">
                                  <input type="checkbox" name="checkBoxItem" >&emsp;
                                  <span>
                                      <p class="light_spanItem_singleTask_myTasks">Added on</p>
                                      <p style="color:#333333;font-size:14px">05-05-2021</p>
                                  </span>&emsp;
                                  <img src="img/Ellipse 148.png" width="50px" height="50px">&emsp;
                                  <span>
                                      <p style="color:#297FB8;margin-bottom:5px;margin-right:50px;font-size:14px">John smith&emsp;<span style="color:#333333;font-size:14px">B.Tech</span></p>
                                      <p style="color:#333333;margin-bottom:5px;font-size:14px">sayanbhaattacharaya@gmail.com&emsp;&emsp;&emsp;</p>
                                  </span>

                                  <span style="color:#297FB8;margin-bottom:5px;font-size:14px">Linkedin&emsp;</span>
                                  <span style="color:#333333;font-size:14px">2 years experience</span>
                              </div>
                              
                              <div class="singletask_myTasks">
                                  <input type="checkbox" name="checkBoxItem" >&emsp;
                                  <span>
                                      <p class="light_spanItem_singleTask_myTasks">Added on</p>
                                      <p style="color:#333333;font-size:14px">05-05-2021</p>
                                  </span>&emsp;
                                  <img src="img/Ellipse 148.png" width="50px" height="50px">&emsp;
                                  <span>
                                      <p style="color:#297FB8;margin-bottom:5px;margin-right:50px;font-size:14px">John smith&emsp;<span style="color:#333333;font-size:14px">B.Tech</span></p>
                                      <p style="color:#333333;margin-bottom:5px;font-size:14px">sayanbhaattacharaya@gmail.com&emsp;&emsp;&emsp;</p>
                                  </span>

                                  <span style="color:#297FB8;margin-bottom:5px;font-size:14px">Linkedin&emsp;</span>
                                  <span style="color:#333333;font-size:14px">2 years experience</span>
                              </div>

                              <div class="singletask_myTasks">
                                  <input type="checkbox" name="checkBoxItem" >&emsp;
                                  <span>
                                      <p class="light_spanItem_singleTask_myTasks">Added on</p>
                                      <p style="color:#333333;font-size:14px">05-05-2021</p>
                                  </span>&emsp;
                                  <img src="img/Ellipse 148.png" width="50px" height="50px">&emsp;
                                  <span>
                                      <p style="color:#297FB8;margin-bottom:5px;margin-right:50px;font-size:14px">John smith&emsp;<span style="color:#333333;font-size:14px">B.Tech</span></p>
                                      <p style="color:#333333;margin-bottom:5px;font-size:14px">sayanbhaattacharaya@gmail.com&emsp;&emsp;&emsp;</p>
                                  </span>

                                  <span style="color:#297FB8;margin-bottom:5px;font-size:14px">Linkedin&emsp;</span>
                                  <span style="color:#333333;font-size:14px">2 years experience</span>
                              </div>
                    </div>
                    <br>
                  </div>
                   <!--end of web responses -->


                   <p><b>Resume Evaluation</b>
                    <button id="re_right_icon"> <img src="img/dropdown_icon.jpeg" width="20px" height="20px"> </button>
                    <button id="re_down_icon"> <img src="img/dropdown_icon2.jpeg" width="20px" height="20px"> </button>
                </p>
               
               <br>
              <div id="ResumeEvaluation">
                   <div class="row">
                       <div class="col-6">
                            <div class="leftFilter_myTasks" style="width:400px;">
                                    
                                    <img src="img/eye.png" width="20px" height="20px">
                               
                                <select >

                                    <option value="none" selected disabled hidden id="value_sel">Search Recruiter</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                <input type="text" name="FileName_myTasks" placeholder="Search by candidate" class="inputSearchFileName_myTasks">
                                <button class="searchButton_myTasks"><i class="fa fa-search" aria-hidden="true"></i></button>
                                
                            </div>
                        </div>
                        <div class="col-6">
                        <div class="row">
                                <div class="rightFilter_myTasks">
                                        <span class="sortByMyTasks"style="margin-left:100px">Sort By: </span><span class="recentMyTasks">Recent </span>
                                             Last Edited
                                            <!-- <img src="img/dropdown.png" width="5px" height="5px"> -->
                                 </div>
                             </div>
                             <div class="row">
                                    <div class="filterSmall_myTasks">
                                        <div class="selectAllActions_filterSmall_myTasks">
                                        &emsp;&emsp;&emsp;
                                            <input type="checkbox" name="checkboxSelectAll_myTasks" id="checkboxSelectAll_myTasks">
                                            <label for="checkboxSelectAll_myTasks">Select All</label>
                                            <select name="Select action" style="color:#979797;width:80px">
                                               
                                                <option value="0">Select Action &nbsp;v</option>
                                                <option value="1">Copy</option>
                                                <option value="2">Cut</option>
                                            </select>
                                        </div>
                                    </div>
                             </div>
                              
                        </div>
                   </div>
                          <div class="singleTasks_containerDiv">
                          <div class="singletask_myTasks">
                            <input type="checkbox" name="checkBoxItem" id="te2" > &emsp;
                            <span>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Last updated</p>
                                <p style="font-size:12px">05-05-2021</p>
                            </span>
                            <img src="img/Prof-1.png" width="50px" height="50px">
                            <span>
                                
                            <p class="light_spanItem_singleTask_myTasks1" style="font-size:14px;line-height:1px">John smith (B.Tech)</p>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:12px">sayanbhaattacharaya@gmail.com</p>
                            </span>&emsp;
                            <span>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Status</p>
                                <p style="color:#EC4551;font-size:12px">Rejected</p>
                            </span>&emsp;
                            <span>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Through</p>
                                <p style="color:#3598DB;font-size:13px">LinkedIn</p>
                            </span>&emsp;&emsp;
                            <span>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Recruiter</p>
                                <p style="font-size:13px"><b>Recruiter</b></p>
                            </span>&emsp;
                            <span>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Added on  <span style="color:#333333">05-05-2020</span></p>
                                <p style="color:#3598DB;font-size:13px">&emsp;View resume</p>
                            </span>
                            
                        </div>


                        <div class="singletask_myTasks">
                            <input type="checkbox" name="checkBoxItem" id="te2" > &emsp;
                            <span>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Last updated</p>
                                <p style="font-size:12px">05-05-2021</p>
                            </span>
                            <img src="img/Profile1.png" width="50px" height="50px">
                            <span>
                                
                            <p class="light_spanItem_singleTask_myTasks1" style="font-size:14px;line-height:1px">John smith (B.Tech)</p>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:12px">sayanbhaattacharaya@gmail.com</p>
                            </span>&emsp;
                            <span>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Status</p>
                                <p style="color:#51C46D;font-size:12px">Approved</p>
                            </span>&emsp;
                            <span>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Through</p>
                                <p style="color:#3598DB;font-size:13px">LinkedIn</p>
                            </span>&emsp;
                            <span>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Recruiter</p>
                                <p style="font-size:13px"><b>Recruiter</b></p>
                            </span>&emsp;
                            <span>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Added on  <span style="color:#333333">05-05-2020</span></p>
                                <p style="color:#3598DB;font-size:13px">&emsp;View resume</p>
                            </span>
                            
                        </div>
                        

                        <div class="singletask_myTasks">
                            <input type="checkbox" name="checkBoxItem" id="te2" > &emsp;
                            <span>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Last updated</p>
                                <p style="font-size:12px">05-05-2021</p>
                            </span>
                            <img src="img/Profile3.png" width="50px" height="50px">
                            <span>
                                
                            <p class="light_spanItem_singleTask_myTasks1" style="font-size:14px;line-height:1px">John smith (B.Tech)</p>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:12px">sayanbhaattacharaya@gmail.com</p>
                            </span>&emsp;
                            <span>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Status</p>
                                <p style="color:#FFBD06;font-size:12px">Shortlisted</p>
                            </span>&emsp;
                            <span>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Through</p>
                                <p style="color:#3598DB;font-size:13px">LinkedIn</p>
                            </span>&emsp;
                            <span>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Recruiter</p>
                                <p style="font-size:13px"><b>Recruiter</b></p>
                            </span>&emsp;
                            <span>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Added on  <span style="color:#333333">05-05-2020</span></p>
                                <p style="color:#3598DB;font-size:13px">&emsp;View resume</p>
                            </span>
                            
                        </div>
                    </div>
                    <br>

                  </div>
                   <!--end of ResumeEvaluation -->
                              



                   <p><b>Submitted Resumes</b>
                    <button id="sr_right_icon"> <img src="img/dropdown_icon.jpeg" width="20px" height="20px"> </button>
                    <button id="sr_down_icon"> <img src="img/dropdown_icon2.jpeg" width="20px" height="20px"> </button>
                </p>
               
               <br>
              <div id="SubmittedResumes">
                   <div class="row">
                       <div class="col-6">
                                <div class="leftFilter_myTasks" style="width:450px;">
                                    
                                        <img src="img/eye.png" width="20px" height="20px">
                                   
                                    <select>

                                        <option value="none" selected disabled hidden>Select contact</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                    <input type="text" name="FileName_myTasks" placeholder="Search by candidate" class="inputSearchFileName_myTasks">
                                    <button class="searchButton_myTasks"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    
                                </div>
                        </div>

                        <div class="col-2">
                                    
                        </div>

                        <div class="col-4">
                             <div class="row">
                                <div class="rightFilter_myTasks">
                                        <span class="sortByMyTasks">Sort By: </span><span class="recentMyTasks">Recent &emsp;</span>
                                             Last Edited
                                            <img src="img/dropdown.png" width="16px" height="12px">
                                 </div>
                             </div>
                        </div>
                   </div>
                          <div class="singleTasks_containerDiv">

                              <div class="singletask_myTasks">
                                    <img src="img/Ellipse 148.png" width="50px" height="50px">&emsp;
                                  <span>
                                      <p style="color:#297FB8;margin-bottom:5px;margin-right:100px;font-size:13px">John smith&emsp;<span style="color:#333333">B.Tech</span></p>
                                      <p style="font-size:13px">sayanbhaattacharaya@gmail.com&emsp;&emsp;</p>
                                  </span>
                                  <img src="img/Prof-1.png" width="50px" height="50px">
                                  <span>
                                        <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Recruiter</p>
                                        <p style="font-size:13px"><b>Recruiter</b></p>
                                    </span>&emsp;
                                    <img src="img/Prof-2.png" width="50px" height="50px">
                                  <span>
                                        <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Company contact</p>
                                        <p style="font-size:13px"><b>contact name</b></p>
                                    </span>&emsp;
                                    <span>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Sent on  <span style="color:#333333">05-05-2020</span></p>
                                <p style="color:#3598DB;font-size:13px">&emsp;&emsp;&emsp;View resume</p>
                            </span>
                              </div>
                              <div class="singletask_myTasks">
                                    <img src="img/Ellipse 148.png" width="50px" height="50px">&emsp;
                                  <span>
                                      <p style="color:#297FB8;margin-bottom:5px;margin-right:100px;font-size:13px">John smith&emsp;<span style="color:#333333">B.Tech</span></p>
                                      <p style="font-size:13px">sayanbhaattacharaya@gmail.com&emsp;&emsp;</p>
                                  </span>
                                  <img src="img/Prof-1.png" width="50px" height="50px">
                                  <span>
                                        <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Recruiter</p>
                                        <p style="font-size:13px"><b>Recruiter</b></p>
                                    </span>&emsp;
                                    <img src="img/Prof-2.png" width="50px" height="50px">
                                  <span>
                                        <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Company contact</p>
                                        <p style="font-size:13px"><b>contact name</b></p>
                                    </span>&emsp;
                                    <span>
                                <p class="light_spanItem_singleTask_myTasks" style="font-size:13px">Sent on  <span style="color:#333333">05-05-2020</span></p>
                                <p style="color:#3598DB;font-size:13px">&emsp;&emsp;&emsp;View resume</p>
                            </span>
                              </div>
                      
                    </div>
                    <br>

                  </div>
                   <!--end of Submitted Resumes -->



                   <p><b>Placements</b>
                    <button id="place_right_icon"> <img src="img/dropdown_icon.jpeg" width="20px" height="20px"> </button>
                    <button id="place_down_icon"> <img src="img/dropdown_icon2.jpeg" width="20px" height="20px"> </button>
                </p>
               
               <br>
              <div id="Placements">
                   <div class="row">
                       <div class="col-6">
                                <div class="leftFilter_myTasks" style="width:400px;">
                                    
                                        <img src="files_icon.png" width="20px" height="20px">
                                   
                                    <select>

                                        <option value="none" selected disabled hidden>File type</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                    <input type="text" name="FileName_myTasks" placeholder="Search Your File" class="inputSearchFileName_myTasks">
                                    <button class="searchButton_myTasks"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    
                                </div>
                        </div>

                        <div class="col-2">
                                    
                        </div>

                        <div class="col-4">
                             <div class="row">
                                <div class="rightFilter_myTasks">
                                        <span class="sortByMyTasks">Sort By: </span><span class="recentMyTasks">Recent &emsp;</span>
                                             Last Edited
                                            <img src="img/dropdown.png" width="16px" height="12px">
                                 </div>
                             </div>
                             <div class="row">
                                    <div class="filterSmall_myTasks">
                                        <div class="selectAllActions_filterSmall_myTasks">
                                        &emsp;
                                            <input type="checkbox" name="checkboxSelectAll_myTasks" id="checkboxSelectAll_myTasks">
                                            <label for="checkboxSelectAll_myTasks">Select All</label>
                                            <select name="Select action" id="" style="color:#979797">
                                               
                                                <option value="0">Select Action &emsp;&emsp;&emsp;&emsp;&emsp;V</option>
                                                <option value="1">Copy</option>
                                                <option value="2">Cut</option>
                                            </select>
                                        </div>
                                    </div>
                             </div>
                              
                        </div>
                   </div>
                          <div class="singleTasks_containerDiv">
                              <div class="singletask_myTasks">
                                  <input type="checkbox" name="checkBoxItem" >
                                  <span>
                                      <p class="light_spanItem_singleTask_myTasks">Added on</p>
                                      <p>05-05-2021</p>
                                  </span>
                                  <span>
                                      <p style="color:#297FB8;margin-bottom:5px;">Filename.pdf</p>
                                      <p>300kb</p>
                                  </span>

                                  <span>
                                      <p style="color:#333333;margin-bottom:5px;">Resume</p>
                                      <p style="color:#51C46D">View <img src="img/greeneye.png" width="23px" height="17px"></p>
                                  </span>

                                  <span>
                                      <p style="margin-bottom:5px;">Internal</p>
                                      <p >System verified</p>
                                  </span>
                                 
                               
                                      <img src="img/Ellipse 148.png" width="50px" height="50px">
                                  <span>
                                      <p class="light_spanItem_singleTask_myTasks">Uploaded by</p>
                                      <p>Chuimui Ghargata</p>
                                  </span>
                                  <div class="button-div_myTasks">
                                      <button style="font-size:14px;color:#EC4551">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                                      <button style="color:#3598DB">Download <i class="fa fa-file" aria-hidden="true"></i></button>
                                  </div>
                              </div>
                              <div class="singletask_myTasks">
                                  <input type="checkbox" name="checkBoxItem" >
                                  <span>
                                      <p class="light_spanItem_singleTask_myTasks">Added on</p>
                                      <p>05-05-2021</p>
                                  </span>
                                  <span>
                                      <p style="color:#297FB8;margin-bottom:5px;">Filename.pdf</p>
                                      <p>300kb</p>
                                  </span>

                                  <span>
                                      <p style="color:#333333;margin-bottom:5px;">Resume</p>
                                      <p style="color:#51C46D">View <img src="img/greeneye.png" width="23px" height="17px"></p>
                                  </span>

                                  <span>
                                      <p style="margin-bottom:5px;">Internal</p>
                                      <p >System verified</p>
                                  </span>
                                 
                               
                                      <img src="img/Ellipse 148.png" width="50px" height="50px">
                                  <span>
                                      <p class="light_spanItem_singleTask_myTasks">Uploaded by</p>
                                      <p>Chuimui Ghargata</p>
                                  </span>
                                  <div class="button-div_myTasks">
                                      <button style="font-size:14px;color:#EC4551">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                                      <button style="color:#3598DB">Download <i class="fa fa-file" aria-hidden="true"></i></button>
                                  </div>
                              </div>

                              <div class="singletask_myTasks">
                                  <input type="checkbox" name="checkBoxItem" >
                                  <span>
                                      <p class="light_spanItem_singleTask_myTasks">Added on</p>
                                      <p>05-05-2021</p>
                                  </span>
                                  <span>
                                      <p style="color:#297FB8;margin-bottom:5px;">Filename.pdf</p>
                                      <p>300kb</p>
                                  </span>

                                  <span>
                                      <p style="color:#333333;margin-bottom:5px;">Resume</p>
                                      <p style="color:#51C46D">View <img src="img/greeneye.png" width="23px" height="17px"></p>
                                  </span>

                                  <span>
                                      <p style="margin-bottom:5px;">Internal</p>
                                      <p >System verified</p>
                                  </span>
                                 
                                    <img src="img/Ellipse 148.png" width="50px" height="50px">
                                  <span>
                                      <p class="light_spanItem_singleTask_myTasks">Uploaded by</p>
                                      <p>Chuimui Ghargata</p>
                                  </span>
                                  <div class="button-div_myTasks">
                                      <button style="font-size:14px;color:#EC4551">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                                      <button style="color:#3598DB">Download <i class="fa fa-file" aria-hidden="true"></i></button>
                                  </div>
                              </div>

                      
                    </div>
                    <br>

                  </div>
                   <!--end of Placements -->


                        
                  </div>
                <!-- end of column -->

                <div class="col-lg-3 mb-4">
        <div class="card" style="height:3000px;width:240px">
            <div class="card-body">
                <div class="right-panel" style="text-align:center">
                    <br>
                    <div id="box_12">
                        #JB1554-1&emsp;&emsp;
                        <span style="color:#979797;font-size:13px">05-05-2020</span>
                    </div><br>
                    <div class="status-name">
                        <!-- <div> -->
                        <span id="r1"><img src="img/red-logo.png" width="15" height="15"> Acturial Assistant</span>
                        <p style="color:#3598DB;font-size: 14px">XYZ Pharmaceuticals<img src="img/launch-24px.png" width="15" height="17"><br>
                        <span style="color:#979797;font-size:14px"><i class="fa fa-map-marker"></i> Hyderabad</span><br>
                        <span style="color:#979797;line-height: 3;"> Full-time</p>
                        <hr style="color:#979797;width:100%"></hr>
                    </div>
                    <!-- <div class="displayname">  -->
                    <div>
                        
                        <img src="img/eye-icon.jpg" width="25" height="20">&emsp;&emsp;
                        <img src="img/task-icon.png" width="23" height="25">&emsp;&emsp;
                        <img src="img/person-icon.png" width="23" height="20">
                    </div>
                        <!-- <div class="displayname">  -->
                    <div>
                        <p><b>10 &nbsp;&emsp;&emsp;6 &nbsp;&emsp;&emsp;1/4</b></p>
                    </div><br><br>
                        <!-- <div class="displayname">  -->
                    <div>
                        <p style="color:#979797; line-height:10%;font-size:14px">Status &emsp;&emsp;&emsp;Last Contact</p>
                        <p><span style="color:#51C46D;">Active&nbsp;&emsp;&emsp;&emsp;</span><span style="">20-05-2020</span></p>
                    </div><br>
                    <!-- <div class="displayname">  -->
                    <div>
                        <p style="color:#979797; line-height:10%;font-size:14px">Industry&emsp;&emsp;&emsp; Qualification req</p>
                        <p style="color:#333333; "><b>IT&emsp;&emsp;&emsp;&emsp;&emsp; PG&emsp;&emsp;</b></p>
                    </div><br>
                    <!-- <div class="displayname"> -->
                    <div class="info1">
                        <div>
                            <p style="color:#979797; ">Created by</p>
                            <p style="color:#3598DB; ">Curtis Kelley</p>
                            <p style="color:#333333; line-height:10%">philipmartin@gmail.com</p>
                            <p style="color:#333333; line-height:30%">+91 9000900090</p>
                        </div><br>

                        <!-- <div class="displayname"> -->
                        <div>
                            <p style="color:#979797; ">Active Contact</p>
                            <p style="color:#3598DB; ">Curtis Kelley</p>
                            <p style="color:#333333; line-height:10%">philipmartin@gmail.com</p>
                            <p style="color:#333333; line-height:30%">+91 9000900090</p>
                        </div><br>

                        <!-- <div class="displayname"> -->
                        <div>
                            <p style="color:#979797; ">Assigned to</p>
                            <p style="color:#3598DB; ">Curtis Kelley</p>
                            <p style="color:#333333; line-height:10%">philipmartin@gmail.com</p>
                            <p style="color:#333333; line-height:30%">+91 9000900090</p>
                        </div><br>

                        <!-- <div class="displayname"> -->
                        <div>
                            <p style="color:#979797; ">Contact info</p>
                            <p style="color:#3598DB; ">Emailid@gmail.com</p>
                            <p style="color:#333333; line-height:10%">+91 90009009090</p>
                            <p style="color:#333333; line-height:30%">+91 9000900090</p>
                        </div><br>
                            <!-- <div class="displayname"> -->
                        <div>
                            <p style="color:#979797; ">Address</p>
                            <p style="color:#333333; ">Address Line 1, <br>City - 530032, <br>State, Country</p>
                        </div>
                    </div>
                </div>
            <!-- right panel close -->
            </div>
        <!-- end of card body -->
        </div>
    <!-- end of card -->
    </div>
    <!-- end of column -->


            

       </div>
       <!-- Row ended -->
      <br>
      
      <script type="text/javascript">
        
            $(document).ready(() => {
                $("#web_right_icon").click(() => {
                    $("#webresponses").show();
                    $("#web_right_icon").hide();
                    $("#web_down_icon").show();
				});

                $("#web_down_icon").click(() => {
                    $("#webresponses").hide();
                    $("#web_down_icon").hide();
                    $("#web_right_icon").show();
				});

                //
                $("#re_right_icon").click(() => {
                    $("#ResumeEvaluation").show();
                    $("#re_right_icon").hide();
                    $("#re_down_icon").show();
				});

                $("#re_down_icon").click(() => {
                    $("#ResumeEvaluation").hide();
                    $("#re_down_icon").hide();
                    $("#re_right_icon").show();
				});
                //
                $("#sr_right_icon").click(() => {
                    $("#SubmittedResumes").show();
                    $("#sr_right_icon").hide();
                    $("#sr_down_icon").show();
				});

                $("#sr_down_icon").click(() => {
                    $("#SubmittedResumes").hide();
                    $("#sr_down_icon").hide();
                    $("#sr_right_icon").show();
				});
                //
                $("#place_right_icon").click(() => {
                    $("#Placements").show();
                    $("#place_right_icon").hide();
                    $("#place_down_icon").show();
				});

                $("#place_down_icon").click(() => {
                    $("#Placements").hide();
                    $("#place_down_icon").hide();
                    $("#place_right_icon").show();
				});


            });
      </script>
</body>


    
