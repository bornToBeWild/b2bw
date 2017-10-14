<?php include('includes/header.php'); ?>
<?php include('includes/home-social.php'); ?>


<body>
  
<img src="assets/pictures/background.jpg">
  <h1>Contact us</h1>
    <p>Please contact us for any information.</p><form method="post" action="process.php">
      <p>
        <label>Name</label><input type="text" name="name" id="name" required placeholder="your name"> 
      </p> 
      <p>
        <label>Email</label><input type="email" name="email" id="email" placeholder="your email address" required> 
      </p> 
      <p>
        <label for="message">Message</label> <br />
        <textarea name="message" id="message" rows="10" cols="50"></textarea>
      </p>
      <input type="submit" value="Submit">
      <p>For press relation please send us an email to <a href="press@b2bw.com"></a> press@b2bw.com</p>


</form>
</body>
<?php include('includes/footer.php'); ?>