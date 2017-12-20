<html>
<head>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript">
function changeLikeDislike(type,id){
	
      var dataString = 'id='+ id + '&type=' + type;
	
      $("#product_flash_"+id).show();
      $("#product_flash_"+id).fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: "changeLikeDislike.php",
      data: dataString,
      cache: false,
      success: function(result){
               if(result){
                    var position=result.indexOf("||");
                    var warningMessage=result.substring(0,position);
                    if(warningMessage=='success'){
                         var successMessage=result.substring(position+2);
                         $("#product_flash_"+id).html('&nbsp;');
                         $("#product_"+type+"_"+id).html(successMessage);
                    }else{
                         var errorMessage=result.substring(position+2);
                         $("#product_flash_"+id).html(errorMessage);
                    }
              }
      }
      });
	  
}
</script>
</head>
<body>
<?php
$con=mysqli_connect("127.0.0.1","root","root","Dashboard");
$query=mysqli_query($con,"select * from shared ORDER BY id DESC");



while($row=mysqli_fetch_array($query))
{
echo "<hr><br>Name:".$row['uname']."</br>";
echo "Date:".$row['udate']."</br>";
echo "Time:".$row['time']."</br>";
echo "Title:".$row['title']."</br>";
	echo "<i>".$row['ucontent']."</i></br><hr>";

echo "<div id='wrapper'>";
?>
          <?php
						$query1="select * from shared where id='".$row['id']."'";
						$res=mysqli_query($con,$query1);
						
         
             while($product=mysqli_fetch_array($res)){
               echo '<div class="product_list">';
						 echo '<div class="product_flash" id="product_flash_'.$product['id'].'">&nbsp;</div>';
                      echo '<div class="product_like"><img src="image/like.png" onclick=changeLikeDislike("like","'.$product['id'].'")> <span id="product_like_'.$product['id'].'">'.$product['ulike'].'</span></div>';
                      echo '<div class="product_dislike"><img src="image/dislike.png" onclick=changeLikeDislike("dislike","'.$product['id'].'")> <span id="product_dislike_'.$product['id'].'">'.$product['udislike'].'</span></div>';

               echo '</div>';
             }
      
          ?>
		  <?php 
    echo "</div>";
	
	
#echo $row['uname']." ".$row['title'];
}

?>
</body>
</html>