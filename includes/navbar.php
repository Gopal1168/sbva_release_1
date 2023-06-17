                <div class="row ml-0 mr-0">
                <div class="col-md-12 pl-0 pr-0">
                <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="https://sagarbansal.com/sbva"><font face="lato black" color=red><b>SBVA</b></font></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="reset.php">Reset</a></li>
                        <li><a href="contact.php">Contact</a></li>                   
                    </ul>
                      <div class="navbar-header" style="float:right">
                        <?php 
                            if(isset($_SESSION['login']) && $_SESSION['login']=='true'){
                        ?>
                        <a class="navbar-brand" href="#">Welcome Back</a>
                          <a style="margin-top: 7px;" href="logout.php" class="btn btn-danger">Log Out</a>
                          <?php } else { ?>
                        <a style="margin-top: 7px;" class="btn btn-success" href="login.php">Login</a>
                        <?php } ?>  
                    </div>
                  </div>
                </nav>
            </div>
        </div>