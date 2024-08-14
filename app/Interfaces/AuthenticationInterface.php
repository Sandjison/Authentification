<?php

namespace App\Interfaces;

interface AuthenticationInterface
{
    
    public function login(array $data);
    public function registration(array $data);
    public function forgottenPassword(string $email);
    public function checkOtpCode(array $data);
    public function newPassword(array $data);
    
}
