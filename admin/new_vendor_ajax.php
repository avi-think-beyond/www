<?php
include("../connection.php");
if(isset($_POST['command']) && $_POST['command'] == 'add_vendor')
{
    $vendor_name=$_POST['vendor_name'];
    $contact=$_POST['contact'];
    $vendor_abbr=$_POST['vendor_abbr'];
    $email=$_POST['email'];
    $address=$_POST['address'];
  
    if($vendor_name=='')
    {
        echo "<h3 style='color:red;'>Vendor Name is missing!!!</h3>";
    }
    elseif($contact=='')
    {
        echo "<h3 style='color:red;'>Contact No. is missing!!!</h3>";
    }
    elseif($vendor_abbr=='')
    {
        echo "<h3 style='color:red;'>Vendor Abbr is missing!!!</h3>";
    }
    
    elseif($email=='')
    {
        echo "<h3 style='color:red;'>Email is missing!!!</h3>";
    }
    elseif($address=='')
    {
        echo "<h3 style='color:red;'>Address is missing!!!</h3>";
    }
   
    else
    {
        $query=mysqli_query($conn,"SELECT * FROM vendor_master where barcode_abbr='$vendor_abbr'");
        if(mysqli_affected_rows($conn))
        {
            echo "<h3 style='color:red;'>Vendor abbr is already in our system!!! </h3>";
        }
        else
        {
            $sql=mysqli_query($conn,"INSERT INTO vendor_master(vendor_name,contacct_no,email,address,barcode_abbr,flag) VALUES('$vendor_name','$contact','$email','$address','$vendor_abbr','1')");
            if(mysqli_affected_rows($conn))
            {
                echo "<h3 style='color:green;'>Vendor Added!!!</h3>";
            }
            else
            {
                echo "Error:- ".mysqli_error($conn);
                echo "<h3 style='color:red;'>Failed to add vendor</h3>";
            }
        }
        
    }
}
?>