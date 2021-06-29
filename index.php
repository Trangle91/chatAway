<?php
    session_start();
    if(isset($_SESSION['unique_id']))
    {
        header("location: users.php");
    }

    // //Get Heroku ClearDB connection information
    // $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    // $cleardb_server = $cleardb_url["host"];
    // $cleardb_username = $cleardb_url["user"];
    // $cleardb_password = $cleardb_url["pass"];
    // $cleardb_db = substr($cleardb_url["path"],1);
    // $active_group = 'default';
    // $query_builder = TRUE;
    // // Connect to DB
    // $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

?>

<?php include_once "header.php"; ?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime chat app</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name= "fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name= "lname" placeholder="Last Name" required>
                    </div>
                </div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" name= "email" placeholder="Enter your email" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name= "password" placeholder="Enter your password" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image"> 
                        <label>Select Image</label>
                        <input type="file" name= "image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to chat">
                    </div>
                
            </form>
            <div class="link">Already signed up? <a href="login.php">Login Now</a></div>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>