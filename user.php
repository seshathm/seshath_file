
<html>
    <head>
        <title>User Information</title>
        <link rel="icon" href="image/vecteezy_abstract-circle-logo-icon_12986755.png">
        <link rel="stylesheet" href="style3page.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body >
        </nav>
        <nav>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Home</a>
            <a href="registrationform.php">Form</a>
            <a href="user.php">Table</a>
        </div>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

        <script>
            function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            }
        </script>
            <h1>Registered User Information</h1>
        </nav>
        <center>
            <div class="successfully">
                <?php 
                    session_start();
                    if (isset($_SESSION["success"])) {
                    echo "<span style='color: #ffffff !important;'>". $_SESSION["success"] ."</span>";}
                    session_unset();
                ?>
            </div>
        </center>               
        <div class="box">
        <table>
            <tr>
                <td><b>Name</b></td>
                <td><b>Mobile</b></td>
                <td><b>Email</b></td>
                <td><b>DOB</b></td>
                <td><b>Gender</b></td>
                
            <tr>
                <?php
                    $servername = "localhost";
                    $username = "seshath";
                    $password = "S3sh@th*7";
                    $dbname = "project";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password,$dbname);
                    $select = "SELECT * from user";
                    $result = mysqli_query($conn, $select) or die(mysqli_error($con));
                    while($rows=mysqli_fetch_array($result)){ 
                ?>
            <tr>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['mobile']; ?></td>
                <td><?php echo $rows['email']; ?></td>
                <td><?php echo $rows['age']; ?></td>
                <td><?php echo $rows['gender']; ?></td>
                
            </tr>
                <?php } ?>
        </table>
        </div>
</body>
<footer>
        <div class="footer">
            <center>
                <h1>Contact Me</h1> 
            <div class="icon">
                <a href="https://www.instagram.com/seshath.m?igsh=MXU4N2RtcnZlenlqbg=="><i class='bx bxl-instagram'></i></a>
                <a href="https://youtube.com/@seszhath?si=Kv1ja1iFx2peFqNV"><i class='bx bxl-youtube'></i></a>
                <a href="mailto:seeszheart@gmail.com"><i class='bx bxl-gmail'></i></a>
            </div>
            <h4>Copyright © 2024 Created by Seshath</h4>
            </center>
        </div>
    </footer>
</html>