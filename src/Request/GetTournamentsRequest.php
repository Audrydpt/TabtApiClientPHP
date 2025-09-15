<?php

namespace Yoerioptr\TabtApiClient\Request;

use Yoerioptr\TabtApiClient\Response\GetTournamentsResponse;

/**
 * Class GetTournamentsRequest
 */
final class GetTournamentsRequest extends RequestBase
{
    /**
     * {@inheritDoc}
     */
    public function getEndpoint(): string
    {
        return 'GetTournaments';
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseClass(): string
    {
        return GetTournamentsResponse::class;
    }
}

