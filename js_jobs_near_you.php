<?php include ('include/header.php') ?>
<link rel="stylesheet" href="./css/js_jobs_near_you.css">

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






<title>Jobs near you</title>
<br>
    <div class="bread-crumbs_Mytools-recruiter" style="font-size:15px">
     <a href="" class="active-breadcrumb-link">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<u>Dashboard</u> </a><span style="color:#3598DB"> > </span> 
     <a href="" class="active-breadcrumb-link"><u> Jobs Near You </u></a>
    </div>
<div style="margin-left:50px">
    <div class="bgcolor-modal-JobsNearYou">
        <div class="modal-jobsNearYou">
            <span class="closeSettings-modal-jobsNearYou">Close</span>
            <p class="location-settings-heading">Location settings</p>
            <div class="container-modal-inputs-jobsNearYou">
                <div class="grid-location-settings-modal">
                    <div class="column-1-location-settings-modal">
                        <label for="enterLocation-modal-input">Location</label>    
                        <input type="text" placeholder="Enter Your Location" id="enterLocation-modal-input">
                    </div> 
                    <div class="column-2-location-settings-modal">
                        <label for="industry-modal-input">Industry</label>    
                        <select name="" id="industry-modal-input">
                            <option value="0">Technology</option>
                            <option value="1">Mechanical</option>
                            <option value="2">Civil</option>
                        </select>
                    </div>

                    <div class="column-1-location-settings-modal">
                        <label for="jobsinRadius-modal-input">Job in radius</label>    
                        <input type="text" placeholder="Enter job radius in kms" id="jobsinRadius-modal-input">
                    </div> 
                    <div class="column-2-location-settings-modal">
                        <label for="addSkills-modal-input">Add Skills +</label>    
                        <span id="addSkills-modal-input">PHP <i class="fa fa-times" aria-hidden="true"></i></span>
                        <span id="addSkills-modal-input">MYSQL <i class="fa fa-times" aria-hidden="true"></i></span>
                    </div>

                    <div class="column-1-location-settings-modal">
                        <label for="payTypeSalary-modal-input">Pay type salary</label>    
                        <input type="text" placeholder="min" id="payTypeSalary-modal-input">
                        <input type="text" placeholder="max" id="payTypeSalary-modal-input">
                        
                        <label for="payTypeSalary-modal-input" class="te1">Job type</label>  

                        <div class="radioButtons-jobsType-modal">
                            <input type="radio" name="jobtype-Modal" id="partTime-jobType-modal" class="te2"> 
                            <label for="partTime-jobType-modal">Part Time</label>
                        </div>
                        <div class="radioButtons-jobsType-modal">
                            <input type="radio" name="jobtype-Modal" id="fullTime-jobType-modal" class="te2"> 
                            <label for="fullTime-jobType-modal">Full Time</label>
                        </div>
                        <div class="radioButtons-jobsType-modal">
                            <input type="radio" name="jobtype-Modal" id="intern-jobType-modal" class="te2"> 
                            <label for="intern-jobType-modal">Internship</label>
                        </div>
                    </div>
                </div>
                <button class="applySetting-modal-jobsType">
                Apply Setting
                </button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="small_container ekam-position-relative-2">
            <div class="heading_dash">
                <h1 class="mainHeadingDash" style="font-size:30px;margin-left:40px">Jobs near you</h1>
            </div>
            <div class="row-ekam-flex-JobsNearYou">
                <button class="locationsettings-button-jobsNearYou">
                    Location settings <i class="fa fa-cog" aria-hidden="true"></i>
                </button>
                <div class="map-section-jobsNearYou">
                    <br>
                    <img src="./img/map.png" alt="" class="map-image-section-jobsNearYou">
                </div>
                <div class="cards-section-jobsNearYou">
                    <br><br>
                    <div class="cardItem-section-jobsNearYou">
                        <div class="shareIcons-div-jobsNearYou">
                            <a href="#" class="link-shareButton-jobsNearYou">
                                <img src="./img/share-icon.png" alt="" class="shareButton-jobsNearYou">
                            </a>
                            <a href="#" class="link-starButton-jobsNearYou">
                                <img src="./img/star-icon.png" alt="" class="starButton-jobsNearYou">
                            </a>
                        </div>
                        <section class="cardItem-heading-info">
                            <img src="./img/Airbnb-logo.png" alt="">
                            <span>
                                <h4>AirBnb</h4>
                                <p>London, UK</p>
                            </span>
                        </section>
                            
                        <p class="designation-cardItem-jobsNearYou">Frontend Developer</p>
                        <section class="duration-cardItem-jobsNearYou">
                            <span></span>
                            <p>2 Days Left</p>
                        </section>
                        <span class="skills-cardItem-jobsNearYou">CSS, HTML, UI, FrontEnd</span>
                        <p class="jobs-description-cardItem-jobsNearYou">
                            Appt no 23, road name, Area na Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                        </p>
                        <p class="timeTaken-cardItem-jobsNearYou"> <i class="fa fa-car" aria-hidden="true"></i> &nbsp;20 mins</p>
                        <section class="row-ekam-flex-JobsNearYou fulltime-applynow-cardItem-jobsNearYou">
                            <span>Full time</span>
                            <button class="applyNow-cardsItem-jobsNearYou">Apply Now</button>
                        </section>
                    </div>
                    <div class="cardItem-section-jobsNearYou">
                        <div class="shareIcons-div-jobsNearYou">
                            <a href="#" class="link-shareButton-jobsNearYou">
                                <img src="./img/share-icon.png" alt="" class="shareButton-jobsNearYou">
                            </a>
                            <a href="#" class="link-starButton-jobsNearYou">
                                <img src="./img/star-icon.png" alt="" class="starButton-jobsNearYou">
                            </a>
                        </div>
                        <section class="cardItem-heading-info">
                            <img src="./img/Netflix-logo.png" alt="">
                            <span>
                                <h4>Netflix</h4>
                                <p>London, UK</p>
                            </span>
                        </section>
                            
                        <p class="designation-cardItem-jobsNearYou">Frontend Developer</p>
                        <section class="duration-cardItem-jobsNearYou">
                            <span></span>
                            <p>2 Days Left</p>
                        </section>
                        <span class="skills-cardItem-jobsNearYou">CSS, HTML, UI, FrontEnd</span>
                        <p class="jobs-description-cardItem-jobsNearYou">
                            Appt no 23, road name, Area na Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                        </p>
                        <p class="timeTaken-cardItem-jobsNearYou"> <i class="fa fa-car" aria-hidden="true"></i> &nbsp;20 mins</p>
                        <section class="row-ekam-flex-JobsNearYou fulltime-applynow-cardItem-jobsNearYou">
                            <span>Full time</span>
                            <button class="applyNow-cardsItem-jobsNearYou">Apply Now</button>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    document.querySelector('.locationsettings-button-jobsNearYou').addEventListener('click', () =>{
        document.querySelector('.bgcolor-modal-JobsNearYou').style.display = 'block';
    })
    document.querySelector('.closeSettings-modal-jobsNearYou').addEventListener('click', () =>{
        document.querySelector('.bgcolor-modal-JobsNearYou').style.display = 'none';
    })
    document.querySelector('.applySetting-modal-jobsType').addEventListener('click', () =>{
        document.querySelector('.bgcolor-modal-JobsNearYou').style.display = 'none';
    })
</script>




<br><br>