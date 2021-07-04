<?php

//basic start php
session_start();

require_once "pdo.php";


function GetImageExtension($imagetype){
        if(empty($imagetype)) return false;
        switch($imagetype){
            case 'image/bmp' : return '.bmp';
            case 'image/gif' : return '.gif';
            case 'image/jpeg' : return '.jpg';
            case 'image/png' : return '.png';
            default: return false;
        }
     }



//eventname for display code
$eventname="";
$tempevent=$_GET['event'];
$fees=$_GET['fees'];

if($tempevent == "hackathon"){
    $title = "Hackathon";
}
elseif($tempevent == "competitive_coding"){
    $title = "Competitive Coding";
}
elseif($tempevent == "error_hunting"){
    $title = "Error Hunting";
}
elseif($tempevent == "circuit_frenzy"){
    $title = "Circuit Frenzy";
}
elseif($tempevent == "chess_variants"){
    $title = "Chess Variants";
}
elseif($tempevent == "valorant"){
    $title = "Valorant";
}
elseif($tempevent == "csgo"){
    $title = "Counter Strike - Global Offensive";
}
elseif($tempevent == "codm"){
    $title = "Call Of Duty - Mobile";
}
elseif($tempevent == "e_portfolio"){
    $title = "E-Portfolio";
}

$splitEventArray=explode("_",$_GET['event']);
foreach($splitEventArray as $splitEvent){
    $eventname=$eventname." ".$splitEvent;
}

