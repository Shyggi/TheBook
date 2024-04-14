<!DOCTYPE html>
<html>
    <head>
        <title>TheBook</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
        <link rel="stylesheet" href="C:\xampp\htdocs\thebook\public\css\homepage.css">
      </head>
<body>

<!-- Image and text -->
<nav class="navbar navbar-custom">
    <a class="navbar-brand">
      <img src="C:\xampp\htdocs\thebook\public\images\logotype.png" height= 40 class="d-inline-block align-top" alt="">
    </a>

      <div class="dropdown">  
          <button type="button" class="dropbtn btn-primary dropdown" data-toggle="dropdown"><i class="fa-solid fa-user navbar-icon"></i></button>  
          <div class="dropdown-menu dropdown-menu-right">  
              <a class="dropdown-item" href="#"> View Lists </a>  
              <a class="dropdown-item" href="#"> History </a>  
              <a class="dropdown-item" href="#"> Log Out </a>  
          </div>  
      </div>  
    
</nav>


<div class="container bg">
    <img src="C:\xampp\htdocs\thebook\public\images\bg.png" alt="Snow" style="width:100%;">
    <div class="centered"><h3><span class="title">Giving accurate recommendations one at a time.</span></h3> <br> <span class="body">Lorem ipsum dolor sit amet consectetur. Integer blandit sed sit natoque massa aliquet libero magna malesuada. Eu amet dui ac eget ornare nunc pretium quam. Lectus erat magna viverra commodo imperdiet tincidunt turpis aliquam. Vitae euismod nunc urna viverra eget viverra.</span></div>
</div>
<br><br><br><br>

<form>
  <div class="input-group mb-4">
    <div class="containereds text-center body">
      <div id="selectedTags" class="d-flex flex-wrap"></div> <!-- This is where the selected tags will be displayed -->
    </div>
    <div class="input-group-append ml-auto">
      <a href="/xampp/htdocs/thebook/themes/recommendation.html" type="submit" class="btn btn-primary border1"><i class="fa fa-search"></i></a>
    </div>
  </div>
</form>

<br>
<div class="containered text-center body">
  <span class="tag btn btn-primary border2" data-id="1">Romance</span>
  <span class="tag btn btn-primary border2" data-id="2">Fantasy</span>
  <span class="tag btn btn-primary border2" data-id="3">Mystery</span>
  <span class="tag btn btn-primary border2" data-id="4">Science Fiction</span>
  <span class="tag btn btn-primary border2" data-id="5">Young Adult</span>
</div>

<div class="containered text-center body">
  <span class="tag btn btn-primary border2" data-id="6">Classics</span>
  <span class="tag btn btn-primary border2" data-id="7">Fiction</span>
  <span class="tag btn btn-primary border2" data-id="8">School</span>
  <span class="tag btn btn-primary border2" data-id="9">Middle Grade</span>
  <span class="tag btn btn-primary border2" data-id="10">Thriller</span>
</div>



<br><br><br>
<footer>
    <hr style=" width:90%; margin:auto;">
    <p>Made with <3<br>
    Shygfred Christian Obado</p>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $(".tag").click(function() {
        $(this).toggleClass("selected");
        updateSelectedTags();
    });

    function updateSelectedTags() {
        var selectedTags = [];
        $(".tag.selected").each(function() {
            selectedTags.push($(this).text());
        });
        $("#selectedTags").html(selectedTags.join(", "));
    }
});
</script>

</body>

</html>