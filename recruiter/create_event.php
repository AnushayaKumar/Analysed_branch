<?php include('header.php') ?>
<title>Dashboard</title>
<link rel="stylesheet" href="./css/create_event.css">
<link rel="stylesheet" type="text/css" href="css/ui-lightness/jquery-ui-1.8.13.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.ui/1.8.6/jquery-ui.min.js"></script>


<body>
    <div class="container">
        <div class="small_container">
            <div class="bread-crumbs_Mytools-recruiter">
                <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="unactive-breadcrumb-link">Schedule</a> > <a href="" class="active-breadcrumb-link"> Event creation</a>
            </div>
            <div class="heading_dash">
                <h1 class="mainHeadingDash">Create an event</h1>
                <button class="btn" id="myBtn" type="button">Create Event</button>
            </div>
            <div class="event">
                <div class="event-name">
                    <input type="text" placeholder="Name Event" class="input-text-class">
                    <button class="reset-btn" type="reset">&times;</button>
                </div>
                <div class="event-time">
                    <div class="box-content">
                        <p><input id="datepic" class="datepic" placeholder="20 Aug, 2021"></p>
                    </div>
                    <div class="box-content">
                         <details id="dropdown" class="dropdown">
                            <summary class="dropdown-button">
                                <span id="selected-item" class="selected-item">8:30pm</span>
                            </summary>
                            <details-menu class="dropdown-menu">
                                <div class="dropdown-menu-list">
                                    <label class="dropdown-menu-item">
                                        <input type="radio" name="item" value="12:00pm">
                                        <span>12:00pm</span>
                                    </label>
                                    <label class="dropdown-menu-item">
                                        <input type="radio" name="item" value="1:00pm">
                                        <span>1:00pm</span>
                                    </label>
                                    <label class="dropdown-menu-item">
                                        <input type="radio" name="item" value="2:00pm">
                                        <span>2:00pm</span>
                                    </label>
                                    <label class="dropdown-menu-item">
                                        <input type="radio" name="item" value="3:00pm">
                                        <span>3:00pm</span>
                                    </label>
                                    <label class="dropdown-menu-item">
                                        <input type="radio" name="item" value="4:00pm">
                                        <span>4:00pm</span>
                                    </label>
                                </div>
                            </details-menu>
                        </details>
                       
                    </div>
                    <p>to</p>
                    <div class="box-content">
                        <p>20 Aug, 2021</p>
                    </div>
                    <div class="box-content">
                        <p>1:30am</p>
                    </div>
                    <div class="box-content">
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>Timezone</p>
                    </div>
                    <div class="select-col">
                        <input type="checkbox" id="c" name="cb">
                        <label for="c" class="select-col-label"> All day</label>
                    </div>
                     <div class="select-col">
                        <input type="checkbox" id="c1" name="cb">
                        <label for="c1" class="select-col-label"> Repeat</label>
                    </div>
                </div>
                <div id="list" class="list">
                    <li><a class="btn-1 active" href="#" onclick="divVisibility('Div1');">Event Details</a></li>
                    <li ><a class="btn-1" href="#" onclick="divVisibility('Div2');" >Schedule</a></li>
                </div>

                <div id="Div1">
                <div class="input-container">
                     <label class="label-class">ATTENDEES</label>
                     <input type="text" class="input-class" placeholder="     Add name of attendees">
                     <p class="input-container-add">Add optional attendees +</p>
                </div>

                <div class="attende">
                    <p class="p-class">ATTENDEES CAN</p>
                    <div class="attende-list">
                        <div class="select-col">
                            <input type="checkbox" id="c3" name="cb">
                            <label for="c3" class="select-col-label"> Modify event</label>
                        </div>
                        <div class="select-col">
                            <input type="checkbox" id="c4" name="cb">
                            <label for="c4" class="select-col-label"> Invite others</label>
                        </div>
                        <div class="select-col">
                            <input type="checkbox" id="c5" name="cb">
                            <label for="c5" class="select-col-label"> See attendees list</label>
                        </div>
                    </div>
                </div>

                <div class="input-container">
                     <label class="label-class">LOCATION</label>
                     <input type="text" class="input-class" placeholder="      Add location">
                 </div>

                 <div class="event-color">
                     <p class="p-class">EVENT COLOR</p>
                     <div class="color-list">
                        <p class="span-class" style="background-color: #977CB0;"></p>
                        <p class="span-class" style="background-color: #5EADFF"></p>
                        <p class="span-class" style="background-color: #7AD6DA"></p>
                        <p class="span-class" style="background-color: #62E6FF"></p>
                        <p class="span-class" style="background-color: #62FE6D"></p>
                        <p class="span-class" style="background-color: #EEFF63"></p>
                        <p class="span-class" style="background-color: #FFBD60"></p>
                        <p class="span-class" style="background-color: #FF8F38"></p>
                        <p class="span-class" style="background-color: #FF4E1E"></p>
                        <p class="span-class" style="background-color: #FF5FC1"></p>
                     </div>
                 </div>

                <div class="input-container">
                     <label class="label-class-1">DESCRIPTION</label>
                     <div class="input-class-1">
                        <div class="card">
                            <div class="card-content">
                                <p><i class="fa fa-paperclip" aria-hidden="true"></i> <span style="color: #979797;padding-left: 10px;"> | </span></p>
                                <p class="card-content-bold">B</p>
                                <p class="card-content-italic">I</p>
                                <p class="card-content-underline">U <span style="color: #979797;padding-left: 10px;"> | </span></p>
                                <p><i class="fa fa-align-justify" aria-hidden="true"></i></p>
                                <p><i class="fa fa-align-justify" aria-hidden="true"></i> <span style="color: #979797;padding-left: 10px;"> | </span></p>
                                <p><i class="fa fa-paperclip" aria-hidden="true"></i></p>
                                <p>T</p>
                            </div>
                            <input type="text" class="input-class-2" placeholder="      Add a description or attach a document">
                        </div>
                 </div>
            </div>
        </div>

        <div id="Div2" style="display:none">
            <div class="main-container-timings">
                <button class="btn-2">Name</button>
                <div class="vertical"></div>
                <hr class="horizontal">
                <div class="event-timing">
                    <p class="timing-date">Monday | 20 Aug, 2021</p>
                    <div class="event-timing-list">
                        <span class="span-event-timing">12:00AM</span>
                        <span class="span-event-timing">1:00AM</span>
                        <span class="span-event-timing">2:00AM</span>
                        <span class="span-event-timing">3:00AM</span>
                        <span class="span-event-timing">4:00AM</span>
                        <span class="span-event-timing">5:00AM</span>
                        <span class="span-event-timing">6:00AM</span>
                        <span class="span-event-timing">7:00AM</span>
                        <span class="span-event-timing">8:00AM</span>
                        <span class="span-event-timing">9:00AM</span>
                        <span class="span-event-timing">10:00AM</span>
                        <span class="span-event-timing">11:00AM</span>
                    </div>
                    <div class="event-profile">
                        <div class="column">
                            <p class="span-event-profile"><img src="./img/Ellipse -4.png" class="img"></p>
                            <span>Mikasa Acker</span>
                            <div class="card-event-1">
                                <div class="card-event-project-name" style="background: #97CE5F">
                                    <p>Project</p>
                                </div>
                                <p class="span-project-name">Project Name</p>
                            </div>
                        </div>
                        <div class="column">
                            <p class="span-event-profile"><img src="./img/Ellipse -10.png" class="img"></p>
                            <span>Koro Sensei</span>
                            <div class="card-event-2">
                                <div class="card-event-project-name" style="background: #61C9B5">
                                    <p>Meeting</p>
                                </div>
                                <p class="span-project-name" style="color: #61C9B5">Project Name</p>
                            </div>
                        </div>
                        <div class="column">
                            <p class="span-event-profile"><img src="./img/Ellipse -2.png" class="img"></p>
                            <span>Himawari Hy</span>
                            <div class="card-event-3">
                                <div class="card-event-project-name" style="background: #FF4A61">
                                    <p>Project</p>
                                </div>
                                <p class="span-project-name"  style="color: #FF4A61">Project Name</p>
                            </div>
                            
                        </div>
                        <div class="column">
                            <p class="span-event-profile"><img src="./img/Ellipse -5.png" class="img"></p>
                            <span>Koro Sensei</span>
                            <div class="card-event-4">
                                <div class="card-event-project-name" style="background:#FF8000">
                                    <p>Project</p>
                                </div>
                                <p class="span-project-name" style="color: #FF8000">Project Name</p>
                            </div>
                        </div>
                        <div class="column">
                            <p class="span-event-profile"><img src="./img/Ellipse -3.png" class="img"></p>
                            <span>Mikasa Acker</span>
                            
                        </div>
                        <div class="column">
                            <p class="span-event-profile"><img src="./img/Ellipse -4.png" class="img"></p>
                            <span>Himawari Hy</span>
                            <div class="card-event-6">
                                <div class="card-event-project-name" style="background: #6251FF">
                                    <p>Meeting</p>
                                </div>
                                <p class="span-project-name" style="color: #6251FF ">Project Name</p>
                            </div>
                            
                        </div>
                        <div class="column">
                            <p class="span-event-profile"><img src="./img/Ellipse -8.png" class="img"></p>
                            <span>Koro Sensei</span>
                             <div class="card-event-7">
                                <div class="card-event-project-name" style="background:#FF5FC1">
                                    <p>Meeting</p>
                                </div>
                                <p class="span-project-name" style="color:#FF5FC1">Project Name</p>
                            </div>
                            
                        </div>
                        <div class="column">
                            <p class="span-event-profile"><img src="./img/Ellipse 270@2x.png" class="img"></p>
                            <span>Eren Jaeger</span>
                            <div class="card-event-8">
                                <div class="card-event-project-name" style="background: #61C9B5">
                                    <p>Meeting</p>
                                </div>
                                <p class="span-project-name" style="color:#61C9B5">Project Name</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>

