<?php

  $name=$email=$result=$content=$phone='';

  if (isset($_POST['submit'])){
    require 'phpmail/PHPMailerAutoload.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    $phone = $_POST['phone'];
    
    $mail = new PHPMailer; 
    $mail->Host = 'smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='abinesh.ravi24@gmail.com';
    $mail->Password='24102002abi.';

    $mail->setFrom($email,$name);
    $mail->addAddress('kiruthika.ravi25@gmail.com');
    $mail->addReplyTo($email,$name);

    $mail->isHTML(true);
    $mail->Subject='contact request from $name($email)';
    $mail->Body='<div>
    Name : '.$name.'<br>
    Email : '.$email.'<br>
    Phone : '.$phone.'<br>
    Message : '.$content.'
    </div>';

    if(!$mail->send()){
      echo ("<script LANGUAGE='JavaScript'>
                window.alert('Something went wrong.Please try again.');
                window.location.href='./contact.php';
             </script>");
    }
    else{
      $result="Thanks ".$name." for contacting us. We'll get back to you soon!";
      echo ("<script LANGUAGE='JavaScript'>
               window.alert(''.$result.'');
               window.location.href='./contact.php';
              </script>");
    }
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="shortcut icon" href="assets/img/logo/favicon.png" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body class="antialiased">
    <?php include 'header.php' ?>
    
    <div class="container mx-auto p-6 mb-3 xl:w-[1280px] ">
      <h2 class="text-2xl font-bold md:text-3xl mt-6 text-center uppercase">Get In Touch</h2>
      <h3 class="text-base tracking-wider font-bold mb-6 text-center md:text-lg uppercase text-emerald-800">Easiest way to manage your Tax & Compliances</h3>
    
      <div class="container xl:w-[1280px] flex flex-col  md:flex-row items-center space-y-12  space-x-8 p-8 mx-auto  bg-emerald-800 rounded-xl shadow-lg overflow-x-hidden overflow-y-visible">
     <!---contact form--->
         <div class="md:w-1/2 bg-white rounded-xl shadow-lg p-8">
           <form action="contact.php" class="flex flex-col space-y-4" method="POST">
             <div>
                 <label for="name" class="text-sm">Name</label>
             </div>
             <div>
                 <input name="name" id="name" type="text" required placeholder="Enter your name" class="ring-1 rimg-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-emerald-300 ">
             </div>  
             <div>
                 <label for="email" class="text-sm">Email</label>
             </div>
             <div>
                 <input name="email"  id="email" type="text" required placeholder="Enter your email" class="ring-1 rimg-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-emerald-300 ">
             </div>  
             <div>
                 <label for="phone" class="text-sm">Phone number</label>
             </div>
             <div>
                 <input name="phone" id="phone"  type="text" required placeholder="Enter your phone number" class="ring-1 rimg-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-emerald-300 ">
             </div>  
             <div>
                 <label for="message" class="text-sm">Message</label>
             </div>
             <div>
                 <textarea name="content" id="content" name rows="5" cols="30" placeholder="Enter your message"  required class="ring-1 rimg-gray-300 w-full rounded-md px-4 py-2 outline-none focus:ring-2 focus:ring-emerald-300 mb-5"></textarea>
             </div>      
            <div class="flex justify-end">
            <input type="submit" value="Submit" class="px-8 py-3 text-white bg-emerald-700 rounded-full baseline hover:bg-slate-900 uppercase tracking-widest ">
            </form>
          </div>
      </div>
    <!---contact form--->
     <!---why taxbee--->
      <div class="md:w-1/2">
        <div class="flex flex-col items-center justify-center text-white mb-[17rem]  md:mb-2  space-y-6 ">
            <h2 class="text-3xl font-extrabold md:text-4xl mb-2  md:self-start sm:self-center  uppercase">Why taxbee ?</h2>
            <div class="contact-carousal text-center xl:w-[450px] xl:h-[400px] md:w-[350px]  md:h-[400px] sm:w-[360px] mr-5 pr-5">
              <div class="carousal-items">
                <img src="./assets/img/bg/icon1.png" alt="" />
                <h3 class="text-xl font-bold text-emerald-300  md:text-lg mb-2 uppercase">Realistic & Implementable</h3>
              </div>
              <div class="carousal-items">
                <img src="./assets/img/bg/icon2.png" alt="" />
                <h3 class="text-xl font-bold text-emerald-300  md:text-lg mb-2 uppercase">Accurate Compliance</h3>
              </div>
              <div class="carousal-items">
                <img src="./assets/img/bg/icon3.png" alt="" />
                <h3 class="text-xl font-bold text-emerald-300  md:text-lg mb-2 uppercase">100% Satisfaction Guaranteed</h3>
              </div>
              <div class="carousal-items">
                <img src="./assets/img/bg/icon4.png" alt="" />
                <h3 class="text-xl font-bold text-emerald-300  md:text-lg mb-2 uppercase">Online Tax Expert Services</h3>
              </div>
            </div>
        </div>
      </div>
     <!---why taxbee--->
     </div>
     <!---address and need help--->
     <div class="container flex flex-col md:flex-row items-center px-6 mx-auto">
     <div class="space-y-5 flex flex-col mt-10 md:w-1/2">
     <div>
     <h2 class=" max-w-md text-lg font-semibold md:text-xl  text-center uppercase text-black mb-2">Coimbatore Branch</h2>
     <p class="max-w-lg text-center font-medium text-emerald-800 text-base md:text-lg"><i class="fa-solid fa-location-dot mr-2"></i>1G, Saisruthi Complex, No.3, Ramarkoil Street, Ramnagar, Coimbatore - 641 009</p>
     </div>
     <div>
     <h2 class=" max-w-md text-lg font-semibold md:text-xl  text-center uppercase text-black mb-2">Tirupur Branch</h2>
     <p class="max-w-lg text-center font-medium text-emerald-800 text-base md:text-lg"><i class="fa-solid fa-location-dot mr-2"></i>Room No.12, First Floor, 27, Subbu Complex, Ramnagar 1st St, Tirupur - 641 602</p>
     </div>
     <div>
     <h2 class=" max-w-md text-lg font-semibold md:text-xl  text-center uppercase text-black mb-2">Salem Branch</h2>
     <p class="max-w-lg text-center font-medium text-emerald-800 text-base md:text-lg"><i class="fa-solid fa-location-dot mr-2"></i>153, Dhayanandan street, Alagapuram, Salem - 636 004</p>
     </div>
     <div>
     <h2 class=" max-w-md text-lg font-semibold md:text-xl  text-center uppercase text-black mb-2 ">Erode Branch</h2>
     <p class="max-w-lg text-center  font-medium text-emerald-800 text-base md:text-lg"><i class="fa-solid fa-location-dot mr-2"></i>No. 3/4, Buddhar Street, Near Karnataka bank, Teachers Colony, Erode - 638 011</p>
     </div>
     </div>
     <div class="md:w-1/2 mt-7 md:mt-0 flex justify-center">
     <div class="">
     <h2 class=" max-w-md text-lg font-semibold md:text-xl  text-center uppercase text-gray-900 mb-2  ">need help</h2>
     <p class="max-w-md text-center font-medium text-emerald-800 text-base md:text-lg"><i class="fa-solid fa-envelope px-2"></i>helpdesk@taxbee.co.in</p>
     <p class="max-w-md text-center font-medium text-emerald-800 text-base md:text-lg"><i class="fa-solid fa-phone px-2"></i>+91 86 86 09 09 63</p>
     </div>
     </div>
     </div>
     <!---address and need help--->
    </div>

    <?php include 'footer.php' ?>
    <script src="./assets/js/script.js"></script>
</body>
</html>
