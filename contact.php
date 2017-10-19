<?php include('includes/header.php'); ?>
<?php include('includes/home-social.php'); ?>
<?php include('includes/navbar.php'); ?>
<?php include('includes/coverlogo.php'); ?>


<body>

  <div class="white_box">
    <section class="contact">
    <h2>Contact us</h2>
    <p>Please contact us for any information.</p>
  </section>
  
    <form class="form-horizontal" method="post" action="contact_success.php">
      <fieldset>

        <!-- Name-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Name</label>
          <div class="col-md-4">
            <input id="textinput" name="textinput" placeholder="name" class="form-control input-md" required="" type="text">

          </div>
        </div>

        <!-- Email-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Email</label>
          <div class="col-md-4">
            <input id="textinput" name="textinput" placeholder="email" class="form-control input-md" required="" type="text">

          </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="radios">Are you a professionnal?</label>
          <div class="col-md-4">
            <div class="radio">
              <label for="radios-0">
                <input name="radios" id="radios-0" value="1" checked="checked" type="radio"> yes
              </label>
            </div>
            <div class="radio">
              <label for="radios-1">
                <input name="radios" id="radios-1" value="2" type="radio"> no
              </label>
            </div>
          </div>
        </div>

        <!-- Message -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="message">Message</label>
          <div class="col-md-4">
            <textarea class="form-control" id="message" name="message"></textarea>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-default">Submit</button>
          </div>
        </div>

      </fieldset>
    </form>
  </div>
<?php include('includes/footer.php'); ?>
</body>


<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script> 

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>