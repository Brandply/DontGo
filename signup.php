<?php
 
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "abond@brandply.com";
 
    $email_subject = "Form from Don'tGo.com";
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['phone']) ||
 
        !isset($_POST['company']) ||
        !isset($_POST['website']) ) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }

 
    $name = $_POST['name']; // required
 
    $email_from = $_POST['email']; // required
 
    $phone = $_POST['phone']; // required
 
    $company = $_POST['company']; //  required
  
    $website = $_POST['website']; // not required
 
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
 
  }
 
 



 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Phone Number: ".clean_string($phone)."\n";
 
    $email_message .= "Company: ".clean_string($company)."\n";
 
 
    $email_message .= "Website: ".clean_string($website)."\n";
 
 
     
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
<html>
    <head>
        <title>Dont'Go - SignUp</title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
        <link rel="icon" type="image/x-icon" href="assets/img//favicon.ico" />
        <link rel="icon" type="image/png" href="assets/img//favicon.png" />
    </head>
    <body>
    <!-- DONTGO BEGIN -->
<script type="text/JavaScript">
    vagntCampaignId='';
    vagntLinkInfo='';
function vagnt_load() {
    var vascript = document.createElement('script');
    vascript.type = "text/javascript";
    vascript.src = "//vagnt.com/sd/?siteid=1655";
    document.getElementsByTagName('head')[0].appendChild(vascript);
}
if (window.attachEvent) {
    setTimeout(vagnt_load, 1);
} else if (window.addEventListener) {
    window.addEventListener("load", vagnt_load, false);
}
</script>
<!-- DONTGO END -->
        <div class="container">
            <header>
                <div class="row">
                    <div class="top col-md-6">
                        <ul>
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> <a href="tel:+18009225555" title="800-922-5555">800-922-5555</a></li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <a href="mailto:info@dontgo.com" title="Email info@dontgo.com">info@dontgo.com</a></li>
                        </ul>
                    </div>
                </div>
                <nav>
                    <div class="row">
                        <div class="col-sm-3"><a class="" href="/" title="Don't Go"><img src="assets/img/logo.svg" /></a></li></div>
                            <ul class="col-sm-6">
                                <li><a href="features.html" title="Features">Features</a></li>
                                <li><a href="benefits.html" title="Benefits">Benefits</a></li>
                                <li><a href="pricing.html" title="Pricing">Pricing</a></li>
                                <li><a href="signup.html" title="Sign Up">Sign Up</a></li>
                                <li><a href="aboutus.html" title="About Us">About Us</a></li>
                            </ul>
                        <div class="col-sm-3"><div class="button"><a class="button" href="signup.html" title="Tell Me More">Tell Me More</a></div></div>
                    </div>
                </nav>
            </header>
            <section id="hero">
                <div class="row">
                    <img src="assets/img/hero-pg.jpg" class="col-md-12" />
                </div>
            </section>
            <section id="signup">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Thank you for your interest. We will be in touch.</h2>
                    </div>
                </nav>
            </section>
            <section id="footer">
                <nav>
                    <div class="row">
                        <div class="links">
                            <ul>
                                <li><a href="features.html" title="Features">Features</a></li>
                                <li><a href="benefits.html" title="Benefits">Benefits</a></li>
                                <li><a href="pricing.html" title="Pricing">Pricing</a></li>
                                <li><a href="signup.html" title="Sign Up">Sign Up</a></li>
                                <li><a href="aboutus.html" title="About Us">About Us</a></li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> <a href="tel:+18009225555" title="800-922-5555">800-922-5555</a></li>
                                <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <a href="mailto:info@dontgo.com" title="Email info@dontgo.com">info@dontgo.com</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </section>
        </div>

 
 
<?php
 
}
 
?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-79660468-1', 'auto');
          ga('send', 'pageview');

        </script>
    </body>
</html>