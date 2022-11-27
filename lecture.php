<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="lecturestyle.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="sidebar">
    <ul class="nav-links">
    <li>
        <a href="login_form.php" class="active">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="lecture.php">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">Lectures</span>
        </a>
      </li>
      <li>
        <a href="tutor.php">
          <i class='bx bx-coin-stack'></i>
          <span class="links_name">Tutors</span>
        </a>
      </li>
      <li>
        <a href="department.php">
          <i class='bx bx-user'></i>
          <span class="links_name">Courses</span>
        </a>
      </li>
      <li>
        <a href="timetable.html">
          <i class='bx bx-cog'></i>
          <span class="links_name">Timetables</span>
        </a>
      </li>
      <li class="log_out">
        <a href="#">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <span class="dashboard">Timetable Generator<br>Lectures</span>
      </div>
    </nav>
    <div class="home-content">
      <div class="overview-boxes">
        <form action= "lectureinsert.php" method="post">

          <label for="subcode">Subject Code:</label>
          <input type="number" id="subcode" name="subcode"><br><br>

          <label for="subname">Subject Name:</label>
          <input type="text" id="subname" name="subname"><br><br>

          <label for="duration">Duration:</label>
          <input type="number" id="duration" name="duration"><br><br>

          <label for="tutor">Tutor</label>
          <select name="tutor" id="tutor">
            <option value="rigatoni">Dipti Jain</option>
            <option value="dave">Neha Sharma</option>
            <option value="pumpernickel">John Doe</option>
            <option value="reeses">Rahul Pathak</option>
          </select><br><br>

          <label for="nostudent">No. of Students:</label>
          <input type="number" id="nostudent" name="nostudent"><br><br>

          <label for="selectroom">Select Room Capacity:</label>
          <select name="selectroom" id="selectroom">
            <option value="dave">60</option>
            <option value="pumpernickel">70</option>
            <option value="reeses">80</option>
          </select>
          <br>
          <input type="submit" value="submit">
          </div>
    </div>
    <div class="btn-group">
      <button>Edit</button>
      <button>Update</button>
      <button>Delete</button>
    </div>
          
    </form>
    
    <html lang="en">
      <body>
      <head>
        <title>
          <?php include 'lectureconfig.php';?>
          <?php include 'lecturestyle.css';?>
        </title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="lecturestyle.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

    <div style="overflow-x:auto;">
      <table>
        <thead>
          <tr>
          
            <th>Subject_code</th>
            <th>Subject_name</th>
            <th>Duration</th>
            <th>Students</th>
            
          </tr>
        </thead>
        <tbody>
        <?php
    include 'lectureconfig.php';
    $selectquery= " select * from lectures2_db";
    $query = mysqli_query($con, $selectquery);
    $nums= mysqli_num_rows($query);

    while($res = mysqli_fetch_array($query)){

      ?>
      <tr>
      <td><?php echo $res['subcode']; ?> </td>
      <td><?php echo $res['subname']; ?> </td>
      <td><?php echo $res['duration']; ?> </td>
      <td><?php echo $res['nostudent']; ?> </td>
    </tr>
    <?php
      
    }

    ?>

   
    
    
        </tbody>
      </table>
      </div>
    </div>
    </div>
    </body>
</html>

    
  </section>
  

  

</body>

</html>

