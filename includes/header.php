<body>
    <div id="header">
        <div class="container">
            <h1 id="logo"><a href="<?= $config['site_url'] ?>"><img src="<?= $config['image_url']; ?>/logo.png"></a></h1>
            <div id="main_menu">
                <ul>
                    <li class="first_list"><a href="<?= $config['site_url'] ?>" class="main_menu_first <?PHP if(isset($page) && $page=='home') echo 'main_current'; ?>">home</a></li>
                    <li class="first_list"><a href="<?= $config['site_url'] ?>/about.php" class="main_menu_first">about us</a></li>
                    <li class="first_list with_dropdown">
                        <a href="<?= $config['site_url'] ?>/whatwedo.php" class="main_menu_first">What we do</a>
                        <ul>
                            <li class="second_list second_list_border"><a href="<?= $config['site_url'] ?>/magazine.php" class="main_menu_second">Flipboard Magazine</a></li>
                            <li class="second_list second_list_border"><a href="<?= $config['site_url'] ?>/blog.php" class="main_menu_second">Blogs</a></li>
                            <li class="second_list second_list_border"><a href="<?= $config['site_url'] ?>/opensoure.php" class="main_menu_second">Open Source Projects</a></li>
                            <li class="second_list"><a href="<?= $config['site_url'] ?>/meetup.php" class="main_menu_second">Meetups</a></li>
                        </ul>
                    </li>
                    <li class="first_list with_dropdown">
                        <a href="<?= $config['site_url'] ?>/magazine.php" class="main_menu_first">Magazine</a>
                        <ul>
                            <li class="second_list second_list_border"><a href="<?= $config['site_url'] ?>/magazine/november14.php" class="main_menu_second">November 2014</a></li>
                            <li class="second_list second_list_border"><a href="<?= $config['site_url'] ?>/magazine/october14.php" class="main_menu_second">October 2014</a></li>
                            <li class="second_list"><a href="<?= $config['site_url'] ?>/magazine/april14.php" class="main_menu_second">April 2014</a></li>
                        </ul>
                    </li>
                    <li class="first_list"><a href="<?= $config['site_url'] ?>/blog.php" class="main_menu_first">blog</a></li>
                    <li class="first_list"><a href="<?= $config['site_url'] ?>/contact.php" class="main_menu_first">contact us</a></li>
                </ul>
            </div> <!-- END #main_menu -->
        </div> <!-- END .container -->
    </div> <!-- END #header -->