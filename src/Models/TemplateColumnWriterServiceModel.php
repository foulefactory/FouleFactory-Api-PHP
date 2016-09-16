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
class TemplateColumnWriterServiceModel implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @maps IdTemplateColumnType
     * @var integer $idTemplateColumnType public property
     */
    public $idTemplateColumnType;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Column
     * @var integer $column public property
     */
    public $column;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Order
     * @var integer $order public property
     */
    public $order;

    /**
     * Constructor to set initial or default values of member properties
     * @param   integer           $idTemplateColumnType   Initialization value for the property $this->idTemplateColumnType
     * @param   integer           $column                 Initialization value for the property $this->column              
     * @param   integer           $order                  Initialization value for the property $this->order               
     */
    public function __construct()
    {
        if(3 == func_num_args())
        {
            $this->idTemplateColumnType = func_get_arg(0);
            $this->column               = func_get_arg(1);
            $this->order                = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['IdTemplateColumnType'] = $this->idTemplateColumnType;
        $json['Column']               = $this->column;
        $json['Order']                = $this->order;

        return $json;
    }
}