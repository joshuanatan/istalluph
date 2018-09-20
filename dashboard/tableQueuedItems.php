
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
                                <th>Price</th>
                                <th>Payment Method</th>
                                <th>Payment Status</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        
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