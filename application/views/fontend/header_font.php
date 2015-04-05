<div class="header-logo">
    <div class="h-logo-all">
        <?php foreach ($show_logo as $showLo) : ?>
            <a href="<?php echo $showLo['url_logo']; ?>">
                <h1 title="<?php echo $showLo['title_seo']; ?>"><?php echo $showLo['title_logo']; ?></h1>
            </a>
        <?php endforeach ?>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $(".h-menu ul li:first").addClass("active");
        $(".h-menu ul li").click(function(){
            $(".h-menu ul li").removeClass("active");
            $(this).addClass("active-menu");
        });
    });
</script>
<div class="header-menu">
    <div class="h-menu">
        <ul>
            <?php foreach ($show_menu as $showMenu) : ?>
                <li>
                    <a href="<?php echo $showMenu['url_menu']; ?>" title="<?php echo $showMenu['intro_menu']; ?>"><?php echo $showMenu['title_menu']; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>