<?php

namespace App\Repositories;

class AuthRepository {

    public function __construct(
        private UserRepository $userRepository
    )
    {
    }

    public function auth(string $email, string $password): void
    {
        $user = $this->userRepository->getUserByEmail($email);
    }
}
