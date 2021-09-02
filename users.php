<?php

function getUsers()
{
    return $users = json_decode(file_get_contents(__DIR__ . '/users.json'), true);
}

function getUserById($id)
{
    $users = getUsers();
    foreach ($users as $user){
        if ($user['id'] == $id) {
            return $user;
        }
    }
    return null;
}

function createUser($data)
{

}

function updateUser($data, $id)
{

}

function deleteUser($id)
{

}