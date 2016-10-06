<?php

namespace Itelis\TCMBundle\Model;

use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

class Encoder implements PasswordEncoderInterface
{
    private $algorithm;

    public function __construct($algorithm)
    {
        $this->algorithm = $algorithm;
		
    }

    public function encodePassword($raw, $salt)
    {
        $password = hash($this->algorithm, $raw);
        $encoded = hash($this->algorithm, $password.'*'.$salt.'^');
        return $encoded;
    }

    public function isPasswordValid($encoded, $raw, $salt)
    {
        return $encoded === $this->encodePassword($raw, $salt);
    }
}