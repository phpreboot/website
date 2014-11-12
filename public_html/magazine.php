<?PHP
$page = "magazine";
$title = "PHP Reboot - Magazines";

require_once('../includes/config.php');
require_once($config['include_path'] . 'head.php');
require_once($config['include_path'] . 'header.php');
?>
    <div id="main_content">
        <div id="slideshow_area">
            <div class="container">
                <div id="slideshow_container">
                    <div class="blue-box-text">
                        <img src="<?= $config['site_url'] ?>/images/phpreboot1410_400x187.png" class="img-wrap-lft">
                        <div>
                            <p class="blue-box-heading">Reading, reading and reading...</p>
                            <p>
                                It is not possible to be a master of all technologies. You dont have to but you must have a basic idea about all new technologies so that you can apply them as and when you need them.
                            </p>
                            <p>
                                How can anyone know about most of new technologies. Simple answer, read as much as you can. Now there are many who come with new problem; <strong>I don't have time to read</strong>. Although I do not completely disagree, I cant agree as well. We all have just 24 hours in a day and must adjust all of our tasks in these 24 hours.
                            </p>
                            <p>
                                I generally start using some mobile tools like pocket, push bullet, Google docs, evernote to push articles on my tablet and read them when we cant do any other task like, sitting in bus, waiting for team to start meeting, ready to go out but waiting for family to get ready, and much more. We easily waste 5-30 minutes during each of these moments. I decided to utilize that time to read blogs, articles etc.
                            </p>
                            <p>
                                Then I tried flipboard. Flipsboard support creating custom magazines. I started making private magazines for my personal use. Soon it become very good collection that my friends start reading my collection. So finally I decided to make these collection public and name them as PHP Reboot Magazine
                            </p>
                            <p>
                                Please note, all the articles in PHP Reboot magazine are copyright material of original authors. PHP Reboot just collect them to easily go through quality contents.
                            </p>
                        </div>
                    </div>
                    <div class="clear-both"></div>
                </div> <!-- END #slideshow_container -->
            </div> <!-- END .container -->
        </div> <!-- END #slideshow_area -->
        <!--div class="content_block">
            <h3>PHP Reboot November 2014</h3>
            <div class="content_block_wrapper">
                <div class="content_block_col2 content_block_margin">
                    Image - november 2014
                </div>
                <div class="content_block_col2">
                    Articles
                </div>
                <div class="clear-both"></div>
            </div>
        </div-->
        <div class="content_block">
            <h3>PHP Reboot October 2014 (Status: Freezed/Complete)</h3>
            <div class="content_block_wrapper">
                <div class="content_block_col2 content_block_margin">
                    <p><strong>Articles (Total 50)</strong></p>
                    <ul style="margin-top:10px;">
                        <li><a href="http://www.sitepoint.com/5-easy-ways-getting-started-php-vagrant/" rel="nofollow">5-easy-ways-getting-started-php-vagrant</a> by Aldo Ziflaj on sitepoint.com</li>
                        <li><a href="http://blog.kapilsharma.info/reading-reading-and-reading/">Reading, reading and reading .....</a> by Kapil Sharma</li>
                        <li><a href="http://afilina.com/reduce-number-of-queries/" rel="nofollow">Reduce number of queries</a> by Anna Filina</li>
                        <li><a href="http://laravel-news.com/2014/10/setting-laravel-elixr-bootstrap/" rel="nofollow">Setting up Laravel elixr with Bootstrap</a> by Eric Barnes</li>
                        <li><a href="http://blog.ircmaxell.com/2014/10/youre-doing-agile-wrong.html" rel="nofollow">You're Doing Agile Wrong</a> by Anthony Ferrara.</li>
                    </ul>
                    <br/>
                    <p>and 45 more. <a href="<?= $config['site_url'] ?>/magazine/october14.php">Read more</a></p>
                </div>
                <div class="content_block_col2">
                    <img src="<?= $config['site_url'] ?>/images/phpreboot1410_400x187.png" width="440" height="200">
                </div>
                <div class="clear-both"></div>
            </div>
        </div>
    </div> <!-- END #main_content -->
<?PHP require_once($config['include_path'] . 'footer.php'); ?>