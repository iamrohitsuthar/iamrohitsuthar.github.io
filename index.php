<!--starting of HTML-->
<!DOCTYPE html>
<html lang="en-US" style="overflow-x:hidden;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="iamrohitsuthar,Iamrohitsuthar,i am rohit suthar,Hi i am rohit suthar,Hi iamrohitsuthar,i am Rohit Suthar,I am RohitSuthar,mrrohitsuthar,rohit suthar,RohitSuthar,Rohit Suthar,rohitsuthar website,rohit suthar website,programmer,amravati,rohitsuthar,rohit suthar blog,Rohit Suthar,Rohit,Suthar,Rohit Karma,Suthar Rohit,iamrohitsuthar blog,iamrohitsuthar twitter,iamrohitsuthar instagram,iamrohitsuthar stackoverflow,iamrohitsuthar github,iamrohitsuthar linkedin,iamrohitsuthar website">
    <meta name="description" content="Hey guys I am RohitSuthar, Welcome to my website. I'm 18 years old and now I'm studying computer engineering in amravati. I love to learn new programming languages, playing games.">
    <title>RohitSuthar</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
<!-- starting of Bootstrap -->
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
<!--     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"> -->
<!-- main style -->
    <link href="css/style.css" rel="stylesheet">
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<script async src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script async src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<!--start of Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="preloader" aria-busy="true" aria-label="Loading, please wait." role="progressbar">
            </div>
        </div>
    </div>
<!--end of Preloader -->
<!-- start of header -->
<header class="navbar-fixed-top">
        <nav>
            <ul>
                <li><a href="#home" class="section active">Home</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contact">Contact Me</a></li>
            </ul>
        </nav>
</header>
<!--end of header -->
<!-- start of home -->
<div class="section" id="home">
   <div class="header">
      <div class="intro-text">
         <br><br><p><span class="intro_bracket"><</span>HI I<span style="color:#00FF00">'</span>M ROHIT SUTHAR<span style="color:#00FF00;">.</span><span class="intro_bracket">/></span></p>
      </div>
      <!--for mobile view-->
      <div class="hello">
         <br><br><p style="margin-bottom:50px !important;">HI<br><span style="padding-left:20px;">I<span style="color:#00FF00">'</span>M </span><br>ROHIT SUTHAR</p>
      </div>
          <div class="mysection">
          <a href="#about"><button class="btn btn-primary" data-aos="fade-up" style="background:transparent;filter:drop-shadow(color=black,offx=2,offy=2,positive=1);">Know More</button></a>
          </div>
    </div>
</div>
<!--End of Home-->
<!-- About Me-->
	<div class="section" id="about">
        <div class="container">
            <div class="col-md-6" data-aos="fade-up">
                <div style="text-align: center;">
                <h1 class="mytitlecontent" data-aos="fade-up"><span class="mytitle_slash">//</span> About Me<span class="mytitle_slash"> //</span></h1>
                </div><br><br>
	               <p class="hit" style="font-family:courier;font-size:23px;">Some text about me. Hey guys I'm Rohit Suthar. I'm 18 years old and now I'm studying computer engineering in amravati. I love to learn new programming languages, playing games, music and learn new things.</p>
                </div><br>
                <div class="col-md-6 about-img-div">
                <div class="about-border" data-aos="fade-up" data-aos-delay="1.0"></div>
                <img src="img/full.png" width="350" class="img-responsive" alt="" align="right" data-aos="fade-right" data-aos-delay="0" />
            </div>
        </div>
    </div>
<!-- end of about -->

<!-- Education-->
	<div class="section" id="education">
        <div class="container">
            <div class="col-md-12">
              <p class="mytitlecontent" data-aos="fade-up"><span class="mytitle_slash">//</span> My Education<span class="mytitle_slash"> //</span></p>
                <div class="h-50"></div>
            </div>
              <div class="col-md-12">
                <ul class="timeline">
                  <?php
                  include "config.php";
                  $sql2="SELECT * FROM education";
                  $result3=mysqli_query($conn,$sql2);
                  while($row=mysqli_fetch_assoc($result3))
                  {
                  ?>
                    <li class="timeline-event hit" data-aos="fade-up">
                    <label class="timeline-event-icon"></label>
                      <div class="timeline-event-copy hit">
                        <p class="timeline-event-thumbnail"><?= $row['year']?></p>
                          <h3><?= $row['course']?></h3>
                          <h4><?= $row['college']?></h4>
                          <p><strong><?= $row['percentage']?>%</strong></p>
                      </div>
                    </li>
                
                  <?php
                  }
                  ?>
              
                </ul>
            </div>
        </div>
    </div>
<!-- End of Education-->
<!-- start of Skills-->
<div class="section" id="skills">
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
      <br><h1 class="mytitlecontent" align="center" style="color:white;" data-aos="fade-up"><span class="mytitle_slash">//</span> My Skills<span class="mytitle_slash"> //</span></h1><br><br>
  <div style="width:100%;" data-aos="fade-up">
  	<div class="item" id="scroll-to">  
        <?php
          include "config.php";
          $sql="SELECT * from skills";
          $result=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($result))
          {
        ?>
      <div class="progress">
      <div class="progress-bar skills progress_color1" style="font-weight:bold;"  role="progressbar" data-transitiongoal="<?= $row['progress']?>"><?= strtoupper($row['language_name'])?> <?= $row['progress']?>%</div>
      </div>
      <?php
    }
    ?>
	</div>
