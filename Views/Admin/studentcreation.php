<html>
    <head>
        <link rel="stylesheet" href="../../Assets/Stylesheets/Style.css">
    </head>
    <body>
      <div class="bg-illustration">
        <div class="burger-btn">
          <span></span>
          <span></span>
         <span></span>
        </div>
      </div>
    
      <div class="choice">
        <div class="container">
        <br>
        <a href="adminchoice.html" target="" class="previous">&laquo; Previous</a>
          <h1>Student Created Succesfully<br />Student ID:
          <?php
        session_start();
        $nam=$_SESSION['name'];
        $conn=mysqli_connect("localhost","root","");
        if(!$conn)
        {
            echo "Failed to connect to database";
        }
        if(!mysqli_select_db($conn,'stud'))
        {
            die('Connected to Server Failed Database Connection');
        }
        $query2=mysqli_query($conn,"SELECT * FROM stud1 WHERE name = '$nam'");
        while($row = mysqli_fetch_array($query2,MYSQLI_NUM))
        {
            echo $row[0];
        }
        ?>
        </h1> 
        </div>
      </div>
   </body>
</html>       
