<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository {

    public function getUserByEmail(string $email): User
    {
        return User::query()
            ->where('email', '=', $email)
            ->firstOrFail();
    }

}
