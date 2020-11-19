<?php

function emtyinput($login, $passwd)
{
    if(empty($login) && empty($passwd))
        header('location: ../login.php?error=loginpwd');
    elseif (empty($login))
        header('location: ../login.php?error=login');
    elseif (empty($passwd))
        header('location: ../login.php?error=pwd');
    else
        return;
    exit();
}
function emtySingupinput($login, $passwd, $email, $name, $Rpasswd)
{
    if (empty($login))
        header('location: ../signup.php?error=login');
    elseif (empty($passwd))
        header('location: ../signup.php?error=pwd');
    elseif (empty($Rpasswd))
        header('location: ../signup.php?error=Rpwd');
    elseif (empty($email))
        header('location: ../signup.php?error=email');
    elseif (empty($name))
        header('location: ../signup.php?error=name');
    else
        return;
    exit();
}


function matchpass($passwd , $Rpasswd)
{
    if($passwd !== $Rpasswd)
    {
        header('location: ../signup.php?error=pwdnomatch');
        exit();
    }
    return;
}


function checkmatch($conn, $login, $email)
{
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        echo "connfaild";
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $login, $email);
    mysqli_stmt_execute($stmt);

    $data = mysqli_stmt_get_result($stmt);
    if(($row = mysqli_fetch_assoc($data)))
    {
        return $row;
    }
    else
        return false;
    mysqli_stmt_close($stmt);
}


// function checkUser($conn, $login, $passwd)
// {
//     $sql = "SELECT usersUid, userspwd FROM users;";
//     $data = $conn->query($sql);
//     $rows = $data->fetch_assoc();
//     // print_r($rows);
//     // echo password_hash($passwd, PASSWORD_DEFAULT);
//     foreach ($rows as $items)
//     {
//             if($rows['usersUid'] === $login && password_verify($passwd, $rows['userspwd']))
//             {
//                 echo "exist"; // profile page
//                 exit();
//             }
//     }
//     header('location: ../login.php?error=notexist');
// }



function addtodb($conn, $login, $email, $passwd , $name)
{
    $sql = "INSERT INTO users (usersName, usersUid, usersEmail, userspwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        echo "connfaild";
        exit();
    }
    $hashpwd = password_hash($passwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss",$name, $login, $email, $hashpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('location: ../login.php');
}



function checkemail($email)
{
    $pat = '/.+[@].+[.].+/';
    if (!preg_match($pat, $email))
    {
        header('location: ../signup.php?error=fixemail');
        exit();
    }
    else
        return;
}

function hardpwd($passwd)
{
    $pat = '/.+[@].+[.].+/';
    if (!preg_match($pat, $passwd))
    {
        header('location: ../signup.php?error=fixpwd');
        exit();
    }
    else
        return;
}
