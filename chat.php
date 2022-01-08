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

    <section class="chat-area">

      <header>

        <?php

        include_once "php/config.php";

        $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);

        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");

        if (mysqli_num_rows($sql) > 0) {

          $row = mysqli_fetch_assoc($sql);

        }

        ?>

        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>

        <img src="php/image/<?php echo $row['img'] ?>" alt="">

        <div class="details">

          <span><?php echo $row['fname'] . " ". $row['lname'] ?></span>

          <p>
            <?php echo $row['status'] ?>
          </p>

        </div>

      </header>

      <div class="chat-box"></div>

      <form action="#" autocomplete="off" class="typing-area">

        <input type="hidden" name="outgoing_id" value="<?php echo $unique_id; ?>">
        <input type="hidden" name="incoming_id" value="<?php echo $user_id; ?>" >

        <input class="input-field" type="text" name="massage" placeholder="Massage Here" />

        <button><i class="fab fa-telegram-plane"></i></button>

      </form>

    </section>

  </div>

<script src="javascript/chat.js"></script>

</body>

</html>