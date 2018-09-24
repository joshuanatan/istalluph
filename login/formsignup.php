<form class=" form-horizontal login100-form" id = "signup-container" action="functionSignUp.php" method="post">
    <span class="login100-form-title p-b-43">
        Signup to continue
    </span>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Name:</label>
        <div class="col-sm-12" >
          <input type="text" class="form-control" id="name1" placeholder="Enter Name" name = "name" style = "height: 50px;" required>
        </div>
      </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-12">
          <input type="email" class="form-control" id="email1" placeholder="Enter email" name = "email" style = "height: 50px;" required>
        </div>
      </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Password:</label>
        <div class="col-sm-12">
          <input type="password" class="form-control" id="pass1" placeholder="Enter Password" name = "pass" style = "height: 50px;" required>
        </div>
      </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Line:</label>
        <div class="col-sm-12">
          <input type="text" class="form-control" id="line1" placeholder="Enter Line" name = "line" style = "height: 50px;" required>
        </div>
      </div>
    <div class="form-group">
        <label class="control-label col-sm-12" for="email">Mobile Number:</label>
        <div class="col-sm-12">
          <input type="number" min="0" class="form-control" id="mobile1" placeholder="Enter Mobile Number" name = "nohp" style = "height: 50px;" required>
        </div>
      </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Jurusan:</label>
        <div class="col-sm-12">
            <select name = "jurusan" style = "height: 50px; width:100%">
                <?php
                include("../connection.php");
                $sql = "select * from jurusan order by nama asc";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->get_result();
                while($row = $result->fetch_assoc()){ ?>
                    <option value = '<?php echo $row["id"]; ?>' class = "label-input100">&nbsp;&nbsp;&nbsp;<?php echo $row["nama"]; ?></option>
                <?php } ?>
                ?>
              
            </select>
        </div>
    </div>
    <div class="flex-sb-m w-full p-t-3 p-b-32">
        <div>
            <!--<a href="#" class="txt1" onclick="goDirectPrint()">
                Continue Without Account
            </a>-->
        </div>
    </div>


    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
            SIGN UP 
        </button>
    </div>
    <br>
    <div class="text-center p-t-46 p-b-20">
        <span class="txt2">
            or <span onclick="goSignIn()" class = "pointer-style">sign in</span>  if you have an account
        </span>
    </div>

</form>