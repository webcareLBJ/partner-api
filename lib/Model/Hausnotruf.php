<?php
/**
 * Hausnotruf
 *
 * PHP version 5
 *
 * @category Class
 * @package  PflegeDe\Partner
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * pflege.de partner API
 *
 * The Partner-API of pflege.de to create Affiliate-Leads programmatically
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace PflegeDe\Partner\Model;

use \ArrayAccess;
use \PflegeDe\Partner\ObjectSerializer;

/**
 * Hausnotruf Class Doc Comment
 *
 * @category Class
 * @package  PflegeDe\Partner
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Hausnotruf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Hausnotruf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'salutation' => 'string',
        'givenName' => 'string',
        'familyName' => 'string',
        'email' => 'string',
        'phoneNumber' => 'string',
        'zip' => 'string',
        'city' => 'string',
        'contactStreet' => 'string',
        'deviceLocation' => 'string',
        'targetPerson' => 'string',
        'emergencyContact' => 'string',
        'urgency' => 'string',
        'carePersonCareLevel' => 'string',
        'pageUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'salutation' => 'string',
        'givenName' => 'string',
        'familyName' => 'string',
        'email' => 'email',
        'phoneNumber' => 'string',
        'zip' => 'string',
        'city' => 'string',
        'contactStreet' => 'string',
        'deviceLocation' => 'string',
        'targetPerson' => 'string',
        'emergencyContact' => 'string',
        'urgency' => 'string',
        'carePersonCareLevel' => 'string',
        'pageUrl' => 'string'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'salutation' => 'salutation',
        'givenName' => 'given_name',
        'familyName' => 'family_name',
        'email' => 'email',
        'phoneNumber' => 'phone_number',
        'zip' => 'zip',
        'city' => 'city',
        'contactStreet' => 'contact_street',
        'deviceLocation' => 'device_location',
        'targetPerson' => 'target_person',
        'emergencyContact' => 'emergency_contact',
        'urgency' => 'urgency',
        'carePersonCareLevel' => 'care_person_care_level',
        'pageUrl' => 'page_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'salutation' => 'setSalutation',
        'givenName' => 'setGivenName',
        'familyName' => 'setFamilyName',
        'email' => 'setEmail',
        'phoneNumber' => 'setPhoneNumber',
        'zip' => 'setZip',
        'city' => 'setCity',
        'contactStreet' => 'setContactStreet',
        'deviceLocation' => 'setDeviceLocation',
        'targetPerson' => 'setTargetPerson',
        'emergencyContact' => 'setEmergencyContact',
        'urgency' => 'setUrgency',
        'carePersonCareLevel' => 'setCarePersonCareLevel',
        'pageUrl' => 'setPageUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'salutation' => 'getSalutation',
        'givenName' => 'getGivenName',
        'familyName' => 'getFamilyName',
        'email' => 'getEmail',
        'phoneNumber' => 'getPhoneNumber',
        'zip' => 'getZip',
        'city' => 'getCity',
        'contactStreet' => 'getContactStreet',
        'deviceLocation' => 'getDeviceLocation',
        'targetPerson' => 'getTargetPerson',
        'emergencyContact' => 'getEmergencyContact',
        'urgency' => 'getUrgency',
        'carePersonCareLevel' => 'getCarePersonCareLevel',
        'pageUrl' => 'getPageUrl'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const SALUTATION_HERR = 'Herr';
    const SALUTATION_FRAU = 'Frau';
    const DEVICE_LOCATION_ZU_HAUSE = 'Zu Hause';
    const DEVICE_LOCATION_UNTERWEGS = 'Unterwegs';
    const DEVICE_LOCATION_ZU_HAUSE__UNTERWEGS = 'Zu Hause & unterwegs';
    const DEVICE_LOCATION_UNKLAR = 'Unklar';
    const TARGET_PERSON_MICH = 'Für mich';
    const TARGET_PERSON_JEMAND_ANDEREN = 'Für jemand anderen';
    const EMERGENCY_CONTACT_ANGEHRIGER = 'Angehöriger';
    const EMERGENCY_CONTACT_NOTRUFZENTRALE = 'Notrufzentrale';
    const EMERGENCY_CONTACT_BEIDE = 'Beide';
    const EMERGENCY_CONTACT_UNKLAR = 'Unklar';
    const URGENCY_SCHNELLSTMGLICH = 'Schnellstmöglich';
    const URGENCY_INNERHALB_EINES_MONATS = 'Innerhalb eines Monats';
    const URGENCY_IN_2_4_MONATEN = 'In 2-4 Monaten';
    const URGENCY_UNKLAR = 'Unklar';
    const CARE_PERSON_CARE_LEVEL_JA = 'Ja';
    const CARE_PERSON_CARE_LEVEL_NEIN = 'Nein';
    const CARE_PERSON_CARE_LEVEL_BEANTRAGT = 'Beantragt';
    const CARE_PERSON_CARE_LEVEL_UNKLAR = 'Unklar';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSalutationAllowableValues()
    {
        return [
            self::SALUTATION_HERR,
            self::SALUTATION_FRAU,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeviceLocationAllowableValues()
    {
        return [
            self::DEVICE_LOCATION_ZU_HAUSE,
            self::DEVICE_LOCATION_UNTERWEGS,
            self::DEVICE_LOCATION_ZU_HAUSE__UNTERWEGS,
            self::DEVICE_LOCATION_UNKLAR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTargetPersonAllowableValues()
    {
        return [
            self::TARGET_PERSON_MICH,
            self::TARGET_PERSON_JEMAND_ANDEREN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEmergencyContactAllowableValues()
    {
        return [
            self::EMERGENCY_CONTACT_ANGEHRIGER,
            self::EMERGENCY_CONTACT_NOTRUFZENTRALE,
            self::EMERGENCY_CONTACT_BEIDE,
            self::EMERGENCY_CONTACT_UNKLAR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUrgencyAllowableValues()
    {
        return [
            self::URGENCY_SCHNELLSTMGLICH,
            self::URGENCY_INNERHALB_EINES_MONATS,
            self::URGENCY_IN_2_4_MONATEN,
            self::URGENCY_UNKLAR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCarePersonCareLevelAllowableValues()
    {
        return [
            self::CARE_PERSON_CARE_LEVEL_JA,
            self::CARE_PERSON_CARE_LEVEL_NEIN,
            self::CARE_PERSON_CARE_LEVEL_BEANTRAGT,
            self::CARE_PERSON_CARE_LEVEL_UNKLAR,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
        $this->container['givenName'] = isset($data['givenName']) ? $data['givenName'] : null;
        $this->container['familyName'] = isset($data['familyName']) ? $data['familyName'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['contactStreet'] = isset($data['contactStreet']) ? $data['contactStreet'] : null;
        $this->container['deviceLocation'] = isset($data['deviceLocation']) ? $data['deviceLocation'] : null;
        $this->container['targetPerson'] = isset($data['targetPerson']) ? $data['targetPerson'] : null;
        $this->container['emergencyContact'] = isset($data['emergencyContact']) ? $data['emergencyContact'] : null;
        $this->container['urgency'] = isset($data['urgency']) ? $data['urgency'] : null;
        $this->container['carePersonCareLevel'] = isset($data['carePersonCareLevel']) ? $data['carePersonCareLevel'] : null;
        $this->container['pageUrl'] = isset($data['pageUrl']) ? $data['pageUrl'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['salutation'] === null) {
            $invalidProperties[] = "'salutation' can't be null";
        }
        $allowedValues = $this->getSalutationAllowableValues();
        if (!in_array($this->container['salutation'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'salutation', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['givenName'] === null) {
            $invalidProperties[] = "'givenName' can't be null";
        }
        if ($this->container['familyName'] === null) {
            $invalidProperties[] = "'familyName' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['phoneNumber'] === null) {
            $invalidProperties[] = "'phoneNumber' can't be null";
        }
        if (!preg_match("/[0-9 \/-]/", $this->container['phoneNumber'])) {
            $invalidProperties[] = "invalid value for 'phoneNumber', must be conform to the pattern /[0-9 \/-]/.";
        }

        if ($this->container['zip'] === null) {
            $invalidProperties[] = "'zip' can't be null";
        }
        if ((strlen($this->container['zip']) > 5)) {
            $invalidProperties[] = "invalid value for 'zip', the character length must be smaller than or equal to 5.";
        }

        if ((strlen($this->container['zip']) < 4)) {
            $invalidProperties[] = "invalid value for 'zip', the character length must be bigger than or equal to 4.";
        }

        if (!preg_match("/[0-9]{4,5}/", $this->container['zip'])) {
            $invalidProperties[] = "invalid value for 'zip', must be conform to the pattern /[0-9]{4,5}/.";
        }

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['contactStreet'] === null) {
            $invalidProperties[] = "'contactStreet' can't be null";
        }
        if ($this->container['deviceLocation'] === null) {
            $invalidProperties[] = "'deviceLocation' can't be null";
        }
        $allowedValues = $this->getDeviceLocationAllowableValues();
        if (!in_array($this->container['deviceLocation'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'deviceLocation', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['targetPerson'] === null) {
            $invalidProperties[] = "'targetPerson' can't be null";
        }
        $allowedValues = $this->getTargetPersonAllowableValues();
        if (!in_array($this->container['targetPerson'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'targetPerson', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['emergencyContact'] === null) {
            $invalidProperties[] = "'emergencyContact' can't be null";
        }
        $allowedValues = $this->getEmergencyContactAllowableValues();
        if (!in_array($this->container['emergencyContact'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'emergencyContact', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['urgency'] === null) {
            $invalidProperties[] = "'urgency' can't be null";
        }
        $allowedValues = $this->getUrgencyAllowableValues();
        if (!in_array($this->container['urgency'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'urgency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['carePersonCareLevel'] === null) {
            $invalidProperties[] = "'carePersonCareLevel' can't be null";
        }
        $allowedValues = $this->getCarePersonCareLevelAllowableValues();
        if (!in_array($this->container['carePersonCareLevel'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'carePersonCareLevel', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['pageUrl'] === null) {
            $invalidProperties[] = "'pageUrl' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['salutation'] === null) {
            return false;
        }
        $allowedValues = $this->getSalutationAllowableValues();
        if (!in_array($this->container['salutation'], $allowedValues)) {
            return false;
        }
        if ($this->container['givenName'] === null) {
            return false;
        }
        if ($this->container['familyName'] === null) {
            return false;
        }
        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['phoneNumber'] === null) {
            return false;
        }
        if (!preg_match("/[0-9 \/-]/", $this->container['phoneNumber'])) {
            return false;
        }
        if ($this->container['zip'] === null) {
            return false;
        }
        if (strlen($this->container['zip']) > 5) {
            return false;
        }
        if (strlen($this->container['zip']) < 4) {
            return false;
        }
        if (!preg_match("/[0-9]{4,5}/", $this->container['zip'])) {
            return false;
        }
        if ($this->container['city'] === null) {
            return false;
        }
        if ($this->container['contactStreet'] === null) {
            return false;
        }
        if ($this->container['deviceLocation'] === null) {
            return false;
        }
        $allowedValues = $this->getDeviceLocationAllowableValues();
        if (!in_array($this->container['deviceLocation'], $allowedValues)) {
            return false;
        }
        if ($this->container['targetPerson'] === null) {
            return false;
        }
        $allowedValues = $this->getTargetPersonAllowableValues();
        if (!in_array($this->container['targetPerson'], $allowedValues)) {
            return false;
        }
        if ($this->container['emergencyContact'] === null) {
            return false;
        }
        $allowedValues = $this->getEmergencyContactAllowableValues();
        if (!in_array($this->container['emergencyContact'], $allowedValues)) {
            return false;
        }
        if ($this->container['urgency'] === null) {
            return false;
        }
        $allowedValues = $this->getUrgencyAllowableValues();
        if (!in_array($this->container['urgency'], $allowedValues)) {
            return false;
        }
        if ($this->container['carePersonCareLevel'] === null) {
            return false;
        }
        $allowedValues = $this->getCarePersonCareLevelAllowableValues();
        if (!in_array($this->container['carePersonCareLevel'], $allowedValues)) {
            return false;
        }
        if ($this->container['pageUrl'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets salutation
     *
     * @return string
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param string $salutation Anrede
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $allowedValues = $this->getSalutationAllowableValues();
        if (!in_array($salutation, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'salutation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets givenName
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->container['givenName'];
    }

    /**
     * Sets givenName
     *
     * @param string $givenName Vorname
     *
     * @return $this
     */
    public function setGivenName($givenName)
    {
        $this->container['givenName'] = $givenName;

        return $this;
    }

    /**
     * Gets familyName
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->container['familyName'];
    }

    /**
     * Sets familyName
     *
     * @param string $familyName Nachname
     *
     * @return $this
     */
    public function setFamilyName($familyName)
    {
        $this->container['familyName'] = $familyName;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email E-Mail-Adresse
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     *
     * @param string $phoneNumber Telefonnummer
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {

        if ((!preg_match("/[0-9 \/-]/", $phoneNumber))) {
            throw new \InvalidArgumentException("invalid value for $phoneNumber when calling Hausnotruf., must conform to the pattern /[0-9 \/-]/.");
        }

        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string $zip PLZ
     *
     * @return $this
     */
    public function setZip($zip)
    {
        if ((strlen($zip) > 5)) {
            throw new \InvalidArgumentException('invalid length for $zip when calling Hausnotruf., must be smaller than or equal to 5.');
        }
        if ((strlen($zip) < 4)) {
            throw new \InvalidArgumentException('invalid length for $zip when calling Hausnotruf., must be bigger than or equal to 4.');
        }
        if ((!preg_match("/[0-9]{4,5}/", $zip))) {
            throw new \InvalidArgumentException("invalid value for $zip when calling Hausnotruf., must conform to the pattern /[0-9]{4,5}/.");
        }

        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city Stadt
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets contactStreet
     *
     * @return string
     */
    public function getContactStreet()
    {
        return $this->container['contactStreet'];
    }

    /**
     * Sets contactStreet
     *
     * @param string $contactStreet Straße & Hausnummer
     *
     * @return $this
     */
    public function setContactStreet($contactStreet)
    {
        $this->container['contactStreet'] = $contactStreet;

        return $this;
    }

    /**
     * Gets deviceLocation
     *
     * @return string
     */
    public function getDeviceLocation()
    {
        return $this->container['deviceLocation'];
    }

    /**
     * Sets deviceLocation
     *
     * @param string $deviceLocation Wo wird die Notruflösung voraussichtlich genutzt?
     *
     * @return $this
     */
    public function setDeviceLocation($deviceLocation)
    {
        $allowedValues = $this->getDeviceLocationAllowableValues();
        if (!in_array($deviceLocation, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'deviceLocation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deviceLocation'] = $deviceLocation;

        return $this;
    }

    /**
     * Gets targetPerson
     *
     * @return string
     */
    public function getTargetPerson()
    {
        return $this->container['targetPerson'];
    }

    /**
     * Sets targetPerson
     *
     * @param string $targetPerson Für wen suchen Sie?
     *
     * @return $this
     */
    public function setTargetPerson($targetPerson)
    {
        $allowedValues = $this->getTargetPersonAllowableValues();
        if (!in_array($targetPerson, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'targetPerson', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['targetPerson'] = $targetPerson;

        return $this;
    }

    /**
     * Gets emergencyContact
     *
     * @return string
     */
    public function getEmergencyContact()
    {
        return $this->container['emergencyContact'];
    }

    /**
     * Sets emergencyContact
     *
     * @param string $emergencyContact Wer soll im Notfall sofort erreicht werden?
     *
     * @return $this
     */
    public function setEmergencyContact($emergencyContact)
    {
        $allowedValues = $this->getEmergencyContactAllowableValues();
        if (!in_array($emergencyContact, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'emergencyContact', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['emergencyContact'] = $emergencyContact;

        return $this;
    }

    /**
     * Gets urgency
     *
     * @return string
     */
    public function getUrgency()
    {
        return $this->container['urgency'];
    }

    /**
     * Sets urgency
     *
     * @param string $urgency Wann wird das Notrufsystem benötigt?
     *
     * @return $this
     */
    public function setUrgency($urgency)
    {
        $allowedValues = $this->getUrgencyAllowableValues();
        if (!in_array($urgency, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'urgency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['urgency'] = $urgency;

        return $this;
    }

    /**
     * Gets carePersonCareLevel
     *
     * @return string
     */
    public function getCarePersonCareLevel()
    {
        return $this->container['carePersonCareLevel'];
    }

    /**
     * Sets carePersonCareLevel
     *
     * @param string $carePersonCareLevel Liegt ein Pflegegrad vor?
     *
     * @return $this
     */
    public function setCarePersonCareLevel($carePersonCareLevel)
    {
        $allowedValues = $this->getCarePersonCareLevelAllowableValues();
        if (!in_array($carePersonCareLevel, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'carePersonCareLevel', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['carePersonCareLevel'] = $carePersonCareLevel;

        return $this;
    }

    /**
     * Gets pageUrl
     *
     * @return string
     */
    public function getPageUrl()
    {
        return $this->container['pageUrl'];
    }

    /**
     * Sets pageUrl
     *
     * @param string $pageUrl Die URL der Seite, auf der der Lead ausgelöst wurde
     *
     * @return $this
     */
    public function setPageUrl($pageUrl)
    {
        $this->container['pageUrl'] = $pageUrl;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

