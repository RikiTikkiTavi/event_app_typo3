<?php

namespace MyVendor\EventInventory\Controller;

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
        $this->$eventRepository = $eventRepository;
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
}