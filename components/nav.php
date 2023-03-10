<?php
$navId="nav";
$navClass = "position-relative";
$logoClass = "d-flex d-lg-none";
include("components/menu.php");

$navId="navScroll";
$navClass = "hide position-fixed";
$logoClass = "";
include("components/menu.php");



?>



<script>
    var $navLinks;
    $(function() {
        $navLinks = $(".nav-link ");
        $navLinks.click(function() {
            $navLinks.removeClass("hover-line-show")
            $(`[href='${$(this).attr('href')}']`).addClass("hover-line-show");
            if ($(window).width() <= TABLET_WIDTH) {
                $("[data-bs-target='#navbarToggler']").trigger("click");
            }

        });
    })
</script>