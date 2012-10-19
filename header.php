<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Le styles -->
<!-- Le styles -->
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0 Feed rss per i post di questo blog" href="<?php bloginfo('rss2_url'); ?>" />


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-626773-18']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!--

                  {}
   ,   A           {}
  / \, | ,        .--.
 |    =|= >      /.--.\
  \ /` | `       |====|
   `   |         |`::`|  
       |     .-;`\..../`;_.-^-._
      /\\/  /  |...::..|`   :   `|
      |:'\ |   /'''::''|   .:.   |
       \ /\;-,/\   ::  |..DEMATV.|
       |\ <` >  >._::_.| ':INC:' |
       | `""`  /   ^^  |   ':'   |
       |       |       \    :    /
       |       |        \   :   / 
       |       |___/\___|`-.:.-`
       |        \_ || _/    `
       |        <_ >< _>
       |        |  ||  |
       |        |  ||  |
       |       _\.:||:./_
       | jgs  /____/\____\

-->

  </head>

  <body>

    <div class="navbar navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
<?php wp_list_pages(array('title_li' => '', 'exclude' => "4,235,1752,1772,1759")); ?>

                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
<form class="navbar-search pull-right" form role="search" method="get" id="searchform"  action="<?php echo home_url( '/' ); ?>">
<input type="text" value="" name="s" id="s" class="search-query span2" placeholder="Search">
</form>


        </div>
      </div>

    </div>
    <div class="container">
