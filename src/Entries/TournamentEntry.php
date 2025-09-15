<?php

namespace Yoerioptr\TabtApiClient\Entries;

use DateTime;
use Exception;

/**
 * Class TournamentEntry
 *
 * Représente un tournoi retourné par l'API TabT.
 */
final class TournamentEntry
{
    /**
     * @var int
     */
    private int $uniqueIndex;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string|null Format AAAA-MM-JJ ou AAAA-MM-JJTHH:MM:SS selon l'API
     */
    private ?string $dateFrom = null;

    /**
     * @var string|null
     */
    private ?string $dateTo = null;

    /**
     * @var string|null
     */
    private ?string $registrationDate = null;

    /**
     * @var string|null
     */
    private ?string $venue = null;

    /**
     * @var string|null
     */
    private ?string $address = null;

    /**
     * TournamentEntry constructor.
     *
     * @param mixed $rawResponse
     */
    public function __construct($rawResponse)
    {
        foreach ((array)$rawResponse as $key => $value) {
            $property = lcfirst($key);
            if (property_exists($this, $property)) {
                // Pour les propriétés string qui pourraient être des objets (venue, address)
                if (in_array($property, ['venue', 'address']) && is_object($value)) {
                    $this->$property = json_encode($value); // ou (string) $value si possible
                } else {
                    $this->$property = $value;
                }
            }
            // Sinon, ignorer les propriétés inconnues
        }
    }

    public function getUniqueIndex(): int
    {
        return $this->uniqueIndex;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return DateTime|null
     */
    public function getDateFrom(): ?DateTime
    {
        return $this->toDateTime($this->dateFrom);
    }

    /**
     * @return DateTime|null
     */
    public function getDateTo(): ?DateTime
    {
        return $this->toDateTime($this->dateTo);
    }

    /**
     * @return DateTime|null
     */
    public function getRegistrationDate(): ?DateTime
    {
        return $this->toDateTime($this->registrationDate);
    }

    public function getVenue(): ?string
    {
        return $this->venue;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * Conversion sûre en DateTime.
     *
     * @param string|null $value
     * @return DateTime|null
     */
    private function toDateTime(?string $value): ?DateTime
    {
        if ($value === null || $value === '') {
            return null;
        }
        try {
            return new DateTime($value);
        } catch (Exception $e) {
            return null;
        }
    }
}
