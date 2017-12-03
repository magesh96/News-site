<!DOCTYPE html>
<html>
<head>
<title>The NewsPaper Site</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="assets/font/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css" media="screen" />
</head>
<body>
<?php
$username=$_GET['id'];

$con=mysql_connect("localhost","root","");

if(!$con)
{
echo "can not connect";
}
mysql_select_db("register",$con);

$query=mysql_query("SELECT * FROM login WHERE username='$username'",$con);
  if(! $query ) {
      die('Could not get data: ' . mysql_error());
   }

 if($value=mysql_fetch_assoc($query))
  
$name=$value['firstname']." &nbsp;".$value['lastname'];

 ?>
<div class="body_wrapper">
  <div class="center">
    <div class="header_area">
      <div class="logo floatleft"><a href="#"><img src="images/logo.png" alt="" /></a></div>
      <div class="top_menu floatleft">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="download1.php">Download</a></li>

          <li><a href="upload.html">Upload</a></li>
          <li><a href="index.html">Logout</a></li>
        </ul>
      </div>
      <div class="social_plus_search floatright">
        <div class="social">
          <ul>
            <li><a href="#" class="twitter"></a></li>
            <li><a href="#" class="facebook"></a></li>
            <li><a href="#" class="feed"></a></li>
          </ul>
        </div>
        <div class="search">
          <form action="#" method="post" id="search_form">
            <input type="text" value="Search news" id="s" />
            <input type="submit" id="searchform" value="search" />
            <input type="hidden" value="post" name="post_type" />
          </form>
        </div>
      </div>
    </div>
    <div class="main_menu_area">
      <ul id="nav">
        <li><a href="#">rugby</a>
                </li>
        
        <li><a href="#">hockey</a>
          
        </li>
        <li><a href="#">golf</a></li>
        <li><a href="#">athletics</a>
            </li>
            
        </li>
        <li><a href="#">tennis</a></li>
        
        <li><a href="#">cricket</a>
         
        </li>
        <li><a href="#">football</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a ><?php echo $name; ?></a></li>
      </ul>
    </div>
    <div class="slider_area">
      <div class="slider">
        <ul class="bxslider">
          <li><img src="images/1.jpg" alt="" title="Real madrid win against Barcelona" /></li>
          <li><img src="images/2.jpg" alt="" title="Roger Federer sets record" /></li>
          <li><img src="images/3.jpg" alt="" title="Dhoni to the rescue" /></li>
        </ul>
      </div>
    </div>
    <div class="content_area">
      <div class="main_content floatleft">
        <div class="left_coloum floatleft">
          <div class="single_left_coloum_wrapper">
            <h2 class="title">from   around   the   world</h2>
            <a class="more" href="#">more</a>
            <div class="single_left_coloum floatleft"> <img src="images/mag.jpg" alt="" />
              <h3>this is a newspaper site</h3>
              <p>my name is v.magesh adithya. </p>
               </div>
            <div class="single_left_coloum floatleft"> <img src="images/mag.jpg" alt="" />
              <h3>this is a newspaper site</h3>
              <p>my name is v.magesh adithya. </p>
               </div>
            <div class="single_left_coloum floatleft"> <img src="images/mag.jpg" alt="" />
              <h3>this is a newspaper site</h3>
              <p>my name is v.magesh adithya. </p>
               </div>
          </div>
          <div class="single_left_coloum_wrapper">
            <h2 class="title">latest  articles</h2>
            <a class="more" href="#">more</a>
            <div class="single_left_coloum floatleft"> <img src="images/mag.jpg" alt="" />
              <h3>this is a newspaper site</h3>
              <p>my name is v.magesh adithya. .</p>
               </div>
            <div class="single_left_coloum floatleft"> <img src="images/mag.jpg" alt="" />
              <h3>this is a newspaper site</h3>
              <p>my name is v.magesh adithya. .</p>
               </div>
            <div class="single_left_coloum floatleft"> <img src="images/mag.JPG" alt="" />
              <h3>this is a newspaper site</h3>
              <p>my name is v.magesh adithya. .</p>
              </div>
          </div>
          <div class="single_left_coloum_wrapper gallery">
            <h2 class="title">gallery</h2>
            <a class="more" href="#">more</a> <img src="images/mag.jpg" alt="" /> <img src="images/mag.jpg" alt="" /> <img src="images/mag.jpg" alt="" /> <img src="images/mag.jpg" alt="" /> <img src="images/mag.jpg" alt="" /> <img src="images/mag.jpg" alt="" /> </div>
          <div class="single_left_coloum_wrapper single_cat_left">
            <h2 class="title">tech news</h2>
            <a class="more" href="#">more</a>
            <div class="single_cat_left_content floatleft">
              <h3>hello everyone this is my team </h3>
              <p>my name is v.magesh adithya. </p>
              <p class="single_cat_left_content_meta">by <span>rohit</span> |  11 comments</p>
            </div>
            <div class="single_cat_left_content floatleft">
              <h3>hello everyone this is my team </h3>
              <p>my name is v.magesh adithya. </p>
              <p class="single_cat_left_content_meta">by <span>magesh</span> |  29 comments</p>
            </div>
            <div class="single_cat_left_content floatleft">
              <h3>hello everyone this is my team </h3>
              <p>my name is v.magesh adithya. </p>
              <p class="single_cat_left_content_meta">by <span>sairam</span> |  46 comments</p>
            </div>
            <div class="single_cat_left_content floatleft">
              <h3>hello everyone this is my team </h3>
              <p>my name is v.magesh adithya. </p>
              <p class="single_cat_left_content_meta">by <span>csk</span> |  34 comments</p>
            </div>
          </div>
        </div>
        <div class="right_coloum floatright">
          <div class="single_right_coloum">
            <h2 class="title">from the desk</h2>
            <ul>
              <li>
                <div class="single_cat_right_content">
                  <h3>hello everyone this is my team</h3>
                  <p>magesh rohit sairam csk</p>
                  <p class="single_cat_right_content_meta"><a href="#"><span>read more</span></a> 3 hours ago</p>
                </div>
              </li>
              <li>
                <div class="single_cat_right_content">
                  <h3>hello everyone this is my team</h3>
                  <p>magesh rohit sairam csk</p>
                  <p class="single_cat_right_content_meta"><a href="#"><span>read more</span></a> 3 hours ago</p>
                </div>
              </li>
              <li>
                <div class="single_cat_right_content">
                  <h3>hello everyone this is my team</h3>
                  <p>magesh rohit sairam csk</p>
                  <p class="single_cat_right_content_meta"><a href="#"><span>read more</span></a> 3 hours ago</p>
                </div>
              </li>
            </ul>
            <a class="popular_more" href="#">more</a> </div>
          <div class="single_right_coloum">
            <h2 class="title">editorial</h2>
            <div class="single_cat_right_content editorial"> <img src="images/editorial_img.png" alt="" />
              <h3>team newspaper</h3>
            </div>
                    
            <div class="single_cat_right_content editorial"> <img src="images/editorial_img.png" alt="" />
              <h3>team newspaper</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="sidebar floatright">
        <div class="single_sidebar"> <img src="images/add1.jpgx" alt="" /> </div>
        <div class="single_sidebar">
          <div class="news-letter">
            <h2>Sign Up for Newsletter</h2>
            <p>Sign up to receive our free newsletters!</p>
            <form action="#" method="post">
              <input type="text" value="Name" id="name" />
              <input type="text" value="Email Address" id="email" />
              <input type="submit" value="SUBMIT" id="form-submit" />
            </form>
            <p class="news-letter-privacy">We do not spam. We value your privacy!</p>
          </div>
        </div>
        <div class="single_sidebar">
          <div class="popular">
            <h2 class="title">Popular</h2>
            <ul>
              <li>
                <div class="single_popular">
                  <p>april 24th 2045</p>
                  <h3>hello everyone this is my team <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>april 24th 2017</p>
                  <h3>hello everyone this is my team <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>april 24th 2017</p>
                  <h3>hello everyone this is my team <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>april 24th 2017</p>
                  <h3>hello everyone this is my team <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>april 24th 2017</p>
                  <h3>hello everyone this is my team <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
            </ul>
            </div>
        </div>
        <div class="single_sidebar"> <img src="images/add1.jpg" alt="" /> </div>
        <div class="single_sidebar">
          <h2 class="title">ADD</h2>
          <img src="images/add2.png" alt="" /> </div>
      </div>
    </div>
    <div class="footer_top_area">
      <div class="inner_footer_top"> <img src="images/add3.png" alt="" /> </div>
    </div>
    <div class="footer_bottom_area">
      <div class="footer_menu">
        <ul id="f_menu"
          <li><a href="#">rugby</a></li>
          <li><a href="#">hockey</a></li>
          <li><a href="#">golf</a></li>
          <li><a href="#">athletics</a></li>
          <li><a href="#">cricket</a></li>
          <li><a href="#">football</a></li>
          <li><a href="#">tennis</a></li>
          <li><a href="#">athletics</a></li>
          
        </ul>
      </div>
      <div class="copyright_text">
        <p>Copyright &copy; 2017 The Boston Legal Inc. All rights reserved | Design by V.Magesh Adithya</p>
        <p>Trade marks and images used in the design are the copyright of their respective owners </p>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="assets/js/jquery-min.js"></script> 
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.bxslider.js"></script> 
<script type="text/javascript" src="assets/js/selectnav.min.js"></script> 
<script type="text/javascript">
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});
</script>
</body>
</html>