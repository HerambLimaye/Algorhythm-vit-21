<?php
    session_start();

    require_once "config.php";

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login");
        exit;
    }
    
//eventname for display code
$eventName="";
$tempevent=$_GET['event'];

if($tempevent == "hackathon"){
    $eventName = "Hackathon";
}
if($tempevent == "competitive_coding"){
    $eventName = "Competitive Coding";
} 
if($tempevent == "chess_variants"){
    $eventName = "Chess Variants";
} 
if($tempevent == "circuit_frenzy"){
    $eventName = "Circuit Frenzy";
} 
if($tempevent == "csgo"){
    $eventName = "CS-GO";
} 
if($tempevent == "valorant"){
    $eventName = "Valorant";
} 
if($tempevent == "codm"){
    $eventName == "Call of Duty-Mobile";
} 
if($tempevent == "e_portfolio"){
    $eventName = "E-portfolio";
} 
if($tempevent == "error_hunting"){
    $eventName= "Error Hunting";
} 

$query = "SELECT * FROM `$tempevent`;";
$query_result = mysqli_query($link, $query) or die(mysqli_error($link));

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AlgoRhythm 2021 | <?php echo $tempevent; ?></title>
    <meta charset="UTF-8" />
    <meta name="description" content="Return Portfolio Template" />
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
    <link rel="stylesheet" href="/../css/style.css" />
    <script
      src="https://kit.fontawesome.com/720d275f39.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
      
      
    <h1 style="font-size:38px; text-align:center; margin-bottom:3px;"><?php echo $eventName; ?></h1>
    <h2 style="font-size:24px; text-align:center; margin-bottom:3px;" >Total Count: <?php echo mysqli_num_rows($query_result); ?></h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">College</th>
      <th scope="col">Transaction ID</th>
        <th scope="col">SS</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysqli_fetch_array($query_result)){ ?>
        <tr>
            <td><?php echo $row["rname"]; ?></td>
            <td><?php echo $row["remail"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td><?php echo $row["college"]; ?></td>
            <td><?php echo $row["trans_id"]; ?></td>
            <td><a href="../images/transaction_screenshots/<?php echo $row['imagepath']; ?>" target="_blank">VIEW SS</a></td>
        </tr>
    <?php } ?>
  </tbody>
</table>


  </body>
</html>