<?php

session_start();

if (isset($_SESSION['unique_id'])) {
  
  header("location: users.php");
  
}

?>

<?php include_once "header.php"; ?>

<body>

  <div class="wrapper col-11 col-sm-11  col-md-6  col-lg-6 col-xl-3" style="margin-top: 27%;">

    <section class="form login">
      
      <header class="text-center">
        Tele Chat
      </header>

      <p class="text-center sing-in-txt">
        SING IN
      </p>

      <form action="#">

        <div class="error-text text-center">
          
        </div>

        <div class="field input">

          <label>Email Address</label>

          <input name="email" type="text" placeholder="example@gmail.com" />

        </div>

        <div class="field input">

          <label>Password</label>

          <input type="password" name="password" placeholder="Password" />
        
          <i class="fas fa-eye"></i>

        </div>

        <div class="field button">

          <input type="button" value="Continue To Chat" />

        </div>

      </form>

      <div class="link text-center">
        Not Yet Singed Up? <a href="index.php">Sing Up</a>
      </div>

    </section>

  </div>

  <script src="javascript/pass-show-hide.js" type="text/javascript" charset="utf-8"></script>
  <script src="javascript/login.js" type="text/javascript" charset="utf-8"></script>

</body>

</html>