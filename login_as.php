<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="bootstrap.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/custom.js"></script>
  <script>
    $(document).ready(function() {
      $('#search-btn').click(function() {
        var role = $('#role').val();
        if (role === 'Admin') {
          window.location.href = './Admin/login.php';
        } else if (role === 'Teacher') {
          window.location.href = './teacher/login.php';
        } else if (role === 'Student') {
          window.location.href = './students/login.php';
        }
      });
    });
  </script>
  <style>
    body{
    min-height: 100vh;
    font-family: monospace;
    background-image: 
        linear-gradient( 
            to bottom right, darkred, #F5F5F5);
    margin: 0;
}
.container{
    background-color:#F5F5F5;
    width: 400px;
    max-width:  100%;
    margin: 50px auto 0;
    border-radius: 10px;
}
h1 {
  font-size: 50px;
  text-align: center;
}

  </style>
</head>
<body class="jumbotron">
  <h1 class="mt-5">Login</h1>
  <div class="container py-2">
    <div class="row mx-2 py-2">
      <form class="filter">
        <div class="form-group mt-2">
          <label>Login As:</label><br>
          <select id="role" class="form-control" required>
            <option value="">Select Role</option>
            <option value="Admin">Admin</option>
            <option value="Teacher">Teacher</option>
            <option value="Student">Student</option>
          </select>
        </div>
        <div class="form-group offset-md-3 mt-4">
          <button type="button" id="search-btn" class="btn btn-success">Submit</button>
          <a class="btn btn-danger btn mx-3" href="index.php">Back</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
