<?php
session_start();

//Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) 
{
    echo "It looks like you're not logged in, please login.";
    header("location: ../group/login.php");
    exit;
}

include('../group/global/makeHeader.php');
echo makeHeader();
?>

<!-- Header and post button --> 
<body id="page-top" class="page forum">
    <?php include('../group/global/makeNav.php');
    echo makeNav();
    ?>
    <section class="forum_post">
        <div class="contasiner">
           
            <h2>Metro Gym Forum</h2>
            <p>Want to add to the discussion?</p>
                <!-- <input onclick="()" type = "button" class="btn btn-success" value="create post" name="create post"> --- Might use might not--> 
        </div>
    </section>
                    <!-- button for post trigger --> 
                    <button class="btn btn-success" data-toggle="modal" data-target="#myModalNorm">
                        Create post 
                    </button>

                    <!-- Code for post trigger --> 

                    <div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
                        aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <button type="button" class="close" 
                                    data-dismiss="modal">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">
                                        Modal title
                                    </h4>
                                </div>
                                
                                <!-- Modal Body -->
                                <div class="modal-body">
                                    
                                    <form role="form">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control"
                                        id="exampleInputEmail1" placeholder="Enter email"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control"
                                            id="exampleInputPassword1" placeholder="Password"/>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"/> Check me out
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                    </form>
                                    
                                    
                                </div>
                                
                                <!-- Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default"
                                            data-dismiss="modal">
                                                Close
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                        Save changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                
           
      
   
</body>    
<html>

    <?php
    include('../group/global/makeFooter.php');
    echo makeFooter();
    ?>
