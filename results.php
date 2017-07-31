<?php
date_default_timezone_set("Europe/London");
$now                 = time();
$birthday            = strtotime("{$_GET['year']}-{$_GET['month']}-{$_GET['day']}");
$age_days            = floor(($now - $birthday)/(60*60*24));
$start_date_web      = strtotime("1989-03-12");
$web_days            = floor(($now - $start_date_web)/(60*60*24));
$older_days          = floor(($now - $birthday)/(60*60*24));

$younger_age_difference      = $web_days - $age_days;
$older_age_difference        = $age_days - $web_days; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Results</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta property="og:site_name" content="How old is the internet?">
    <meta property="og:title" name="twitter:title" content="How old is the internet?">
    <meta property="og:description" content="Just how many days old is the internet right now?">
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="1757071657655796">
    <meta property="locale" content="en_GB">
    <meta property="og:url" content="https://www.howoldistheinter.net" name="twitter:url">
    <meta property="og:image" name="twitter:image" content="https://www.howoldistheinter.net/social.png">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@tosbourn">
    <meta name="twitter:creator" content="@tosbourn">
  </head>
  <body>
    <p>What is your age in relation to the internet?</p>

    <?php
    $result = "";
    $sharing_result = "";

    if ($age_days < $web_days) {
      $result = "The internet was $younger_age_difference days old when you were born!";
      $sharing_result = "The internet was $younger_age_difference days old when I was born!";
    } elseif ($age_days > $web_days) {
      $result = "The internet was launched $older_age_difference days after I was born!";
      $sharing_result = "The internet was launched $older_age_difference days after I was born!";
    } else {
      $result = "Wow! You're exactly the same age as the internet!";
      $sharing_result = "Wow! I'm exactly the same age as the internet!";
    } ?>

    <p><?= $result; ?></p>

    <section class="socialshares">

      <a class="social facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fhowoldistheinter.net">Facebook</a>

      <a class="social twitter" target="_blank" href="https://twitter.com/intent/tweet?text=<?=$sharing_result;?>&amp;url=http%3A%2F%2Fhowoldistheinter.net">Twitter</a>

      <a class="social linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fhowoldistheinter.net&amp;title=<?=$sharing_result?>&amp;summary=<?=$sharing_result?>&amp;source=http%3A%2F%2Fhowoldistheinter.net">LinkedIn</a>

    </section>

  </body>
</html>
