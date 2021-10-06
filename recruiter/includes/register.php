<?php
    
    session_start();
   

    if(isset($_SESSION['info'])){
        extract($_SESSION['info']);

        $conn = mysqli_connect('localhost','root','','analysed');

        $sql = mysqli_query($conn,"INSERT INTO client (company_name,status,company,company_img,ownership,industry,source,parent_company,active_contact,company_desc,permanent_fee,contract_fee,main_email,contact_no,address,city,zipcode,state,country,bank_name,bank_id,bank_acc_no,iban,vat) VALUES
         ('$company_name','$status','$company','$company_img','$ownership','$industry','$source','$parent_company','$active_contact','$company_desc','$permanent_fee','$contract_fee','$main_email','$contact_no','$address','$city','$zipcode','$state','$country','$bank_name','$bank_id','$bank_acc_no','$iban','$vat')");

        if($sql){
            unset($_SESSION['info']);

           echo "<script>window.open('/Analysed-test/recruiter/client_individual.php','_self')</script>";

        }else{
            echo mysqli_error($conn);
        }
    }
   
?>
