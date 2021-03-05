<?php

namespace App\Entity;


use Sylius\Component\Resource\Model\ResourceInterface;

interface Supplierinterface extends ResourceInterface
{
    /**
     * @return mixed
     */
    public function getEmail();

    /**
     * @param mixed $email
     */
    public function setEmail($email): void;

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @param mixed $name
     */
    public function setName($name): void;
}
