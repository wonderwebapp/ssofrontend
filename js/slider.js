$(document).ready(function () {
    var $wrap = $(".wrapper"),
      pages = $(".page").length,
      scrolling = false,
      currentPage = 1,
      $navPanel = $(".nav-panel"),
      $scrollBtn = $(".scroll-btn"),
      $navBtn = $(".nav-btn");

    /*****************************
    ***** NAVIGATE FUNCTIONS *****
    *****************************/
    function manageClasses() {
      $wrap.removeClass(function (index, css) {
        return (css.match(/(^|\s)active-page\S+/g) || []).join(' ');
      });
      $wrap.addClass("active-page" + currentPage);
      $navBtn.removeClass("active");
      $(".nav-btn.nav-page" + currentPage).addClass("active");
      $navPanel.addClass("invisible");
      scrolling = true;
      setTimeout(function () {
        $navPanel.removeClass("invisible");
        scrolling = false;
      }, 1000);
    }
    function navigateUp() {
      if (currentPage > 1) {
        currentPage--;
        manageClasses();
      }
    }

    function navigateDown() {
      if (currentPage < pages) {
        currentPage++;
        manageClasses();
      }
    }

    /*********************
    ***** MOUSEWHEEL *****
    *********************/
    $(document).on("mousewheel DOMMouseScroll", function (e) {
      if (!scrolling) {
        if (e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
          navigateUp();
        } else {
          navigateDown();
        }
      }
    });

  

  });