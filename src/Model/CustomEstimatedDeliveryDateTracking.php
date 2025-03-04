<?php
/*
 * This code was auto generated by AfterShip SDK Generator.
 * Do not edit the class manually.
 */
namespace Tracking\Model;

use Tracking\Model\Base\Base;

class CustomEstimatedDeliveryDateTracking extends Base
{
    /**
     * @var string|null|string The format of the EDD. Either a single date or a date range.
     */
    public $type;
    /**
     * @var string|null The specific EDD date.
     */
    public $datetime;
    /**
     * @var string|null For a date range EDD format, the date for the lower end of the range.
     */
    public $datetime_min;
    /**
     * @var string|null For a date range EDD format, the date for the upper end of the range.
     */
    public $datetime_max;
}
