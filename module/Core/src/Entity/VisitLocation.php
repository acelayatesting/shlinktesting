<?php
declare(strict_types=1);

namespace Shlinkio\Shlink\Core\Entity;

use Doctrine\ORM\Mapping as ORM;
use Shlinkio\Shlink\Common\Entity\AbstractEntity;
use Zend\Stdlib\ArraySerializableInterface;

/**
 * Class VisitLocation
 * @author
 * @link
 *
 * @ORM\Entity()
 * @ORM\Table(name="visit_locations")
 */
class VisitLocation extends AbstractEntity implements ArraySerializableInterface, \JsonSerializable
{
    /**
     * @var string
     * @ORM\Column(nullable=true)
     */
    private $countryCode;
    /**
     * @var string
     * @ORM\Column(nullable=true)
     */
    private $countryName;
    /**
     * @var string
     * @ORM\Column(nullable=true)
     */
    private $regionName;
    /**
     * @var string
     * @ORM\Column(nullable=true)
     */
    private $cityName;
    /**
     * @var string
     * @ORM\Column(nullable=true)
     */
    private $latitude;
    /**
     * @var string
     * @ORM\Column(nullable=true)
     */
    private $longitude;
    /**
     * @var string
     * @ORM\Column(nullable=true)
     */
    private $timezone;

    public function getCountryCode(): string
    {
        return $this->countryCode ?? '';
    }

    public function setCountryCode(string $countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getCountryName(): string
    {
        return $this->countryName ?? '';
    }

    public function setCountryName(string $countryName): self
    {
        $this->countryName = $countryName;
        return $this;
    }

    public function getRegionName(): string
    {
        return $this->regionName ?? '';
    }

    public function setRegionName(string $regionName): self
    {
        $this->regionName = $regionName;
        return $this;
    }

    public function getCityName(): string
    {
        return $this->cityName ?? '';
    }

    public function setCityName(string $cityName): self
    {
        $this->cityName = $cityName;
        return $this;
    }

    public function getLatitude(): string
    {
        return $this->latitude ?? '';
    }

    public function setLatitude(string $latitude): self
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude(): string
    {
        return $this->longitude ?? '';
    }

    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function getTimezone(): string
    {
        return $this->timezone ?? '';
    }

    public function setTimezone(string $timezone): self
    {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * Exchange internal values from provided array
     */
    public function exchangeArray(array $array): void
    {
        if (\array_key_exists('country_code', $array)) {
            $this->setCountryCode($array['country_code']);
        }
        if (\array_key_exists('country_name', $array)) {
            $this->setCountryName($array['country_name']);
        }
        if (\array_key_exists('region_name', $array)) {
            $this->setRegionName($array['region_name']);
        }
        if (\array_key_exists('city', $array)) {
            $this->setCityName($array['city']);
        }
        if (\array_key_exists('latitude', $array)) {
            $this->setLatitude($array['latitude']);
        }
        if (\array_key_exists('longitude', $array)) {
            $this->setLongitude($array['longitude']);
        }
        if (\array_key_exists('time_zone', $array)) {
            $this->setTimezone($array['time_zone']);
        }
    }

    /**
     * Return an array representation of the object
     */
    public function getArrayCopy(): array
    {
        return [
            'countryCode' => $this->countryCode,
            'countryName' => $this->countryName,
            'regionName' => $this->regionName,
            'cityName' => $this->cityName,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'timezone' => $this->timezone,
        ];
    }

    public function jsonSerialize(): array
    {
        return $this->getArrayCopy();
    }
}
