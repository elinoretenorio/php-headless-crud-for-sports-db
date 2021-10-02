<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballOffensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\BaseballOffensiveStats\{ BaseballOffensiveStatsDto, BaseballOffensiveStatsModel };

class BaseballOffensiveStatsModelTest extends TestCase
{
    private array $input;
    private BaseballOffensiveStatsDto $dto;
    private BaseballOffensiveStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 8660,
            "average" => 974.93,
            "runs_scored" => 3600,
            "at_bats" => 637,
            "hits" => 578,
            "rbi" => 5679,
            "total_bases" => 6950,
            "slugging_percentage" => 868.13,
            "bases_on_balls" => 1932,
            "strikeouts" => 8136,
            "left_on_base" => 2511,
            "left_in_scoring_position" => 2944,
            "singles" => 5939,
            "doubles" => 7602,
            "triples" => 7041,
            "home_runs" => 576,
            "grand_slams" => 9699,
            "at_bats_per_rbi" => 543.00,
            "plate_appearances_per_rbi" => 106.66,
            "at_bats_per_home_run" => 248.43,
            "plate_appearances_per_home_run" => 212.60,
            "sac_flies" => 2357,
            "sac_bunts" => 8282,
            "grounded_into_double_play" => 8336,
            "moved_up" => 8095,
            "on_base_percentage" => 947.92,
            "stolen_bases" => 4137,
            "stolen_bases_caught" => 3661,
            "stolen_bases_average" => 829.98,
            "hit_by_pitch" => 5588,
            "defensive_interferance_reaches" => 3134,
            "on_base_plus_slugging" => 588.13,
            "plate_appearances" => 750,
            "hits_extra_base" => 8692,
        ];
        $this->dto = new BaseballOffensiveStatsDto($this->input);
        $this->model = new BaseballOffensiveStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new BaseballOffensiveStatsModel(null);

        $this->assertInstanceOf(BaseballOffensiveStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 4806;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetAverage(): void
    {
        $this->assertEquals($this->dto->average, $this->model->getAverage());
    }

    public function testSetAverage(): void
    {
        $expected = 94.51;
        $model = $this->model;
        $model->setAverage($expected);

        $this->assertEquals($expected, $model->getAverage());
    }

    public function testGetRunsScored(): void
    {
        $this->assertEquals($this->dto->runsScored, $this->model->getRunsScored());
    }

    public function testSetRunsScored(): void
    {
        $expected = 7778;
        $model = $this->model;
        $model->setRunsScored($expected);

        $this->assertEquals($expected, $model->getRunsScored());
    }

    public function testGetAtBats(): void
    {
        $this->assertEquals($this->dto->atBats, $this->model->getAtBats());
    }

    public function testSetAtBats(): void
    {
        $expected = 7335;
        $model = $this->model;
        $model->setAtBats($expected);

        $this->assertEquals($expected, $model->getAtBats());
    }

    public function testGetHits(): void
    {
        $this->assertEquals($this->dto->hits, $this->model->getHits());
    }

    public function testSetHits(): void
    {
        $expected = 655;
        $model = $this->model;
        $model->setHits($expected);

        $this->assertEquals($expected, $model->getHits());
    }

    public function testGetRbi(): void
    {
        $this->assertEquals($this->dto->rbi, $this->model->getRbi());
    }

    public function testSetRbi(): void
    {
        $expected = 6080;
        $model = $this->model;
        $model->setRbi($expected);

        $this->assertEquals($expected, $model->getRbi());
    }

    public function testGetTotalBases(): void
    {
        $this->assertEquals($this->dto->totalBases, $this->model->getTotalBases());
    }

    public function testSetTotalBases(): void
    {
        $expected = 1831;
        $model = $this->model;
        $model->setTotalBases($expected);

        $this->assertEquals($expected, $model->getTotalBases());
    }

    public function testGetSluggingPercentage(): void
    {
        $this->assertEquals($this->dto->sluggingPercentage, $this->model->getSluggingPercentage());
    }

    public function testSetSluggingPercentage(): void
    {
        $expected = 678.00;
        $model = $this->model;
        $model->setSluggingPercentage($expected);

        $this->assertEquals($expected, $model->getSluggingPercentage());
    }

    public function testGetBasesOnBalls(): void
    {
        $this->assertEquals($this->dto->basesOnBalls, $this->model->getBasesOnBalls());
    }

    public function testSetBasesOnBalls(): void
    {
        $expected = 8723;
        $model = $this->model;
        $model->setBasesOnBalls($expected);

        $this->assertEquals($expected, $model->getBasesOnBalls());
    }

    public function testGetStrikeouts(): void
    {
        $this->assertEquals($this->dto->strikeouts, $this->model->getStrikeouts());
    }

    public function testSetStrikeouts(): void
    {
        $expected = 2384;
        $model = $this->model;
        $model->setStrikeouts($expected);

        $this->assertEquals($expected, $model->getStrikeouts());
    }

    public function testGetLeftOnBase(): void
    {
        $this->assertEquals($this->dto->leftOnBase, $this->model->getLeftOnBase());
    }

    public function testSetLeftOnBase(): void
    {
        $expected = 1443;
        $model = $this->model;
        $model->setLeftOnBase($expected);

        $this->assertEquals($expected, $model->getLeftOnBase());
    }

    public function testGetLeftInScoringPosition(): void
    {
        $this->assertEquals($this->dto->leftInScoringPosition, $this->model->getLeftInScoringPosition());
    }

    public function testSetLeftInScoringPosition(): void
    {
        $expected = 5028;
        $model = $this->model;
        $model->setLeftInScoringPosition($expected);

        $this->assertEquals($expected, $model->getLeftInScoringPosition());
    }

    public function testGetSingles(): void
    {
        $this->assertEquals($this->dto->singles, $this->model->getSingles());
    }

    public function testSetSingles(): void
    {
        $expected = 5575;
        $model = $this->model;
        $model->setSingles($expected);

        $this->assertEquals($expected, $model->getSingles());
    }

    public function testGetDoubles(): void
    {
        $this->assertEquals($this->dto->doubles, $this->model->getDoubles());
    }

    public function testSetDoubles(): void
    {
        $expected = 1380;
        $model = $this->model;
        $model->setDoubles($expected);

        $this->assertEquals($expected, $model->getDoubles());
    }

    public function testGetTriples(): void
    {
        $this->assertEquals($this->dto->triples, $this->model->getTriples());
    }

    public function testSetTriples(): void
    {
        $expected = 6018;
        $model = $this->model;
        $model->setTriples($expected);

        $this->assertEquals($expected, $model->getTriples());
    }

    public function testGetHomeRuns(): void
    {
        $this->assertEquals($this->dto->homeRuns, $this->model->getHomeRuns());
    }

    public function testSetHomeRuns(): void
    {
        $expected = 9903;
        $model = $this->model;
        $model->setHomeRuns($expected);

        $this->assertEquals($expected, $model->getHomeRuns());
    }

    public function testGetGrandSlams(): void
    {
        $this->assertEquals($this->dto->grandSlams, $this->model->getGrandSlams());
    }

    public function testSetGrandSlams(): void
    {
        $expected = 8580;
        $model = $this->model;
        $model->setGrandSlams($expected);

        $this->assertEquals($expected, $model->getGrandSlams());
    }

    public function testGetAtBatsPerRbi(): void
    {
        $this->assertEquals($this->dto->atBatsPerRbi, $this->model->getAtBatsPerRbi());
    }

    public function testSetAtBatsPerRbi(): void
    {
        $expected = 59.18;
        $model = $this->model;
        $model->setAtBatsPerRbi($expected);

        $this->assertEquals($expected, $model->getAtBatsPerRbi());
    }

    public function testGetPlateAppearancesPerRbi(): void
    {
        $this->assertEquals($this->dto->plateAppearancesPerRbi, $this->model->getPlateAppearancesPerRbi());
    }

    public function testSetPlateAppearancesPerRbi(): void
    {
        $expected = 104.40;
        $model = $this->model;
        $model->setPlateAppearancesPerRbi($expected);

        $this->assertEquals($expected, $model->getPlateAppearancesPerRbi());
    }

    public function testGetAtBatsPerHomeRun(): void
    {
        $this->assertEquals($this->dto->atBatsPerHomeRun, $this->model->getAtBatsPerHomeRun());
    }

    public function testSetAtBatsPerHomeRun(): void
    {
        $expected = 525.40;
        $model = $this->model;
        $model->setAtBatsPerHomeRun($expected);

        $this->assertEquals($expected, $model->getAtBatsPerHomeRun());
    }

    public function testGetPlateAppearancesPerHomeRun(): void
    {
        $this->assertEquals($this->dto->plateAppearancesPerHomeRun, $this->model->getPlateAppearancesPerHomeRun());
    }

    public function testSetPlateAppearancesPerHomeRun(): void
    {
        $expected = 938.00;
        $model = $this->model;
        $model->setPlateAppearancesPerHomeRun($expected);

        $this->assertEquals($expected, $model->getPlateAppearancesPerHomeRun());
    }

    public function testGetSacFlies(): void
    {
        $this->assertEquals($this->dto->sacFlies, $this->model->getSacFlies());
    }

    public function testSetSacFlies(): void
    {
        $expected = 8163;
        $model = $this->model;
        $model->setSacFlies($expected);

        $this->assertEquals($expected, $model->getSacFlies());
    }

    public function testGetSacBunts(): void
    {
        $this->assertEquals($this->dto->sacBunts, $this->model->getSacBunts());
    }

    public function testSetSacBunts(): void
    {
        $expected = 4824;
        $model = $this->model;
        $model->setSacBunts($expected);

        $this->assertEquals($expected, $model->getSacBunts());
    }

    public function testGetGroundedIntoDoublePlay(): void
    {
        $this->assertEquals($this->dto->groundedIntoDoublePlay, $this->model->getGroundedIntoDoublePlay());
    }

    public function testSetGroundedIntoDoublePlay(): void
    {
        $expected = 9356;
        $model = $this->model;
        $model->setGroundedIntoDoublePlay($expected);

        $this->assertEquals($expected, $model->getGroundedIntoDoublePlay());
    }

    public function testGetMovedUp(): void
    {
        $this->assertEquals($this->dto->movedUp, $this->model->getMovedUp());
    }

    public function testSetMovedUp(): void
    {
        $expected = 4396;
        $model = $this->model;
        $model->setMovedUp($expected);

        $this->assertEquals($expected, $model->getMovedUp());
    }

    public function testGetOnBasePercentage(): void
    {
        $this->assertEquals($this->dto->onBasePercentage, $this->model->getOnBasePercentage());
    }

    public function testSetOnBasePercentage(): void
    {
        $expected = 493.50;
        $model = $this->model;
        $model->setOnBasePercentage($expected);

        $this->assertEquals($expected, $model->getOnBasePercentage());
    }

    public function testGetStolenBases(): void
    {
        $this->assertEquals($this->dto->stolenBases, $this->model->getStolenBases());
    }

    public function testSetStolenBases(): void
    {
        $expected = 671;
        $model = $this->model;
        $model->setStolenBases($expected);

        $this->assertEquals($expected, $model->getStolenBases());
    }

    public function testGetStolenBasesCaught(): void
    {
        $this->assertEquals($this->dto->stolenBasesCaught, $this->model->getStolenBasesCaught());
    }

    public function testSetStolenBasesCaught(): void
    {
        $expected = 3778;
        $model = $this->model;
        $model->setStolenBasesCaught($expected);

        $this->assertEquals($expected, $model->getStolenBasesCaught());
    }

    public function testGetStolenBasesAverage(): void
    {
        $this->assertEquals($this->dto->stolenBasesAverage, $this->model->getStolenBasesAverage());
    }

    public function testSetStolenBasesAverage(): void
    {
        $expected = 423.97;
        $model = $this->model;
        $model->setStolenBasesAverage($expected);

        $this->assertEquals($expected, $model->getStolenBasesAverage());
    }

    public function testGetHitByPitch(): void
    {
        $this->assertEquals($this->dto->hitByPitch, $this->model->getHitByPitch());
    }

    public function testSetHitByPitch(): void
    {
        $expected = 8790;
        $model = $this->model;
        $model->setHitByPitch($expected);

        $this->assertEquals($expected, $model->getHitByPitch());
    }

    public function testGetDefensiveInterferanceReaches(): void
    {
        $this->assertEquals($this->dto->defensiveInterferanceReaches, $this->model->getDefensiveInterferanceReaches());
    }

    public function testSetDefensiveInterferanceReaches(): void
    {
        $expected = 4528;
        $model = $this->model;
        $model->setDefensiveInterferanceReaches($expected);

        $this->assertEquals($expected, $model->getDefensiveInterferanceReaches());
    }

    public function testGetOnBasePlusSlugging(): void
    {
        $this->assertEquals($this->dto->onBasePlusSlugging, $this->model->getOnBasePlusSlugging());
    }

    public function testSetOnBasePlusSlugging(): void
    {
        $expected = 132.00;
        $model = $this->model;
        $model->setOnBasePlusSlugging($expected);

        $this->assertEquals($expected, $model->getOnBasePlusSlugging());
    }

    public function testGetPlateAppearances(): void
    {
        $this->assertEquals($this->dto->plateAppearances, $this->model->getPlateAppearances());
    }

    public function testSetPlateAppearances(): void
    {
        $expected = 2732;
        $model = $this->model;
        $model->setPlateAppearances($expected);

        $this->assertEquals($expected, $model->getPlateAppearances());
    }

    public function testGetHitsExtraBase(): void
    {
        $this->assertEquals($this->dto->hitsExtraBase, $this->model->getHitsExtraBase());
    }

    public function testSetHitsExtraBase(): void
    {
        $expected = 7654;
        $model = $this->model;
        $model->setHitsExtraBase($expected);

        $this->assertEquals($expected, $model->getHitsExtraBase());
    }

    public function testToDto(): void
    {
        $this->assertEquals($this->dto, $this->model->toDto());
    }

    public function testJsonSerialize(): void
    {
        $this->assertEquals($this->input, $this->model->jsonSerialize());
    }
}