<?php include('header.php')?>
<?php
   define('LOCALHOST','localhost');
   define('DB_USERNAME','root');
   define('DB_PASSWORD','');
   define('DB_NAME','analyse');
   $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die(mysqli_error());
?>
<link rel="stylesheet" href="./css/jobsDescription.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<title>Job Description</title>


<style type="text/css">


#web_down_icon, #re_down_icon, #sr_down_icon
       {
          display: none;
       }

       #webresponses,  #ResumeEvaluation, #SubmittedResumes
       {
          display: none;
       }
       #termi_1{
           overflow-y:auto;
       }

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
    height: 530px;
    background-color: white;
    border-radius: 10px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    padding: 10px;
  }


  #screen_3
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
  #screen_msg_3
  {
    width: 850px;
    height: 600px;
    background-color: white;
    border-radius: 10px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    padding: 10px;
}
  #screen_4
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
  #screen_msg_4
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
      overflow-y: auto;

  }

  #screen_5
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
  #screen_msg_5
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
  }


  #upload-modal
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
  #upload-container
  {
    width: 850px;
    height: 600px;
    background-color: white;
    border-radius: 10px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    padding: 10px;
    overflow-y: auto;
  }
  #workhistorycontent
  {
    width: 550px;
    position: absolute;
    left: 33%;
    top: 47%;
    transform: translate(-50%, -50%);
    z-index: 2;
    display: none;
  }
  #addeducationcontent
  {
    width:330px;
    position: absolute;
    left: 70%;
    top:54%;
    transform: translate(-50%, -50%);
    z-index: 2;
    display: none;
  }
</style>
<?php
  $job_id=$_GET['job_id'];
  $jobseeker_id=$_GET['jobseeker_id'];
  $sql="select * from joblistings where job_id='$job_id'";
  $res=mysqli_query($conn,$sql);
  if($res == TRUE)
  {
    $count=mysqli_num_rows($res);
    if($count >0)
    {
      while($rows=mysqli_fetch_assoc($res))
      {
        $job_description=$rows['job_description'];
        $position=$rows['position'];
        $client_company=$rows['client_company'];
        $start_date=$rows['start_date'];
        $end_date=$rows['end_date'];
        $country=$rows['country'];
        $state=$rows['state'];
        $advert_contact_no=$rows['advert_contact_no'];
        $skills=$rows['skills'];
        $required_experience=$rows['required_experience'];
        $advert_job_description=$rows['advert_job_description'];
        $job_views=$rows['job_views'];
        $availability_time=$rows['availability_time'];
        $language=$rows['language'];
        $company_website=$rows['company_website'];
        $company_email=$rows['company_email'];
        $myimg=$rows['workspace_view'];

        $now = time(); // or your date as well
        $your_date = strtotime($end_date);
        $datediff =  $your_date - $now;

        $remain_days=round($datediff / (60 * 60 * 24));

      }
    }
  }
?>


