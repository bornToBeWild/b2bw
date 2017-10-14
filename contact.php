<?php include('includes/header.php'); ?>
<?php include('includes/home-social.php'); ?>
<?php include('includes/home-section-header.php'); ?>

<body>

  <section class="contact">
    <h1>Contact us</h1>
    <p>Please contact us for any information.</p>
  </section>
    <form class="form-horizontal" method="post" action="contact_success.php">
      <fieldset>

        <!-- Name-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">name</label>
          <div class="col-md-4">
            <input id="textinput" name="textinput" placeholder="name" class="form-control input-md" required="" type="text">

          </div>
        </div>

        <!-- Email-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">email</label>
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
</body>
<?php include('includes/footer.php'); ?>
