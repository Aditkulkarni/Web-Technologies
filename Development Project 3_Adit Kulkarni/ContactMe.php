<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
      <title>Adit Kulkarni | Contact me at - aditkulkarni.12@gmail.com</title>
      <script src="analytics.js"></script>
      <!--Email Validation-->
      <script src="textVerfication.js"></script>
      <link href="style.css" rel="stylesheet" type="text/css">
      <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
      <script src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
   </head>
   <!-- Navigation -->
   <body>
      <div id="tabcontent1" style="background-color: #000099;" >
         <button id="bhmpg" class="buttons" onclick="location.href='index.php'">Home Page</button>
         <button id="bppg" class="buttons" onclick="location.href='Professional.php'">Professional</button>
         <button id="bccpg" class="buttons" onclick="location.href='Co-curricular.php'">Co-curricular</button>
         <button id="bcmpg" class="buttons" onclick="location.href='ContactMe.php'">Contact Me</button>
      </div>
      <br>
      <br>
      <div id="ContactInfoContent" style="width: 100%; overflow: hidden;">
         <div style="margin-left: 1%; font-size:15px; color:#ffffff">
            <div style="text-align:center">
               <h1 class="Sub_heading" ><b>Contact Me</b></h1>
            </div>
            <h1 class="Sub_heading">Please click the button to find my contact details-</h1>
            <button id="contactme_button" onclick="contactmeButton()">Click here to find contact details</button>
            <p id="ContactInfo"></p>
            <br>
            <!-- Assignment 4 Jquery click function
               <script>
               $(document).ready(function(){
                 $("p").click(function(){
                   alert("The paragraph was clicked.");
                 });
               });
               </script>
               <p>Click here to verify Jquery Onclick Function</p> -->
            <!-- Assignment 4 Animation using Jquery 
               <div id="Animation">
               <script> 
               $(document).ready(function(){
                 $("button").click(function(){
                   $("div").animate({left: '250px'});
                 });
               });
               </script> 
               <button>Start Jquery Animation by clicking on this button</button> 
               <div style="background:#ffffff;height:100px;width:100px;position:absolute;"></div> -->
            <br>
            <!-- Formspree Form
               <form method="POST" name="myForm" action="https://formspree.io/aditkulkarni.12@gmail.com">
                <b>First Name</b>
                <input type="text" name="fname" value="" required="required" placeholder="Text Abc">
                <br><br>
                <b>Last Name</b>
                <input type="text" name="fname" value="" required="required" placeholder="Text Abc">
                <br><br>
                <b>PhoneNumber</b>
                <input type="text" name="fPhone" value="" required="required" placeholder="Number 123-456-7890" onblur="validateNumber(this);">
                <br><br>
                <b>Email Address</b>
                <input type="text" name="EmailID" value="" required="required" placeholder="abc@xyz.com" onblur="validateEmail(this);">
                <br><br>
                <b>Message</b><br>
                <textarea cols="57" rows="6" name="fMessage" placeholder="Text" required="required"></textarea>
                <br><br>
                <b>Reason of Contact</b>
                <select id="ContactReason" name="Reason of Contact"></select>
               -->	
            <!--JSON File for array of data
               <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                       <script >
                           var $select = $('#ContactReason');
                           $.getJSON('dropdown_data.json', function(data){
                             
                             for (var i = 0; i < data['ContactReason'].length; i++) {
                              $select.append('<option id="' + data['ContactReason'][i]['id'] + '">' + data['ContactReason'][i]['name'] + '</option>');
                              }
                           });
                       </script> 
                 <br>
                 <br>               
               <div class="send">
                         <input type="submit" name="send" onsubmit="setTimeout(function () { window.location.reload(); }, 10)">
               </div>
               </form>
               -->
            <!-- Contact form in PHP for Development Project 3 -->
            <form name="contactform" method="POST" action="contactform.php">
               <p> All fields are required *</p>
               <p>Name</p>
               <input type="text" name="name" placeholder="ex: Adit Kulkarni" required>
               <p>Email</p>
               <input type="text" name="email" placeholder="ex: aditkulkarni.12@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
               <p>Phone</p>
               <input type="text" name="phone" placeholder="ex: 1234567890" pattern="[0-9]{10}" required>
               <p>Subject</p>
               <input type="text" name="subject" placeholder="Subject" required>
               <p>Reason of Contact</p>
               <select name="reason" size="1">
                  <option value="selectReason">Select Reason</option>
                  <option value="Interview Application">Interview Application</option>
                  <option value="Feedback">Feedback</option>
                  <option value="Queries">Queries</option>
                  <option value="Miscellaneous">Miscellaneous</option>
               </select>
               <br />
               <p>Message</p>
               <textarea name="message" rows="6" cols="25" placeholder="Please write a message for me-" required></textarea>
               <br />
               <input type="submit" value="Send">
            </form>
         </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <!-- Script to display information on clicking the button -->
      <script>
         function contactmeButton() { 
         	  document.getElementById("ContactInfo").innerHTML = "Email Id - aditkulkarni.12@gmail.com | Phone number- 4126283091 | Adddress :23 Whinfield St, Poughkeepsie, NY - 12601";
         } 
      </script>
   </body>
</html>