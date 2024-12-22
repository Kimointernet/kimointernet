<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex6.php" method="post">
        username
        <input type="text" name="username"><br>
        password
        <input type="password" name="password"><br>
        <input type="submit" value="submit" name="go">
    </form>
    <?php
    if(isset($_POST['go']))//go heye lname bl input taba3 lsubmit
    {
        $x=$_POST['username'];// lusername nafs lname lmaktob bl input
        $y=$_POST['password'];// lpassword nafs lname lmaktob bl input 
        $exist=0;
        $user=array("sami","Fadi","Nada");// array heye l7ata t3arfna 3l lma3lomet lmda5lina ne7na
        $pass=array("123","456","789");
        for($i=0;$i<count($user);$i++)
        if(($user[$i]==$x)&&($pass[$i]==$y))//&& hol ma3neto eza t7a2a2 lcharten 
        $exist=1;// hayde eza t7a2a lcharet 
    if($exist==1)
    echo "Welcome $x";// hon eza t7a2a2 lcharet yktblna hek

        else echo "username & password incorrect";// else iza ma t7a2a2 lcharet yktblna hek 
    }
    ?>
</body>
</html>