//code if submit button pressed
if(isset($_POST['submit_button'])){

    //trim space
    $rname=trim($_POST["name"]);
    $trans_id=trim($_POST["trans_id"]);

   //upload screenshot
   $file1=$_FILES['screenshot']['name'];
   $imgtype=$_FILES['screenshot']["type"];
   $ext=GetImageExtension($imgtype);
   $dest1='images/transaction_screenshots/'.$tempevent.'_screenshots/'.$trans_id.$ext;
   $new_destination = $tempevent.'_screenshots/'.$trans_id.$ext;
   $filee1=$_FILES['screenshot']['tmp_name'];
   $ext1=pathinfo($file1,PATHINFO_EXTENSION);
   if(in_array($ext1,['png'])||in_array($ext1,['jpeg'])||in_array($ext1,['jpg'])){
   move_uploaded_file($filee1,$dest1);
   }
   else{
       $_SESSION['error']="Please upload a image with appropriate format";
       header('Location: form-1.php?event='.$tempevent);
       return;
   }
   

   //sql query execution code start
   try{
    
     $stmt = $pdo->prepare("INSERT INTO `".$tempevent."`(`rname`, `remail`, `phone`, `college`, `yos`, `department`, `trans_id`, `imagepath`) VALUES (:rname,:remail,:phone,:college,:yos,:department,:trans_id,:imagepath)");

    $stmt->execute(array(
    ':rname'=>$_POST['name'],
    ':remail'=>$_POST['email'],
    ':phone'=>$_POST['phone'],
    ':college'=>$_POST['college'],
    ':yos'=>$_POST['yos'],
    ':department'=>$_POST['dept'],
    ':trans_id'=>$_POST['trans_id'],
    ':imagepath'=> $new_destination
    ));

    $_SESSION['success']="You have successfully registered for the event. We will get back to you.";
    
    $to = $_POST['email'];
    $subject = "Registered for ".$title ;
    
    $txt = '
        
        
      <div style="background-color:#FFFFFF;">
        
      
      
      <div style="background:#000000;background-color:#000000;Margin:0px auto;max-width:600px;">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#000000;background-color:#000000;width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:3px 0px 3px 0px;text-align:center;vertical-align:top;">
         
            
      <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
        
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
        
            <tr>
              <td align="center" style="font-size:0px;padding:0px 0px 0px 0px;word-break:break-word;">
                
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
        <tbody>
          <tr>
            <td style="width:84px;">
              
        <a href="algorhythm-vit.in" target="_blank">
          
      <img height="auto" src="https://s3-eu-west-1.amazonaws.com/topolio/uploads/605b80cc9ca5e/1616609521.jpg" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="84">
    
        </a>
      
            </td>
          </tr>
        </tbody>
      </table>
    
              </td>
            </tr>
          
      </table>
    
      </div>
    
    
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      
    
      
      <div style="background:#000000;background-color:#000000;Margin:0px auto;max-width:600px;">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#000000;background-color:#000000;width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px 0px 0px 0px;text-align:center;vertical-align:top;">
            
            
            
      <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
        
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
        
            <tr>
              <td style="font-size:0px;padding:10px 25px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:25px;word-break:break-word;">
                
      <p style="border-top:solid 2px #FFFFFF;font-size:1;margin:0px auto;width:100%;">
      </p>
      
      
              </td>
            </tr>
          
      </table>
    
      </div>
    
    
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      
    
      
      <div style="background:#000000;background-color:#000000;Margin:0px auto;max-width:600px;">
        
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#000000;background-color:#000000;width:100%;">
          <tbody>
            <tr>
              <td style="direction:ltr;font-size:0px;padding:0px 0px 0px 0px;text-align:center;vertical-align:top;">
              
            
      <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
        
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
        
            <tr>
              <td align="left" style="font-size:0px;padding:0px 15px 5px 15px;word-break:break-word;">
                
      <div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:11px;line-height:1.5;text-align:left;color:#000000;">
        <p><span style="font-family: Poppins, sans-serif; color: #ecf0f1; font-size: 18px;">Hello '.$_POST['name'].',</span></p>
<br>
<p><span style="font-family: Poppins, sans-serif; color: #ecf0f1; font-size: 18px;">You have registered for '.$title.'</span></p>
<br>
<p><span style="font-family: Poppins, sans-serif; color: #ecf0f1; font-size: 18px;">Name: '.$_POST['name'].'</span></p>
<p><span style="font-family: Poppins, sans-serif; color: #ecf0f1; font-size: 18px;">Email: '.$_POST['email'].'</span></p>
<p><span style="font-family: Poppins, sans-serif; color: #ecf0f1; font-size: 18px;">Phone Number: '.$_POST['phone'].'</span></p>
<p><span style="font-family: Poppins, sans-serif; color: #ecf0f1; font-size: 18px;">College name: '.$_POST['college'].'</span></p>
<p><span style="font-family: Poppins, sans-serif; color: #ecf0f1; font-size: 18px;">Year of Study: '.$_POST['yos'].'</span></p>
<p><span style="font-family: Poppins, sans-serif; color: #ecf0f1; font-size: 18px;">Department: '.$_POST['dept'].'</span></p>
<p><span style="font-family: Poppins, sans-serif; color: #ecf0f1; font-size: 18px;">Transaction ID: '.$_POST['trans_id'].'</span></p>
<br>
<p><span style="font-family: Poppins, sans-serif; color: #ecf0f1; font-size: 18px;">We will get back to you soon.</span></p>

      </div>
    
              </td>
            </tr>
          
      </table>
    
      </div>
    
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    
      
      </div>
    ';
    
    
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
                $headers .= 'From: hi@algorhythm-vit.in'. "\r\n";
    
                $headers .= 'Cc: danish.patel@algorhythm-vit.in, harshika.pardeshi@algorhythm-vit.in, soham.sahare@algorhythm-vit.in, khuzaima.pishori@algorhythm-vit.in' . "\r\n";
                //  $headers .= 'Cc: soham.sahare@algorhythm-vit.in' . "\r\n";
    
                mail($to, $subject, $txt, $headers);
    
    header('Location: form-1.php?event='.$tempevent.'&fees='.$fees);
    return;

   }
   catch(Exception $e){
    $_SESSION['error']="Sorry registration not complete, Please try again.";
    header('Location: form-1.php?event='.$tempevent.'&fees='.$fees);
    return;
  }
    
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Algorhythm 2021 | <?php echo $title; ?></title>
    <meta charset="UTF-8" />
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/images//favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/images//favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/images//favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/images//favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/images//favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/images//favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/images//favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/images//favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/images//favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images//favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/images//favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images//favicon/favicon-16x16.png">
<link rel="manifest" href="/images//favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/images//favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script
      src="https://kit.fontawesome.com/720d275f39.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="dark">
            <?php include 'nav.php';?>

    <main id="main">
      <div class="data-scroll">
        <div class="page_header type_two box-animate">
          <span class="little_event_title">Submit this form</span>
          <h1 class="event_title"><?php echo $title; ?></h1>
        </div>
        <div class="container text_center top_60 box-animate">
          <div class="subtext">
            <h2>
               Pay <?php echo $fees; ?> using PhonePe, Google Pay or PayTM on Number 7756059960.<br> And in Note mention the event name.<br> After successful Payment, register using the form below. 
            </h2>
          </div>
        </div>
        <div class="container top_45 box-animate">
          <div class="contact_form">
          <div id="message">
                <?php
                    if(isset($_SESSION['error'])){
                        $message = $_SESSION["error"];
                        echo '<div id="error_page"><h2>'.$message.'</h2></div>';
                        unset($_SESSION['error']);
                    }
                    elseif(isset($_SESSION['success'])){
                        $message = $_SESSION["success"];
                        echo '<div id="success_page"> <h2>'.$message.'</h2></div>';
                        unset($_SESSION['success']);
                    }
                ?>
            </div>
            
            <form
              method="post"
              action=""
              enctype="multipart/form-data"
              name="contactform"
              id="contactform"
              class="row"
            >
              <div class="col-xl-4">
                <input
                  class="contact_form_input"
                  placeholder="Your Name"
                  name="name"
                  type="text"
                  id="name"
                  required
                />
              </div>
              <div class="col-xl-4">
                <input
                  class="contact_form_input"
                  placeholder="Your Email"
                  name="email"
                  type="email"
                  id="email"
                  required
                />
              </div>
              <div class="col-xl-4">
                <input
                  class="contact_form_input"
                  placeholder="Phone Number"
                  name="phone"
                  type="text"
                  id="email"
                  required
                />
              </div>
              <div class="col-xl-6">
                <input
                  class="contact_form_input"
                  placeholder="College Name"
                  name="college"
                  type="text"
                  id="email"
                  required
                />
              </div>

              <div class="col-xl-3">
                <input
                  class="contact_form_input"
                  placeholder="Year of study"
                  name="yos"
                  type="text"
                  id="email"
                  required
                />
              </div>
              <div class="col-xl-3">
                <input
                  class="contact_form_input"
                  placeholder="Department"
                  name="dept"
                  type="text"
                  id="email"
                  required
                />
              </div>

              <div class="col-xl-4">
                <input
                  class="contact_form_input"
                  placeholder="Transaction ID"
                  name="trans_id"
                  type="text"
                  id="email"
                  required
                />
              </div>

              <div class="col-xl-4">
               
                <input placeholder="Screenshot of Transaction" id="email" name="screenshot" autocomplete="off" type="file" class="contact_form_input" required/>
              </div>


              <!-- <div class="col-xl-12">
                <textarea
                  class="contact_form_input_text"
                  name="comments"
                  id="comments"
                  rows="4"
                  placeholder="Message"
                ></textarea>
              </div> -->
              <div class="col-xl-12 contact_form_button text_center top_45">
                <input
                  class="submit_btn visible"
                  data-dist="2"
                  data-cursor-type="medium"
                  type="submit"
                  value="Submit"
                  name="submit_button"
                />
              </div>
            </form>
          </div>
        </div>
        
    </main>

    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
