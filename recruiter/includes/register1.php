<?php
    
    session_start();
   

    if(isset($_SESSION['info'])){
        extract($_SESSION['info']);

        $conn = mysqli_connect('localhost','root','','analysed');

        $sql = mysqli_query($conn,"INSERT INTO `contacts`(`fname`, `lname`, `status`, `picture`, `job_title`, `email`, `phone`, `address`, `skills`, `industry`, `mname`, `title`, `city`, `zip_code`, `state`, `country`, `company_name`, `contact_type`, `division`, `source`, `reports_to`, `last_contact`, `visibility`, `validity`, `lastvisit`, `LinkedIn_profile`) VALUES
         ('$fname','$lname','$status','$picture','$job_title','$email','$phone','$address','$skills','$industry','$mname','$title','$city','$zip_code','$state','$country','$company_name','$contact_type','$division','$source','$reports_to','$last_contact','$visibility','$validity','$lastvisit','$LinkedIn_profile')");

        if($sql){
            unset($_SESSION['info']);

            echo 'Data has been saved successfully!';

            echo '<a href="../addContact.php">Go back!</a>';


        }else{
            echo mysqli_error($conn);
        }
    }
   
?>
