<?php
session_start();
require_once("./components/head.php");
$sortArr = ['New Releases', 'Top Commented', 'Top Selling', 'Favorite Books'];
$isLoggedin = isset($_SESSION['user']);
$btn_text = $isLoggedin ? "Logout" : "Login";
$btn_href = $isLoggedin ? "./includes/logout.php" : "./login.php";
?>

<body>
  <?php require_once("./components/navbar.php"); ?>

  <?php if ($isLoggedin) : ?>
    <h1>Hello user!</h1>
  <?php else : ?>
    <main class="container px-3">
      <input class="input-form p-2 mt-4" type="text" placeholder="Search book...">
      <button class="btn-search ms-2" name="search" type="submit">
        <i class="icofont-search-1"></i>
      </button>

      <div class="mt-5">
        <h1 class="mb-1">SORT BY</h1>
        <div class="category-container">
          <?php for ($i = 0; $i < count($sortArr); $i++) : ?>
            <span class="category-list mt-2 me-3"><?= $sortArr[$i] ?></span>
          <?php endfor; ?>
        </div>
      </div>

      <div class="row my-3">
        <div class="col-lg-4 col-sm-4">
          <img width="fit-content" src="https://picsum.photos/200/300">
        </div>
        <div class="col-lg-4 col-sm-4">
          <img width="fit-content" src="https://picsum.photos/200/300">
        </div>
        <div class="col-lg-4 col-sm-4 ">
          <img width="fit-content" src="https://picsum.photos/200/300">
        </div>
      </div>

      <div class="row my-3">
        <div class="col-lg-4 col-sm-4">
          <img src="https://picsum.photos/200/300">
        </div>
        <div class="col-lg-4 col-sm-4">
          <img src="https://picsum.photos/200/300">
        </div>
        <div class="col-lg-4 col-sm-4">
          <img src="https://picsum.photos/200/300">
        </div>
      </div>

    </main>
  <?php endif; ?>

  <?php require_once("./components/footer.php") ?>
</body>

</html>