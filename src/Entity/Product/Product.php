<?php

declare(strict_types=1);

namespace App\Entity\Product;

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
     * @var Supplierinterface|null
     *
     * @ORM\ManyToOne (targetEntity="App\Entity\Supplier", inversedBy="products")
     * @ORM\JoinColumn (name="supplier_id", referencedColumnName="id")
     */
    private $supplier;

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