<script>
var btnContainer=document.getElementById("list");
var btns=btnContainer.getElementsByClassName("btn-1");
for(var i=0;i<btns.length;i++){
    btns[i].addEventListener('click',function(){
        var current=document.getElementsByClassName("active");
        current[0].className=current[0].className.replace("active");
        this.className += " active";
    });
}
</script>

<script>
    var divs = ["Div1", "Div2","Div3"];
    var visibleDivId = null;
    function divVisibility(divId) {
      if(visibleDivId === divId) {
        visibleDivId = null;
      } else {
        visibleDivId = divId;
      }
      hideNonVisibleDivs();
    }
    function hideNonVisibleDivs() {
      var i, divId, div;
      for(i = 0; i < divs.length; i++) {
        divId = divs[i];
        div = document.getElementById(divId);
        if(visibleDivId === divId) {
          div.style.display = "block";
        } else {
          div.style.display = "none";
        }
      }
    }
</script>

<script type="text/javascript">
    $(function setDatepicker() {
        $("#datepic").datepicker();
    });
</script>

<script>
var items = document.getElementsByName('item');
var selectedItem = document.getElementById('selected-item');
var dropdown = document.getElementById('dropdown');

items.forEach(item => {
  item.addEventListener('change', () => {
    if (item.checked) {
      selectedItem.innerHTML = item.value;
      dropdown.open = false;
    }
  });
});
</script>

