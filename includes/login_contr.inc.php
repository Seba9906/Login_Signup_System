<?php
declare(strict_types=1);
function is_username_wrong( bool|array $result) //it's a bool when no results show up(no user matched on the db) and array when an user matches on the db
{
    return !$result;
}

function is_password_wrong(string $pwd, string $hashedPwd)
{
    return !password_verify($pwd,$hashedPwd);
}

function is_input_empty(string $username, string $pwd){
    return empty($username) || empty($pwd);
}