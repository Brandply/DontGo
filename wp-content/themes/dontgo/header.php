<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title>Dont'Go - <?php the_title(); ?></title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
        <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img//favicon.ico" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img//favicon.png" />
        <script src="//use.fontawesome.com/3778c4e29f.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <!-- DONTGO BEGIN -->
<script type="text/JavaScript">
    vagntCampaignId='';
    vagntLinkInfo='';
function vagnt_load() {
    var vascript = document.createElement('script');
    vascript.type = "text/javascript";
    vascript.src = "//vagnt.com/sd/?siteid=1655";
    document.getElementsByTagName('head')[0].appendChild(vascript);
}
if (window.attachEvent) {
    setTimeout(vagnt_load, 1);
} else if (window.addEventListener) {
    window.addEventListener("load", vagnt_load, false);
}
</script>
<!-- DONTGO END -->
        <div class="container">
            <header>
                <div class="row">
                    <div class="top col-md-6">
                        <ul>
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> <a href="tel:+18009225555" title="800-922-5555">800-922-5555</a></li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <a href="mailto:info@dontgo.com" title="Email info@dontgo.com">info@dontgo.com</a></li>
                        </ul>
                    </div>
                </div>
                <nav>
                    <div class="row">
                        <div class="col-sm-3"><a class="" href="/" title="Don't Go"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" /></a></li></div>
                            <ul class="col-sm-6 hide-mobile">
                                <li><a href="features" title="Features">Features</a></li>
                                <li><a href="benefits" title="Benefits">Benefits</a></li>
                                <li><a href="pricing" title="Pricing">Pricing</a></li>
                                <li><a href="news" title="News">News</a></li>
                                <li><a href="about-us" title="About Us">About Us</a></li>
                            </ul>
                        <div class="col-sm-3"><div class="button"><a class="button" href="signup" title="Tell Me More">Tell Me More</a></div></div>
                    </div>
                </nav>
            </header>
