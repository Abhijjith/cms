<?php require "templates/include/header.php" ?>
 
      <h1 style="width: 75%;"><?php echo htmlspecialchars( $results['article']->title )?></h1>
      <div style="width: 75%; font-style: italic;"><?php echo htmlspecialchars( $results['article']->summary )?></div>
      <div style="width: 75%; min-height: 300px;">
      <?php if ( $imagePath = $results['article']->getImagePath() ) { ?>
        <img id="articleImageFullsize" src="<?php echo $imagePath?>" alt="Article Image" />
      <?php } ?>
      <?php echo $results['article']->content?>
      </div>
      <p class="pubDate">Published on <?php echo date('j F Y', $results['article']->publicationDate)?>
      <?php if ( $results['category'] ) { ?>
        in <a href="./?action=archive&amp;categoryId=<?php echo $results['category']->id?>"><?php echo htmlspecialchars( $results['category']->name ) ?></a>
<?php } ?>

</p>
 
      <p><a href="./">Return to Homepage</a></p>
 
<?php require "templates/include/footer.php" ?>