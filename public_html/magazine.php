<?PHP
//ToDO: Use twig here.
require_once('../includes/config.php');
require_once($config['include_path'] . 'head.php');
require_once($config['include_path'] . 'header.php');
?>
<section id="content">
    <div class="wrap-content zerogrid">
        <div class="row block">
            <div id="main-content" class="col-2-3">
                <div class="wrap-col">
                    <article>
                        <h2><a href="#">PHP Reboot Magazine April 2014 issue released.</a></h2>
                        <img src="images/PHPRebootCover201404.png" width="300px"/>
                        <p class="justify">
                            April 2014 issue of PHP Reboot magazine has been released on April 2nd, 2014. This is the first issue of the
                            magazine. It is avialable to be downloaded freely in PDF format.
                        </p>
                        <p class="justify">
                            Main articles covered in first issue of PHP Reboot are:
                            <ul>
                                <li>PHP Myths: A general discussion around PHP Myths</li>
                                <li>Apache Rewrite Module: Importance and basic tutorial</li>
                                <li>Storing Password Securely: Secure way of hashing Password</li>
                                <li>So you want to write Test? Blog post from Chris Hartjes</li>
                                <li>MArch Flashback: List of good blogs published in March 2014</li>
                            </ul>
                        </p>
                        <p class="justify">
                            Magazine also include editorial section, which describe the goals behind PHP Reboot magazine. Please click
                            <a href="<?PHP echo $config['mag_url']; ?>/01.PHPRebootApril2014.pdf">here</a> to download the magazine.
                        </p>
                    </article>
                </div>
            </div>
            <div id="sidebar" class="col-1-3">
                <div class="wrap-col">
                    <div class="box">
                        <div class="heading"><h2>Popular Post</h2></div>
                        <div class="content">
                            <div class="post">
                                <h4><a href="<?PHP echo $config['site_url']; ?>/magazine.php">PHP Reboot Magazine April 2014 released.</a></h4>
                                <p>April 2 ,2014</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?PHP
require_once($config['include_path'] . 'footer.php');