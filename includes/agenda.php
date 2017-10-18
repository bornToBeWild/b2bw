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
        <div class="agenda col-md-4 col-md-offset-8 col-xs-11 col-xs-offset-1">
          <h2>TOUR DATES</h2>
          <div class="tour">
            <div class="tour_impair">
              <p><span class="date"> October 31:</span> Bercy Arena in Paris - 20h</p>
            </div>
            <div class="tour_pair">
              <p><span class="date"> November 2:</span> XX in London - 21h</p>
            </div>
            <div class="tour_impair">
              <p><span class="date"> October 31:</span> Bercy Arena in Paris - 20h</p>
            </div>
            <div class="tour_pair">
              <p><span class="date"> November 2:</span> XX in London - 21h</p>
            </div>
            <div class="tour_impair">
              <p><span class="date"> October 31:</span> Bercy Arena in Paris - 20h</p>
            </div>
          </div>
          <div class="see">
            More dates
          </div>
          <div class="more">
            <div class="tour_pair">
              <p><span class="date"> November 2:</span> XX in London - 21h</p>
            </div>
            <div class="tour_impair">
              <p><span class="date"> October 31:</span> Bercy Arena in Paris - 20h</p>
            </div>
            <div class="tour_pair">
              <p><span class="date"> November 2:</span> XX in London - 21h</p>
            </div>
            <div class="tour_impair">
              <p><span class="date"> October 31:</span> Bercy Arena in Paris - 20h</p>
            </div>
            <div class="tour_pair">
              <p><span class="date"> November 2:</span> XX in London - 21h</p>
            </div>


            <div class="tour_impair">
              <p><span class="date"> October 31:</span> Bercy Arena in Paris - 20h</p>
            </div>
            <div class="tour_pair">
              <p><span class="date"> November 2:</span> XX in London - 21h</p>
            </div>
            <div class="tour_impair">
              <p><span class="date"> October 31:</span> Bercy Arena in Paris - 20h</p>
            </div>
            <div class="tour_pair">
              <p><span class="date"> November 2:</span> XX in London - 21h</p>
            </div>
            <div class="tour_impair">
              <p><span class="date"> October 31:</span> Bercy Arena in Paris - 20h</p>
            </div>
            <div class="tour_pair">
              <p><span class="date"> November 2:</span> XX in London - 21h</p>
            </div>
            <div class="tour_impair">
              <p><span class="date"> October 31:</span> Bercy Arena in Paris - 20h</p>
            </div>
            <div class="tour_pair">
              <p><span class="date"> November 2:</span> XX in London - 21h</p>
            </div>
            <div class="tour_impair">
              <p><span class="date"> October 31:</span> Bercy Arena in Paris - 20h</p>
            </div>
            <div class="tour_pair">
              <p><span class="date"> November 2:</span> XX in London - 21h</p>
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
