<?php

namespace App\Repository;

interface IUserRepository
{
    public function Create();
    public function Edit();
    public function Logout();
}

class UserRepository implements IUserRepository
{
    public function Create()
    {
    }

    public function Edit()
    {
    }

    public function Logout()
    {
    }
}
