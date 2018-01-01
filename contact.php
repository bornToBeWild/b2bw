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

    <form class="form-horizontal contact_us_form" method="post">
      <fieldset>

        <!-- Name-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="name">Name</label>
          <div class="col-md-4">
            <input id="name" name="name" placeholder="name" class="form-control input-md" required="" type="text">

          </div>
        </div>

        <!-- Email-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="email">Email</label>
          <div class="col-md-4">
            <input id="email" name="email" placeholder="email" class="form-control input-md" required="" type="email">

          </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="radios">Are you a professionnal?</label>
          <div class="col-md-4">
            <div class="radio">
              <label for="radios-0">
                <input name="radios" id="radios-0" value="yes" checked="checked" type="radio"> yes
              </label>
            </div>
            <div class="radio">
              <label for="radios-1">
                <input name="radios" id="radios-1" value="no" type="radio"> no
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
            <button type="Submit" id="singlebutton" name="singlebutton" class="btn btn-default">Submit</button>
          </div>
        </div>

      </fieldset>
    </form>
    <?php 
    if (!(empty($_POST))){

      echo '<div class="alert alert-success alert-dismissable">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <strong>Success!</strong> Your message have been sent.
      </div>';
    }; ?>
  </div>

  <?php include('includes/footer.php'); ?>
</body>


<?php include ("assets/js/script.php");?> 
