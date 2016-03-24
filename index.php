<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>John J. Camilleri — Ph.D. student</title>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-11590274-7', 'chalmers.se');
      ga('send', 'pageview');
    </script>
    <script type="text/javascript">
    //<![CDATA[
      $(document).ready(function(){
        $('a.bibtex-link').click(function(){
          $(this).next().slideToggle();
          return false;
        });
      });
    //]]>
    </script>
  </head>
  <body>


    <h2>Publications</h2>

    <h2>Presentations &amp; posters</h2>

    <ul class="presentations">
<?php
    $slides = $json->academic->slides;
    foreach($slides as $item) $item->type = "slides";
    $posters = $json->academic->posters;
    foreach($posters as $item) $item->type = "poster";

    $slides = array_merge($slides, $posters);
    sortByDate($slides);
    foreach($slides as $item):
?>
<li>
  <em><?php echo $item->title ?></em>:
  <?php
    echo "{$item->description}. ";
    if ($item->event) echo "{$item->event}, ";
    if ($item->school) echo "{$item->school}, ";
    echo "{$item->location}, ";
    echo "{$item->year}. ";
  ?>
  [<a href="http://academic.johnjcamilleri.com/presentations/<?php echo rawurlencode($item->filename) ?>"><?php echo ucfirst($item->type) ?></a>]
</li>
<?php endforeach; ?>
    </ul>


  </body>
</html>
