<br>        
<form class="login100-form validate-form" id = "directprint-container">
    <span class="login100-form-title p-b-43">
        Print without account
    </span>				
    <div class="wrap-input100" data-validate = "Valid email is required: ex@abc.xyz">
        <input class="input100" type="number" name="nohp">
        <span class="focus-input100"></span>
        <span class="label-input100">Mobile Number</span>
    </div>
    <div class="wrap-input100" data-validate = "Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="line">
        <span class="focus-input100"></span>
        <span class="label-input100">LINE</span>
    </div>

    <div class="wrap-input100" data-validate = "Valid email is required: ex@abc.xyz" style = "border:none">
        <input class="input100" type="file" name="email">
        <span class="focus-input100"></span>
    </div>

    <div class="flex-sb-m w-full p-t-3 p-b-32">

        <div>
            <a href="#" class="txt1" onclick="goSignIn()">
                Sign In
            </a>
        </div>
    </div>


    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
            Direct Print
        </button>
    </div>

    <div class="text-center p-t-46 p-b-20">
        <span class="txt2">
            or <span onclick="goSignUp()" class = "pointer-style">sign up</span> if you don't have an account
        </span>
    </div>

</form>