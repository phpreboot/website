<?PHP
//ToDO: Use twig here.
require_once('../includes/config.php');
require_once($config['include_path'] . 'head.php');
require_once($config['include_path'] . 'header.php');
?>
    <div id="main_content">
        <?PHP require_once($config['include_path'] . 'slideshow.php'); ?>
        <?PHP require_once($config['include_path'] . 'whatwedo.php'); ?>
        <?PHP require_once($config['include_path'] . 'latestmagazine.php'); ?>
    
        <div id="bottom_content">
            <div id="twitter_feed">
                <!--h3>TESTIMONIALS</h3-->
                <a class="twitter-timeline"
                    href="https://twitter.com/phpreboot"
                    data-widget-id="439522484484718593"
                    width="470">Tweets by @phpreboot</a>
                <script>!
                    function(d,s,id){
                        var js,
                            fjs=d.getElementsByTagName(s)[0],
                            p=/^http:/.test(d.location)?'http':'https';
                        if(!d.getElementById(id)){
                            js=d.createElement(s);
                            js.id=id;
                            js.src=p+"://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js,fjs);
                        }
                    }(document,"script","twitter-wjs");
                </script>
                <!--p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut nulla sapien, at aliquam erat. Sed vitae massa tellus. Aliquam commodo
                aliquam metus, sed iaculis nibh tempus id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci
                luctus et ultrices posuere cubilia Curae; Etiam nec nisi in nisl euismod fringilla.
                <br />
                <br />
                <span class="twitter_feed_name">John Travis, CEO, DomainName.com</span></p-->
            </div> <!-- END #testimonials -->
            <div id="twitter_feed_right">
                <!--h3>TESTIMONIALS</h3-->
                <a class="twitter-timeline"
                    href="https://twitter.com/phpreboot/lists/phpers-to-follow"
                    data-widget-id="531795927338471424"
                    width="470">
                    Tweets from lists by PHP Reboot
                </a>
                <script>!
                    function(d,s,id){
                        var js,
                            fjs=d.getElementsByTagName(s)[0],
                            p=/^http:/.test(d.location)?'http':'https';
                        if(!d.getElementById(id)){
                            js=d.createElement(s);
                            js.id=id;
                            js.src=p+"://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js,fjs);
                        }
                    }(document,"script","twitter-wjs");
                </script>
            </div>
            <!--div id="clients">
                <h3>OUR CLIENTS</h3>
                <ul>
                    <li><img src="images/client01.jpg" alt="Cox Communications" /></li>
                    <li><img src="images/client02.jpg" alt="CNN" /></li>
                    <li><img src="images/client03.jpg" alt="Apartment Finder" /></li>
                    <li><img src="images/client04.jpg" alt="John Deere" /></li>
                    <li><img src="images/client05.jpg" alt="Banana Boat" /></li>
                    <li><img src="images/client06.jpg" alt="Fuji Film" /></li>
                </ul>
            </div--> <!-- END #clients -->
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