<?PHP
$page = "meetup";
$title = "PHP Reboot - Meetup";

require_once('../includes/config.php');
require_once($config['include_path'] . 'head.php');
require_once($config['include_path'] . 'header.php');
?>
    <div id="main_content">
        <div id="slideshow_area">
            <div class="container">
                <div id="slideshow_container">
                    <div class="blue-box-text">
                        <img src="<?= $config['site_url'] ?>/images/meetup_logo_1.png" class="img-wrap-lft">
                        <div>
                            <p class="blue-box-heading">Next Meetup</p>
                            <p class="blue-box-heading">Working with Git</p>
                            <p>
                                Saturday, December 20th, 2014 <br/>
                                11:00 a.m. to 2:00 p.m.
                            </p>
                            <p>
                                Git is now most popular 'Source code Management' tool, period. This session is aimed for both beginners and advanced users to understand following: <br/><br/>
                                • What is Git? <br/>
                                • Basic Use, commands, branches, tags, logs etc <br/>
                                • Git Workflow (followed by most companies/developers) <br/>
                                • Git advanced tricks. <br/><br/>
                                To cover everything, we split the meetup in two sessions:
                            </p>
                            <p>
                                <strong>Session 1: Git Basics by Ramesh Dahiya. (11:00-12:00)</strong><br/><br/>
                                Ramesh Dahiya is Tech. Lead at Ansh Systems.<br/>
                                He will cover basics of Git in the presentation, so that git beginners can understand second session. This presentation will cover Most commonly used git commands, branches, tags, checking logs etc.<br/>
                                Time: 45 minutes (11:00 to 11:45) followed by 15 minutes (11:45-12:00) questions and answers round. 
                            </p>
                            <p>
                                <strong>Session 2: Git workflow and advanced commands by Kapil Sharma (12:00-13:15)</strong><br/><br/>
                                Kapil Sharma is Technical Architect at Ansh Systems.<br/>
                                In this session, Kapil will cover proper Git workflow that most companies and advanced developers follow for real projects. It will also include some advanced concepts like patches, pull requests etc.<br/>
                                Time: 45 minutes (12:00 to 12:45) followed by 30 minutes (12:45 to 13:15) of question/answer round and snacks/tea.
                            </p>
                            <p>
                                <strong>Workshop: (13:15-14:00)</strong><br/><br/>
                                Once of the common feedback we found during meetups is, most meetup cover theory. To give some practical experience of Git, there will be short workshop (45 minutes) where we will practice the commands we covered during sessions. For this, everyone will create their own git-hub account and a sample project. We will use proper Git workflow to practice managing dummy source code.<br/><br/>
                                <strong>Prerequisite for Git Workshop:</strong><br/>
                                • Laptop with Windows 7/8 or Linux (Any distribution but not too old) or Mac OS X+.<br/>
                                • Laptop must be fully charged as we might not arrange lot of Power plugs.<br/>
                                • Create a github.com and remember your user id and password.<br/>
                                • Git installed on laptop (Recommended but not mandatory)<br/>
                                • Internet dongles (Recommended but not mandatory) We will provide Wifi but depending on number of users, internet speed could be issue.<br/><br/>
                                <a href="http://www.meetup.com/PHPReboot/events/218611184/" rel="nofollow" target="_blank">Click here to know more and RSVP.</a>
                            </p>
                        </div>
                    </div>
                    <div class="clear-both"></div>
                </div> <!-- END #slideshow_container -->
            </div> <!-- END .container -->
        </div>
        <div class="content_block">
            <h3>Past meetups by PHP Reboot</h3>
            <div class="content_block_wrapper">
                <div class="content_block_col2 content_block_margin">
                    <p><strong>Web Security in PHP </strong></p><br/>
                    <p>August 2nd, 2014</p>
                    <br/><br/>
                    <p>
                        Most important factors for a web application are:
                        <br/><br/>
                        • Performance<br/>
                        • Maintainability<br/>
                        • Scalability<br/>
                        • Reliability and<br/>
                        • Security
                        <br/><br/>
                        Among developers, Security is one of the most ignored topics. In this session, we will discuss some of the common security threats for a web application and how we can fix them.
                        <br/><br/>
                        Web Security is technology/language independent topic and most of the session will not use any specific programming language. Thus any web developer is most invited to attend the event. However please note, towards the end, we will use simple PHP examples to demonstrate how can we practically take care of security issues. 
                    </p>
                </div>
                <div class="content_block_col2">
                    <p><strong>PHP Myths and Best Practices. </strong></p><br/>
                    <p>April 13th, 2014</p>
                    <br/><br/>
                    <p>
                        Whole purpose of PHP Reboot is to learn/share new and advanced features of PHP and supporting technologies.
                        <br/><br/>
                        In this first session, we are trying to decide future path. So we will have following agenda for our first meetup:<br/><br/>
                        1. PHP Myths (Discuss about issues with PHP; Real and advertised)<br/>
                        2. How latest changes in PHP overcome them?<br/>
                        3. What are best practices and why it is important understand and follow them.<br/>
                        4. A little introduction to the topics we will discuss in future.<br/>
                        5. What exactly local developers expect from local PHP community.<br/><br/>
                        This will be open session to decide the future of PHP Reboot community.
                    </p>
                </div>
                <div class="clear-both"></div>
            </div>
        </div>
    </div> <!-- END #main_content -->
<?PHP require_once($config['include_path'] . 'footer.php'); ?>