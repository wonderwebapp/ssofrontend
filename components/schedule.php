<?php
$numberOfDays = 3;
?>

<link rel="stylesheet" href="css/schedule.css">
<section id="schedule" class="container my-5">

    <div class="d-flex justify-content-center">
        <h1 class="text-theme fw-bold  border-bottom border-3 border-theme mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32">
                <path fill="currentColor" d="M21 30a8 8 0 1 1 8-8a8 8 0 0 1-8 8Zm0-14a6 6 0 1 0 6 6a6 6 0 0 0-6-6Z" />
                <path fill="currentColor" d="M22.59 25L20 22.41V18h2v3.59l2 2L22.59 25z" />
                <path fill="currentColor" d="M28 6a2 2 0 0 0-2-2h-4V2h-2v2h-8V2h-2v2H6a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2h4v-2H6V6h4v2h2V6h8v2h2V6h4v6h2Z" />
            </svg>
            Schedule
        </h1>
    </div>


    <div class="d-flex justify-content-center w-100" style="height: 50px;">
        <?php for ($i = 1; $i <= $numberOfDays; $i++) : ?>
            <div class="d-flex justify-content-center align-items-center flex-1 flex-grow-1 rounded text-theme bg-light mx-2 pointer fw-bold
        <?= $i == 1 ? 'schedule-selected' : '' ?>" data-schedule="<?= $i ?>">
                Day<?= $i ?>
            </div>
        <?php endfor; ?>
    </div>


    <?php for ($i = 1; $i <= $numberOfDays; $i++) : ?>
        <div class="d-flex flex-column w-100 py-4 <?= $i > 1 ? 'd-none' : '' ?>" data-schedule-content="<?= $i ?>">
            <?php for ($j = 1; $j <= 5; $j++) : ?>
                <div class="schedule-row d-flex flex-column flex-md-row w-100  ">
                    <div class="d-flex flex-column justify-content-center align-items-center pb-5 position-relative border-end border-3" style="min-width: 200px;">

                        <span class="text-theme text-center fw-bold">
                            <?=$i+1?>:00 - <?=$i+1?>:30
                        </span>

                        <img src="https://themes.3rdwavemedia.com/demo/bs5/devconf/assets/images/speakers/speaker-1.jpg" class="of-cover rounded-circle my-3" style="width:70px;height:70px">

                        <a href="#" class="fs-7 text-decoration-underline text-dark">
                            James Doe
                        </a>

                        <div class="d-none d-md-block position-absolute start-100 translate-middle top-0 rounded-circle border border-3 border-theme bg-white" style="width: 13px; height: 13px;">

                        </div>
                    </div>

                    <div class="d-flex flex-column px-3">
                        <h5 class="text-dark fw-bold">
                            Best Practices And Tips For A Clean Angular Application
                        </h5>
                        <span class="text-secondary  d-flex  align-items-center my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                <path fill="black" d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Z" />
                            </svg>
                            <span class="mx-1 fs-7">
                                Conference Room A
                            </span>
                        </span>
                        <p class="text-secondary fs-6 mt-2">
                            Talk's summary goes here. You can hook up the speaker profile image/name on the left with his or her bio modal window. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis ornare nibh, pulvinar posuere justo. Aenean laoreet nunc a eleifend lacinia. Phasellus dignissim augue at consectetur ullamcorper.
                        </p>

                    </div>
                </div>


            <?php endfor; ?>
        </div>
    <?php endfor; ?>
</section>

<script>
    var $schedules;
    var scheduleContents;
    $(function() {
        $schedules = $("[data-schedule]");
        scheduleContents = $("[data-schedule-content]");
        $schedules.click(function() {
            var scheduleNumber = $(this).attr("data-schedule");
            scheduleContents.addClass("d-none");
            $(`[data-schedule-content='${scheduleNumber}']`).removeClass("d-none").hide().fadeIn();
            $schedules.removeClass("schedule-selected");
            $(this).addClass("schedule-selected");
        });

    });
</script>