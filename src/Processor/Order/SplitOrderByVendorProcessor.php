<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusMultiVendorMarketplacePlugin\Processor\Order;

use Sylius\Component\Order\Processor\OrderProcessorInterface;
use Sylius\Component\Order\Model\OrderInterface;
use Sylius\Component\Order\Model\Adjustment;

class SplitOrderByVendorProcessor implements OrderProcessorInterface
{
    public function process(OrderInterface $order): void
    {
        $orderItems = $order->getItems();
        foreach ($orderItems as $orderItem){
        dd("processor");
        }
    }
}
