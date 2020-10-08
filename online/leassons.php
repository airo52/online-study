<div id="tables" style="height:300px; overflow-y:auto;">
<form method="post" action="">
<table class="table table-bordered">
<tr>
<th width="2%">#</th>
<th>Chapter</th>
<th>Title</th>
<th>Action * please load file first before reading</th>
</tr>

<tr>

<?php
if(isset($_POST['pdf'])){
    //session_start();
    $_SESSION['pdf'] = $_POST['pdf'];
}
$leasons = mysqli_query($con,"SELECT * FROM quiz");
while($row = mysqli_fetch_assoc($leasons)){?>

<td></td>
<td><?php echo $row['title']?><input id="chapter" type="hidden" name="now" value="<?php echo $row['pdf']?>"></td>
<td><?php echo $row['tag']; ?></td>
<td><button type="submit" name="pdf" value="<?php echo $row['pdf']; ?>"  class="btn btn-primary">load file</button><br><br><button class="btn btn-info"><a href="account.php?q=5">Read pdf</a></button></td> 
<script>
function vie(str){
  documment.getElementById('view').innerHTML =str;
  //alert(str);
}
</script>
</tr>
<?php }
?>
</table>
</form>
</div>


<?php

?>
