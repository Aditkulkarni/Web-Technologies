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
      <link href="style.css" rel="stylesheet" type="text/css">
      <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
      <script src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
      <script src="cookie_info.js"></script>
   </head>
   <!-- Navigation- -->
   <body>
      <div id="tabcontent1" style="background-color: #000099;" >
         <button id="bhmpg" class="buttons" onclick="location.href='index.php'">Home Page</button>
         <button id="bppg" class="buttons" onclick="location.href='Professional.php'">Professional</button>
         <button id="bccpg" class="buttons" onclick="location.href='Co-curricular.php'">Co-curricular</button>
         <button id="bcmpg" class="buttons" onclick="location.href='ContactMe.php'">Contact Me</button>
      </div>
      <!-- Slide Show of Images-->
      <section id="imageshow">
         <img id="img1" alt="technologyimg1" class="image" width="1600" height="500" src="https://lh3.googleusercontent.com/vDdM3KEXNDMN-_shOcyJJlhcZh9ENoyJFgEIu2QNQOEr6PWbD_hfrVtJuLf3A5FyK1mhrYfYZQce74v0RhGic_mYV5ak7RYugNTMNalxube-TKlO1-7IqiwvaXWO-8Gs7RM_jFfbiw=w2400"
            style="width:100%">
         <img id="img2" alt="technologyimg1" class="image" width="1600" height="500" src="https://lh3.googleusercontent.com/chilbLRF8FQsGTHlVYNsJPNB0JvnBWdSrAR3t55EsuM3MXrGSBjgxx_cx3he0PcI4zyWF3qlB40VMbr17KTNw1dF53B9JBCUfMwNQ-ta5uU5VBenGHPLWsQXsPJ1Zd2J4OnfV8UH1Q=w2400"
            style="width:100%">
         <img id="img3" alt="technologyimg1" class="image" width="1600" height="500" src="https://lh3.googleusercontent.com/w5nLLCbBuqDBSHh3HLiE4V3UyvyElOmP0jfvm6GOdZJgiG06sHWdRALi1G-E16n1cH8dwu6Nhz9pfuok-Xo0p_Ibh_oF37h69J7jvUS1jjnCoikIQAnAAukzVb0zw063yr3zGZ7GuQ=w2400"
            style="width:100%">
      </section>
      <br>
      <br>
      <!-- Content of the Website -->
      <div id="Content" style="width: 100%; overflow: hidden;">
         <div id="Content_Intro" style="margin-left: 1%; font-size:15px; color:#ffffff">
            <div id="dc" style="text-align:center">
               <h2 id="Name">Adit Kulkarni</h2>
               <b>E-mail : </b><a href="mailto:aditkulkarni.12@gmail.com">aditkulkarni.12@gmail.com</a><br>
               <b>Mobile : </b>+1 412 628 3091<br><br>
            </div>
            <b>Introduction</b>
            <div id="text_intro" class="introduction" style="text-align:justify;margin-right: 2%;">
               <p>Born in the 90s, I belonged to that demographic cohort who is termed a millennial. Those days heralded the software boom and the city of my birth, Pune, was being hailed as the next IT hub.  It was only natural that I grew up hearing about the ‘next big revolution’ and technology bringing in vast changes to society.  The allure of software industry captivated me since then and all my academic attempts were geared to me becoming a software engineer.</p>
               <p>In School, I was always on the lookout for any opportunity to be associated with this new field. While I was in the 10th grade, the school had organized a special grading course on Information Technology for selected candidates, as suggested by the State Board of Exams for students who had an urge to learn about IT Industry. My teachers, aware of my interest in Software Learning nominated me for the course and I successfully completed the course. This was my first Software dedicated learning at a very young age of 15 years. I decided to go into Junior College and opt for Vocational Subject (Specialized Subjects) as Computer Sciences. I was enthralled to learn the basics; the machine level language, microprocessors (8085), how compilers understood the machine level code and formed a software language.  I scored 88.5 % in the vocational subjects (Computer Science).</p>
               <p>With this impressive score in vocational studies and 63.67% in HSC (Higher Secondary), I was able to secure admission to one of the most prestigious colleges in the city, Fergusson College. My voracious appetite for the computer sciences was satisfied through  learning languages like C, C++, Java and PHP programming, System programming and Operating Systems, electronics that supported it by Machine level language coding, subjects like Microprocessor Architecture and Programming, Software Management courses like Software engineering and Business Application of Softwares. A first class graduating score of 61% from Fergusson College (Affiliated to Pune University), was a feather in my cap.</p>
            </div>
         </div>
      </div>
      <!-- Slide Show Logic using inline Javascript-->
      <script id="JavascriptImageShow">
         var myIndex = 0;
         carousel();
         
         function carousel() {
           var i;
           var x = document.getElementsByClassName("image");
           for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";
           }
           myIndex++;
           if (myIndex > x.length) {myIndex = 1}
           x[myIndex-1].style.display = "block";
           setTimeout(carousel, 3000);
         }
      </script>
   </body>
</html>