<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6 bordered">
    <h3 class="text text-center">Create User</h3>
    <br>
    <form class="form-horizontal" action="index.php?action=insert_user" method="POST">
      <div class="form-group">
        <label class="control-label col-sm-3" for="username">Username:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="username" id="username" required placeholder="Enter your User Name">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="name">Name:</label>
        <div class="col-sm-9">
          <input type="text" name="name" class="form-control" id="name" required placeholder="Enter your Name">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="password">Password:</label>
        <div class="col-sm-9">
          <input type="password" name="password" class="form-control" required id="password" placeholder="*******">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="verify_password">Verify Password:</label>
        <div class="col-sm-9">
          <input type="password" name="verify_password" class="form-control" required id="verify_password" placeholder="*******">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-7 col-sm-10">
          <button type="submit" name="btn-addUser" class="btn btn-primary">Create Now</button>
          <a href="index.php?action=viewUser" class="btn btn-danger">Cancel</a>
        </div>
      </div>
    </form>
  </div>
  <div class="col-md-3"></div>
</div>
