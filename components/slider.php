<link rel="stylesheet" href="css/slider.css?v=<?= $v ?>">
<script src="js/slider.js?v=<?= $v ?>"></script>

<section id="home" class="">
  <div class="wrapper">
    <div class="main">
      <?php for ($i = 1; $i <= 3; $i++) : ?>
        <section class="">
          <div class="page_container d-flex justify-content-center align-items-center w-100 h-100"
          style="background: url(https://cdn.pixabay.com/photo/2016/09/29/13/08/planet-1702788_960_720.jpg) center center;
  background-size: cover;"
          >
            <h1 class="text-center w-100">
              <a href="http://www.bucketlistly.com/achievements/visit-sydney-australia-95861" target="_blank">Travel to
                Sydney, Australia<br>
                <small>Completed on 14 Feb 2014</small></a>
            </h1>
          </div>
        </section>

      <?php endfor; ?>

    </div>
  </div>

</section>

<script>
  $(document).ready(function() {
    $(".main").tiltedpage_scroll({
      angle: 45
    });
  });
</script>