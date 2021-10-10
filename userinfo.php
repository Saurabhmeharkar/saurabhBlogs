<?php

$con = mysqli_connect('localhost', 'saurabhblogsdb', 'Saurabhmeharkar@18', 'phpmysqldbblogs', '3306');


if(!$con){
    ?>
<script>
alert("Unable to connect database");
window.location.replace("contact.php")
</script>
<?php
    
}

mysqli_select_db($con, 'saurabhblogsuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userdata (user, email, mobile, comment)
value('$user', '$email', '$mobile', '$comment')";


if(!$user || !$email || !$mobile || !$comment){
    ?>
<script>
alert("Please fill data below.");
window.location.replace("contact.php")
</script>
<?php
    
}

$iquery = mysqli_query($con, $query);

if($iquery){
    ?>
<script>
alert("Thank you. Your message has been sent sucessfully.");
window.location.replace("index.php")
</script>
<?php
    
}

?>