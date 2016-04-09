<?php 
    include "header.php"; 
?>
                
<main class="page-main">

    <section class="section sec-signup">
        
        <div class="row row-center">

            <div class="span-6 columns">

                <div class="form-wrapper">

                    <h4 class="form-heading">Sign Up</h4>
                  
                    <form name="signup" method="post" action="signup_process.php">
                        
                        <ul class="form-lists">

                            <li class="span-8">
                                <div class="input-wrapper">
                                    <span class="label-span">Username</span>
                                    <input class="input" type="text" value="" name="username" required>
                                </div>
                            </li>

                            <li class="span-8">
                                <div class="input-wrapper">
                                    <span class="label-span">Email</span>
                                    <input class="input" type="text" value="" name="email" required>
                                </div>
                            </li>

                            <li class="span-8">
                                <div class="input-wrapper">
                                    <span class="label-span">Password</span>
                                    <input class="input" name="password" required></input>
                                </div>                              
                            </li>

                            <li>
                                <div class="input-wrapper">
                                    <input type="submit" class="btn" name="submit" value="Sign Up">
                                </div>                              
                            </li>

                        </ul>

                    </form>  

                </div>
                
            </div>

            <div class="span-8 columns">
                <span class="sec-signup-already">Already had an account? <a href="login_in.php">Log In</a></span>
            </div>

        </div>

    </section><!-- end of sec-signup -->

</main><!-- end of page-main -->

<?php include "footer.php"; ?>