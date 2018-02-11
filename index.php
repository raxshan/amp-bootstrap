<!doctype html>
<html ⚡>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <title>My First AMP Project with Bootstrap</title>
    
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-font" src="https://cdn.ampproject.org/v0/amp-font-0.1.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>

    <link rel="canonical" href="./">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">

    <style amp-custom>
        <?php 
          readfile("css/bootstrap.css");
          readfile("css/style.css");
          readfile("css/style-responsive.css");
        ?>
    </style>    
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
  </head>

  
<body>
    
  <header>
    <a href="./" class="header-logo"></a>
    <button class="header-icon menu" on='tap:sidebar.toggle'><i class="fa fa-navicon"></i></button>
    <a href="#" class="header-icon email"><i class="fa fa-envelope-o"></i></a>
  </header>
  <div class="header-clear"></div>
  
  <amp-sidebar id="sidebar" layout="nodisplay" side="left">
    <!-- <div class="logo"><amp-img alt="Logo" src="images/logo.png" width="200" height="120" layout="responsive"></amp-img></div> -->
    <p class="sidebar-divider full-bottom">Pages</p>
    <div class="sidebar-menu">
      <a href="#" class="sidebar-item"><i class="fa fa-star"></i>Home<i class="fa fa-circle"></i></a>
      <a href="#" class="sidebar-item"><i class="fa fa-th"></i>About Us<i class="fa fa-circle"></i></a>
      <a href="#" class="sidebar-item"><i class="fa fa-cog"></i>Features<i class="fa fa-circle"></i></a>
    </div>
    <amp-accordion class="sidebar-menu">
      <section>
        <h4><i class="fa fa-file-o"></i>Page Templates<i class="fa fa-angle-down"></i></h4>
        <ul>
          <li><a href="#"><i class="fa fa-angle-right"></i>404 Page<i class="fa fa-circle"></i></a></li>
          <li><a href="#"><i class="fa fa-angle-right"></i>Coming Soon<i class="fa fa-circle"></i></a></li>
          <li><a href="#"><i class="fa fa-angle-right"></i>Contact<i class="fa fa-circle"></i></a></li>
          <li><a href="#"><i class="fa fa-angle-right"></i>About Us<i class="fa fa-circle"></i></a></li>
        </ul>
      </section>
      <section>
        <h4><i class="fa fa-camera"></i>Gallery<i class="fa fa-angle-down"></i></h4>
        <ul>
          <li><a href="#"><i class="fa fa-angle-right"></i>Round<i class="fa fa-circle"></i></a></li>
          <li><a href="#"><i class="fa fa-angle-right"></i>Squared<i class="fa fa-circle"></i></a></li>
          <li><a href="#"><i class="fa fa-angle-right"></i>Wide<i class="fa fa-circle"></i></a></li>
        </ul>
      </section>
      <section>
        <h4><i class="fa fa-picture-o"></i>Portfolio<i class="fa fa-angle-down"></i></h4>
        <ul>
          <li><a href="#"><i class="fa fa-angle-right"></i>One Item<i class="fa fa-circle"></i></a></li>
          <li><a href="#"><i class="fa fa-angle-right"></i>Two Items<i class="fa fa-circle"></i></a></li>
          <li><a href="#"><i class="fa fa-angle-right"></i>Selected Item<i class="fa fa-circle"></i></a></li>
      </ul>
      </section>
    </amp-accordion>
    <div class="sidebar-menu">
      <a href="#" class="sidebar-item"><i class="fa fa-envelope"></i>Contact<i class="fa fa-circle"></i></a>
    </div>
    <p class="sidebar-divider">Let's get Social</p>
    <div class="sidebar-menu">
      <a href="#" class="sidebar-item"><i class="fa fa-facebook"></i>Facebook<i class="fa fa-circle"></i></a>
      <a href="#" class="sidebar-item"><i class="fa fa-twitter"></i>Twitter<i class="fa fa-circle"></i></a>
      <a href="#" class="sidebar-item"><i class="fa fa-google-plus"></i>Google +<i class="fa fa-circle"></i></a>
      <a href="tel:+123 456 7890" class="sidebar-item"><i class="fa fa-phone"></i>Call Us<i class="fa fa-circle"></i></a>
      <a href="sms:+123 456 7890" class="sidebar-item"><i class="fa fa-comment-o"></i>Text Us<i class="fa fa-circle"></i></a>
      <a href="#" class="sidebar-item"><i class="fa fa-envelope-o"></i>Mail Us<i class="fa fa-circle"></i></a>
    </div>
    <p class="sidebar-divider sidebar-copyright">&copy; 2018. All rights reserved.</p>
  </amp-sidebar>

  <div id="fullbody">
    <div class="container">
      <div class="row">
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
      </div>
      <div class="row">
        <div class="col-md-8">.col-md-8</div>
        <div class="col-md-4">.col-md-4</div>
      </div>
      <div class="row">
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
      </div>
      <div class="row">
        <div class="col-md-6">.col-md-6</div>
        <div class="col-md-6">.col-md-6</div>
      </div>
    </div><!-- END .container -->
  </div><!-- EMND #fullbody -->
    
  <footer>
    <div class="footer-socials">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-google-plus"></i></a>
      <a href="#"><i class="fa fa-envelope-o"></i></a>
      <a href="#"><i class="fa fa-chevron-up"></i></a>
      <div class="clearfix"></div>
    </div>
  </footer><!-- END FOOTER -->
    
</body>
</html>