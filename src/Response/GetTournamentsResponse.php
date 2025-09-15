<?php

namespace Yoerioptr\TabtApiClient\Response;

use Yoerioptr\TabtApiClient\Entries\TournamentEntry;

/**
 * Class GetTournamentsResponse
 */
final class GetTournamentsResponse implements ResponseInterface
{
    /**
     * @var int
     */
    private int $tournamentCount = 0;

    /**
     * @var TournamentEntry[]
     */
    private array $tournamentEntries = [];

    /**
     * @param mixed $rawResponse
     */
    public function __construct($rawResponse)
    {
        foreach ((array)$rawResponse as $key => $value) {
            if ($key !== 'TournamentEntries') {
                $property = lcfirst($key);
                $this->$property = $value;
                continue;
            }

            $items = is_array($value) ? $value : [$value];
            foreach ($items as $entry) {
                $this->tournamentEntries[] = new TournamentEntry($entry);
            }
        }
    }

    public function getTournamentCount(): int
    {
        return $this->tournamentCount;
    }

    /**
     * @return TournamentEntry[]
     */
    public function getTournamentEntries(): array
    {
        return $this->tournamentEntries;
    }
}

