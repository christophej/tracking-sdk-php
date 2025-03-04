<?php
/*
 * This code was auto generated by AfterShip SDK Generator.
 * Do not edit the class manually.
 */
namespace Tracking;

use Tracking\API\Tracking;
use Tracking\API\Courier;
use Tracking\API\EstimatedDeliveryDate;
use Tracking\Exception\AfterShipError;

class Client
{
    public $config;

    private static $instance = null;

    /**
     * @var Tracking
     */
    public $tracking;
    /**
     * @var Courier
     */
    public $courier;
    /**
     * @var EstimatedDeliveryDate
     */
    public $estimated_delivery_date;
    /**
     * @throws AfterShipError
     */
    public function __construct(array $conf = [])
    {
        $config = new Config($conf);
        $this->config = $config;

        $this->tracking = new Tracking(new Transport\Http($config));
        $this->courier = new Courier(new Transport\Http($config));
        $this->estimated_delivery_date = new EstimatedDeliveryDate(new Transport\Http($config));
    }

    /**
     * @throws AfterShipError
     */
    public static function getInstance(array $conf = [])
    {
        if (self::$instance === null) {
            self::$instance = new self($conf);
        }
        return self::$instance;
    }
}
