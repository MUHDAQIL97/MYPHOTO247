<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>MyPhotoClub247 Photography Club</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/1.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>MyPhotoClub247</b></h4>
    <p class="w3-text-grey">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Home</a> 
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT US</a> 
  <a href="#Committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
  <a href="#Membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a>
<a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITY/EVENTS</a>   
    <a href="#ACHIEVEMENTS" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACHIEVEMENTS</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
  <a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Administrator</a> 
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Welcome to MyPhotoClub247 Photography Club</b></h1>
   

  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <p align="center"><img src="photo/1.jpg" alt="Me" style="width:100%"></p>
    </div>
    

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>MyPhotoClub247 Photography Club</b></h4>
    <p>A welcoming online community, MyPhotoClub247 is for anybody interested in photography to learn from and get inspired by our amazing Speakers and Tutors. We at MyPhotoClub247 are honored to collaborate with some of the top educators and instructors in the globe.
 We look for photographers who are not only accomplished professionals in their area but also charismatic and inspiring speakers. In addition to sharing some incredibly inspirational photos, we hope to provide you with the useful information and resources you need to revolutionize your photography.
 We have a large selection of sessions that cover the majority of genres and post-processing techniques. In addition to serving clients with upscale equipment, we frequently offer smartphone photography.Our online community also welcome university students to join as members to our club especially for those that have interest in photography.</p>
    <hr>

   <!-- The Committee Section -->
  <div class="w3-black" id="Committee">
  <h3 class="w3-center">THE COMMITTEE MEMBERS</h3>
  <p class="w3-center w3-large">Below are some of our most well know members.</p>
  <div class="w3-row-padding w3-black" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="photo/4.jpg" alt="Aqil" style="width:100%">
        <div class="w3-container">
          <h3>Muhd Aqil</h3>
          <p class="w3-opacity">President</p>
          <p>Controls the club, conducts meetings, and serves as the primary liaison with the outside world.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="photo/2.jpg" alt="Baihaqi" style="width:100%">
        <div class="w3-container">
          <h3>Ahmad Baihaqi</h3>
          <p class="w3-opacity">Vice President</p>
          <p>Supports the president, steps in as needed, and aids in organizing club events.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="photo/3.jpg" alt="Zulhakimi" style="width:100%">
        <div class="w3-container">
          <h3>Zulhakimi</h3>
          <p class="w3-opacity">Social Media Manager</p>
          <p>Oversees the club's social media pages, posts images of members, advertises events, and interacts with fans.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="photo/7.jpg" alt="Jack Harrison" style="width:100%">
        <div class="w3-container">
          <h3>Jack Harrison</h3>
          <p class="w3-opacity">Treasurer</p>
          <p>Oversees the club's financial operations, which include keeping accurate financial records, scheduling events, and collecting membership dues.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
          </div>
      </div>
    </div>
<hr> 
 <!-- The Membership Section -->
    <h4><b>MyPhotoClub247 Photography Club Membership</b></h4>
    <div class="w3-white" id="membership">
     <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
  
  
  <p align="center"><h3>Membership form forMyPhotoClub247 Photography Club</h3></p>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            <td>
              <a href="edit_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

<div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <div class="w3-white" id="activity">
  <p align="center"><h3>Activities form for MyPhotoClub247 Photography Club 2024</h3></p>
    <a href="add_activity.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>   
        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
            <td>
              <a href="edit_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
    
<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>MyPhotoClub247 Photography Club</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    MyPhotoClub247 Photography Club
  </nav>
  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  <div class="w3-white" id="contact">
  <p align="center"><h3>Contact Us for UiTMCK Club Information System (UCIS)</h3></p>
    <a href="add_contact.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">Contact Student ID</th>
          <th scope="col">Email</th>
          <th scope="col">Contact Number</th>
          <th scope="col">Comment</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `contact`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
            <td><?php echo $row["contact_phone"] ?></td>
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>

            <td>
              <a href="edit_Contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_Contact.php?contact_id=<?php echo $row["contact_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

  
    
    <hr>
    
    
    <!-- Pricing Tables -->
    <div class="w3-black" id="activity">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">ACTIVITY/EVENTS</h2>
      <p class="w3-opacity w3-center"><i>Below are the events date and information that will be held to the members!</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">March <span class="w3-tag w3-red w3-margin-left">15 March</span></li>
        <li class="w3-padding">May <span class="w3-tag w3-red w3-margin-left">25 May</span></li>
        <li class="w3-padding">July <span class="w3-badge w3-right w3-margin-right">N/A</span></li>
      </ul>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="/w8/20.jpg" alt="Workshop" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Photography Workshop</b></p>
            <p class="w3-opacity">Sun 15 March 2024</p>
            <p>With the main goal of giving students the chance to learn basic photography skills—both in theory and practice—as well as photo editing techniques, MyPhotoClub247 will held the Photography Workshop. By improving their knowledge and practical experience in the subject, this project aims to foster students' enthusiasm.</p>
            <button class="w3-button w3-red w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">For More Detail</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="/w8/21.jpg" alt="Guest Speakers" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Guest Speakers</b></p>
            <p class="w3-opacity">Tue 25 May 2024</p>
            <p>The photography club members benefit from the amount of information and experience that guest speakers bring to the table. We welcome guest lecturers from other countries to our club so they can pass on their knowledge, wisdom, and experiences to our members.Club members may be encouraged to pursue new innovative.</p>
            <button class="w3-button w3-red w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">For More Detail</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="/w8/22.jpg" alt="Photo Tour" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Photo Tour</b></p>
            <p class="w3-opacity">Date N/A Yet</p>
            <p>The photography club offers its members the chance to go on field trips to interesting and picturesque sites together through a photo tour. Photographing metropolitan streets, scenic landscapes, historic landmarks, and magnificent buildings is only one of the many subjects that the tour offers to its members.</p>
            <button class="w3-button w3-red w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">For More Detail</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <h4>ACHIEVEMENTS</h4>
  <!-- First Photo Grid-->
  <div class="w3-white" id="ACHIEVEMENTS">
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/8.jpg" alt="Photography Exhibitions" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Photography Exhibitions</b></p>
        <p>Putting on a successful photographic exhibition to show off members' creations to the university or neighborhood.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/9.jpg" alt="Photography Competition" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Photography Competition</b></p>
        <p>Arranging and taking part in photographic competitions, both with other organizations and inside the club.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="photo/10.jpg" alt="photography newsletter" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Photography Newsletter</b></p>
        <p>Publishing a periodical or magazine dedicated to photography that includes photo essays, member spotlights, and articles.</p>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/11.jpg" alt="Achieving recognition or awards" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Achieving Awards</b></p>
        <p>Receiving praise or honors for exceptional photographic work on a local, national, or worldwide scale.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photo/12.jpg" alt="Participating in community programs" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Participating in community programs</b></p>
        <p>Taking part in community outreach programs, such as providing free photography for events that benefit charities or recording regional cultural festivals.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="photo/13.jpg" alt="Collaborating with local businesses" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Collaborating with local businesses</b></p>
        <p>Partnering with nearby companies or groups to offer photographic services for events or marketing collateral.</p>
      </div>
    </div>
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact Me</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>maqil8430@gmail.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Kota Bharu, Kelantan</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>0119264728</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>

  
<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>