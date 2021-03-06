<?php


declare(strict_types=1);

namespace Doctrine\ORM\Mapping;

/**
 * Class CacheMetadata
 *
 * @package Doctrine\ORM\Mapping
 * @since 3.0
 *
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 */
class CacheMetadata
{
    /** @var string */
    private $usage;

    /** @var string */
    private $region;

    /**
     * Constructor.
     *
     * @param string $usage
     * @param string $region
     */
    public function __construct(string $usage, string $region)
    {
        $this->usage  = $usage;
        $this->region = $region;
    }

    /**
     * @return string
     */
    public function getUsage() : string
    {
        return $this->usage;
    }

    /**
     * @return string
     */
    public function getRegion() : string
    {
        return $this->region;
    }
}
