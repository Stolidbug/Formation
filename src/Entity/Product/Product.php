<?php

declare(strict_types=1);

namespace App\Entity\Product;

use App\Entity\StorageLocationInterface;
use App\Entity\Supplierinterface;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product")
 */
class Product extends BaseProduct
{
    /**
     * @var StorageLocationInterface|null
     *
     * @ORM\ManyToOne (targetEntity="App\Entity\StorageLocation", inversedBy="storageproducts")
     * @ORM\JoinColumn (name="storagelocation_id", referencedColumnName="id")
     */
    private $storagelocation;


    /**
     * @var Supplierinterface|null
     *
     * @ORM\ManyToOne (targetEntity="App\Entity\Supplier", inversedBy="products")
     * @ORM\JoinColumn (name="supplier_id", referencedColumnName="id")
     */
    private $supplier;

    /**
     * @return StorageLocationInterface|null
     */
    public function getStoragelocation(): ?StorageLocationInterface
    {
        return $this->storagelocation;
    }

    /**
     * @param StorageLocationInterface|null $storagelocation
     */
    public function setStoragelocation(?StorageLocationInterface $storagelocation): void
    {
        $this->storagelocation = $storagelocation;
    }

    /**
     * @return Supplierinterface
     */
    public function getSupplier(): ?Supplierinterface
    {
        return $this->supplier;
    }

    /**
     * @param Supplierinterface|null $supplier
     */
    public function setSupplier(?Supplierinterface $supplier): void
    {
        $this->supplier = $supplier;
    }

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }
}