<div class="container">
<div class="small_container">
  <div class="bread-crumbs_Mytools-recruiter" style="margin-bottom: 40px;">
      <a href="/" class="unactive-breadcrumb-link">Dashboard</a> >
      <a href="" class="unactive-breadcrumb-link">Suggested Jobs</a> >
      <a href="" class="active-breadcrumb-link">Job Description</a>
  </div>
  <div class="job-row-flex-JobDescription">
    <div class="left-side-jobDescription">
      <div class="share-icons-leftside-jobDescription">
          <a href="#" style="margin-right: 20px;"><img src="./img/Star.svg" class="share-and-star-icon-img"></a>
          <a href="#"><img src="./img/Share.svg" class="share-and-star-icon-img"></a>
      </div>
      <h2 class="heading-dash">
        <?php echo $position; ?>
      </h2>
      <div class="icons-flex-left-side-jobsDescription">
          <span> <i class="fa fa-eye" aria-hidden="true" style="color:#FFBD06"></i><?php echo $job_views;?> views</span>
          <span><i class="fa fa-users" aria-hidden="true" style="color:#8C60EB"></i> 4 applicants</span>
          <span><i class="fa fa-clock-o" aria-hidden="true" style="color:#0F9D58"></i> <?php echo $remain_days; ?> days remaining</span>
      </div>
      <div class="jobDescription-paragraph-left-side-jobsDescription">
          <p><?php echo $job_description; ?></p>
      </div>
      <div class="skills-leftSide-jobsDescription">
          <p>Skills</p>
          <?php
              $skills_arr = explode (",", $skills);
              foreach($skills_arr as $value)
              {
          ?>
          <span><?php echo $value;?></span>
          <?php
              }
          ?>
      </div>
      <div class="requirements-section-leftSide-jobsDescription">
          <p>Requirements</p>
          <section class="requirements-detail-left-side-JobsDescription">
              <div class="requirements-subDetail-left-sideJobsDescription">
                  <span>Availability:</span> <p><?php echo $availability_time; ?></p>
              </div>
              <div class="requirements-subDetail-left-sideJobsDescription">
                  <span>Experience level:</span> <p><?php echo $required_experience; ?></p>
              </div>
              <div class="requirements-subDetail-left-sideJobsDescription">
                  <span>Languages:</span> <p><?php echo $language; ?></p>
              </div>
          </section>
      </div>
      <button class="applyNow-leftSide-jobsDescription" type="button"   id="applytask">
                Apply for this job
            </button>


     <?php
           if(isset($_POST['btnsubmit2']))
           {

             $job_id=$_GET['job_id'];
             $jobseeker_id=$_GET['jobseeker_id'];
             $fname=$_POST['fname'];
             $lname=$_POST['lname'];
             $email=$_POST['email'];
             $phone=$_POST['phone'];
             $address=$_POST['address'];
             $country=$_POST['country'];
             $state=$_POST['state'];
             $city=$_POST['city'];
             $zipcode=$_POST['zipcode'];
             $linkId=$_POST['linkId'];
             $position=$_POST['position'];
             $company=$_POST['company'];
             $institute=$_POST['institute'];
             $year=$_POST['year'];
             $from=$_POST['from'];
             $to=$_POST['to'];
             $topic=$_POST['topic'];
             $skills=$_POST['skills'];



             $fn=$_FILES['myresume']['name'];
             $tm=$_FILES['myresume']['tmp_name'];
             move_uploaded_file($tm,"Documents/".$fn);


             $fn2=$_FILES['mycerti']['name'];
             $tm2=$_FILES['mycerti']['tmp_name'];
             move_uploaded_file($tm2,"Documents/".$fn2);

             $fn3=$_FILES['myadd']['name'];
             $tm3=$_FILES['myadd']['tmp_name'];
             move_uploaded_file($tm3,"Documents/".$fn3);

            $sql2="INSERT INTO jobapply(`job_id`, `jobseeker_id`, `firstname`, `lastname`, `email`, `number`, `address`, `country`, `state`, `city`, `zipcode`, `resume`, `linkedin`, `certificates`, `attachments`,
                                      `emp_history`, `emp_from`, `emp_to`, `comp_history`, `skills`, `edu_topic`, `edu_institute`, `edu_year`)
                                      VALUES ('$job_id','$jobseeker_id','$fname','$lname','$email','$phone','$address','$country','$state','$city','$zipcode','$fn','$linkId','$fn2','$fn3',
                                        '$position','$from','$to','$company','$skills','$topic','$institute','$year')";
             $res2=mysqli_query($conn,$sql2);
             if($res2 == TRUE)
              {
                  //header('location:http://localhost/Analysed/js_nearby_job.php');
                   echo "<script> location.href='js_nearby_job.php'; </script>";
              }
           }
      ?>
      <!-- Modal for Your Information-->
    <form method="POST" enctype="multipart/form-data">

      <div id="upload-modal">
        <div id="upload-container">
          <p class="text-primary">1. Your Information </p>
          <hr>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="fname">First Name*</label>
              <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your First Name">
            </div>
            <div class="form-group col-md-6">
              <label for="lname">Last Name*</label>
              <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your Last Name">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">Email ID*</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email Id">
            </div>
            <div class="form-group col-md-6">
              <label for="phone">Phone No*</label>
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
            </div>
          </div>
          <div class="form-group">
            <label for="address">Address*</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address Line 1">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="country">Country*</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country">
              <!-- <select id="country" class="form-control">
                  <option value="1">Select Country</option>
                  <option value="2">India</option>
                  <option value="2">America</option>
              </select> -->
            </div>
          <div class="form-group col-md-6">
              <label for="state">State*</label>
                <input type="text" class="form-control" id="state" name="state" placeholder="Enter State">
              <!-- <select id="state" class="form-control">
                  <option value="1">Select State</option>
                  <option value="2">Tamil Nadu</option>
                  <option value="2">Kerala</option>
              </select> -->

            </div>
        </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="city">City*</label>
                  <input type="text" class="form-control" id="city" name="city" placeholder="Enter City Name">
                </div>
              <div class="form-group col-md-6">
                  <label for="zipcode">Zip Code*</label>
                  <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Enter Zip Code">
                </div>
            </div>
            <br>
            <div class="modal-footer">
            <button class="btn btn-prev" style="border:2px solid skyblue;" id="back_1" type="button"> Back </button>
            <button class="btn btn-primary btn-next" id="next_1" type="button"> Next </button>
          </div>
        </div>
      </div>



        <div id="successcard">
        <div id="success-msg">
        <p class="text-primary">2.Resume Upload and Other Documents</p>
          <hr>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="fileupload">Upload Resume <span style="font-size:13px;color:lightgray;">6 MB max</span></label>
              <p style="font-size:13px;color:lightgray;">Upload your resume if you have not already done so</p>
              <!-- <label for="fileupload" class="form-control" style="color:lightgray;">(*.doc,*.docx,*.rtf,*.txt,*.pdf)</label> -->

              <input type="file" class="form-control" id="myresume" name="myresume" >

            </div>
            <div class="form-group col-md-6">
              <label for="url">LinkedIn Profile</label>
              <p style="font-size:13px;color:lightgray;">Copy & Paste URL link</p>
              <input type="text" class="form-control" id="linkId" name="linkId" placeholder="Enter LinkedIn URL">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <br><label>Certificate/Licenses</label><br>
                <label for="firstimg" style="color:skyblue;font-size:15px;"><i class="fa fa-plus-circle"> </i> Add your Certificate</label>
              <input type="file" id="mycerti" name="mycerti" style="">
            </div>
            <div class="form-group col-md-6">
              <br><label>Attachments</label><br>
                <label for="secondimg" style="color:skyblue;font-size:15px;"><i class="fa fa-plus-circle"> </i> Aditional Informaton</label>
              <input type="file"  id="myadd" name="myadd" style="">
            </div>
          </div>
          <br>
          <div class="modal-footer" style="margin-top:120px">
                <button class="btn btn-prev" style="border:2px solid skyblue;" id="back_2" onclick="" type="button"> Back </button>
                <button class="btn btn-primary btn-next" id="next_2" onclick="" type="button"> Next </button>
              </div>
        </div>
      </div>

      <!-- work and education -->
      <div id="screen_3">
        <div id="screen_msg_3">
          <p class="text-primary">3.Work and Education History</p>
          <hr>
          <div class="form-row">
            <div class="form-group col-md-6">

              <label>Employment History</label><br>
              <label id="addworkhistory" style="color:skyblue;font-size:15px;"><i class="fa fa-plus-circle"> </i> Add Work History</label>


            </div>

            <div id="workhistorycontent">
                    <div class="modal-content" style="">
                      <div>
                        <button type="button" id="closehistorycontent" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="position">Position Title*</label>
                            <input type="text" class="form-control" id="position" name="postion" placeholder="Enter Position Title">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="company">Company Name*</label>
                            <input type="text" class="form-control" id="company" name="company" placeholder="Enter Company Name">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="from">From*</label>
                            <input type="date" name="from" class="form-control" id="from">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="to">To*</label>
                            <input type="date" name="to" class="form-control" id="to">
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" id="saveworkhistory" class="btn btn-primary">Save</button>
                      </div>
                    </div>
            </div>




            <div class="form-group col-md-6">
              <label>Education</label><br>
              <label id="addeducation" style="color:skyblue;font-size:15px;"><i class="fa fa-plus-circle"> </i> Add Education</label>
            </div>
          </div>


            <div id="addeducationcontent">
              <div class="modal-content" style="">
                <div>
                  <button type="button" id="closeaddeducation" class="close" data-dismiss="modal1" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <div class="form-group">
                    <label for="topic">Field of Study/Topic*</label>
                    <input type="text" class="form-control" name="topic" id="topic" placeholder="Enter field of study">
                  </div>
                  <div class="form-group">
                    <label for="institute">Institute*</label>
                    <input type="text" class="form-control" id="institute" name="institute" placeholder="Enter Institute">
                    <!-- <select id="institute" class="form-control">
                        <option value="1"></option>
                        <option value="2">PSG College of Arts & Science</option>
                        <option value="3">ABC College</option>
                        <option value="4">AAA College</option>
                    </select> -->
                  </div>

                  <div class="form-group">
                    <label for="year">Year of Passing*</label>
                    <input type="text" class="form-control" id="year" name="year" placeholder="Enter Position Title">
                    <!-- <select id="year" class="form-control">
                        <option value="1"></option>
                        <option value="2">2023</option>
                        <option value="3">2021</option>
                    </select> -->
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" id="saveaddeducation" class="btn btn-primary">Save</button>
                </div>
              </div>
            </div>


          <div class="form-group">
              <label for="skills">Skills</label>
              <input type="text" class="form-control" id="skills" name="skills" placeholder="">
          </div>
          <br>
          <div class="modal-footer" style="margin-top:280px">
            <button class="btn btn-prev" style="border:2px solid skyblue;" id="back_3" onclick="" type="button"> Back </button>
            <button class="btn btn-primary btn-next" id="next_3" onclick="fillDetails()" type="button">Next </button>
          </div>
        </div>
      </div>



      <!-- final -->
      <div id="screen_4">
        <div id="screen_msg_4">
        <p class="text-primary">4.Review and Submit</p>
          <hr>


          <div class="modal-body" id="termi_1">
            <div class="form-group " >
              <p class="row-flex-jobs-j">
                <p>1.Your Information </b>
                  <span id="web_right_icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  <span id="web_down_icon"> <i class="fa fa-angle-down" aria-hidden="true"></i> </span>
                </p>
                <div id="webresponses">
                  <div class="row">
                    <div class="col-6">
                      <p style="line-height:0.2"><b> First Name</b></p>
                      <p id="review_fname" > ABC</p>
                      <p style="line-height:0.2"><b> Email ID</b></p>
                      <p id="review_email"> abc@gmail.com</p>
                    </div>
                    <div class="col-6">
                      <p style="line-height:0.2"><b> Last Name</b></p>
                      <p id="review_lname"> DEF</p>
                      <p style="line-height:0.2"><b> Phone No</b></p>
                      <p id="review_phone"> 1234567895</p>
                    </div>
                  </div>
                  <p style="line-height:0.2"><b>Address</b></p>
                  <p id="review_address">Katraj, Pune</p>
                  <div class="row">
                    <div class="col-6">
                      <p style="line-height:0.2"><b> Country</b></p>
                      <p id="review_country"> India</p>
                      <p style="line-height:0.2"><b> City</b></p>
                      <p id="review_city"> pune</p>
                    </div>
                    <div class="col-6">
                      <p style="line-height:0.2"><b> State</b></p>
                      <p id="review_state"> Maharashtra</p>
                      <p style="line-height:0.2"><b> Zip code</b></p>
                      <p id="review_zipcode"> 123456</p>
                    </div>
                  </div>
                </div>
              </p>
            </div>
            <div class="form-group ">
              <p class="row-flex-jobs-j">
                <p>2.Upload Resume and Other Documents </b>
                  <span id="re_right_icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  <span id="re_down_icon"> <i class="fa fa-angle-down" aria-hidden="true"></i> </span>
                </p>
                <div id="ResumeEvaluation">
                    <div class="row">
                      <div class="col-7">
                        <p><b> Uploaded Resume</b></p>
                        <p id="review_myresume"> Resume.pdf</p>
                      </div>
                      <div class="col-5">
                        <p><b> Linkedln Profile</b></p>
                        <p id="review_linkId"> linked.com</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <p><b>Certificates </b></p>
                        <p id="review_mycerti"> 10th_Markshet.pdf</p>
                      </div>
                      <div class="col-5">
                        <p><b> Attachments </b></p>
                        <p id="review_myadd"> extra_work.pdf</p>
                      </div>
                    </div>
                </div>
              </p>
            </div>
            <div class="form-group">
              <p class="row-flex-jobs-j">
                <p>3.Work and Education History </b>
                  <span id="sr_right_icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                  <span id="sr_down_icon"> <i class="fa fa-angle-down" aria-hidden="true"></i> </span>
                </p>
                <div id="SubmittedResumes">
                    <p><b> Employment History</b></p>
                    <div class="row">
                      <div class="col-3">
                        <p style="line-height:0.2"><b><u> Position Title</u></b></p>
                        <p id="review_position"> HR</p>
                      </div>
                      <div class="col-3">
                        <p style="line-height:0.2"><b><u> Company Name</u></b></p>
                        <p id="review_company"> Intel</p>
                      </div>

                      <div class="col-3">
                        <p style="line-height:0.2"><b><u> From</u></b></p>
                        <p id="review_from">01/09/2000</p>
                      </div>
                      <div class="col-3">
                      <p style="line-height:0.2"><b><u> To</u></b></p>
                        <p id="review_to">01/09/2007</p>
                      </div>
                    </div>

                    <p><b> Education</b></p>
                    <div class="row">
                      <div class="col-4">
                        <p style="line-height:0.2"><b><u> Topic</u></b></p>
                        <p id="review_topic">AI / ML</p>
                      </div>
                      <div class="col-4">
                        <p style="line-height:0.2"><b><u> Institute</u></b></p>
                        <p id="review_institute"> College</p>
                      </div>
                      <div class="col-4">
                        <p style="line-height:0.2"><b><u> Year of Passing</u></b></p>
                        <p id="review_year"> 03/08/2007</p>
                      </div>
                    </div>
                    <p style="line-height:0.2"><b>Skills</b></p>
                    <p id="review_skills"> HTML , CSS , PHP</p>

                </div>
              </p>
            </div>
        </div>

          <div class="modal-footer" >
            <button class="btn btn-prev" style="border:2px solid skyblue;" id="back_4" onclick="" type="button"> Back </button>
            <button class="btn btn-primary btn-next" id="btnfinish" type="button">Submit </button>
          </div>
        </div>
      </div>

      <!-- done -->
      <div id="screen_5">
        <div id="screen_msg_5">
          <center>
          <img src="img/tick.png" height="250px" width="400px">
          <p class="c1">Applied successfully</p>
          <p>Your Application is send to recruiter successfully</p>
          <hr style="width:80%;margin-left:10px"></hr>
          <br>

          <button id="btnsubmit2" class="btn btn-primary" name="btnsubmit2" type="submit" style="border:2px solid skyblue;"> Finish</button>

         </center>

        </div>
      </div>

    </form>


    </div>



    <div class="right-side-jobDescription">
      <p class="right-side-date-rightSide-jobDescription"><?php echo date("d-m-Y"); ?></p>
      <div class="card-for-jobsDescription-rightSideJobDescription">
          <!-- <img src="./img/Airbnb-logo.png" alt="" srcset="" class="logo-for-jobDescription-rightSideJobDescription"> -->
          <div class="logo-for-jobDescription-rightSideJobDescription">
              <!-- <img src="./img/Airbnb-logo.png" alt=""> -->
              <?php echo '<img src="data:image;base64,'.base64_encode($myimg).' "  style="width: 50px; height: 50px;" >' ;   ?>
          </div>
          <p class="companyname-for-jobsDescription-rightSideJobDescription"><?php echo $client_company; ?></p>
          <span class="companyLocation-for-jobsDescription-rightSideJobDescription"><?php echo $state; ?>, <?php echo $country; ?></span>
          <p class="paragraphDetails-for-jobsDescription-rightSideJobDescription"><?php echo $advert_job_description; ?></p>
          <p class="websiteCompany-for-jobsDescription-rightSideJobDescription row-flex-jobj"> <img src="./img/Icon feather-globe.svg" class="rightJobDesc-images-sm"> <?php echo $company_website; ?></p>
          <p class="mobile-for-jobsDescription-rightSideJobDescription  row-flex-jobj"><img src="./img/Icon feather-phone-call.svg" class="rightJobDesc-images-sm"><?php echo $advert_contact_no; ?></p>
          <p class="mail-for-jobsDescription-rightSideJobDescription  row-flex-jobj"><img src="./img/envelope (1).svg" class="rightJobDesc-images-sm"> <?php echo $company_email; ?></p>
      </div>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
       $(document).ready(() => {

                $("#applytask").click(() => {
                    $("#upload-modal").show();
                });

                $("#back_1").click(() => {
                    $("#upload-modal").hide();
                });

                 $("#next_1").click(() => {
                    $("#successcard").show();
                    $("#upload-modal").hide();
                });

                $("#back_2").click(() => {
                  $("#successcard").hide();
                    $("#upload-modal").show();
                });

                $("#next_2").click(() => {
                    $("#screen_3").show();
                    $("#successcard").hide();
                });

                $("#back_3").click(() => {
                  $("#screen_3").hide();
                    $("#successcard").show();
                    fillDetails();
                });

                $("#next_3").click(() => {
                    $("#screen_4").show();
                    $("#screen_3").hide();
                   document.getElementById('review_fname').innerText = document.getElementById("fname").value;
                   document.getElementById('review_lname').innerText = document.getElementById("lname").value;
                   document.getElementById('review_email').innerText = document.getElementById("email").value;
                   document.getElementById('review_phone').innerText = document.getElementById("phone").value;
                   document.getElementById('review_address').innerText = document.getElementById("address").value;
                   document.getElementById('review_country').innerText = document.getElementById("country").value;
                   document.getElementById('review_state').innerText = document.getElementById("state").value;
                   document.getElementById('review_city').innerText = document.getElementById("city").value;
                   document.getElementById('review_zipcode').innerText = document.getElementById("zipcode").value;
                   document.getElementById('review_linkId').innerText = document.getElementById("linkId").value;
                   document.getElementById('review_position').innerText = document.getElementById("position").value;
                   document.getElementById('review_company').innerText = document.getElementById("company").value;
                   document.getElementById('review_institute').innerText = document.getElementById("institute").value;
                   document.getElementById('review_year').innerText = document.getElementById("year").value;
                   document.getElementById('review_from').innerText = document.getElementById("from").value;
                   document.getElementById('review_to').innerText = document.getElementById("to").value;
                   document.getElementById('review_topic').innerText = document.getElementById("topic").value;
                   document.getElementById('review_skills').innerText = document.getElementById("skills").value;

                    var input = document.getElementById("myresume");
                    var file = input.value.split("\\");
                    var fileName = file[file.length-1];
                   document.getElementById('review_myresume').innerText = fileName;

                   var input = document.getElementById("mycerti");
                   var file = input.value.split("\\");
                   var fileName = file[file.length-1];
                  document.getElementById('review_mycerti').innerText = fileName;

                  var input = document.getElementById("myadd");
                  var file = input.value.split("\\");
                  var fileName = file[file.length-1];
                 document.getElementById('review_myadd').innerText = fileName;

                });

                $("#back_4").click(() => {
                  $("#screen_4").hide();
                    $("#screen_3").show();
                });

                 $("#btnfinish").click(() => {
                  $("#screen_5").show();
                    $("#screen_4").hide();
                });

                // $("#done_butt").click(() => {
                //   $("#screen_5").hide();
                //     $("#screen_4").hide();
                //     $("#screen_3").hide();
                //     $("#successcard").hide();
                //     $("#upload-modal").hide();
                // });

                $("#addworkhistory").click(() => {
                    $("#workhistorycontent").show();
                });
                $("#closehistorycontent").click(() => {
                    $("#workhistorycontent").hide();
                });
                $("#addeducation").click(() => {
                    $("#addeducationcontent").show();
                });
                $("#closeaddeducation").click(() => {
                    $("#addeducationcontent").hide();
                });
                $("#saveworkhistory").click(() => {
                    $("#workhistorycontent").hide();
                });
                $("#saveaddeducation").click(() => {
                    $("#addeducationcontent").hide();
                });

          });

    </script>
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


        });
  </script>
