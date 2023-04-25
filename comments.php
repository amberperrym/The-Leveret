<?php
date_default_timezone_set('America/Toronto'); //setting default timezone
$date = new DateTime(); //Creating a variable for DateTime
$TimeDate = $date->format('Y-m-d H:i:s'); 

require 'database/db_login.php'; //load credentials 

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment'])) {//check if email, name, and content is submitted using POST method


    $sql = "INSERT INTO `Comments_Section` (`id`, `time`, `comment`, `name`, `email`) VALUES (NULL, $DateTime,'".$_POST['comment']."', '".$_POST['name']."', '".$_POST['email']."')";
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
<div style="height: 700px;"></div>

<!-- comments section--> 
<div class="border-top"><div>
<div class="comments">
  <h2>Comments</h2>
  <ul>
    <li>
      <div class="comment">
        <div class="comment-text">
          <div class="comment-header">
            <span class="username">Username 1</span>
            <span class="timestamp">2 hours ago</span>
            <a href="#" class="reply-link">Reply</a>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, justo ut dictum viverra, arcu nulla rhoncus erat, vel sollicitudin tellus eros vitae arcu.</p>
        </div>
      </div>
      <ul class="replies">
        <li>
          <div class="comment">
            <div class="comment-text">
              <div class="comment-header">
                <span class="username">Username 2</span>
                <span class="timestamp">1 hour ago</span>
                <a href="#" class="reply-link">Reply</a>
              </div>
              <p>Nullam vel gravida tellus, eu dapibus velit. Vivamus volutpat tellus ipsum, vel mattis nibh rutrum eget. Phasellus consectetur tristique velit, nec congue enim fermentum ac.</p>
            </div>
          </div>
        </li>
      </ul>
    </li>
    <li>
      <div class="comment">
        <div class="comment-text">
          <div class="comment-header">
            <span class="username">Username 3</span>
            <span class="timestamp">30 minutes ago</span>
            <a href="#" class="reply-link">Reply</a>
          </div>
          <p>Nunc interdum odio eget risus pulvinar, eu gravida lorem pellentesque. Suspendisse varius lacinia nisl. Nam dapibus, dolor eget rhoncus bibendum, quam orci pellentesque mauris, non blandit nulla nulla in eros.</p>
        </div>
      </div>
    </li>
  </ul>

<!-- comments form--> 
<div class="container">
<div class="row">
    <h3>Add a Comment</h3>
  <form action="#" method="POST" id="commentsform"> <!--Add action to refresh page using # & define method as POST" -->
      <div class="mb-3">
        <input type="text" class="form-control" id="name" name="name" required>
        <label for="name" class="form-label">Name</label>
      </div>
      <div class="mb-3">
        <input type="email" class="form-control" id="email"name="email" required>
        <label for="email" class="form-label">Email address</label>
      </div>
      <div class="mb-3">
          <label for="email" class="form-label">Comment</label>
          <textarea class="form-control" id="comment" rows="3"  name="comment" required></textarea>
      </div>

        <?php echo "<p>".$message."</p>";?>
      <button type="submit">Submit</button>
  </form>
</div>
</div><br>

<?php include('footer.php'); ?>

</body>
</html>