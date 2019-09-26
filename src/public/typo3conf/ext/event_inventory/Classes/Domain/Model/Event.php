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
     * @var \DateTime
     **/
    protected $dateTime = null;

    /**
     * Month of the event
     * @var string
     */
    protected $month = "January";

    /**
     * Event constructor.
     *
     * @param string $name
     * @param string $description
     * @param \DateTime $dateTime
     */
    public function __construct($name = '', $description = '', $dateTime = null)
    {
        $this->setName($name);
        $this->setDescription($description);
        $this->setDateTime($dateTime);
        $this->month = $this->extractMonth($dateTime);
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
     * @param \DateTime $dateTime
     */
    public function setDateTime($dateTime)
    {
        $this->month = $this->extractMonth($dateTime);
        $this->dateTime = $dateTime;
    }

    /**
     * Gets the date time in the event inventory of the event
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    public function equalsYear($year)
    {
        return intval($this->dateTime->format("Y")) == $year;
    }

    private function extractMonth(\DateTime $dateTime)
    {
        return $dateTime->format("F");
    }

    /**
     * @return string
     */
    public function getMonth(): string
    {
        return $this->month;
    }

    public function initMonthName(): void
    {
        $this->month = $this->extractMonth($this->dateTime);
    }

    /**
     * @param string $month
     */
    public function setMonth(string $month): void
    {
        $this->month = $month;
    }

}