<style>
    *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    .form-login{
        height: 70%;
    background-color: #f0f2f5;
    overflow: hidden;
    box-shadow: 5px 5px 10px #ccc;
    }
    form{
        margin-left: 500px;
        width: 500px;
        height: 300px;
    text-align: center;
    }
.button {
    margin-top: 10px;
    width: 250px;
    height: 50px;
   background-color: green;
   border: none;
   border-radius: 30px;
   color:aliceblue
}
.button:hover{
    background-color: greenyellow;
    color: #000;
}
input[type=text],input[type=password]{
    padding: 0 12px;
    font-weight: 100;
    margin: 6px 0;
    width: 364px;
    height: 51px;
    border-radius: 5px;
    border: 1px solid #ccc;
}
</style>
<?php
if(!empty($_SESSION['msg'])) {echo $_SESSION['msg'];unset($_SESSION['msg']);}
?>
<div class="form-login">
<form action="<?php echo BASE_URL?>auth/adminLogin/" method=post>
  <div class="username">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input placeholder="Username" type="text" name=inputUsername class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input placeholder="Password" type="password" name= inputPassword  class="form-control" required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label  for="exampleCheck1">Remember me</label>
  </div>
  <button type="submit" name='login' value="Login" class="button">Login</button>
</form>
</div>


