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
class AccountWriterServiceModel implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @maps IdGender
     * @var integer $idGender public property
     */
    public $idGender;

    /**
     * @todo Write general description for this property
     * @required
     * @maps FirstName
     * @var string $firstName public property
     */
    public $firstName;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Name
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Email
     * @var string $email public property
     */
    public $email;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Phone
     * @var string $phone public property
     */
    public $phone;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Birthday
     * @var string $birthday public property
     */
    public $birthday;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Address1
     * @var string $address1 public property
     */
    public $address1;

    /**
     * @todo Write general description for this property
     * @required
     * @maps City
     * @var string $city public property
     */
    public $city;

    /**
     * @todo Write general description for this property
     * @required
     * @maps PostalCode
     * @var string $postalCode public property
     */
    public $postalCode;

    /**
     * @todo Write general description for this property
     * @required
     * @maps CountryCode
     * @var string $countryCode public property
     */
    public $countryCode;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Nationality
     * @var string $nationality public property
     */
    public $nationality;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Optin
     * @var bool $optin public property
     */
    public $optin;

    /**
     * @todo Write general description for this property
     * @maps Company
     * @var string $company public property
     */
    public $company;

    /**
     * @todo Write general description for this property
     * @maps Address2
     * @var string $address2 public property
     */
    public $address2;

    /**
     * @todo Write general description for this property
     * @maps BillAddress1
     * @var string $billAddress1 public property
     */
    public $billAddress1;

    /**
     * @todo Write general description for this property
     * @maps BillAddress2
     * @var string $billAddress2 public property
     */
    public $billAddress2;

    /**
     * @todo Write general description for this property
     * @maps BillCity
     * @var string $billCity public property
     */
    public $billCity;

    /**
     * @todo Write general description for this property
     * @maps BillPostalCode
     * @var string $billPostalCode public property
     */
    public $billPostalCode;

    /**
     * Constructor to set initial or default values of member properties
     * @param   integer           $idGender         Initialization value for the property $this->idGender      
     * @param   string            $firstName        Initialization value for the property $this->firstName     
     * @param   string            $name             Initialization value for the property $this->name          
     * @param   string            $email            Initialization value for the property $this->email         
     * @param   string            $phone            Initialization value for the property $this->phone         
     * @param   string            $birthday         Initialization value for the property $this->birthday      
     * @param   string            $address1         Initialization value for the property $this->address1      
     * @param   string            $city             Initialization value for the property $this->city          
     * @param   string            $postalCode       Initialization value for the property $this->postalCode    
     * @param   string            $countryCode      Initialization value for the property $this->countryCode   
     * @param   string            $nationality      Initialization value for the property $this->nationality   
     * @param   bool              $optin            Initialization value for the property $this->optin         
     * @param   string            $company          Initialization value for the property $this->company       
     * @param   string            $address2         Initialization value for the property $this->address2      
     * @param   string            $billAddress1     Initialization value for the property $this->billAddress1  
     * @param   string            $billAddress2     Initialization value for the property $this->billAddress2  
     * @param   string            $billCity         Initialization value for the property $this->billCity      
     * @param   string            $billPostalCode   Initialization value for the property $this->billPostalCode
     */
    public function __construct()
    {
        if(18 == func_num_args())
        {
            $this->idGender       = func_get_arg(0);
            $this->firstName      = func_get_arg(1);
            $this->name           = func_get_arg(2);
            $this->email          = func_get_arg(3);
            $this->phone          = func_get_arg(4);
            $this->birthday       = func_get_arg(5);
            $this->address1       = func_get_arg(6);
            $this->city           = func_get_arg(7);
            $this->postalCode     = func_get_arg(8);
            $this->countryCode    = func_get_arg(9);
            $this->nationality    = func_get_arg(10);
            $this->optin          = func_get_arg(11);
            $this->company        = func_get_arg(12);
            $this->address2       = func_get_arg(13);
            $this->billAddress1   = func_get_arg(14);
            $this->billAddress2   = func_get_arg(15);
            $this->billCity       = func_get_arg(16);
            $this->billPostalCode = func_get_arg(17);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['IdGender']       = $this->idGender;
        $json['FirstName']      = $this->firstName;
        $json['Name']           = $this->name;
        $json['Email']          = $this->email;
        $json['Phone']          = $this->phone;
        $json['Birthday']       = $this->birthday;
        $json['Address1']       = $this->address1;
        $json['City']           = $this->city;
        $json['PostalCode']     = $this->postalCode;
        $json['CountryCode']    = $this->countryCode;
        $json['Nationality']    = $this->nationality;
        $json['Optin']          = $this->optin;
        $json['Company']        = $this->company;
        $json['Address2']       = $this->address2;
        $json['BillAddress1']   = $this->billAddress1;
        $json['BillAddress2']   = $this->billAddress2;
        $json['BillCity']       = $this->billCity;
        $json['BillPostalCode'] = $this->billPostalCode;

        return $json;
    }
}