<?php

namespace MyVendor\EventInventory\Controller;

use MyVendor\EventInventory\Domain\Model\Event;
use MyVendor\EventInventory\Domain\Repository\EventRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class EventInventoryController
 *
 * @package MyVendor\EventInventory\Controller
 */
class EventInventoryController extends ActionController
{

    /**
     * @var EventRepository
     */
    private $eventRepository;

    /**
     * Inject the event repository
     *
     * @param EventRepository $eventRepository
     */
    public function injectEventRepository(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    /**
     * List of months of the specific year where are some events with event quantities
     *
     * @param int $year
     * @return void
     */
    public function yearMonthListAction($year = 0)
    {
        $events = $this->eventRepository->getEventMonthsByYear($year);
        $this->view->assign('events', $events);
    }

    /**
     * List Action
     *
     * @return void
     */
    public function listAction()
    {
        $events = $this->eventRepository->findAll();
        $this->view->assign('events', $events);
    }

    /**
     * Item Action
     *
     * @param Event $event
     * @return void
     */
    public function itemAction(Event $event)
    {
        $this->view->assign('event', $event);
    }
}