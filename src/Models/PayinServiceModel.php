<?php 
/*
 * FouleFactoryApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ) on 09/14/2016
 */

namespace FouleFactoryApiLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class PayinServiceModel implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @maps Amount
     * @var integer $amount public property
     */
    public $amount;

    /**
     * @todo Write general description for this property
     * @maps ReturnUrl
     * @var string $returnUrl public property
     */
    public $returnUrl;

    /**
     * Constructor to set initial or default values of member properties
     * @param   integer           $amount      Initialization value for the property $this->amount   
     * @param   string            $returnUrl   Initialization value for the property $this->returnUrl
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->amount    = func_get_arg(0);
            $this->returnUrl = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Amount']    = $this->amount;
        $json['ReturnUrl'] = $this->returnUrl;

        return $json;
    }
}