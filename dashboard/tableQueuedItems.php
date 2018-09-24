
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Ordered Projects</h4>
            </div>
            <div class="content">
                <div>
                    <br/>
                    <table class = "table table-hover" id = "project-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Submited Date</th>
                                <th>Dateline</th>
                                <th>File Name</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "select id, tglSubmit, tglDateline, namaFile, status from project where idMember = ".$_SESSION["idistall"];
                            
                            $result = $conn->query($sql);
                            
                            while($row = $result->fetch_assoc()){
                                echo "<tr>";
                                echo "<th>"; echo $row["id"]; echo "</th>";
                                echo "<th>"; echo $row["tglSubmit"]; echo "</th>";
                                echo "<th>"; echo $row["tglDateline"]; echo "</th>";
                                echo "<th>"; echo $row["namaFile"]; echo "</th>";
                                echo "<th>"; if($row["status"] == 1) echo "Queued"; else echo "Working"; echo "</th>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <br>
                <div class="footer">
                    <div class="chart-legend">
                        <?php if(!empty($_SESSION["id"])) echo "<i class='fa fa-circle text-info'></i><a href = '#'>Add Assignment</a>";?>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>