<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ChitChat Login</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
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
            <form
              action="#"
              method="POST"
              enctype="multipart/form-data"
              autocomplete="off"
            >
              <div class="field input">
                <label for="email">Email Address</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="Enter your email"
                  required
                />
              </div>
              <div class="field input">
                <label for="password">Password</label>
                <input
                  type="password"
                  id="password"
                  name="password"
                  placeholder="Enter your password"
                  required
                />
                <i class="fas fa-eye" id="togglePassword"></i>
              </div>
              <div class="field button">
                <input type="submit" name="submit" value="Continue to Chat" />
              </div>
            </form>
            <div class="link">
              New to ChitChat? <a href="login.php">signup now</a>
            </div>
          </section>
        </div>
      </div>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
  </body>
</html>
