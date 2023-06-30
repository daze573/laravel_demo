<?php
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <h2 class="mb-5">内容確認</h2>
      <form method="post" action="/complete">
        <div class="row">
          <p class="col-1">氏名</p>
          <p class="col-10 offset-1"><?php echo $_POST['title'] ?></p>
        </div>
        <div class="row">
          <p class="col-1">性別</p>
          <p class="col-10 offset-1"><?php echo $_POST['gender'] ?></p>
        </div>
        <div class="row">
          <p class="col-1">年代</p>
          <p class="col-10 offset-1"><?php echo $_POST['ages'] ?></p>
        </div>
        <div class="row">
          <p class="col-1">メールアドレス</p>
          <p class="col-10 offset-1"><?php echo $_POST['email'] ?></p>
        </div>
        <div class="row">
          <p class="col-1">意見</p>
          <p class="col-10 offset-1"><?php echo $_POST['body'] ?></p>
        </div>
        <button type="submit"><a href="/index" class="text-dark">再入力</a></button>
        <input type="submit" value="送信">
      </form>
    </div>
  </body>
</html>