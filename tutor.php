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
        <span class="dashboard">Timetable Generator</span>
      </div>
    </nav>
    <div class="home-content">
      <div class="overview-boxes">
        <form method="post" action="tutor_ph.php">
        <label for="name">Name:</label>
          <input type="text" id="name" name="name"><br><br>
          <label for="phoneno">Phone number:</label>
          <input type="number" id="phoneno" name="phoneno"><br><br>
          
          <button class="button">ADD TUTOR</button>
        </form>
        <html lang="en">
      <body>
      <head>
        <title>
          <?php include 'tutorconfig.php';?>
          <?php include 'lecturestyle.css';?>
        </title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="lecturestyle.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
      </div>
    </div>
    <div class="btn-group">
      <button>Edit</button>
      <button>Update</button>
      <button>Delete</button>
    </div>
    <div style="overflow-x:auto;">
      <table>
        <thead>
          <tr>
            
            <th>phone_no</th>
            <th>name</th>
            
          </tr>
        </thead>
        <tbody>
        <?php
    include 'tutorconfig.php';
    $selectquery= " select * from tutor_db";
    $query = mysqli_query($conn, $selectquery);
    $nums= mysqli_num_rows($query);

    while($res = mysqli_fetch_array($query)){

      ?>
      <tr>
      <td><?php echo $res['name']; ?> </td>
      <td><?php echo $res['phoneno']; ?> </td>
      
    </tr>
    <?php 
    }
    ?>
        </tbody>
      </table>
    </div>
    </div>
    </div>
  </section>
  

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script>

</body>

</html>