<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ChitChat Signup</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>
  <div class="container">
    <div class="left">
      <h1 class="title">ChitChat</h1>
      <p class="subtitle">
        Connect with friends and the world around you on ChitChat.
      </p>
    </div>
    <div class="right">
      <div class="wrapper">
        <section class="form signup">
          <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="name-details">
              <div class="field input">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" placeholder="First name" required />
              </div>
              <div class="field input">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" placeholder="Last name" required />
              </div>
            </div>
            <div class="field input">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" placeholder="Enter your email" required />
            </div>
            <div class="field input">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" placeholder="Enter new password" required />
              <i class="fas fa-eye" id="togglePassword"></i>
            </div>
            <div class="field image">
              <label for="avatar" style="
                    display: block !important;
                    margin-bottom: 5px !important;
                  ">Set your avatar:</label>
              <input type="file" id="avatar" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required
                style="
                    border: 1px solid #ccc !important;
                    padding: 5px !important;
                  " />
            </div>
            <div class="field button">
              <input type="submit" name="submit" value="Continue to Chat" />
            </div>
          </form>
          <div class="link">
            Already signed up? <a href="login.php">Login now</a>
          </div>
        </section>
      </div>
    </div>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
</body>

</html>