<?php

session_start();

if (isset($_SESSION['unique_id'])) {
  
  header("location: users.php");
  
}

?>

<?php include_once "header.php"; ?>

<body>

  <div class="wrapper col-11 col-sm-11  col-md-6  col-lg-6 col-xl-3">

    <section class="form singup">
      
      <header class="text-center">
        Tele Chat
      </header>

      <p class="text-center sing-in-txt">
        SING IN
      </p>

      <form action="#" enctype="multipart/form-data">

        <div class="error-text text-center"></div>

        <div class="name-details">

          <div class="field input">

            <label>Frist Name</label>

            <input name="fname" type="text" placeholder="John" required />

          </div>

          <div class="field input">

            <label>Last Name</label>

            <input name="lname" type="text" placeholder="Paker" required/>

          </div>

        </div>

        <div class="field input">

          <label>Email Address</label>

          <input name="email" type="text" placeholder="example@gmail.com" required />

        </div>

        <div class="field input">

          <label>Password</label>

          <input name="password" type="password" placeholder="********" required />
          
          <i class="fas fa-eye"></i>

        </div>

        <div class="field image">

          <label>Select Profile Photo</label>

          <input name="image" type="file" required />

        </div>

        <div class="field button">

          <input type="button" value="Submit" />

        </div>

      </form>

      <div class="link text-center">
        Already Singed Up? <a href="login.php">Login Now</a>
      </div>

    </section>

  </div>

  <script src="javascript/pass-show-hide.js" type="text/javascript" charset="utf-8"></script>
  <script src="javascript/singup.js" type="text/javascript" charset="utf-8"></script>

</body>

</html>