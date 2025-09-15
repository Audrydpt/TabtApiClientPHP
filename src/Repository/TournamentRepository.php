<?php

namespace Yoerioptr\TabtApiClient\Repository;

use Yoerioptr\TabtApiClient\Request\GetTournamentsRequest;
use Yoerioptr\TabtApiClient\Response\GetTournamentsResponse;

/**
 * Class TournamentRepository
 */
final class TournamentRepository extends RepositoryBase
{
    /**
     * @param array $parameters
     * @return GetTournamentsResponse
     */
    public function listTournamentsBy(array $parameters): GetTournamentsResponse
    {
        $request = new GetTournamentsRequest($parameters);
        return $this->client->handleRequest($request);
    }

    /**
     * @param int $season
     * @return GetTournamentsResponse
     */
    public function listTournamentsBySeason(int $season): GetTournamentsResponse
    {
        return $this->listTournamentsBy(['Season' => $season]);
    }

    /**
     * @param int $tournamentUniqueIndex
     * @param bool $withResults
     * @param bool $withRegistrations
     * @return GetTournamentsResponse
     */
    public function getTournament(int $tournamentUniqueIndex, bool $withResults = false, bool $withRegistrations = false): GetTournamentsResponse
    {
        $params = [
            'TournamentUniqueIndex' => $tournamentUniqueIndex,
        ];
        if ($withResults) {
            $params['WithResults'] = true;
        }
        if ($withRegistrations) {
            $params['WithRegistrations'] = true;
        }
        return $this->listTournamentsBy($params);
    }
}

