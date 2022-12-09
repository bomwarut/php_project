<div class="container pt-5">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 mx-5">
            <h2>Form Login</h2>
            <form action="<?php echo site_url('register/showlogin');?>" method="post" class="form-horizontal">
                <div class="form-group row py-1 ">
                    <div class="col-sm-2 control-label">Username</div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="username" required placeholder="Username"> 
                    </div>
                </div>
                <div class="form-group row py-1">
                    <div class="col-sm-2 control-label">Password</div>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="password" required placeholder="Password"> 
                    </div>
                </div>    
                <div class="form-group row py-1">
                    <div class="col-sm-2 control-label"></div>
                    <div class="col-sm-5">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
</body>
</html>
