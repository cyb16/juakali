<?php require_once "../php/_sessions.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Juakali - Register</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body class="bg-light">
    <div class="container">
      <div class="py-5 text-center">
        <h2>Juakali <label class="text-muted">Registration</label></h2>
        <p class="lead">Please fill in the details below to begin your registration</p>
      </div>

      <div class="row">

          <?php include "../php/_alerts.php"; ?>
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <h4 class="mb-3">Personal Information</h4>
          <form class="needs-validation" method="post" action="../php/algorithm/register.php" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" name="fname" placeholder="" value="" required>
                <small class="feedback">
                </small>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" name="lname" placeholder="" value="" required>
                <small class="feedback">
                </small>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Date of birth</label>
              <input type="date" class="form-control " id="date" name="dob" placeholder="you@example.com">
              <small class="feedback">
              </small>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control " id="email" name="email" placeholder="you@example.com">
              <small class="feedback">
              </small>
            </div>

              <div class="mb-3">
                  <label for="address">Phone:</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="+255 789 123 456" required>
                  <small class="feedback">
                  </small>
              </div>


            <h4 class="mb-3">Login Details</h4>
            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                <small class="feedback" style="width: 100%;">
                </small>
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Password:</label>
              <input type="text" class="form-control" id="password" name="password" placeholder="Password" required>
              <small class="feedback">
              </small>
            </div>

            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="agreement" name="agreement" required>
              <label class="custom-control-label" for="agreement">I agree with the terms and conditions</label>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        </div>
        <div class="col-md-2"></div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
      <a href="../index.php" class="mt-5 mb-3">Already have an account?</a>
        <p class="mb-1">&copy; 2023. All rights reserved</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
