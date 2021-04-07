<section id="side-bar">
        <ul class="left-ul">
            <li>
                <a href="">
                    <span class="profile-img-span"><img src="assets/img/<?php echo ($_SESSION["user_image"]); ?>" class="profile-img"  class="img-fluid"alt="">
                </span>
                </a>
            </li>
            <li><a href=""><?php echo ucfirst($_SESSION["user_name"]);?><span class="cool-hoover"></span></a></li>
            <li><a href="update_name.php">Change name <span class="cool-hoover"></span></a></li>
            <li><a href="change_password.php">Change password <span class="cool-hoover"></span></a></li>
            <li><a href="change_image.php">Change photo <span class="cool-hoover"></span></a></li>
            <li><a href="choose_chat.php">Chat with <span class="cool-hoover"></span></a></li>
            <li><a href="index.php">indexi <span class="cool-hoover"></span></a></li>
            <li><a href="">2 user online<span class="cool-hoover"></span></a></li>
            <li><a href="logout.php">logout<span class="cool-hoover"></span></a></li>
        </ul>

    </section>