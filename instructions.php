<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
    $('.carousel').carousel({
        interval: 10000
    })
</script>

</head>
<body>


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/real.jpg" alt="...">
      <div class="carousel-caption">
          <h3>Hello Guys !! Here you can find all the instructions
              you require to handle this content management sytem.
              Scroll right to know more.
          </h3>
      </div>
    </div>
    <div class="item">
      <img src="images/real.jpg" alt="...">
      <div class="carousel-caption">
          <h3>Only the admin has the access to do the CRUD operations.
              Basically creating , reading , inserting and deleting 
              the article from the database.
         </h3>
      </div>
    </div>
    <div class="item">
      <img src="images/real.jpg" alt="...">
      <div class="carousel-caption">
          <h3>The guest visitors will be redirected to the home page containing
              a list of 5 recently updated articles.
          </h3>
      </div>
    </div>
    <div class="item">
      <img src="images/real.jpg" alt="...">
      <div class="carousel-caption">
          <h3>If the visitor wants to have a look at all the articles, he can 
              visit the archive of all articles. A link is provided at the bottom
              of the webpage.
          </h3>
      </div>
    </div>
    <div class="item">
      <img src="images/real.jpg" alt="...">
      <div class="carousel-caption">
          <h3> Each article is associated with a category. If the user wants
               to have a look at all articles related to that category, he can
               click on the category name present highlighted at the heading of article.
          </h3>
      </div>
    </div>
    <div class="item">
      <img src="images/real.jpg" alt="...">
      <div class="carousel-caption">
          <h3>Images are also associated with the articles in order
              to provide a indepth understanding on that article.
              The user can click on the image to view it at a larger dimension.
          </h3>
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->

</body>
</html>