</div>
</div>
  <div class="col-md-2"></div>
</div>
</div>
</div>
<!-- End of Skills-->

<!-- start of contact -->
<div class="section hit " id="contact">
  <div class="container hit">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
    <h1 class="mytitlecontent" align="center" data-aos="fade-up"><span class="mytitle_slash">//</span> Contact Me<span class="mytitle_slash"> //</span></h1><br>
      <div data-aos="fade-up">
        <form id="contact_form" name="contact_form" method="POST" action="mail.php" role="form" onsubmit="return validateForm(this)" enctype="multipart/form-data">

          <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" onclick="myfunction()" autocomplete="off"/>
          <span id="namespan" class="error_style"></span><br>  

          <input type="email" id="email" name="email" class="form-control" placeholder="Your E-mail" onclick="myfunction()" autocomplete="off" />
          <span id="emailspan" class="error_style"></span><br>

          <input type="number" id="phone" name="phone" class="form-control" placeholder="Phone Number" onclick="myfunction()" autocomplete="off" />
          <span id="phonespan" class="error_style"></span><br>

          <textarea name="message" id="message" class="form-control" placeholder="Your Message" style="height:120px" onclick="myfunction()" autocomplete="off"></textarea>
          <span id="msgspan" class="error_style"></span><br>  

          <button id="submit" type="submit" name="submit" class="btn btn-glance">Send</button>
          <div id="result" style="font-family: arial;padding-left: 230px;"></div>
        </form>
      </div>
      </div>
      <div class="col-md-2"></div>
  </div>
</div>
</div>
<!-- End of contact -->
<!--starting of footer-->
<footer id="footer">
  <div class="row" style="display: inline;">
    <div class="col-md-12">
    <p>© <?php echo date("Y"); ?>. Developed by <a href="http://www.iamrohitsuthar.blogspot.in" target="_blank">Rohit Suthar</a></p>
    <ul class="social">
      <?php
      include "config.php";
      $sql1="SELECT * from social";
      $result1=mysqli_query($conn,$sql1);
      while($row=mysqli_fetch_assoc($result1))
      {
        ?>
        <li><a href="<?= $row['link']?>" target="_blank" title="<?= $row['name']?>"><i class="<?= $row['path']?> all"></i></a></li>
      <?php
      }
      ?>
    </ul>
    <div style="float: right;">
      <a class="up-arrow" href="#home" data-toggle="tooltip" title="Go to top">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a>
    </div>
  </div>
</div>
</footer>
<!--End of footer-->
<!-- jQuery -->
    <script src="js/jquery.js"></script>
<!--  plugins  -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.form.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
<!--  main script  -->
    <script src="js/custom.js"></script>
<script type="text/javascript" src="js/bootstrap-progressbar.min.js"></script>
<script type="text/javascript">
  $(window).scroll(function() {
   var hT = $('#scroll-to').offset().top,
       hH = $('#scroll-to').outerHeight(),
       wH = $(window).height(),
       wS = $(this).scrollTop();
   if (wS > (hT+hH-wH)){
       $('.progress .progress-bar').progressbar();
   }
});
</script>
<!--Ajax code to get email status message without reloading the website!-->
<script>
    $('#contact_form').submit(function(event) {
      event.preventDefault();
      if(validateForm())
      {
      $.ajax({
        type: "POST",
        url: "mail.php",
        data: $(this).serialize(),    
        success: function(data){
          $('#result').html(data);
          $('input[type="text"],[type="email"],textarea').val('');
        }         
      });
    }
    });
  </script>

  <script>
    function validateForm(form)
    {
      var status=1;
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      var name=document.contact_form.name;
      if(name.value==="")
      {
        document.getElementById("namespan").innerHTML="Please enter name";
        status=0;
      }
      else if(email.value==="")
      {
        document.getElementById("emailspan").innerHTML="Please enter email";
        status=0;
      }
      else if(!filter.test(email.value))
      {
         document.getElementById("emailspan").innerHTML="Invalid email address";
           status=0;
      }
      else if(phone.value==="")
      {
        document.getElementById("phonespan").innerHTML="Please enter phone";
        status=0;
      }
      else if(phone.value.length<10)
      {
        document.getElementById("phonespan").innerHTML="Please enter valid phone number";
          status=0;
      }
      else if(message.value==="")
      {
        document.getElementById("msgspan").innerHTML="Please enter your message";
          status=0;
      }
      return status;
    }
    function myfunction()
    {
      document.getElementById("namespan").innerHTML="";
      document.getElementById("emailspan").innerHTML="";
      document.getElementById("phonespan").innerHTML="";
      document.getElementById("msgspan").innerHTML="";    
    }
  </script>
<!--for tooltip-->
<script>
$(document).ready(function(){
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip(); 
})
</script>  
<script>
$('.map-container')
	.click(function(){
			$(this).find('iframe').addClass('clicked')})
	.mouseleave(function(){
			$(this).find('iframe').removeClass('clicked')});
</script>
</body>
</html>
<!--End of HTML-->