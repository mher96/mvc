<div class="container">
  <form method="POST" action="/welcome/reg/">
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="text" class="form-control" id="email" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pass">
    </div>
    <div class="form-group">
      <label for="pwd">Conf Password:</label>
      <input type="password" class="form-control" id="pwd" name="cpass">
    </div>
    <button type="submit" class="btn btn-default" name="reg">Submit</button>
  </form>
  <span><?php echo $this->var; ?></span>
</div>