<?php
     session_start();
    
     require_once "config.php";
    
    $name_err = $email_err = $comments_err = "";
    $name = $email = $comments = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        if(empty(trim($_POST["name"]))){
            $name_err = "Please enter your Name.";
        }else{
            $name = trim($_POST["name"]);
        }
    
        if(empty(trim($_POST["email"]))){
            $email_err = "Please enter your Email.";
        } else{
            $email = trim($_POST["email"]);
        }

        if(empty(trim($_POST["phone"]))){
            $phone_err = "Please enter your phone no.";
        } else{
            $phone = trim($_POST["phone"]);
        }
    
        if(empty(trim($_POST["comments"]))){
            $comments_err = "Please enter comments.";
        }else{
            $comments = trim($_POST["comments"]);
        }
            
            $query="INSERT INTO `contact`(`name`, `email`, `phone_number`, `message`) VALUES ('$name', '$email', '$phone' ,'$comments');";
    
            if(mysqli_query($link, $query)){
    
                $to = $email;
                $subject = "Thanks for contacting algorhythm-vit.in" ;
    
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
          
      <img height="auto" src="https://s3-eu-west-1.amazonaws.com/topolio/uploads/605b80cc9ca5e/1616609521.jpg" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="84" alt="Image not founf">
    
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
        <p><span style="font-family: Poppins, sans-serif; color: #ecf0f1; font-size: 18px;">Hello Soham,</span></p>
<p> </p>
<p><span style="font-family: Poppins, sans-serif; color: #ecf0f1; font-size: 18px;">You have registered your query</span></p>
<p> </p>
<p><span style="font-family: Poppins, sans-serif; color: #ecf0f1; font-size: 18px;">Name:'.$name.'</span></p>
<p><span style="font-family: Poppins, sans-serif; color: #ecf0f1; font-size: 18px;">Email: '.$email.'</span></p>
<p><span style="font-family: Poppins, sans-serif; color: #ecf0f1; font-size: 18px;">Phone Number: '.$phone.'</span></p>
<p><span style="font-family: Poppins, sans-serif; color: #ecf0f1; font-size: 18px;">Message: '.$comments.'</span></p>
<p> </p>
<p><span style="font-family: Poppins, sans-serif; color: #ecf0f1; font-size: 18px;">We will get back to you soon.</span></p>
<p> </p>
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
    
    
                $_SESSION["contact_dtl"] = "We will contact you shortly :)";
            }
            else{
                $_SESSION["contact_dtl_no"] = "Query not registered, Please try again later :(";
            }
    }
    
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Algorhythm 2021 | Contact</title>
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
          <span class="little_event_title">Contact us</span>
          <h1 class="event_title">Let's Talk</h1>
        </div>
        <div class="container text_center top_60 box-animate">
          <div class="subtext">
            <h2>
              Want to ask us a question?
            </h2>
          </div>
        </div>
        <div class="container top_45 box-animate">
          <div class="contact_form">
            <div id="message">
                <?php
                    if(isset($_SESSION['contact_dtl_no'])){
                        $message = $_SESSION["contact_dtl_no"];
                        echo '<div id="error_page"><h2>'.$message.'</h2></div>';
                        unset($_SESSION['contact_dtl_no']);
                    }
                    elseif(isset($_SESSION['contact_dtl'])){
                        $message = $_SESSION["contact_dtl"];
                        echo '<div id="success_page"> <h2>'.$message.'</h2></div>';
                        unset($_SESSION['contact_dtl']);
                    }
                ?>
            </div>
            <form
              method="post"
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
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
                  placeholder="Your Phone number"
                  name="phone"
                  type="text"
                  id="name"
                  required
                />
              </div>
              <div class="col-xl-12">
                <textarea
                  class="contact_form_input_text"
                  name="comments"
                  id="comments"
                  rows="4"
                  placeholder="Message"
                  required
                ></textarea>
              </div>
              <div class="col-xl-12 contact_form_button text_center top_45">
                <input
                  class="submit_btn visible"
                  data-dist="2"
                  data-cursor-type="medium"
                  type="submit"
                  value="Send it"
                />
              </div>
            </form>
          </div>
        </div>
        <div class="container top_120 box-animate">
          <div class="contact_info text_center row">
            <div class="col-xl-4 col-lg-4 col-md-6 contact-info">
              <a href="mailto:hi@algorhythm-vit.in">
                <i class="fas fa-paper-plane"></i> <br />
                hi@algorhythm-vit.in</a
              ><br />
              <span>email</span>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 contact-info">
              <a target="_blank" href="https://goo.gl/maps/w1bxxB78SzByFfebA">
                <i class="fas fa-map-marker-alt"></i><br />
                Vidyalankar Institute of Technology, Mumbai</a
              ><br />
              <span>address</span>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 contact-info">
              <a target="_blank" href="#"
                ><i class="fab fa-instagram"></i><br />Technical Council</a
              ><br />
              <span>instagram</span>
            </div>
          </div>
        </div>
        <footer>
          <div class="container">
            <div class="scroll_top" data-cursor-type="medium">
              Back to top<i class="fas fa-angle-up"></i>
            </div>
          </div>
        </footer>
      </div>
    </main>

    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
