<html>
<body>
<?php
include "../lib/general.php";
$page="kontak_group_hapus";
menu($page);
?>

<script language="JavaScript" type="text/javascript">  
var count =1 
var redirect="../main/kontak_group.php"  
function countDown(){  
 if (count <=1){  
  window.location = redirect;  
 }else{  
  count--;  
  document.getElementById("timer").innerHTML = "Kembali ke halaman sebelumnya dalam "+count+" detik."  
  setTimeout("countDown()", 1000)  
 }  
}  
</script>   
<span id="timer">  
<script>  
 countDown();  
</script>  
</span>

<?php
include "view/footer.php";
?>
</body>
</html>