
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Registration</title>
  </head>
  <body class="gradient">
    <header>
      <section class="navbar flex-box-column">
        <div class="fillerline"></div>
        <div class="navbar-tooltip">
          <ul class="navbar-nav">
            <li>
              <a href="./registration.html">Registration</a>
            </li>
            <li>
              <a href="./log-in.html">Log In</a>
            </li>
          </ul>
        </div>
        <div class="navbar-brand">
          <a href="./index.html">
            <img src="./images/site-logo.png" alt="site-logo" />
          </a>
        </div>
        <div class="fillerline background-color-white"></div>
      </section>
    </header>
    <main class="gradient">
      <section class="card registration flex-box-column">
        <h1>Registration Form</h1>
        <form action="./registration-post.php" method="POST">
          <div class="card-item-container card-item-container-registration">
            <div class="card-item card-item-registration flex-box-column">
              <label>First Name</label>
              <input
                type="text"
                name="firstName"
                id="firstName"
                placeholder="Your name..."
              />
            </div>
            <div class="card-item card-item-registration flex-box-column">
              <label>Last Name</label>
              <input
                type="text"
                name="lastName"
                placeholder="Your last name..."
              />
            </div>
          </div>
          <div class="card-item-container card-item-container-registration">
            <div class="card-item card-item-registration flex-box-column">
              <label>Birthday</label>
              <input type="date" id="birthday" name="birthday" />
            </div>

            <div class="card-item card-item-registration flex-box-column">
              <label>Gender</label>
              <div class="radio-container">
                <label class="radio-item">
                  <input type="radio" id="male"  name="gender" checked="checked" />
                  Male
                </label>
                <label class="radio-item">
                  <input type="radio" id="female"  name="gender" />
                  Female
                </label>
              </div>
            </div>
          </div>

          <div class="card-item-container card-item-container-registration">
            <div class="card-item card-item-registration flex-box-column">
              <label>Email</label
              ><input type="text" id="email" name="email" placeholder="Your Email..." />
            </div>
            <div class="card-item card-item-registration flex-box-column">
              <label>Phone Number</label
              ><input type="text" id="phoneNumber" name="phoneNumber" placeholder="Your phone number..." />
            </div>
          </div>
          <div class="card-item-container card-item-container-registration">
            <div class="card-item card-item-registration flex-box-column">
              <label for="">IC Number</label
              ><input type="text" id="ic" name="ic" placeholder="Your IC Number..." />
            </div>
            <div class="card-item card-item-registration flex-box-column">
              <label for="">password</label
              ><input type="text" id="pass" name="pass"  placeholder="Your password..." />
            </div>
          </div>
        <button type="submit" class="">Sign Up</button>

        </form>
      </section>
    </main>
    <footer></footer>
  </body>
  <script></script>
</html>
