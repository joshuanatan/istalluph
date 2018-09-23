<?php


try{
    include("connection.php");
//    echo "lulus";
    $id = $_SESSION["id"];
    $sql = "select * from member where id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i',$id);
//    echo $id." ";

    $stmt->execute();
    $result = $stmt->get_result();
    if($row = $result->fetch_assoc()){
        $name   = $row['nama'];
        $email  = $row['email'];
        $pass   = $row['pass'];
        $line   = $row['line'];
        $hp     = $row['nohp'];
        $major  = $row['jurusan'];
    }
}
catch (PDOException $exception){
    echo "Error: " . $exception->getMessage();
}
?>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Edit Profile</h4>
            </div>
            <div class="content">
                <form class="form-horizontal" method="post" action="dashboard/functionEditProfile.php">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-10"> 
                            <input type="password" class="form-control" id="pwd" name="pass" value="<?php echo $pass;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="line">Line:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="line" name="line" value="<?php echo $line;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="hp">Handphone:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="hp" name="hp" value="<?php echo $hp;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="major">Major:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="major" name="major" value="<?php echo $major;?>">
                        </div>
                    </div>
                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>