<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include '../config/MailConfig.php'; // include the library file
include "class.phpmailer.php"; // include the class name
/**
 * Description of MailManager
 *
 * @author miracle
 */
class MailManager {
    //put your code here
    
    /**
     * contact form mail manager
     */
    
    function sendContactForm($fname,$lname,$email,$organization,$designation,$phone,$city,$country,$description,$rzip,$rstate){
       
        $mail   = new PHPMailer; // call the class 
    $mail->IsSMTP(); 
    $mail->Host = SMTP_HOST; //Hostname of the mail server
    $mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
    $mail->SMTPAuth = true; //Whether to use SMTP authentication
    $mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
    $mail->Password = SMTP_PWORD; //Password for SMTP authentication
    $mail->AddReplyTo($email, $fname); //reply-to address
    $mail->SetFrom("hubbleapp@miraclesoft.com", "Cas Team"); //From address of the mail
    // put your while loop here like below,
    $mail->Subject = "Contact Form Details"; //Subject od your mail
    //$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
        $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
    //$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
        $mail->MsgHTML("<font color='blue' size='2px'><p>Hello Team,<BR>Here is the contact details,</p>
            <table>
                <tr><td>Name : </td><td><b>$fname.$lname</b></td></tr>
                <tr><td>Designation : </td><td><b>$designation</b></td></tr>
                <tr><td>Organization : </td><td><b>$organization</b></td></tr>
                <tr><td>City : </td><td><b>$city</b></td></tr>
                <tr><td>State : </td><td><b>$rstate</b></td></tr>
                <tr><td>Country : </td><td><b>$country</b></td></tr>
                <tr><td>Zip : </td><td><b>$rzip</b></td></tr>
                <tr><td>Email : </td><td><b>$email</b></td></tr>
                <tr><td>Work Phone : </td><td><b>$phone</b></td></tr>
                <tr><td>Description : </td><td><b>$description</b></td></tr>
                
                </table><BR>
               <b> Regards,</b><Br>
                Corporate Application Support Team.</font>

"); //Put your body of the message you can place html code here
        
    //$mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line, 
    $send = $mail->Send(); //Send the mails
    if($send){
        //echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
                
                return "Mail sent successfully";
    }
    else{
        //echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
            throw new Exception($mail->ErrorInfo);
    }
}
 

 function sendConsultantDetails($rfirstname, $rlastname,$rmiddlename, $remail, $rphone, $rjobPosition, $rootPath,$rcountry,$filname){
       
        $mail   = new PHPMailer; // call the class 
    $mail->IsSMTP(); 
    $mail->Host = SMTP_HOST; //Hostname of the mail server
    $mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
    $mail->SMTPAuth = true; //Whether to use SMTP authentication
    $mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
    $mail->Password = SMTP_PWORD; //Password for SMTP authentication
    $mail->AddReplyTo($email, $fname); //reply-to address
    $mail->SetFrom("hubbleapp@miraclesoft.com", "Cas Team"); //From address of the mail
    // put your while loop here like below,
    $mail->Subject = "Consultant Details"; //Subject od your mail
        if($rcountry == 'INDIA'){
            $mail->AddAddress(APPLYJOB_INDIA, "India Jobs");
        }else {
             $mail->AddAddress(APPLYJOB_USA, "USA Jobs");
        }
    //$mail->AddAddress("hbethireddy@miraclesoft.com", "Aditya Malla"); //To address who will receive this email
    //$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
        $mail->MsgHTML("<font color='blue' size='2px'><p>Hello Team,<BR>Here is the Consultant details,</p>
            <table>
                <tr><td>Job Position : </td><td><b>$rjobPosition</b></td></tr>
                <tr><td>Name : </td><td><b>$rfirstname.$rmiddlename.$rlastname</b></td></tr>
                
                
                
                <tr><td>Email : </td><td><b>$remail</b></td></tr>
                <tr><td>Work Phone : </td><td><b>$rphone</b></td></tr>
               
                 <tr><td>Resume : </td><td><b><a href='".DOWNLOAD_URL."/download/download.php?filename=$filname' >$filname</a></b></td></tr>
              
                
                
                
                </table><BR>
               <b> Regards,</b><Br>
                Corporate Application Support Team.</font>

"); //Put your body of the message you can place html code here
        
    //$mail->AddAttachment($rootPath); //Attach a file here if any or comment this line, 
    $send = $mail->Send(); //Send the mails
    if($send){
        //echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
                
                return "Mail sent successfully";
    }
    else{
        //echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
            throw new Exception($mail->ErrorInfo);
    }
}
    
   
// Mail method for sending employee details
function sendEmployeeVerificationDetails($rfirstname,$rlastname,$rorganization,$rdesignation,$remail,$rphone,$remployeeName,$remployeeId,$rlocation,$rempDesignation,$rdepartment){
       
        $mail   = new PHPMailer; // call the class 
    $mail->IsSMTP(); 
    $mail->Host = SMTP_HOST; //Hostname of the mail server
    $mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
    $mail->SMTPAuth = true; //Whether to use SMTP authentication
    $mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
    $mail->Password = SMTP_PWORD; //Password for SMTP authentication
    $mail->AddReplyTo($email, $fname); //reply-to address
    $mail->SetFrom("hubbleapp@miraclesoft.com", "Cas Team"); //From address of the mail
    // put your while loop here like below,
    $mail->Subject = "Employee Verification Form Details"; //Subject od your mail
    //$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
     //  echo 'conutry11'.$rlocation;
        //if($rlocation == 'India') {
            if(strcmp($rlocation,"India")==0) {
               // echo "hii-->".EMPLOYEE_VERIFICATION_INDIA;
        $mail->AddAddress(EMPLOYEE_VERIFICATION_INDIA, "info"); //To address who will receive this email
        } else {
          //  echo "hii12-->".EMPLOYEE_VERIFICATION_USA;
        $mail->AddAddress(EMPLOYEE_VERIFICATION_USA, "info"); //To address who will receive this email
    }
        //EMPLOYEE_VERIFICATION
    //$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
        $mail->MsgHTML("<font color='blue' size='2px'><p>Hello Team,<BR>Here is the employee details,</p>
                <p>Employee Contact Details</p>
            <table>
                <tr><td>Name : </td><td><b>$rfirstname.$rlastname</b></td></tr>
                <tr><td>Designation : </td><td><b>$rdesignation</b></td></tr>
                <tr><td>Organization : </td><td><b>$rorganization</b></td></tr>
                <tr><td>Email : </td><td><b>$remail</b></td></tr>
                <tr><td>Work Phone : </td><td><b>$rphone</b></td></tr>
                </table>
                <p>Employee Verifivation Details</p>
                <table>
                <tr><td>Employee Name : </td><td><b>$remployeeName</b></td></tr>
                <tr><td>Employee Id : </td><td><b>$remployeeId</b></td></tr>
                <tr><td>Location : </td><td><b>$rlocation</b></td></tr>
                
                <tr><td>Designation : </td><td><b>$rempDesignation</b></td></tr>
                <tr><td>Department : </td><td><b>$rdepartment</b></td></tr>
               
                
                </table><BR>
               <b> Regards,</b><Br>
                Corporate Application Support Team.</font>

"); //Put your body of the message you can place html code here
        
    //$mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line, 
    $send = $mail->Send(); //Send the mails
    if($send){
        //echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
                
                return "Mail sent successfully";
    }
    else{
        //echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
            throw new Exception($mail->ErrorInfo);
    }
}
    

// method for sending details of employee referal 


 function sendReferalCandidateDetails($rfirstname,$rlastname,$reducationalQualification,$rrelation,$rphone,$remail,$rcurrentOrganization,$rcurrentOccupation,$rcurrentLocation,$rexperience,$rintrestedLocation,$rintrestedDepartment,$rootPath,$filname,$rcreatedBy){
       
        $mail   = new PHPMailer; // call the class 
    $mail->IsSMTP(); 
    $mail->Host = SMTP_HOST; //Hostname of the mail server
    $mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
    $mail->SMTPAuth = true; //Whether to use SMTP authentication
    $mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
    $mail->Password = SMTP_PWORD; //Password for SMTP authentication
    $mail->AddReplyTo($email, $fname); //reply-to address
    $mail->SetFrom("hubbleapp@miraclesoft.com", "Cas Team"); //From address of the mail
    // put your while loop here like below,
    $mail->Subject = "Referal Candidate Details"; //Subject od your mail
        if($rintrestedLocation == 'India'){
            $mail->AddAddress(REFERAL_INDIA, "India Referal Jobs");
        }else {
             $mail->AddAddress(REFERAL_USA, "USA Referal Jobs");
        }
    //$mail->AddAddress("hbethireddy@miraclesoft.com", "Aditya Malla"); //To address who will receive this email
    //$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
        $mail->MsgHTML("<font color='blue' size='2px'><p>Hello Team,<BR>Here is the Referal Candidate details,</p>
            <table>
                
                <tr><td>Name : </td><td><b>$rfirstname.$rlastname</b></td></tr>
                
                <tr><td>Educational Qualification : </td><td><b>$reducationalQualification</b></td></tr>
                
                
                <tr><td>Phone Number : </td><td><b>$rphone</b></td></tr>
                <tr><td>Email ID : </td><td><b>$remail</b></td></tr>
                <tr><td>Current Organization : </td><td><b>$rcurrentOrganization</b></td></tr>
                <tr><td>Current Occupation : </td><td><b>$rcurrentOccupation</b></td></tr>
                <tr><td>Experience : </td><td><b>$rexperience</b></td></tr>
                <tr><td>Interested Location : </td><td><b>$rintrestedLocation</b></td></tr>
                <tr><td>Interested Department : </td><td><b>$rintrestedDepartment</b></td></tr>
                <tr><td>Current Location : </td><td><b>$rcurrentLocation</b></td></tr>
                <tr><td>Refered By : </td><td><b>$rcreatedBy</b></td></tr>
                
               
                 <tr><td>Resume : </td><td><b><a href='".DOWNLOAD_URL."/download/DownloadReferal.php?filename=$filname&rootPath=$rootPath'>$filname</a></b></td></tr>
              
                
                
                
                </table><BR>
               <b> Regards,</b><Br>
                Corporate Application Support Team.</font>

"); //Put your body of the message you can place html code here
        
    //$mail->AddAttachment($rootPath); //Attach a file here if any or comment this line, 
    $send = $mail->Send(); //Send the mails
    if($send){
        //echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
                
                return "Mail sent successfully";
    }
    else{
        //echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
            throw new Exception($mail->ErrorInfo);
    }
}



}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    </body>
</html>