<?PHP
$page = "home";
$title = "PHP Reboot - home";

require_once('../includes/config.php');
require_once($config['include_path'] . 'head.php');
require_once($config['include_path'] . 'header.php');
?>
    <div id="main_content">
        <?PHP require_once($config['include_path'] . 'slideshow.php'); ?>
        <?PHP require_once($config['include_path'] . 'news.php'); ?>
        <?PHP require_once($config['include_path'] . 'whatwedo.php'); ?>
        <?PHP require_once($config['include_path'] . 'latestmagazine.php'); ?>
        <?PHP require_once($config['include_path'] . 'tweets.php'); ?>
        <?PHP require_once($config['include_path'] . 'download.php'); ?>
    </div> <!-- END #main_content -->
<?PHP require_once($config['include_path'] . 'footer.php'); ?>