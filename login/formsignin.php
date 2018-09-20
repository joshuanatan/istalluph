<form class="login100-form" id = "signin-container" method="post" action= "functionSignIn.php">
    <span class="login100-form-title p-b-43">
        Login to your iStall Account
    </span>


    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-12">
          <input type="email" class="form-control" id="email" placeholder="Enter email" name = "email" style = "height: 50px;">
        </div>
      </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Password:</label>
        <div class="col-sm-12">
          <input type="password" class="form-control" id="pass" placeholder="Enter Password" name = "pass" style = "height: 50px;">
        </div>
      </div>
    
    <div class="flex-sb-m w-full p-t-3 p-b-32">
        <div>
            <a href="#" class="txt1" onclick="goDirectPrint()">
                Continue Without Account
            </a>
        </div>
    </div>


    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
            Login
        </button>
    </div>


    <div class="text-center p-t-46 p-b-20">
        <span class="txt2">
            or <span onclick="goSignUp()" class = "pointer-style">sign up</span> if you don't have an account
        </span>
    </div>

</form>