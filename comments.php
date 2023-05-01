<?php
date_default_timezone_set('America/Toronto'); //setting default timezone
$date = new DateTime(); //Creating a variable for DateTime
$TimeDate = $date->format('Y-m-d H:i:s'); 

require 'database/db_login.php'; //load credentials 

if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comment'])) {//check if email, name, and content is submitted using POST method


    $sql = "INSERT INTO `comments_section` (`id`,`time`, `comment`, `name`, `email`) VALUES (NULL, CURRENT_TIMESTAMP,'".$_POST['comment']."', '".$_POST['name']."', '".$_POST['email']."')";
    $stmt = $conn->prepare($sql);

    //Creating New Event
    if( $stmt->execute() ){  //executing query to update the database 

        $message="Comment Submitted"; //Message to show comment was submitted
    } else {
        $message="Error was encountered in submitting comment."; //Message to show error in submitting comment
    }
}


?>

<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="asset/css/MyStyle.css" rel="stylesheet"> 
</head>
    <body class="p-3 m-0 border-0 bd-example">
<?php include('header.php'); ?><br>


<!-- blog posts would ususally go within this empty space--> 
<div style="height: 700px;"></div><hr>

<!-- comments section--> 

<div class="col-md-11 col-lg-11">
  <h3 class="mb-4 pb-2">Comments</h3>

  <div class="row">
    <div class="col">
      <div class="d-flex flex-start">
        <div class="user-photo"></div> 
        <div class="flex-grow-1 flex-shrink-1">
          <div class="card mb-4">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">
                  Jane Doe <span class="small">- 2 hours ago</span>
                </p>
                <a href="#">Reply</a>
              </div>
              <p class="small mb-0">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, justo ut dictum viverra, arcu nulla rhoncus erat, vel sollicitudin tellus eros vitae arcu.
              </p>
            </div>
          </div>

          <div class="d-flex flex-start">
            <a class="me-3" href="#">
              <div class="user-photo"></div> 
            </a>
            <div class="flex-grow-1 flex-shrink-1">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="mb-1">
                      John Smith <span class="small">- 4 hours ago</span>
                    </p>
                    <a href="#">Reply</a>
                  </div>
                  <p class="small mb-0">
                    Nullam vel gravida tellus, eu dapibus velit. Vivamus volutpat tellus ipsum, vel mattis nibh rutrum eget. Phasellus consectetur tristique velit, nec congue enim fermentum ac..
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex flex-start">
        <div class="user-photo"></div> 
        <div class="flex-grow-1 flex-shrink-1">
          <div class="card mb-4">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <p class="mb-1">
                  Jane Smith <span class="small">- 2 hours ago</span>
                </p>
                <a href="#">Reply</a>
              </div>
              <p class="small mb-0">
                Nunc interdum odio eget risus pulvinar, eu gravida lorem pellentesque. Suspendisse varius lacinia nisl. Nam dapibus, dolor eget rhoncus bibendum, quam orci pellentesque mauris, non blandit nulla nulla in eros.
              </p>
            </div>
          </div>
         </div>
        </div>
      </div>
    </div><br>

<!-- comments form--> 
<div class="container">
<div class="row">
    <h3>Add a Comment</h3>
  <form action="comments.php" method="POST" id="commentsform"> <!--Add action to refresh page using # & define method as POST" -->
      <div class="mb-3">
      <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email"name="email" required>
      </div>
      <div class="mb-3">
          <label for="comment" class="form-label">Comment</label>
          <textarea class="form-control" id="comment" rows="3"  name="comment" required></textarea>
      </div>
        <?php echo "<p>".$message."</p>";?>
      <button type="submit" name="submit" value="submit">Submit</button>
  </form>
</div>
</div><br>

<?php include('footer.php'); ?>

</body>
</html>