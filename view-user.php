<?php
include 'includes/header.inc.php'

?>
<?php

// mysql connection
require_once 'includes/config.inc.php';

$qry = $con->query("SELECT * FROM users where usercode = ".$usercode)->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}


?>

    <div class="main_content">
        <div class="head">
            WELCOME <?php echo $username ?>
        </div>

       
        <div class="tasks_container">
            <header>View your details</header>

            <form action="edit-user.php">
                <div class="userform">
                    <div class="details personal">
                        <span class="title">Personal Details</span>

                        <div class="fields">
                        <ul>
                            <li>Usercode: <?php echo isset($usercode) ? $usercode : '' ?></li>
                            <li>ID Number: <?php echo isset($userid) ? $userid : '' ?></li>
                            <li>Username: <?php echo isset($username) ? $username : '' ?></li>
                            <li>First name: <?php echo isset($firstname) ? $firstname : '' ?></li>
                            <li>Last name: <?php echo isset($lastname) ? $lastname : '' ?></li>
                            <li>gender: <?php echo isset($gender) ? $gender : '' ?></li>
                            <li>Email: <?php echo isset($email) ? $email : '' ?></li>
                            <li>Department: <?php echo isset($department) ? $department : '' ?></li>
                            <li>Date Joined: <?php echo isset($date_created) ? $date_created : '' ?></li>
                        </ul>
                        </div>
                    </div>
                    <button class="sumbit">
                    <span class="btnText">Edit Details</span>
                    <i></i>
                </button>
            </form>

        </div> 
    </div>

</body>

</html>