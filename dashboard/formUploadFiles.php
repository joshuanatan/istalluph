
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Upload file here</h4>
            </div>
            <div class="content">
                <form id="upload" action="index.html" method="POST" enctype="multipart/form-data">

                    <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />

                    <div>
                        <label for="fileselect">Files to upload:</label>
                        <input type="file" id="fileselect" name="fileselect[]" multiple="multiple" />
                        <div id="filedrag">or drop files here</div>
                    </div>

                    <div id="submitbutton">
                        <button type="submit">Upload Files</button>
                    </div>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>