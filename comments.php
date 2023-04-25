<?php
date_default_timezone_set('America/Toronto'); //setting default timezone
$date = new DateTime(); //Creating a variable for DateTime
$TimeDate = $date->format('Y-m-d H:i:s'); 

require 'database/db_login.php'; //load credentials 

if(!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['content'])){ //check if email, name, and content is submitted using POST method

    
    $sql = "INSERT INTO `Comments_Section` (`id`, `created_at`, `content`, `name`, `email`) VALUES (NULL, '$TimeDate', '".$_POST['content']."', '".$_POST['name']."', '".$_POST['email']."')";
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
    <link rel="stylesheet" href="assets/css/MyStyle.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Leveret Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Crimson+Text&family=Merriweather&family=Merriweather+Sans&family=Scheherazade+New&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <body class="p-3 m-0 border-0 bd-example">
<?php include('header.php'); ?><br>


<!-- blog posts woiuld ususally go within this empty space--> 
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

  <main class="comment-form"> 
  <form action="#" method="POST">
      <div class="mb-3">
          <label for="FormControlInput1" class="form-label">Name</label>
          <input type="text" class="form-control" id="FormControlInput1" placeholder="" name="name" required>
      </div>
      <div class="mb-3">
          <label for="FormControlInput2" class="form-label">Email address</label>
          <input type="email" class="form-control" id="FormControlInput2" placeholder="" name="email" required>
      </div>
      <div class="mb-3">
          <label for="FormControlText" class="form-label">Comment</label>
          <textarea class="form-control" id="FormControlText" rows="3" name="content" required></textarea>
      </div>
        <?php echo "<p>".$message."</p>";?>
      <button type="submit">Submit</button>
  </main>
  </form>
</div>
</div><br>
<?php include('footer.php'); ?>
</body>
</html>