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
        $data = (array) $rawResponse;

        // Mapper les propriétés connues
        $this->name = $data['Name'] ?? $data['name'] ?? '';
        $this->street = $data['Street'] ?? $data['street'] ?? '';
        $this->town = $data['Town'] ?? $data['town'] ?? '';
        $this->phone = $data['Phone'] ?? $data['phone'] ?? null;
        $this->comment = $data['Comment'] ?? $data['comment'] ?? null;
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
