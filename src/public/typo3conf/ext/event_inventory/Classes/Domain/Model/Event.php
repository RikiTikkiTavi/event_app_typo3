<?php

namespace MyVendor\EventInventory\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Event extends AbstractEntity
{

    /**
     * The name of the event
     *
     * @var string
     **/
    protected $name = '';

    /**
     * The description of the event
     *
     * @var string
     **/
    protected $description = '';

    /**
     * The date time in the event
     *
     * @var string
     **/
    protected $date_time = null;

    private function log($msg)
    {
        $logger = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Core\Log\LogManager')->getLogger(__CLASS__);
        $logger->info($msg);
    }

    /**
     * Event constructor.
     *
     * @param string $name
     * @param string $description
     * @param string $date_time
     */
    public function __construct($name = '', $description = '', $date_time = null)
    {
        $this->setName($name);
        $this->setDescription($description);
        $this->setDate_Time($date_time);
    }

    /**
     * Sets the name of the event
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Gets the name of the event
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the description of the event
     *
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Gets the description of the event
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the date time in the event inventory of the event
     *
     * @param string $date_time
     */
    public function setDate_Time($date_time)
    {
        $this->date_time = $date_time;
    }

    /**
     * Gets the date time in the event inventory of the event
     *
     * @return string
     */
    public function getDate_Time()
    {
        return $this->date_time;
    }

}