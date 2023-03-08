<nav class="navbar navbar-expand-lg navbar-light bg-white position-sticky top-0 py-3 shadow-sm bg-theme" style="z-index:999">
    <div class="container-fluid w-limit m-auto">
        <div id="navLogo" class="nav-logo d-flex d-lg-none" style="width:200px">
            <img src="images/logo.png" class=" w-100 of-contain" alt="logo">
        </div>

        <div class="d-flex gap-2 align-items-center">


            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>

        </div>
        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">



                <li class="nav-item w-100 no-wrap">
                    <a href="#" onclick="scrollToTop()" class="p-2 nav-link text-white  fw-bold rounded  mx-3  my-1 my-md-0 hover-line hover-line-show">
                        Home
                    </a>
                </li>

                <li class="nav-item w-100 no-wrap">
                    <a href="#about" class="p-2 nav-link text-white  fw-bold rounded  mx-3  my-1 my-md-0 hover-line">
                        About
                    </a>
                </li>

                <li class="nav-item w-100 no-wrap">
                    <a href="#speakers" class="p-2 nav-link text-white  fw-bold rounded  mx-3  my-1 my-md-0 hover-line">
                        Speakers
                    </a>
                </li>

                <li class="nav-item w-100 no-wrap">
                    <a href="" class="p-2 nav-link text-white  fw-bold rounded  mx-3  my-1 my-md-0 hover-line">
                        Schedules
                    </a>
                </li>

                <li class="nav-item w-100 no-wrap">
                    <a href="#gallery" class="p-2 nav-link text-white  fw-bold rounded  mx-3  my-1 my-md-0 hover-line">
                        Gallery
                    </a>
                </li>

                <li class="nav-item w-100 no-wrap">
                    <a href="#sponsors" class="p-2 nav-link text-white  fw-bold rounded  mx-3  my-1 my-md-0 hover-line">
                        Sponsors
                    </a>
                </li>

                <li class="nav-item w-100 no-wrap">
                    <a href="#partners" class="p-2 nav-link text-white  fw-bold rounded  mx-3  my-1 my-md-0 hover-line">
                        Partners
                    </a>
                </li>
                <li class="nav-item w-100 no-wrap">
                    <a href="" class="p-2 nav-link text-white  fw-bold rounded  mx-3  my-1 my-md-0 hover-line">
                        Hotels
                    </a>
                </li>

                <li class="nav-item w-100 no-wrap">
                    <a href="#news" class="p-2 nav-link text-white  fw-bold rounded  mx-3  my-1 my-md-0 hover-line">
                        News
                    </a>
                </li>

            </ul>

            <a href="#" target="_blank" class="btn btn-lg border border-light rounded  text-white hover-splash me-0 me-lg-5">
                Register
            </a>

        </div>

    </div>
</nav>

<script>
    var $navLinks;
    $(function() {
        $navLinks = $(".nav-link ");
        $navLinks.click(function() {
            $navLinks.removeClass("hover-line-show")
            $(this).addClass("hover-line-show");
            if ($(window).width() <= TABLET_WIDTH) {
                $("[data-bs-target='#navbarToggler']").trigger("click");
            }

        });
    })
</script>