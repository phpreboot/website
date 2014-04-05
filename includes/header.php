<header>
    <div class="wrap-header zerogrid">
        <div id="logo"><a href="index.html"><img src="./images/logo.png"/></a></div>
        
        <!--div id="search">
            <div class="button-search"></div>
            <input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
        </div-->
    </div>
</header>

<nav>
    <div class="wrap-nav zerogrid">
        <div class="menu">
            <ul>
                <li class="first current"><a href="<?PHP echo $config['site_url']; ?>">Home</a></li>
                <!--li><a href="blog.html">Blog/Articles</a></li-->
                <li><a href="<?PHP echo $config['site_url']; ?>/magazine.php">Magazine</a></li>
                <li><a href="<?PHP echo $config['site_url']; ?>/about.php">About</a></li>
                <li class="last"><a href="<?PHP echo $config['site_url']; ?>/contact.php">Contact</a></li>
            </ul>
        </div>
        
        
        <div class="minimenu"><div>MENU</div>
            <select onchange="location=this.value">
                <option></option>
                <option value="<?PHP echo $config['site_url']; ?>">Home</option>
                <!--option value="blog.html">Blog/Articles</option-->
                <option value="<?PHP echo $config['site_url']; ?>/magazine.php">Magazine</option>
                <option value="<?PHP echo $config['site_url']; ?>/about.php">About</option>
                <option value="<?PHP echo $config['site_url']; ?>/contact.php">Contact</option>
            </select>
        </div>      
        <div class="share">
            <ul>
                <li><a href="https://twitter.com/phpreboot"><img src="images/twitter-icon.png" title="Twitter"/></a></li>
                <li><a href="https://www.facebook.com/PHReboot"><img src="images/facebook-icon.png" title="Facebook"/></a></li>
                <!--li><a href="#"><img src="images/linkedin-icon.png" title="Linkedin"/></a></li-->
            </ul>
        </div>
    </div>
</nav>