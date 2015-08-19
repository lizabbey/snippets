<?php
$query = new WP_Query($queryArgs);
if( $query->have_posts()) {
  //Variables
  $published = $query->post_count;
  $itemsPerRow = 'number you want per row';
  $itemCount = 0;
  $flag = 0;
?>
<!-- HTML before the loop -->
Title Whatever
<?php while( $query->have_posts()) : $query->the_post();

//This example will write a ul around the number of li’s specified in $itemsPerRow. It will continue to write uls until all loop results have been written.  

// case 1: Normal Enclosures
  $rowOpen = '';
  $rowClose = '';
  $finalRowC = '</ul>';

// case 2: New Row
  if( $itemCount >= $itemsPerRow ) {
    $rowClose = '</ul>';
    $rowOpen = '<ul>';
    $itemCount = 0;
  }

// case 3: First Item
  if($flag == 0){
    $rowClose = ''; // null close
    $rowOpen = '<ul>';
    $flag = 1;
  }

// update values
$itemCount ++;

// echo open and close statements
// !! CLOSE FINAL ELEMENT BELOW !!
echo $rowClose;
echo $rowOpen;
?>

<!-- HTML FOR YOUR ITEM-->
text text text

<?php
endwhile;
}
echo $finalRowC;
?>