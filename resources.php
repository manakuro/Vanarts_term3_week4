<?php 
    include "header.php";

    if (empty($_SESSION['auth'])) {
        header('Location:login.php');
        exit;
    }

    $conn = connectDB();

    // Check to see if the user exists in table or not
    $userInfo = $_SESSION['user_info'];

    $query = " select * from resources where user_id = $userInfo[id]";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo $conn->error;
        exit;
    }

    $resources = $result;
?>

    
<main class="page-main">

    <section class="section sec-resources">
        
        <div class="row">
            
            <?php while($val = mysqli_fetch_assoc($result)) { ?>
                
                <div class="span-4 columns sec-resources-li">

                    <div class="span-5 columns">
                        
                        <div class="sec-resources-li-img">
                            <a href="<?php echo $val['src']; ?>"><img src="<?php echo $val['img']; ?>" alt="<?php echo $val['title']; ?>" ></a>
                        </div>

                    </div>

                    <div class="span-7 columns">
                        
                        <h5 class="sec-resources-li-title"><?php echo $val['title']; ?></h5>
                        <span class="sec-resources-li-author">by<?php echo $val['author']; ?></span>
                        <span class="sec-resources-li-released">Released: <?php echo $val['released']; ?></span>

                    </div>

                </div>
            <?php }  ?>

        </div>

    </section><!-- end of sec-resources -->

</main><!-- end of page-main -->

<?php include "footer.php"; ?>