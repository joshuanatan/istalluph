<!doctype html>
<?php session_start(); 
//if(empty($_SESSION["idistall"])) header("location:login/index.php");
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="stylesheet" type="text/css" media="all" href="css/filedrag.css" />
        <link rel = "stylesheet" href="plugin/datatables/datatables.min.css">
        <title>Welcome!</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        
        <!-- Bootstrap core CSS     -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        
        <!-- Animation library for notifications   -->
        <link href="css/animate.min.css" rel="stylesheet"/>

        <!--  Paper Dashboard core CSS    -->
        <link href="css/paper-dashboard.css" rel="stylesheet"/>

        <!--  Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link href="css/themify-icons.css" rel="stylesheet">

    </head>
    <style>
        table, td, th {    
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 15px;
        }
    </style>
    <body>
        <?php include("../connection.php");?>
        <div class="content">
        <div class="container-fluid">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Tanggal Upload</th>
                    <th>Jam Upload</th>
                    <th>File</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from fileupload"; //harusnya pake where id_customer = $id
                $stmt=$conn->prepare($sql); //sql select query
                //$stmt->bind_param('s', $id_customer);
                $stmt->execute();
                $result = $stmt->get_result();
                while($row=$result->fetch_assoc())
                {
                ?>
                <tr>
                    <td><?php echo $row['id_customer']; ?></td>
                    <td><?php echo $row['tanggal_upload']; ?></td>
                    <td><?php echo $row['jam_upload']; ?></td>
                    <td>
                        <?php 
                        $files_field = $row['fileupload'];
                        $files_show= "../upload/$files_field";
                        echo "<a href='$files_show' target='_blank'>$files_field</a>";
                        ?>
                    </td>
                    <td><?php echo $row['description']; ?></td>
                    <td><a href="edit.php?update_id=<?php echo $row['id_customer']; ?>" class="btn btn-warning">Edit</a></td>
                    <td><a href="?delete_id=<?php echo $row['id_customer']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        </div>
        </div>
 

    </body>
    <script src = "plugin/datatables/datatables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#project-table').DataTable();
        } );
    </script>
    <script src="js/filedrag.js"></script>
</html>