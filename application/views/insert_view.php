<div class="container pt-5">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 mx-5">
            <h2>Form Insert Data</h2>
            <form action="<?php echo site_url('insertdata/adding');?>" method="post" class="form-horizontal">
                <div class="form-group row py-1">
                    <div class="col-sm-2 control-label">Name</div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="m_name" required placeholder="Name"> 
                    </div>
                </div>
                <div class="form-group row py-1">
                    <div class="col-sm-2 control-label">Lastname</div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="m_lname" required placeholder="Lastname"> 
                    </div>
                </div>
                <div class="form-group row py-1">
                    <div class="col-sm-2 control-label"></div>
                    <div class="col-sm-5">
                        <button type="submit" class="btn btn-primary">Insert</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
</body>
</html>
