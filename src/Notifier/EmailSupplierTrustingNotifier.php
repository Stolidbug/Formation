<?php


namespace App\Notifier;


use App\Entity\Supplierinterface;
use Sylius\Component\Mailer\Sender\SenderInterface;

class EmailSupplierTrustingNotifier implements SupplierTrustingNotifierInterface
{
    /** @var SenderInterface */
    private $sender;

    public function __construct(SenderInterface $sender)
    {
        $this->sender = $sender;
    }

    public function notify(Supplierinterface $supplier): void
    {
        $this->sender->send('app_supplier_trusted', [$supplier->getEmail()], ['supplier' => $supplier]);
    }
}
