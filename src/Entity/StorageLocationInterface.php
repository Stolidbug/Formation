<?php

namespace App\Entity;



use Doctrine\Common\Collections\Collection;
use Sylius\Component\Resource\Model\ResourceInterface;

interface StorageLocationInterface extends ResourceInterface
{
    /**
     * @return mixed
     */
    public function getAddress();

    /**
     * @param mixed $address
     */
    public function setAddress($address): void;

    /**
     * @return mixed
     */
    public function getPostal();

    /**
     * @param mixed $postal
     */
    public function setPostal($postal): void;

    /**
     * @return mixed
     */
    public function getCity();

    /**
     * @param mixed $city
     */
    public function setCity($city): void;

    /**
     * @return mixed
     */
    public function getCountry();

    /**
     * @param mixed $country
     */
    public function setCountry($country): void;

    /**
     * @return Collection
     */
    public function getStorageProducts(): Collection;

    public function countStorageProducts(): int;
}
