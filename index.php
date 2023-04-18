<!DOCTYPE html>
<html lang="en"></html>
<link rel="stylesheet" href="assets/css/MyStyle.css">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The Leveret Homepage</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="p-3 m-0 border-0 bd-example">
<?php include('header.php'); ?><br>

<div class="container-fluid bg-3 text-center">    
  <h3>Recent Articles</h3><br>
</div>

<! -- first row of articles-->
<div class="container-fluid">
  <div class="row">

    <div class="col-sm-3">
  <div style="position: relative; width: 100%;">
    <img width="100%" height="175" src="assets/img/FionaBenson.jpeg" style="object-fit: cover;">
    <div style="position: absolute; bottom: 0; left: 0; right: 0; background-color: rgba(0, 0, 0, 0.5); color: white; padding: 10px;">
      <h5>Article Title</h5>
      <p>Article summary or description</p>
    </div>
  </div>
</div>
  <div class="col-sm-3">
    <div style="position: relative; width: 100%;">
      <img width="100%" height="175" src="assets/img/CharlesDarwin.webp" style="object-fit: cover;">
      <div style="position: absolute; bottom: 0; left: 0; right: 0; background-color: rgba(0, 0, 0, 0.5); color: white; padding: 10px;">
        <h5>Article Title</h5>
        <p>Article summary or description</p>
      </div>
    </div>
  </div>

  <div class="col-sm-3">
    <div style="position: relative; width: 100%;">
      <img width="100%" height="175" src="assets/img/JohnJamesA.jpeg" style="object-fit: cover;">
      <div style="position: absolute; bottom: 0; left: 0; right: 0; background-color: rgba(0, 0, 0, 0.5); color: white; padding: 10px;">
        <h5>Article Title</h5>
        <p>Article summary or description</p>
      </div>
    </div>
  </div>

  <div class="col-sm-3">
    <div style="position: relative; width: 100%;">
      <img width="100%" height="175" src="assets/img/HistoryOfScience.jpeg" style="object-fit: cover;">
      <div style="position: absolute; bottom: 0; left: 0; right: 0; background-color: rgba(0, 0, 0, 0.5); color: white; padding: 10px;">
        <h5>Article Title</h5>
        <p>Article summary or description</p>
      </div>
    </div>
  </div>
  </div>
  </div><br>

  <! -- second row of articles -->
<div class="container-fluid">    
  <div class="row">
    <div class="col-sm-3">
    <div style="position: relative; width: 100%;">
      <img width="100%" height="175" src="assets/img/Marg.Cavendish.jpeg" style="object-fit: cover;">
      <div style="position: absolute; bottom: 0; left: 0; right: 0; background-color: rgba(0, 0, 0, 0.5); color: white; padding: 10px;">
        <h5>Article Title</h5>
        <p>Article summary or description</p>
      </div>
    </div>
  </div>
      
  <div class="col-sm-3">
    <div style="position: relative; width: 100%;">
      <img width="100%" height="175" src="assets/img/Walden.jpeg" style="object-fit: cover;">
      <div style="position: absolute; bottom: 0; left: 0; right: 0; background-color: rgba(0, 0, 0, 0.5); color: white; padding: 10px;">
        <h5>Article Title</h5>
        <p>Article summary or description</p>
      </div>
    </div>
  </div>

  <div class="col-sm-3">
    <div style="position: relative; width: 100%;">
      <img width="100%" height="175" src="assets/img/Hieroglyphs2.jpeg" style="object-fit: cover;">
      <div style="position: absolute; bottom: 0; left: 0; right: 0; background-color: rgba(0, 0, 0, 0.5); color: white; padding: 10px;">
        <h5>Article Title</h5>
        <p>Article summary or description</p>
      </div>
    </div>
  </div>

  <div class="col-sm-3">
    <div style="position: relative; width: 100%;">
      <img width="100%" height="175" src="assets/img/AnneCarson.webp" style="object-fit: cover;">
      <div style="position: absolute; bottom: 0; left: 0; right: 0; background-color: rgba(0, 0, 0, 0.5); color: white; padding: 10px;">
        <h5>Article Title</h5>
        <p>Article summary or description</p>
      </div>
    </div>
  </div>
</div><br><br>

<?php include('footer.php'); ?>
</body>
</html>