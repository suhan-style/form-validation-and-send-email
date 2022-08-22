<?php 
if(isset($_POST['submit'])){
	
$txtFullName = $_POST['full_name'];

$txtDesignation = $_POST['designation'];

$txtCompany = $_POST['company'];

$txtEmail=$_POST['email'];

$txtMobile=$_POST['mobile'];

$txtState=$_POST['stt'];

$txtCity=$_POST['city'];



$body = "<html>

<head>

</head>

<body>

<table width='50%' cellspacing='4' cellpadding='4'>

<tr>

<td colspan='2' class='heading'>Siemens one-to-one discovery meeting!</td>

</tr>

  <tr>

    <td class='td'><strong>Full Name : </strong></td>

    <td>".$txtFullName."</td>

  </tr>

    

  <tr>

    <td ><strong>Designation : </strong></td>

    <td >".$txtDesignation."</td>

  </tr>

  <tr>

  <td><strong>Company : </strong></td>

  <td>".$txtCompany."</td>

  </tr>

  <tr>

  <td><strong>Email ID : </strong></td>

  <td><a href=mailto:".$txtEmail." class=''>".$txtEmail."</a></td>

  </tr>

  <tr>

  <td><strong>Mobile : </strong></td>

  <td>".$txtMobile."</td>

  </tr>


  <tr>

    <td><strong>State : </strong></td>

    <td>".$txtState."</td>

  </tr>
  
  
  <tr>

    <td><strong>City : </strong></td>

    <td>".$txtCity."</td>

  </tr>

</table>

</body>

</html>";




$mime_boundary = "<<<--==+X[".md5(time())."]\r\n\r\n";

$headers = "MIME-Version: 1.0"."\r\n" ."Content-Type: text/html;"."\r\n";

$to="test@gmail.com";


$subject = "Siemens - Form Testing";

$headers .="From: info@domain.com \r\n";

mail($to,$subject,$body,$headers);

echo "<script> alert('We thank you for registering. We will connect with you soon.');</script>";

echo "<script> window.location.href='thank-you.html'; </script>";
}
?>