<!-- import juste pour test en local -->
<!-- Immport Bootstrap library-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!--CSS-->
<link rel="stylesheet" href="../assets/css/style.css" />
<!--Favicon-->
<link rel="shortcut icon" href="assets/pictures/faviconB.ico" type="image/x-icon">
<link rel="icon" href="assets/pictures/faviconB.ico" type="image/x-icon">

<!--Fonts-->
<link href="https://fonts.googleapis.com/css?family=Abel|Amatic+SC|Josefin+Sans|Quicksand|Yanone+Kaffeesatz" rel="stylesheet">

<!-- Agenda -->

  <div class="container">

    <aside>
      <div class="row">
        <div class="agenda col-md-4 col-xs-12">
          <h2>TOUR DATES</h2>
          <div class="tour">
            <div class="tour_impair">
              <p><span class="date"> October 31:</span> Wild Arena - Paris (FR) - 8PM</p>
            </div>
            <div class="tour_pair">
              <p><span class="date"> November 2:</span> Flex' - Lille (FR) 9PM</p>
            </div>
            <div class="tour_impair">
              <p><span class="date"> November 5:</span> Git ready - Brussels (BE) 8PM</p>
            </div>
            <div class="tour_pair">
              <p><span class="date"> November 7:</span> Com' IT London (UK) 8PM</p>
            </div>
            <div class="tour_impair">
              <p><span class="date"> November 10:</span> The merge - Bristol (UK) 9PM</p>
            </div>
          </div>
          <div class="see">
            More dates
          </div>
          <div class="more">
            <div class="tour_pair">
              <p><span class="date"> November 13:</span> Branch - Liverpool (UK) 9PM</p>
            </div>
            <div class="tour_impair">
              <p><span class="date"> November 15:</span> Checkout - Dublin (IE) 7PM</p>
            </div>
            <div class="tour_pair">
              <p><span class="date"> November 18:</span> Octokat - Reykjavik (IS) 7PM</p>
            </div>
            <div class="tour_impair">
              <p><span class="date"> November 20:</span> Boots - Oslo (NO) 8PM</p>
            </div>
            <div class="tour_pair">
              <p><span class="date"> November 22:</span> Strap - Stockholm (SE) 8PM</p>
            </div>


            <div class="tour_impair">
              <p><span class="date"> November 25:</span> The little mermaid - Copenhagen (DK) 9PM</p>
            </div>
            <div class="tour_pair">
              <p><span class="date"> November 28:</span> The Protocol - Berlin (DE) 8PM</p>
            </div>
            <div class="tour_impair">
              <p><span class="date"> November 30:</span> Control - Hamburg (DE) 8PM</p>
            </div>
            <div class="tour_pair">
              <p><span class="date"> December 3:</span> ALT - Munich (DE) 9PM</p>
            </div>
            <div class="tour_impair">
              <p><span class="date"> December 5:</span> Delete - Amsterdam (NL) 8PM</p>
            </div>
            <div class="tour_pair">
              <p><span class="date"> December 9:</span> Fork - Zurich (CH) 7PM</p>
            </div>
            <div class="tour_impair">
              <p><span class="date"> December 12:</span> Clone - Milan (IT) 7PM</p>
            </div>
            <div class="tour_pair">
              <p><span class="date"> December 15:</span> Fetch - Roma (IT) 9PM</p>
            </div>
            <div class="tour_impair">
              <p><span class="date"> December 18:</span> The Sea - Barcelona (ES) 8PM</p>
            </div>
            <div class="tour_pair">
              <p><span class="date"> December 20:</span> Si es es - Madrid (ES) 9PM</p>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
  </aside>

<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">


</script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
  $('.see').on('click', function() {
    $('.more').slideToggle();
    $(this).text($(this).text() == 'Less dates' ? 'More dates' : 'Less dates');
  });

</script>
