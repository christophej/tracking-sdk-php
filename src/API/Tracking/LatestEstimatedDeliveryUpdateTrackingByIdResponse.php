<?php
/*
 * This code was auto generated by AfterShip SDK Generator.
 * Do not edit the class manually.
 */
namespace Tracking\API\Tracking;

use Tracking\Model\Base\Base;

class LatestEstimatedDeliveryUpdateTrackingByIdResponse extends Base
{
    /**
     * @var string|null|string The format of the EDD. Either a single date or a date range.
     */
    public $type;
    /**
     * @var string|null|string The source of the EDD. Either the carrier, AfterShip AI, or based on your custom EDD settings.
     */
    public $source;
    /**
     * @var string|null The latest EDD time.
     */
    public $datetime;
    /**
     * @var string|null For a date range EDD format, the date and time for the lower end of the range.
     */
    public $datetime_min;
    /**
     * @var string|null For a date range EDD format, the date and time for the upper end of the range.
     */
    public $datetime_max;
}
