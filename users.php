<?php

session_start();
$unique_id = $_SESSION['unique_id'];

if (!isset($unique_id)) {

  header("location: login.php");

}

?>

<?php include_once "header.php"; ?>

<body style="background: #bcbcbc;">

  <div class="wrapper col-11 col-sm-11  col-md-6  col-lg-6 col-xl-3" style="margin-top: 5%;">

    <div class="telechat text-center">
      Tele Chat
    </div>

    <section class="users">

      <header>

        <?php

        include_once "php/config.php";

        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$unique_id}");

        if (mysqli_num_rows($sql) > 0) {

          $row = mysqli_fetch_assoc($sql);

        }

        ?>

        <div class="content">

          <img src="php/image/<?php echo $row['img'] ?>" alt="">

          <div class="details">

            <span><?php echo $row['fname'] . " ". $row['lname'] ?></span>

            <p>
              <?php echo $row['status'] ?>
            </p>

          </div>

        </div>

        <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" style="margin-bottom: 13px;" class="btn btn-sm btn-dark">Logout</a>

      </header>

      <div class="search">

        <span style="color: #5f5f5f; font-size: 17px; padding-left: 25px" class="text">Select an user to start chat</span>

        <input type="text" placeholder="Enter Name To Search" />

        <button><i class="fas fa-search"></i></button>

      </div>

      <div class="users-list">

      </div>

    </section>

  </div>

  <script src="javascript/users.js" type="text/javascript" charset="utf-8"></script>

</body>

</html>