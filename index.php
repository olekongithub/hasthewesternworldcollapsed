<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>Has The Western World Collapsed</title>

    <link rel="stylesheet" href="stylesheets/styles.css">
    <link rel="stylesheet" href="stylesheets/github-light.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="wrapper">
      <header>
        <h1>Has The Western World Collapsed</h1>




      <h2> Your Government </h2>

      <p>
        USA Online/Offline
      </p>
    </header>
      <section>
        <h3>

Likely/Unlikey</h3>

<?php
function Visit($url){
       $agent = "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)";$ch=curl_init();
       curl_setopt ($ch, CURLOPT_URL,$url );
       curl_setopt($ch, CURLOPT_USERAGENT, $agent);
       curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt ($ch,CURLOPT_VERBOSE,false);
       curl_setopt($ch, CURLOPT_TIMEOUT, 5);
       curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, FALSE);
       curl_setopt($ch,CURLOPT_SSLVERSION,3);
       curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, FALSE);
       $page=curl_exec($ch);
       //echo curl_error($ch);
       $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
       curl_close($ch);
       if($httpcode>=200 && $httpcode<300) return true;
       else return false;
}
if (Visit("http://www.google.com"))
       echo "Website OK"."n";
else
       echo "Website DOWN";
?>

<p>
Monitoring official websites of world governments.
</p>


<pre><code>$ cd your_repo_root/repo_name
$ git fetch origin
$ git checkout gh-pages
</code></pre>

<p>If you're using the GitHub for Mac, simply sync your repository and you'll see the new branch.</p>

<h3>
<a id="designer-templates" class="anchor" href="#designer-templates" aria-hidden="true"><span class="octicon octicon-link"></span></a>Designer Templates</h3>

<p>We've crafted some handsome templates for you to use. Go ahead and continue to layouts to browse through them. You can easily go back to edit your page before publishing. After publishing your page, you can revisit the page generator and switch to another theme. Your Page content will be preserved if it remained markdown format.</p>

<h3>
<a id="rather-drive-stick" class="anchor" href="#rather-drive-stick" aria-hidden="true"><span class="octicon octicon-link"></span></a>Rather Drive Stick?</h3>

<p>If you prefer to not use the automatic generator, push a branch named <code>gh-pages</code> to your repository to create a page manually. In addition to supporting regular HTML content, GitHub Pages support Jekyll, a simple, blog aware static site generator written by our own Tom Preston-Werner. Jekyll makes it easy to create site-wide headers and footers without having to copy them across every page. It also offers intelligent blog support and other advanced templating features.</p>

<h3>
<a id="authors-and-contributors" class="anchor" href="#authors-and-contributors" aria-hidden="true"><span class="octicon octicon-link"></span></a>Authors and Contributors</h3>

<p>You can <a href="https://github.com/blog/821" class="user-mention">@mention</a> a GitHub username to generate a link to their profile. The resulting <code>&lt;a&gt;</code> element will link to the contributor's GitHub Profile. For example: In 2007, Chris Wanstrath (<a href="https://github.com/defunkt" class="user-mention">@defunkt</a>), PJ Hyett (<a href="https://github.com/pjhyett" class="user-mention">@pjhyett</a>), and Tom Preston-Werner (<a href="https://github.com/mojombo" class="user-mention">@mojombo</a>) founded GitHub.</p>

<h3>
<a id="support-or-contact" class="anchor" href="#support-or-contact" aria-hidden="true"><span class="octicon octicon-link"></span></a>Support or Contact</h3>

<p>Having trouble with Pages? Check out the documentation at <a href="https://help.github.com/pages">https://help.github.com/pages</a> or contact <a href="mailto:support@github.com">support@github.com</a> and we’ll help you sort it out.</p>
      </section>
      <footer>
        <p>This project is maintained by <a href="https://github.com/olekongithub">olekongithub</a></p>
        <p><small>Hosted on GitHub Pages &mdash; Theme by <a href="https://github.com/orderedlist">orderedlist</a></small></p>
      </footer>
    </div>
    <script src="javascripts/scale.fix.js"></script>

  </body>
</html>
