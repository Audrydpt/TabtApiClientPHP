<?php

namespace Yoerioptr\TabtApiClient;

use Yoerioptr\TabtApiClient\Repository\ClubRepository;
use Yoerioptr\TabtApiClient\Repository\DivisionRepository;
use Yoerioptr\TabtApiClient\Repository\MatchRepository;
use Yoerioptr\TabtApiClient\Repository\MemberRepository;
use Yoerioptr\TabtApiClient\Repository\SeasonRepository;
use Yoerioptr\TabtApiClient\Repository\TestRepository;
use Yoerioptr\TabtApiClient\Repository\TournamentRepository;

/**
 * Interface TabtInterface
 *
 * @package Yoerioptr\TabtApiClient
 */
interface TabtInterface
{

    /**
     * @return TestRepository
     */
    public function test(): TestRepository;

    /**
     * @return SeasonRepository
     */
    public function seasons(): SeasonRepository;

    /**
     * @return ClubRepository
     */
    public function clubs(): ClubRepository;

    /**
     * @return DivisionRepository
     */
    public function divisions(): DivisionRepository;

    /**
     * @return MatchRepository
     */
    public function matches(): MatchRepository;

    /**
     * @return MemberRepository
     */
    public function members(): MemberRepository;

    /**
     * @return TournamentRepository
     */
    public function tournaments(): TournamentRepository;

}
