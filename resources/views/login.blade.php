<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <title>login form</title>
  </head>
  <body>
    @if (session('flash_message'))
        <div class="flash_message">
            <script type="text/javascript"> alert("ログインに失敗しました。\nIDとパスワードを確認してください。"); </script>
        </div>
    @endif
    <div id="form">
      <p class="form-title">Login</p>
      <form method="POST" action="login">
        @csrf
        <p>ID</p>
        <p class="mail">
          <input type="text" name="user_id" />
        </p>
        <p>Password</p>
        <p class="pass">
          <input type="password" name="password" />
        </p>
        <p class="back">
            <button type="button" onclick="location.href='./top'">戻る</button>
        </p>
        <p class="submit">
          <input type="submit" value="Login" />
        </p>
      </form>
    </div>
  </body>
</html>
