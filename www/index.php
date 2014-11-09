<?PHP
//ToDO: Use twig here.
require_once('../includes/config.php');
//require_once($config['include_path'] . 'head.php');
//require_once($config['include_path'] . 'header.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>BisLite - Home</title>
    <link rel="stylesheet" type="text/css" href="<?= $config['css_url'] ?>/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?= $config['css_url'] ?>/main.css" />
    
</head>
<body>
    
    <div id="header">
        
        <div class="container">
        
        <h1><a href="index.html">BisLite</a></h1>
        
        <div id="main_menu">
        
            <ul>
                <li class="first_list"><a href="index.html" class="main_menu_first main_current">home</a></li>
                <li class="first_list"><a href="#" class="main_menu_first">about us</a></li>
                <li class="first_list with_dropdown">
                    <a href="#"  class="main_menu_first">services</a>
                    <ul>
                        <li class="second_list second_list_border"><a href="#" class="main_menu_second">web design</a></li>
                        <li class="second_list second_list_border"><a href="#" class="main_menu_second">wordpress design</a></li>
                        <li class="second_list second_list_border"><a href="#" class="main_menu_second">mobile app development</a></li>
                        <li class="second_list second_list_border"><a href="#" class="main_menu_second">internet marketing</a></li>
                        <li class="second_list"><a href="#" class="main_menu_second">social media management</a></li>
                    </ul>
                </li>
                <li class="first_list with_dropdown">
                    <a href="portfolio.html" class="main_menu_first">portfolio</a>
                    <ul>
                        <li class="second_list second_list_border"><a href="#" class="main_menu_second">websites</a></li>
                        <li class="second_list second_list_border"><a href="#" class="main_menu_second">wordpress</a></li>
                        <li class="second_list second_list_border"><a href="#" class="main_menu_second">mobile apps</a></li>
                        <li class="second_list second_list_border"><a href="#" class="main_menu_second">icons</a></li>
                        <li class="second_list second_list_border"><a href="#" class="main_menu_second">logos</a></li>
                        <li class="second_list second_list_border"><a href="#" class="main_menu_second">graphics</a></li>
                        <li class="second_list"><a href="#" class="main_menu_second">social media management</a></li>
                    </ul>
                </li>
                <li class="first_list"><a href="#" class="main_menu_first">blog</a></li>
                <li class="first_list"><a href="contact.html" class="main_menu_first">contact us</a></li>
            </ul>
        
        </div> <!-- END #main_menu -->
    
        </div> <!-- END .container -->
    
    </div> <!-- END #header -->
    
    <div id="main_content">
            
        <div id="slideshow_area">
        
        <div class="container">
            
            <div id="slideshow_container">
                
                <ul>
                    <li><img src="images/banner_image.jpg" alt="banner1" /></li>
                </ul>
                
                <div id="slideshow_pagination">
                    
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#" class="current"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                    
                </div> <!-- END #slideshow_pagination -->
            
            </div> <!-- END #slideshow_container -->
            
        </div> <!-- END .container -->
    
        </div> <!-- END #slideshow_area -->
            
        <div id="mid_content">
            
            <div class="container">
                
            <div class="mid_content_info mid_content_space">
                    
                <h2 id="clean">CLEAN THEME</h2>
                <p>Ut nec lorem id orci convallis porta. Donec pharetra neque eu velit dictum molestie. Duis porta gravida augue sed viverra. Quisque at nulla leo,
                non aliquet mi.</p>
                <a href="#"><img src="images/arrow_right.png" alt="arrow right" />Read More</a>
                    
            </div>
                
            <div class="mid_content_info mid_content_space">

                <h2 id="responsive">RESPONSIVE DESIGN</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi euismod placerat dui et tincidunt. Sed sollicitudin posuere auctor. Phasellus at
                ultricies nisl. Integer at leo eros.</p>
                <a href="#"><img src="images/arrow_right.png" alt="arrow right" />Read More</a>
                    
            </div>
                
            <div class="mid_content_info mid_content_space">
                    
                <h2 id="fully">FULLY LAYERED PSD</h2>
                <p>Phasellus lobortis metus non augue sodales volutpat. Vestibulum sit amet nibh eros, hendrerit venenatis est. In vitae nulla nec purus cursus
                pretium sed id magna.</p>
                <a href="#"><img src="images/arrow_right.png" alt="arrow right" />Read More</a>
                    
            </div>
                
            <div class="mid_content_info">
                    
                <h2 id="ready">READY FOR CODING</h2>
                <p>Vivamus convallis feugiat mauris sed posuere. Nam rutrum, quam quis euismod commodo, elit est porta quam, non placerat eros neque porta ante.
                Fusce quis odio urna.</p>
                <a href="#"><img src="images/arrow_right.png" alt="arrow right" />Read More</a>
                    
            </div>
            
            </div> <!-- END .container -->
                
        </div> <!-- END #mid_content -->
    
        <div id="latest_works">
            
            <h3>LATEST WORKS</h3>
            
            <div id="carousel_nav">
                
                <a href="#"><img src="images/bluearrow_left.png" alt="arrow left" /></a>
                <a href="#"><img src="images/bluearrow_right.png" alt="arrow right" /></a>
            
            </div> <!-- END #carousel_nav -->
        
            <div id="carousel_wrapper">
            
                <ul>
                    <li id="work01">
                        <a href="#"><img src="images/sample_view.gif" alt="work01" /></a>
                    </li>
                    <li id="work02">
                        <a href="#"><img src="images/sample_view.gif" alt="work02" /></a>
                    </li>
                    <li id="work03">
                        <a href="#"><img src="images/sample_view.gif" alt="work03" /></a>
                    </li>
                    <li id="work04">
                        <a href="#"><img src="images/sample_view.gif" alt="work04" /></a>
                    </li>
                </ul>
            
            </div> <!-- END #carousel_wrapper -->
        
        </div> <!-- END #latest_works -->
    
        <div id="bottom_content">
    
            <div id="testimonials">
        
                <h3>TESTIMONIALS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut nulla sapien, at aliquam erat. Sed vitae massa tellus. Aliquam commodo
                aliquam metus, sed iaculis nibh tempus id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci
                luctus et ultrices posuere cubilia Curae; Etiam nec nisi in nisl euismod fringilla.
                <br />
                <br />
                <span class="testimonial_name">John Travis, CEO, DomainName.com</span></p>
        
            </div> <!-- END #testimonials -->
    
            <div id="clients">
                
                <h3>OUR CLIENTS</h3>
        
                <ul>
                    <li><img src="images/client01.jpg" alt="Cox Communications" /></li>
                    <li><img src="images/client02.jpg" alt="CNN" /></li>
                    <li><img src="images/client03.jpg" alt="Apartment Finder" /></li>
                    <li><img src="images/client04.jpg" alt="John Deere" /></li>
                    <li><img src="images/client05.jpg" alt="Banana Boat" /></li>
                    <li><img src="images/client06.jpg" alt="Fuji Film" /></li>
                </ul>
        
            </div> <!-- END #clients -->
    
        </div> <!-- END #bottom_content -->
    
        <div id="download">
        
            <p>This is a clean and modern, four column website PSD template. You can code it into a Wordpress website, HTML5 responsive website for your personal
            or client works. So ahead and download this wonderful PSD template!</p>
            <a href="#">DOWNLOAD PSD</a>
        
        </div> <!-- END #download -->
        
    </div> <!-- END #main_content -->
    
    <div id="footer">
        
        <div class="container">
            
            <div id="footer_about" class="footer_info">
                
                <h4>about us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi euismod placerat dui et tincidunt. Sed sollicitudin posuere auctor. Phasellus at
                ultricies nisl. Integer at leo eros. Ut nec lorem id orci convallis porta. Donec pharetra neque eu velit dictum molestie. </p>
                
            </div> <!-- END #footer_about -->
            
            <div id="footer_explore" class="footer_info">
                
                <h4>explore</h4>
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">services</a></li>
                    <li><a href="portfolio.html">portfolio</a></li>
                    <li><a href="#">blog</a></li>
                </ul>
                
            </div> <!-- END #footer_about -->
            
            <div id="footer_browse" class="footer_info">
                
                <h4>browse</h4>
                <ul>
                    <li><a href="#">careers</a></li>
                    <li><a href="#">press &amp; media</a></li>
                    <li><a href="contact.html">contact us</a></li>
                    <li><a href="#">terms of service</a></li>
                    <li><a href="#">privacy policy</a></li>
                </ul>
                
            </div> <!-- END #footer_about -->
            
            <div id="footer_contact" class="footer_info">
                
                <h4>contact us</h4>
                <p><span class="bold_text">BisLite Inc.</span>
                <br />
                Always Street 265
                <br />
                0X - 125 - Canada
                <br />
                <br />
                Phone: 987-6543-210
                <br />
                Fax: 987-6543-210</p>
                
            </div> <!-- END #footer_about -->
            
            <div id="footer_connect" class="footer_info">
                
                <h4>connect with us</h4>
                
                <ul>
                    <li><a href="#" id="facebook" title="Facebook">Facebook</a></li>
                    <li><a href="#" id="dribbble" title="Dribbble">Dribbble</a></li>
                    <li><a href="#" id="pinterest" title="Pinterest">Pinterest</a></li>
                    <li><a href="#" id="linkedin" title="LinkedIn">LinkedIn</a></li>
                    <li><a href="#" id="skype" title="Skype">Skype</a></li>
                    <li><a href="#" id="sharethis" title="Share This">ShareThis</a></li>
                </ul>
                
            </div> <!-- END #footer_about -->
            
            <p id="copyright">&copy; Copyright 2012 - BisLite Inc. All rights reserved. Some free icons used here are created by Brankic1979.com.
            <br />
            Client Logos are copyright and trademark of the respective owners / companies.</p>
            
            <a href="index.html" id="footer_logo">BisLite</a>
        
        </div> <!-- END .container -->
        
    </div> <!-- END #footer -->
    
</body>
</html>