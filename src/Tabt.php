<?php

namespace Yoerioptr\TabtApiClient;

use Yoerioptr\TabtApiClient\Client\ClientInterface;
use Yoerioptr\TabtApiClient\Repository\ClubRepository;
use Yoerioptr\TabtApiClient\Repository\DivisionRepository;
use Yoerioptr\TabtApiClient\Repository\MatchRepository;
use Yoerioptr\TabtApiClient\Repository\MemberRepository;
use Yoerioptr\TabtApiClient\Repository\SeasonRepository;
use Yoerioptr\TabtApiClient\Repository\TestRepository;
use Yoerioptr\TabtApiClient\Repository\TournamentRepository;

/**
 * Class Tabt
 *
 * @package Yoerioptr\TabtApiClient
 */
final class Tabt implements TabtInterface
{

    /**
     * @var ClientInterface
     */
    private ClientInterface $client;

    /**
     * Tabt constructor.
     *
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * {@inheritDoc}
     */
    public function test(): TestRepository
    {
        return new TestRepository($this->client);
    }

    /**
     * {@inheritDoc}
     */
    public function seasons(): SeasonRepository
    {
        return new SeasonRepository($this->client);
    }

    /**
     * {@inheritDoc}
     */
    public function clubs(): ClubRepository
    {
        return new ClubRepository($this->client);
    }

    /**
     * {@inheritDoc}
     */
    public function divisions(): DivisionRepository
    {
        return new DivisionRepository($this->client);
    }

    /**
     * {@inheritDoc}
     */
    public function matches(): MatchRepository
    {
        return new MatchRepository($this->client);
    }

    /**
     * {@inheritDoc}
     */
    public function members(): MemberRepository
    {
        return new MemberRepository($this->client);
    }

    /**
     * {@inheritDoc}
     */
    public function tournaments(): TournamentRepository
    {
        return new TournamentRepository($this->client);
    }

}
