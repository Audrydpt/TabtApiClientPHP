<?php

namespace Yoerioptr\TabtApiClient\Entries;

/**
 * Class VenueEntry
 *
 * @package Yoerioptr\TabtApiClient\Entries
 */
final class VenueEntry
{
    private string $name = '';
    private string $street = '';
    private string $town = '';
    private ?string $phone = null;
    private ?string $comment = null;

    /**
     * VenueEntry constructor.
     *
     * @param $rawResponse
     */
    public function __construct($rawResponse)
    {
        // Pour debug temporaire
        var_dump($rawResponse); exit;

        // Si $rawResponse est un stdClass, accès direct
        $this->name = $rawResponse->Name ?? $rawResponse->name ?? '';
        $this->street = $rawResponse->Street ?? $rawResponse->street ?? '';
        $this->town = $rawResponse->Town ?? $rawResponse->town ?? '';
        $this->phone = $rawResponse->Phone ?? $rawResponse->phone ?? null;
        $this->comment = $rawResponse->Comment ?? $rawResponse->comment ?? null;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getTown(): string
    {
        return $this->town;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

}
