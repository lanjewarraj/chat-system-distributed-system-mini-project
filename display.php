<?php
$connection = mysqli_connect('localhost','root','','project');
$query = "SELECT * FROM chat order by id desc";
$run = mysqli_query($connection,$query);
if($run){
    if(mysqli_num_rows($run) > 0){
        while($row = mysqli_fetch_assoc($run)){
			$username = $row['username'];
            $msg = $row['message'];
            $date = $row['date'];
        ?>
    <h2><?php echo $username;?></h2>
    <p id="messg"><?php echo $msg;?></p>
    <small><?php echo $date;?></small>
<?php
    }
    }
}