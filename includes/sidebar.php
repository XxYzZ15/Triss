 <!-- Sidebar Widgets Column -->
<div class="col-md-4">
   
               
                <!-- Login -->
                <div class="well">
                    <h4>Login</h4>
                    <form action="includes/login.php" method="post">
                    
                    <div class="form_group">
                        <input name="username" type="text" class="form-control" placeholder="Enter Username">  
                    </div>
                    
                    <div class="input-group">
                        <input name="password" type="password" class="form-control" placeholder="Enter Password">
                        <span class="input-group-btn">        
                            <button class="btn btn-primary" type="submit" name="login">Submit</button>
                        </span>
                    </div>
                        
                    </form> 
                    
                    <form class="form-inline my-2 my-lg-0" action="form_signup.php" method="post">
    
                      <button class="btn btn-primary" type="btn_signup">Sign-Up</button>
                    </form>
                    
                </div>
                
                <!-- Side Widget Well -->
                <?php include "widget.php"; ?>

</div>