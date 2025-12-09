<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Registration Form</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
  <div class="container">
    <h1>Online Registration Form</h1>

    <form id="regForm">
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="tel" name="phone" placeholder="Phone" required>
      <input type="text" name="course" placeholder="Course Applying For" required>
      <select name="gender" required>
        <option value="">Select Gender</option>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
      </select>
      <button type="submit">Register Now</button>
    </form>

    <div id="result"></div>
  </div>

  <script>
  $(document).ready(function(){
    $("#regForm").submit(function(e){
      e.preventDefault();
      $.ajax({
        url: 'success.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function(res){
          $("#result").html(res).slideDown();
          $("#regForm")[0].reset();
        }
      });
    });
  });
  </script>
</body>
</html>