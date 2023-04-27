<!DOCTYPE html>
<html lang="en"></html>
<link rel="stylesheet" href="assets/css/MyStyle.css">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Leveret - Literature</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/assets/css/docs.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Crimson+Text&family=Merriweather&family=Merriweather+Sans&family=Scheherazade+New&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/MyStyle.css">

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <body class="p-3 m-0 border-0 bd-example">
<?php include('header.php'); ?><br>

<div class="article-container">
  <div class="bg-3 text-center">   
    <h3>Literature</h3><br>
  </div>

  <! -- first row of articles-->
  <div class="container-fluid">
    <div class="row">

    <div class="col-sm-12 col-md-6 col-lg-9" style = "margin-bottom: 20px;">
    <div style="position: relative; width: 100%;">
      <img width="100%" height="175" src="assets/img/FionaBenson.jpeg" style="object-fit: cover;">
      <div style="position: absolute; bottom: 0; left: 0; right: 0; background-color: rgba(0, 0, 0, 0.5); color: white; padding: 10px;">
        <h5>Article Title</h5>
        <p>Article summary or description</p>
      </div>
    </div>
  </div>
</div>

<div class="row">
<div class="col-sm-12 col-md-6 col-lg-9" style = "margin-bottom: 20px;">
      <div style="position: relative; width: 100%;">
        <img width="100%" height="175" src="assets/img/Walden.jpeg" style="object-fit: cover;">
        <div style="position: absolute; bottom: 0; left: 0; right: 0; background-color: rgba(0, 0, 0, 0.5); color: white; padding: 10px;">
          <h5>Article Title</h5>
          <p>Article summary or description</p>
        </div>
      </div>
    </div>  
    </div> 
    
    <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-9" style = "margin-bottom: 20px;">
      <div style="position: relative; width: 100%;">
        <img width="100%" height="175" src="assets/img/Marg.Cavendish.jpeg" style="object-fit: cover;">
        <div style="position: absolute; bottom: 0; left: 0; right: 0; background-color: rgba(0, 0, 0, 0.5); color: white; padding: 10px;">
          <h5>Article Title</h5>
          <p>Article summary or description</p>
        </div>
      </div>
      </div> 
    </div>
    </div> 
</div>
</div><br>

<button type="button" class="block">Subscribe to our Newsletter</button><br>

<?php include('footer.php'); ?>
</body>
</html>