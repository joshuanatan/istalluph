
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Upload file here</h4>
            </div>
            <div class="content">
                <form id="upload" action="dashboard/functionUploadFiles.php" method="POST" enctype="multipart/form-data">

                    <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />

                    <div class="form-group">
                        <label class="control-label" for="description">Description:</label>
                        <input type="text" name="description" class="form-control" placeholder="enter name" />
                    </div>
                    
                    <div class="form-group">   
                        <label for="file">Files to upload:</label>
                        <!--<input type="file" id="fileselect" name="fileselect[]" multiple="multiple" />-->
                        <input type="file" name="file" class="form-control" />
                        <div id="filedrag">or drop files here</div>
                    </div>
                    
                    <div class="form-group">   
                        <input type="submit" name="btn_insert" class="btn btn-success " value="Submit">
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </div>
                    
                   <!-- <div id="submitbutton">
                        <input type="submit" name="btn_insert">Upload Files</button>
                    </div>-->
                </form>
                <br>
            </div>
        </div>
    </div>
</div>