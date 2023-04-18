<html>
    <head>
        <link rel="stylesheet" href="../../Assets/Stylesheets/table.css">
    </head>
    <body>
        <div class="content">
        <div class="logo">
            <img src="../../Assets/Images/LOGO.jpg">
        </div>
        <h1>Saintgits College Of Engineering</h1>
        <br>
        <a href="adminchoice.html" target="" class="previous">&laquo; Previous</a>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="sid">
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th><label for="sid">Student ID</label></th>
                    </thead>
                        <td><input type="text" id="sid" name="sid" required></td>
                </table>
                
                
            </div>
            
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
                <td><input type="text" id="sub1" name="sub1" required></td>
                <td><input type="text" id="att1" name="att1" required></td>
            </tr>
            <tr>
                <td>Subject2</td>
                <td><input type="text" id="sub2" name="sub2" required></td>
                <td><input type="text" id="att2" name="att2" required></td>
            </tr>
            <tr>
                <td>Subject3</td>
                <td><input type="text" id="sub3" name="sub3" required></td>
                <td><input type="text" id="att3" name="att3" required></td>
            </tr>
            <tr>
                <td>Subject4</td>
                <td><input type="text" id="sub4" name="sub4" required></td>
                <td><input type="text" id="att4" name="att4" required></td>
            </tr>
            <tr>
                <td>Subject5</td>
                <td><input type="text" id="sub5" name="sub5" required></td>
                <td><input type="text" id="att5" name="att5" required></td>
            </tr>
            <tr>
                <p id="out"></p>
                <td colspan="3"><button type="submit">SUBMIT</button></td>
            </tr>
        </table>
        
    </form>
        </div>
    </body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
          $conn = mysqli_connect("localhost", "root", "", "stud");
          if (!$conn) 
          {
            die();
          } 
          else 
          {
            session_start();
            $sid = $_POST['sid'];
            $sub1 = $_POST['sub1'];
            $sub2 = $_POST['sub2'];
            $sub3 = $_POST['sub3'];
            $sub4 = $_POST['sub4'];
            $sub5 = $_POST['sub5'];
            $att1 = $_POST['att1'];
            $att2 = $_POST['att2'];
            $att3 = $_POST['att3'];
            $att4 = $_POST['att4'];
            $att5 = $_POST['att5'];
            $sql = mysqli_query($conn,"UPDATE stud1 SET `sub1`='$sub1',`sub2`='$sub2',`sub3`='$sub3',`sub4`='$sub4',`sub5`='$sub5',`att1`='$att1',`att2`='$att2',`att3`='$att3',`att4`='$att4',`att5`='$att5' WHERE sid='$sid'");
            if(!$sql)
            {
              echo "<script>document.getElementById('out').innerHTML='Marks Updation Failed'</script>";
            }
            else
            {
              echo "<script>document.getElementById('out').innerHTML='Marks Updated Succesfully'</script>";
            }
          }
        }
      ?>
</html>
