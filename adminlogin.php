<?php @include('partials/head.php'); ?>
<?php @include('partials/search-bar.php'); ?>
<?php @include('partials/nav.php'); ?>

<br>
<br>
<br>
<br>
<?php
if(isset($_POST['login'])){
    $pass = "123";
    if($_POST['pass'] == $pass){
        $_SESSION['logged_in'] = 1;
        echo "Welkom";

    }else{
        echo "Wrong";
    };
};

?>


<?php @include('partials/footer.php'); ?>
