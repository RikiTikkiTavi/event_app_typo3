<?php

namespace MyVendor\EventInventory\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Class EventRepository
 *
 * @package MyVendor\EventInventory\Domain\Repository
 */
class EventRepository extends Repository
{
    public function getEventMonthsByYear($year)
    {
        $callback = function ($event) use ($year){
            return $event->equalsYear($year);
        };
        return array_filter($this->findAll()->toArray(), $callback);
    }
}