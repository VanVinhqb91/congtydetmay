<!DOCTYPE html>
<!-- Công ty dệt may -->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <meta name="keywords" content="cong ty det may, det, may, ao, quan, day, dep">
        <meta name="description" content="">
        <link href="<?php echo base_url() . "public/" . $modu; ?>/css/home_font.css" rel="stylesheet" type="text/css"/><!-- css index.php -->
        <link href="<?php echo base_url() . "public/" . $modu; ?>/css/slider_font.css" rel="stylesheet" type="text/css"/><!-- css slider -->
        <link rel="stylesheet" href="<?php echo base_url() . "public/" . $modu; ?>/css/style_carousel.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url() . "public/" . $modu; ?>/css/introduct_slide.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url() . "public/" . $modu; ?>/css/jcarousel.responsive.css" type="text/css"/>

        <script type="text/javascript" src="<?php echo base_url() . 'public/fontend/js/jquery-1.8.3.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'public/fontend/js/jquery-ui-1.7.2.custom.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'public/fontend/js/jcarousel.responsive.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'public/fontend/js/jquery.jcarousel.min.js'; ?>"></script>

        <script type="text/javascript" src="<?php echo base_url() . 'public/fontend/jquery/modernizr.mediaqueries.transforms3d.js'; ?>" charset="utf-8"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'public/fontend/jquery/jquery.silver_track.js'; ?>" charset="utf-8"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'public/fontend/jquery/jquery.silver_track.navigator.js'; ?>" charset="utf-8"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'public/fontend/jquery/jquery.silver_track.bullet_navigator.js'; ?>" charset="utf-8"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'public/fontend/jquery/jquery.silver_track.responsive_hub_connector.js'; ?>" charset="utf-8"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'public/fontend/jquery/jquery.silver_track.css3_animation.js'; ?>" charset="utf-8"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'public/fontend/jquery/jquery.silver_track.circular_navigator.js'; ?>" charset="utf-8"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'public/fontend/jquery/script.js'; ?>" charset="utf-8"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'public/fontend/jquery/example7.js'; ?>" charset="utf-8"></script>

        <script type="text/javascript" src="<?php echo base_url() . 'public/fontend/jquery/modernizr.custom.28468.js'; ?>" charset="utf-8"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'public/fontend/jquery/jquery.cslider.js'; ?>" charset="utf-8"></script>

        <script type="text/javascript" src="<?php echo base_url() . 'public/fontend/js/presentationCycle.js'; ?>"></script><!-- js nút bấm lên top -->
        <script type="text/javascript" src="<?php echo base_url() . 'public/fontend/js/arrow34-top.js'; ?>"></script><!-- js nút bấm lên top -->
    <noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>
    <!-- ************************* STYLE OF SLIDER ************************* -->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#featured").tabs({fx: [{opacity: "toggle", duration: 'slow'}, {opacity: "toggle", duration: 'normal'}],
                show: function (event, ui) {
                    $('#featured .ui-tabs-panel .info').hide();
                    var infoheight = $('.info', ui.panel).height();
                    $('.info', ui.panel).css('height', '0px').animate({'height': infoheight}, 500);
                }
            }).tabs("rotate", 5000, true);
            $('#featured').hover(
                    function () {
                        $('#featured').tabs('rotate', 0, true);
                    },
                    function () {
                        $('#featured').tabs('rotate', 5000, true);
                    }
            );
            $('#featured .ui-tabs-panel a.hideshow').click(function () {
                if ($(this).text() == 'Hide') {
                    $(this).parent('.info').animate({'height': '0px'}, 500);
                    $(this).text('Show');
                }
                else {
                    $(this).parent('.info').animate({'height': '70px'}, 500);
                    $(this).text('Hide');
                }
                return false;
            });
        });
    </script><!-- style of slider -->
    <style type="text/css" >
        #featured .ui-tabs-panel .info{
            display: block !important;
        }
    </style><!-- style of slider -->
    <script type="text/javascript">
        $(function () {
            $('#da-slider').cslider({
                autoplay: true,
                bgincrement: 450
            });
        });
    </script>
</head>
<body>
    <div id="header">
        <?php $this->load->view("$modu/header_font"); ?>
    </div><!-- End header -->

    <div id="main">
        <?php $this->load->view($loadPage); ?>
    </div><!-- End main -->

    <div id="footer">
        <?php $this->load->view("$modu/footer_font"); ?>
    </div><!-- End footer -->
    <!-- ************************** phần 2 hình bên trái và phải ********************* -->
    <script type="text/javascript">
        $(function(){
            $banner = $('.banner');
            $window = $(window);
            $window.scroll(function(){
                $top = $(this).scrollTop();
                console.log($top);
                $banner.stop().animate({top: $top + 50},800);
            });
        });
    </script>
    <div id="banner-left" class="banner">
        <img src="<?php echo base_url();?>/uploads/images/582318_quangcao.jpg" width="130px" height="480px"/>
    </div>
    <div id="banner-right" class="banner">
        <img src="<?php echo base_url();?>/uploads/images/932372_quangcao_right.jpg" width="130px" height="480px"/>
    </div>
</body>
</html>
