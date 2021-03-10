<?php


namespace App\Notifier;


use App\Entity\Supplierinterface;

interface SupplierTrustingNotifierInterface
{
    public function notify(Supplierinterface $supplier): void;

}
