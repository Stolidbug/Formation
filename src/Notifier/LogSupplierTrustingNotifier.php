<?php


namespace App\Notifier;


use App\Entity\Supplierinterface;
use Psr\Log\LoggerInterface;

class LogSupplierTrustingNotifier implements SupplierTrustingNotifierInterface
{
    /** @var LoggerInterface */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function notify(Supplierinterface $supplier): void
    {
        $this->logger->info(sprintf('Supplier has "%s" just been trusted!', $supplier->getName()));
    }

}
