        <footer>
            <div class="footer">
                <div class="copyright">
                    <div class="logo">
                        <p>
                            <img src="http://fredericoandrade.com/folder/wikitongues/homepage/wp-content/uploads/2015/10/iconWhite.png" width="40px" alt="Logo">
                            Wikitongues
                        </p>
                    </div>
                    <p>Copyright © 2015</p>
                    <p>Wikitongues, Inc.</p>
                    <br>
                    <p>New York, USA</p>
                </div>
                <nav>
                    <ul>
                        <li class="header">Organization</li>
                        <?php wp_list_pages('exclude=2&title_li='); ?>
                    </ul>
                    <ul>
                        <li class="header">Get Involved</li>
                        <li><a href="/interviews/#upload">Submit a video</a></li>
                        <li><a href="/join/#apply">Become a volunteer</a></li>
                        <li><a href="/about/#contact">Contact</a></li>
                    </ul>
                    <ul>
                        <li class="header">Follow us</li>
                        <li><a href="http://youtube.com/wikitongues">YouTube</a></li>
                        <li><a href="http://facebook.com/wikitongues">Facebook</a></li>
                        <li><a href="http://twitter.com/wikitongues">Twitter</a></li>
                        <li><a href="http://wikitongues.tumblr.com">Tumblr</a></li>
                        <li><a href="https://instagram.com/wikitongues/">Instagram</a></li>
                    </ul>
                </nav>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="<?php bloginfo('url'); ?>/wp-content/themes/wikitongues/js/plugins.js"></script>
        <script src="<?php bloginfo('url'); ?>/wp-content/themes/wikitongues/js/main.js"></script>

        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-48869719-1','auto');ga('send','pageview');
        </script>
        <?php wp_footer(); ?>
    </body>
</html>
