<?php include('includes/header.php'); ?>
<?php include('includes/home-social.php'); ?>
<?php include('includes/navbar.php'); ?>
<?php include('includes/home-section-header.php'); ?>

<body>

<section class="contact">
    <h2>Contact us</h2>
    <p>Please contact us for any information.</p>
  </section>

<form class="form-horizontal" method="post">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">name</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" placeholder="name" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
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
      <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
      yes
    </label>
  </div>
  <div class="radio">
    <label for="radios-1">
      <input name="radios" id="radios-1" value="2" type="radio">
      no
    </label>
  </div>
  </div>
</div>

<!-- Textarea -->
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
<div class="alert alert-success">
  <strong>Success!</strong> Your message have been sent.
</div>

</fieldset>
</form>
</section>
</body>
<?php include('includes/footer.php'); ?>