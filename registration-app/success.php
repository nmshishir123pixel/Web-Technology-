<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name   = htmlspecialchars($_POST['name']);
  $email  = htmlspecialchars($_POST['email']);
  $phone  = htmlspecialchars($_POST['phone']);
  $course = htmlspecialchars($_POST['course']);
  $gender = htmlspecialchars($_POST['gender']);
?>
  <h2>Registration Successful!</h2>
  <hr>
  <p><strong>Name:</strong> <?= $name ?></p>
  <p><strong>Email:</strong> <?= $email ?></p>
  <p><strong>Phone:</strong> <?= $phone ?></p>
  <p><strong>Course:</strong> <?= $course ?></p>
  <p><strong>Gender:</strong> <?= $gender ?></p>
  <p style="margin-top:20px;color:green;font-weight:bold;">
    Thank you for registering! We'll contact you soon.
  </p>
<?php } ?>