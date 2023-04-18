<html>
    <head>
        <link rel="stylesheet" href="../../Assets/Stylesheets/table.css">
    </head>
    <body>
        <div class="content">
        <?php
        session_start();
        $dbsid=$_SESSION['sid'];
        $dbdob=$_SESSION['dob'];
        $conn=mysqli_connect("localhost","root","");
        if(!$conn)
        {
            echo "Failed to connect to database";
        }
        if(!mysqli_select_db($conn,'stud'))
        {
            die('Connected to Server Failed Database Connection');
        }
        $query2=mysqli_query($conn,"SELECT * FROM stud1 WHERE sid = '$dbsid' AND dob = '$dbdob'");
        while($row = mysqli_fetch_array($query2,MYSQLI_NUM))
        {?>
        <div class="logo">
            <img src="../../Assets/Images/LOGO.jpg">
        </div>
        <h1>Saintgits College Of Engineering</h1>
        <br>
        <a href="../../homepage.html" target="" class="previous">&laquo; Previous</a>
        <table class="styled-table">

            <tr>
                <th>Name Of Student</th>
                <td><?php echo $row[1]; ?></td>
                <th>Course</th>
                <td><?php echo $row[3]; ?></td>
            </tr>
            <tr>
                <th>Student ID</th>
                <td><?php echo $row[0]; ?></td>
                <th>Attendance Percentage</th>
                <td>....</td>
            </tr>
        </table>
        <br>
        <br>
        <table class="styled-table">
            <thead>
            <tr>
                <th>Subjects</th>
                <th>Marks</th>
                <th>Attendance %</th>
            </tr>
        </thead>
            <tr>
                <td>Subject1</td>
                <td><?php echo $row[4]; ?></td>
                <td><?php echo $row[9]; ?></td>
            </tr>
            <tr>
                <td>Subject2</td>
                <td><?php echo $row[5]; ?></td>
                <td><?php echo $row[10]; ?></td>
            </tr>
            <tr>
                <td>Subject3</td>
                <td><?php echo $row[6]; ?></td>
                <td><?php echo $row[11]; ?></td>
            </tr>
            <tr>
                <td>Subject4</td>
                <td><?php echo $row[7]; ?></td>
                <td><?php echo $row[12]; ?></td>
            </tr>
            <tr>
                <td>Subject5</td>
                <td><?php echo $row[8];  ?></td>
                <td><?php echo $row[13]; } ?></td>
            </tr>
        </table>
        </div>
    </body>
</html>