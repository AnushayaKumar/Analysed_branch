<?php

    session_start();

    if(isset($_POST['next'])){
        foreach ($_POST as $key => $value)
        {
            $_SESSION['info'][$key] = $value;
        }
     
        $keys = array_keys($_SESSION['info']);
     
        if(in_array('next', $keys)){
            unset($_SESSION['info']['next']);
        }
 
        header("Location: addClient2.php");
     } 
 

?>

<?php include('header.php');?>

<link rel="stylesheet" href="./css/addClient.css">
<title>Analysed</title>
  <form action="" method="post">
<div class="container">
    <div class="bread-crumbs_Mytools-recruiter">
        <a href="/">Dashboard</a> > <a href="">My Database</a> > <a href="">Add client</a> 
    </div>
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Add Client</h1>
            <p class="mainParaDash">Fill in the details to create a new client.</p>
        </div>
        <!-- <button class="save_button_addClient default-button-for-recruiter-dashboard">Save</button> -->
        <div class="row-recruiter container-for-add-client-main">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addClient-1"><a href="addClient.php">General info</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a href="addClient1.php" class="active">Contact info</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="addClient2.php">Billing info</a></p>
            </div>
      
            <div class="right-side-row-for-add-client-container-1" id="contact-info-addclient-1">
                <h2 class="heading-for-general-information-right-side-add-client-container-1"><i class="fa fa-building" aria-hidden="true"></i> Contact information</h2>
                <div class="row-recruiter inputs-for-add-client-below-image-box">    
                    <p class="input-para-add-client-ekam-1"> 
                            <label for="default-select-for-no.11">Main Email</label>
                            <input id="default-select-for-no.11" name="main_email" type="email" class="default-input-for-add-client-1"placeholder="Enter mail email id" required />
                        </p>
                        <p class="input-para-add-client-ekam-1"> 
                            <label for="default-select-for-no.12">Contact number</label>
                            <input id="default-select-for-no.12" type="tel" name="contact_no" class="default-input-for-add-client-1" placeholder="Enter 10 digit mobile number" required />
                    </p>
                    <p class="input-para-add-client-ekam-1"> 
                            <label for="default-select-for-no.13">Address</label>
                            <input id="default-select-for-no.13" type="text" name="address" class="default-input-for-add-client-1" placeholder="Enter your address" required /> 
                    </p>
                    <p class="input-para-add-client-ekam-1 fx-city-name"> 
                            <label for="default-select-for-no.13">City name</label>
                            <input id="default-select-for-no.13" name="city" type="text" class="default-input-for-add-client-1" placeholder="Enter your city name" required>
                    </p>
                    <p class="input-para-add-client-ekam-1 fx-zipcode"> 
                            <label for="default-select-for-no.13">Zipcode</label>
                            <input id="default-select-for-no.13" name="zipcode" type="text" class="default-input-for-add-client-1" placeholder="Enter zipcode of city" required>
                    </p>
                    <p class="select-for-select-image-box-below-inputs"> 
                        <label for="default-select-for-no.6">State</label>
                            <select name="state" id="default-select-for-no.6" class="default-select-for-add-client-1" required>
                                <option value="" default>Andhra Pradesh</option>
                                <option value="Open">Open</option>
                                <option value="Closed">Closed</option>
                                <option value="Working">Working</option>
                            </select>
                    </p>
                    <p class="select-for-select-image-box-below-inputs"> 
                        <label for="default-select-for-no.6">Country</label>
                            <select name="country" id="default-select-for-no.6" class="default-select-for-add-client-1" required>
                                <option value="" default>India</option>
                                <option value="Open">Open</option>
                                <option value="Closed">Closed</option>
                                <option value="Working">Working</option>
                            </select>
                    </p>
                    <input type = "submit" name="next"  class="save_button_addClient default-button-for-recruiter-dashboard" value="next" >
                </div>
            </div>
       
        </div>
    </div>
    </div>
</div>
 </form> 