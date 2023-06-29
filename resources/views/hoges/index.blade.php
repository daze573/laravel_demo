<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <h2 class="mt-5">システムへのご意見をお聞かせください</h2>
      <div class="form-group mt-5">
        <form method="post" action="/send">
          {{ csrf_field() }}
          <div class="d-flex">
            <label name="name" class="w-50">氏名<span class="text-danger">※</span></label>
            <input type="text" name="title" class="form-control"/>
          </div>
          <div class="mt-3">
            <label name="gender" style="width: 35%;">性別<span class="text-danger">※</span></label>
            <input type="radio" name="gender" value="男性" style="transform:scale(3.0)">　男性　
            <input type="radio" name="gender" value="女性" style="transform:scale(3.0)">　女性　
          </div>
          <div class="select-form d-flex mt-3">
            <label name="ages" class="w-50">年代<span class="text-danger">※</span></label>
            <select name="ages" class="form-select">
              <option>10代以下</option>
              <option>20代</option>
              <option>30代</option>
              <option>40代</option>
              <option>50代</option>
              <option>60代以上</option>
            </select>
          </div>
          <div class="email-form d-flex mt-3">
            <label name="email" class="w-50">メールアドレス<span class="text-danger">※</span></label>
            <input name="email" type="email" class="form-control">
          </div>
          <div class="email_send_availability d-flex mt-3">
            <label name="email_send" style="width: 35%;">メール送信可否　</label>
            <div>
              <p>登録したメールアドレスにメールマガジンをお送りしてもよろしいですか？</p>
              <input name="email_send" type="checkbox" style="transform:scale(3.0)">　送信を許可します
            </div>
          </div>
          <div class="opinion-form d-flex mt-3">
            <label name="opinion" class="w-50">ご意見　</label>
            <textarea type="text" class="form-control" rows="10" name="body"></textarea>
          </div>
          <div class="col-2 mx-auto mt-5">
            <input type="submit" value="確認" class="btn-lg"/>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>