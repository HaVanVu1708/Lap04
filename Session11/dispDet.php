<html>
<HEAD>
    <TITLE>User Information</TITLE>
</HEAD>
<BODY>
<?php
$myname = $_POST['myname'];
$myage = $_POST['myage'];
if ($myname==""){
    echo "please enter your name";
}
else{
    if ($myage==""){
        echo $myage;
        echo ",you did not enter your age!";
    }
    else{
       echo "Hi ";
       echo $myage;
       echo ". ";
       echo "Your age is ";
       echo $myage;
       echo ". ";
    }

}

?>
<br>
<a href="Snippet1.html"> Back</a>

</BODY>
</html>
