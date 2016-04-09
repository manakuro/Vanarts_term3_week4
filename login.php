<?php 
    include "header.php";
?>
                
<main class="page-main">

    <section class="section sec-signup">

        <div class="row row-center">

            <?php if (!empty($_SESSION['is_login_error'])): ?>
                <div class="span-6 columns">
                    <p class="error-msg">Username or Password is wrong. Please try again.</p>
                </div>
            <?php endif; ?>

            <?php if (!empty($_SESSION['is_signup_success'])): ?>
                <div class="span-6 columns">
                    <p class="success-msg">Sing Up Successful!</p>
                </div>
            <?php endif; ?>

            <div class="span-6 columns">

                <div class="form-wrapper">

                    <h4 class="form-heading">Log In</h4>
                  
                    <form name="signup" method="post" action="login_process.php">
                        
                        <ul class="form-lists">

                            <li class="span-8">
                                <div class="input-wrapper">
                                    <span class="label-span">Username</span>
                                    <input class="input" type="text" value="" name="username" required>
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
                                    <input type="submit" class="btn" name="submit" value="Log In">
                                </div>                              
                            </li>

                        </ul>

                    </form>  

                </div>
                
            </div>

            <div class="span-8 columns">
                <span class="sec-signup-already">Not have an account yet? <a href="signup.php">Sign In</a></span>
            </div>

        </div>

    </section><!-- end of sec-signup -->

</main><!-- end of page-main -->

<?php include "footer.php"; ?>