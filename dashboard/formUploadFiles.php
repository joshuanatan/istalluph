
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Upload file here</h4>
            </div>
            <div class="content">
                <form id="upload" action="dashboard/functionUploadFiles.php" method="POST" enctype="multipart/form-data">

                    <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />

                    <div>
                        <label for="fileselect">Files to upload:</label>
                        <input type="file" id="fileselect" name="Filedata" multiple="multiple" />
                        <div id="filedrag">or drop files here</div>
                    </div>

                    <div id="submitbutton">
                        <button type="submit">Upload Files</button>
                    </div>
                    <div>
                        <textarea name = "deskripsi" style ="resize:none; width: 100%;" rows= 5 placeholder = "More Description Here"></textarea>
                    </div>
                    <Br>
                    <div>
                        <label for="fileselect">Dateline</label>
                        <input type = "date" style = "width: 42%; display: inline-block" name = "dateLine" placeholder = "DateLine">
                        &nbsp;
                        <label for="fileselect">Estimated Time</label>
                        <input type = "time" style = "width: 42%; display:inline-block" name = "jam">
                    </div>
                    <br>
                    <div>
                        <input type = "submit" value = "PRINT IT!" style = "width: 100%; height: 30%; background-color:none";>
                    </div>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>