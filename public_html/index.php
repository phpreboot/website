<?PHP
//ToDO: Use twig here.
require_once('../includes/config.php');
require_once($config['include_path'] . 'head.php');
require_once($config['include_path'] . 'header.php');
?>
<section id="content">
    <div class="wrap-content zerogrid">
        <div class="row block01">
            <div class="col-full">
                <div class="wrap-col">
                    <h2>Welcome to PHP Reboot</h2>
                    <p>
                        PHP Reboot is an attempt to share news and new features of PHP and related technologies.
                        <br/>
                        We do this by sharing articles, news and tutorials through free PHP Reboot Magazine and blogs. As community,
                        we depends on individual. If you have something to share with community, please write an article or blog
                        and share with us.
                    </p>
                </div>
            </div>
        </div>
        <div class="row block02">
            <div class="col-1-3">
                <div class="wrap-col box1">
                    <img src="images/icon1.png" />
                    <h2>PHP Reboot</h2><h3>April 2014</h3>
                    <p>
                        April 2014 issue of PHP reboot magazine is now available for download.
                        <br/>
                        Please visit <a href="magazine.html">Magazine</a> section to download yout copy.
                    </p>
                    <a href="#">[ More ]</a>
                </div>
            </div>
            <div class="col-1-3">
                <div class="wrap-col box2">
                    <img src="images/icon2.png" />
                    <h2>Write for us</h2>
                    <p>
                        PHP Reboot is a community effort and we need community to take it to next level. If you have something to share with
                        community, please write and article or blog post for us.
                    </p>
                    <a href="#">[ More ]</a>
                </div>
            </div>
            <div class="col-1-3">
                <div class="wrap-col box3">
                    <img src="images/icon3.png" />
                    <h2>Code Jugalbandi</h2>
                    <p>
                        Lots of frameworks in PHP and learning them might not be easy for everyone. Code Jugalbandi is there to make it little
                        easy. Here we will implement same project in different frameworks.
                    </p>
                    <a href="#">[ More ]</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?PHP
require_once($config['include_path'] . 'footer.php');