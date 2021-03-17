<?php

namespace App\Entity;


use Doctrine\Common\Collections\Collection;
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

    /**
     * @return string
     */
    public function getState(): string;


    /**
     * @param string $state
     */
    public function setState(string $state): void;

    /**
     * @return Collection
     */
    public function getProducts(): Collection;

    public function countProducts(): int;

}
