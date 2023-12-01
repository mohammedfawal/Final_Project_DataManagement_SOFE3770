
<?php
if($_SERVER['REQUEST_METHOD'] == "post"){
    if(isset($_POST['movie']) && isset($_POST['count']) && isset($_POST['price'])){
         
    }
}

$movie=$_POST['movie'];
$count=$_POST['count'];
$price=$_POST['price'];
echo "You have reserved".$count."tickets for".$movie."and your total to be paid at the tharters is".$price.". Thank you for using BookSmart.";      

?>
