
<div class="container">
  <div><a style="float: right; font-size: 25px; background: #777;" href="http://mvc.dev/welcome/registration/">if you havn`t account</a></div>
  <form method="POST" action="/welcome/login/">
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="text" class="form-control" id="email" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pass">
    </div>
    <button type="submit" class="btn btn-default" name="login">Submit</button>
  </form>
  <h1><?php echo $this->var ?></h1>
</div>