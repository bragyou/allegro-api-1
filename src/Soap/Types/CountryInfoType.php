<?php

namespace Ircykk\AllegroApi;

class CountryInfoType
{

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var string $countryName
     */
    protected $countryName = null;

    /**
     * @param int $countryId
     * @param string $countryName
     */
    public function __construct($countryId = null, $countryName = null)
    {
      $this->countryId = $countryId;
      $this->countryName = $countryName;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
      return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return \Ircykk\AllegroApi\CountryInfoType
     */
    public function setCountryId($countryId)
    {
      $this->countryId = $countryId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
      return $this->countryName;
    }

    /**
     * @param string $countryName
     * @return \Ircykk\AllegroApi\CountryInfoType
     */
    public function setCountryName($countryName)
    {
      $this->countryName = $countryName;
      return $this;
    }

}
