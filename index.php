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


<?php
    $json = json_decode(file_get_contents('academic.json'));
    function sortByDate(&$arr) {
        foreach ($arr as $key => $row) {
            $year[$key]  = $row->year;
            $month[$key]  = $row->month;
        }
        array_multisort($year, SORT_DESC, $month, SORT_DESC, $arr);
    }
?>

    <h2>Publications</h2>

    <ul class="publications">
<?php
    $pubs = $json->academic->publications;
    sortByDate($pubs);
    foreach($pubs as $item):
        if (@$item->show===false) continue;
        $month = date("F", mktime(0, 0, 0, $item->month));
        $address = ($item->event) ? $item->event->location : ($item->publication->address ? $item->publication->address : $item->location);
?>
<li>
  <?php
     echo "<em>{$item->title}</em>, ";
     echo implode(", ", $item->authors);
     if ($item->event) {
//       echo " in Proceedings of {$item->event->name} ({$item->event->code}). ";
       echo " in {$item->event->name} ({$item->event->code}). ";
     } elseif ($item->publication) {
       foreach ($item->publication as $k=>$v) {
         switch ($k) {
         case 'booktitle': echo " in &ldquo;{$v}&rdquo;"; break;
         case 'volume': echo " Vol. {$v}"; break;
         case 'editor': echo ", {$v} (Eds.)"; break;
         case 'address': break;
         default: echo ", {$v}";
         }
       }
       echo ". ";
     } else {
       echo ". ";
     }
     if ($item->note) {
       echo "{$item->note}. ";
     }
     if ($item->school) {
       echo "{$item->school}. ";
     }
     if ($address) {
       echo "{$address}, ";
     }
     echo "{$month} {$item->year}.";

     $url = isset($item->url) ? $item->url : "http://academic.johnjcamilleri.com/papers/{$item->key}.pdf" ;
     if ($url): ?>
      [<a href="<?php echo $url ?>">PDF</a>]
     <?php endif; ?>
[<a class="bibtex-link" href="">BibTeX</a>]
<div class="bibtex">
@<?php echo $item->bibtype ?>{<?php echo $item->key ?>,
  author    = "<?php echo implode(" and ", $item->authors) ?>",
  title     = "{<?php echo str_replace('—', '---', $item->title) ?>}",
<?php
  if ($item->publication) foreach ($item->publication as $k=>$v) {
    $s = sprintf("  %-9s = \"%s\",\n", $k, $v);
    switch ($k) {
    case 'pages': echo str_replace('-', '--', $s); break;
    case 'address': break;
    default: echo $s;
    }
  }
?>
<?php if ($address): ?>
  address   = "<?php echo $address ?>",
<?php endif; ?>
<?php if ($item->school): ?>
  school    = "<?php echo $item->school ?>",
<?php endif; ?>
  year      = "<?php echo $item->year ?>",
  month     = "<?php echo $month ?>",
<?php if ($url): ?>
  url       = "<?php echo $url ?>"
<?php endif; ?>
}
</div>
</li>
<?php endforeach; ?>
    </ul>

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
