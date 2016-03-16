<?php
error_reporting(E_NONE);
?>
<!DOCTYPE html>
<html>
  <!--
                                           _
       ,,;;;,,,,   _.---.._                \`-._
     `';;;;;;;;;;;;;,      `'.           .--'-._';,
        ,;;';;''/            `;_       `';;;;'    `'.
                |  .            '-._   ,;;:'   /  '<~'.
                |  ;        \       '.,;;'     |       \
                 \  \       |                  ;._. ,-'`.
              /`'-`;.`'._   /                  /   `-.\_/
              ; .-._ .-'  .'                  |
             / /    '\ .-'`.                _/
         _.-' /       \ \   '-._            /
        (_/_.'     __.) /       `;--.._/   (
                  (_/__/          \   `,   \
                                   \  | \   \
                                    \ \  `\  |
                                     \ \   \ \
                                      \_\   \ \
                                       )-`\  \_\
                                  jgs  `==`   )-`\
                                              `==`
  -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>John J. Camilleri — Ph.D. student</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
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

    <img id="frame" src="http://johnjcamilleri.com/images/john-j-camilleri.jpg" alt="Profile photo" />
    <img id="name" alt="John J. Camilleri" src="http://johnjcamilleri.com/images/name.png" />
    <p class="updated">Updated <?php echo date('jS F Y', max(filemtime(__FILE__), filemtime('academic.json'))) ?></p>

    <p>
      I'm a Ph.D. student at the department of
      <a href="http://www.chalmers.se/cse/">Computer Science and Engineering</a> at
      <a href="http://www.chalmers.se/">Chalmers University of Technology</a> and the
      <a href="http://www.gu.se/">University of Gothenburg</a>, Sweden.
      I work in the areas of language technology and formal methods,
      where I'm funded by the <a href="http://remu.grammaticalframework.org/">REMU project</a>
      to research the formal analysis of normative contracts written in natural language.
    </p>
    <p>
      I also do some computational linguistic work for the Maltese language,
      where I built and maintain <a href="http://mlrs.research.um.edu.mt/resources/gabra/">a digital lexicon for Maltese</a> called <em>Ġabra</em>.
    </p>

    <p>You can contact me at <code>john.j.camilleri<img src="ghost.png" style="height:18px; vertical-align:sub; -webkit-filter:grayscale(100%); filter:grayscale(100%);" alt="@"/>cse.gu.se</code>, or find me in Room 5446 of the EDIT building, Rännvägen 6B on Chalmers’ Johanneberg campus in Gothenburg, Sweden.</p>

    <h2>Brief background</h2>
    <ul>
      <li>
        <strong>2013 &#8211; present</strong>:
        Ph.D. student in Computer Science at Chalmers / University of Gothenburg,
        under the supervision of <a href="http://www.cse.chalmers.se/~gersch/">Gerardo Schneider</a>
        and <a href="http://www.cse.chalmers.se/~koen/">Koen Claessen</a>.

      </li>
      <li>
        <strong>2012 &#8211; 2013</strong>:
        M.Sc. student at Chalmers University of Technology in the
        <em><a href="http://www.chalmers.se/en/education/programmes/masters-info/Pages/Computer-Science-algorithms-languages-and-logic.aspx">Computer Science: Algorithms, Languages and Logic</a></em> program,
        under the supervision of <a href="http://www.cse.chalmers.se/~aarne/">Aarne Ranta</a>.
      </li>
      <li>
        <strong>2011 &#8211; 2013</strong>:
        Research assistant at Chalmers / University of Gothenburg in the <a href="http://www.molto-project.eu/">MOLTO</a> project.
      </li>
      <li>
        <strong>2006 &#8211; 2010</strong>:
        B.Sc. IT (Hons) in Computer Science and Artificial Intelligence at the <a href="http://www.um.edu.mt/ict/">University of Malta</a>.
      </li>
    </ul>

    <h2>Teaching</h2>
    <ul>
        <li>Artificial Intelligence:
            <!--a href="http://ai-course-tin172-dit410.github.io/index.html">VT2016 LP4</a-->
            <a href="http://chalmersgu-ai-course.github.io/index.html">VT2016 LP4</a>
        </li>
        <li>Concurrent Programming:
            <a href="http://www.cse.chalmers.se/edu/year/2014/course/TDA382_LP3/">VT2014 LP3</a>,
            <a href="http://www.cse.chalmers.se/edu/year/2014/course/TDA382/">VT2015 LP3</a>,
            <a href="http://www.cse.chalmers.se/edu/year/2015/course/TDA383_LP1/">HT2015 LP1</a>,
            <strong><a href="http://www.cse.chalmers.se/edu/year/2015/course/TDA383_LP3/">VT2016 LP3</a></strong>
        </li>
        <li>Programming Language Technology:
            <a href="http://www.cse.chalmers.se/edu/year/2014/course/DAT151/">VT2014 LP3</a>,
            <a href="http://www.cse.chalmers.se/edu/year/2015/course/DAT151/">VT2015 LP3</a>,
            <a href="http://www.cse.chalmers.se/edu/year/2015/course/DAT151-lp2/">HT2015 LP2</a>
        </li>
        <li>Advanced Functional Programming:
            <strong><a href="http://www.cse.chalmers.se/edu/year/2016/course/TDA342/">VT2016 LP3</a></strong>
        </li>
        <li>Natural Language Processing:
            HT2014 LP2,
            <a href="http://gul.gu.se/public/courseId/70823/coursePath/59410/ecp/lang-en/publicPage.do">HT2015 LP2</a>
        </li>
        <li>Objektorienterad programvaruutveckling:
            <a href="http://www.cse.chalmers.se/edu/year/2014/course/TDA550/">HT2014 LP2</a>
        </li>
    </ul>

    <h2>Thesis supervision</h2>
    <ul>
        <li><a href="https://masterthesis.cms.chalmers.se/supervisor/john-j-camilleri">Master's thesis project proposals</a></li>
    </ul>

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

    <h2>Research profiles</h2>

    <p>This page will always contain the most up-to-date information; the links below are mostly for myself.</p>

    <ul class="compact">
      <li><a href="http://orcid.org/0000-0003-2565-7124">ORCID</a></li>
      <li><a href="http://www.researcherid.com/rid/M-7445-2013">ResearcherID</a></li>
      <li><a href="http://scholar.google.com/citations?user=9k-l79kAAAAJ">Google Scholar</a></li>
      <li><a href="http://www.mendeley.com/profiles/john-j-camilleri/">Mendeley</a></li>
      <li><a href="https://www.researchgate.net/profile/John_Camilleri">ResearchGate</a></li>
      <li><a href="http://dblp.uni-trier.de/pers/hd/c/Camilleri:John_J=.html">DBLP</a></li>
      <li><a href="http://dl.acm.org/author_page.cfm?id=81546116756">ACM DL</a></li>
      <li><a href="http://gup.ub.gu.se/lists/publications/people/html/index.xsql?ids=188090">GUP</a></li>
    </ul>

  </body>
</html>
