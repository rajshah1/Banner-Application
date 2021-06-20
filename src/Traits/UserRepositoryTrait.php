<?php
declare(strict_types=1);

namespace App\Traits;


use App\Repository\UserRepository;

trait UserRepositoryTrait
{
    private UserRepository $userRepository;

    /**
     * @return UserRepository
     */
    public function getUserRepository(): UserRepository
    {
        return $this->userRepository;
    }

    /**
     * @required
     * @param UserRepository $userRepository
     * @return $this
     */
    public function setUserRepository(UserRepository $userRepository): self
    {
        $this->userRepository = $userRepository;
        return $this;
    }

}