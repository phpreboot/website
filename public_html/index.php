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
        <?PHP require_once($config['include_path'] . 'tweets.php'); ?>

        <div id="download">
            <p>
                PTP Reboot magazine for October 2014 is now freezed. Add it to your Flipboard to
                read all the PHP and related technologies articles, blogs, tutorials on your
                mobile and tablets. You can also check it on browser.
             </p>
            <a href="#">Add To Flipboard</a>
        </div> <!-- END #download -->
    </div> <!-- END #main_content -->
<?PHP require_once($config['include_path'] . 'footer.php'); ?>