<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <title>login form</title>
  </head>
  <body>
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
        <p class="submit">
          <input type="submit" value="Login" />
        </p>
      </form>
    </div>
  </body>
</html>