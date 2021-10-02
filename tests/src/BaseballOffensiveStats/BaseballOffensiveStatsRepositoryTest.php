<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballOffensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\BaseballOffensiveStats\{ BaseballOffensiveStatsDto, IBaseballOffensiveStatsRepository, BaseballOffensiveStatsRepository };

class BaseballOffensiveStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private BaseballOffensiveStatsDto $dto;
    private IBaseballOffensiveStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 7337,
            "average" => 747.00,
            "runs_scored" => 4148,
            "at_bats" => 543,
            "hits" => 902,
            "rbi" => 3343,
            "total_bases" => 5447,
            "slugging_percentage" => 486.00,
            "bases_on_balls" => 8522,
            "strikeouts" => 7697,
            "left_on_base" => 9819,
            "left_in_scoring_position" => 3249,
            "singles" => 7431,
            "doubles" => 360,
            "triples" => 4856,
            "home_runs" => 27,
            "grand_slams" => 2098,
            "at_bats_per_rbi" => 379.84,
            "plate_appearances_per_rbi" => 180.51,
            "at_bats_per_home_run" => 473.41,
            "plate_appearances_per_home_run" => 752.54,
            "sac_flies" => 5623,
            "sac_bunts" => 9752,
            "grounded_into_double_play" => 7090,
            "moved_up" => 1461,
            "on_base_percentage" => 372.50,
            "stolen_bases" => 2074,
            "stolen_bases_caught" => 9797,
            "stolen_bases_average" => 237.36,
            "hit_by_pitch" => 9310,
            "defensive_interferance_reaches" => 797,
            "on_base_plus_slugging" => 964.83,
            "plate_appearances" => 2920,
            "hits_extra_base" => 7989,
        ];
        $this->dto = new BaseballOffensiveStatsDto($this->input);
        $this->repository = new BaseballOffensiveStatsRepository($this->db);
    }

    protected function tearDown(): void
    {
        unset($this->db);
        unset($this->result);
        unset($this->input);
        unset($this->dto);
        unset($this->repository);
    }

    public function testInsert_ReturnsFailedOnException(): void
    {
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->insert($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testInsert_ReturnsId(): void
    {
        $expected = 9345;

        $sql = "INSERT INTO `baseball_offensive_stats` (`average`, `runs_scored`, `at_bats`, `hits`, `rbi`, `total_bases`, `slugging_percentage`, `bases_on_balls`, `strikeouts`, `left_on_base`, `left_in_scoring_position`, `singles`, `doubles`, `triples`, `home_runs`, `grand_slams`, `at_bats_per_rbi`, `plate_appearances_per_rbi`, `at_bats_per_home_run`, `plate_appearances_per_home_run`, `sac_flies`, `sac_bunts`, `grounded_into_double_play`, `moved_up`, `on_base_percentage`, `stolen_bases`, `stolen_bases_caught`, `stolen_bases_average`, `hit_by_pitch`, `defensive_interferance_reaches`, `on_base_plus_slugging`, `plate_appearances`, `hits_extra_base`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->average,
                $this->dto->runsScored,
                $this->dto->atBats,
                $this->dto->hits,
                $this->dto->rbi,
                $this->dto->totalBases,
                $this->dto->sluggingPercentage,
                $this->dto->basesOnBalls,
                $this->dto->strikeouts,
                $this->dto->leftOnBase,
                $this->dto->leftInScoringPosition,
                $this->dto->singles,
                $this->dto->doubles,
                $this->dto->triples,
                $this->dto->homeRuns,
                $this->dto->grandSlams,
                $this->dto->atBatsPerRbi,
                $this->dto->plateAppearancesPerRbi,
                $this->dto->atBatsPerHomeRun,
                $this->dto->plateAppearancesPerHomeRun,
                $this->dto->sacFlies,
                $this->dto->sacBunts,
                $this->dto->groundedIntoDoublePlay,
                $this->dto->movedUp,
                $this->dto->onBasePercentage,
                $this->dto->stolenBases,
                $this->dto->stolenBasesCaught,
                $this->dto->stolenBasesAverage,
                $this->dto->hitByPitch,
                $this->dto->defensiveInterferanceReaches,
                $this->dto->onBasePlusSlugging,
                $this->dto->plateAppearances,
                $this->dto->hitsExtraBase
            ]);
        $this->db->expects($this->once())
            ->method("lastInsertId")
            ->willReturn($expected);

        $actual = $this->repository->insert($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testUpdate_ReturnsFailedOnException(): void
    {
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->update($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testUpdate_ReturnsRowCount(): void
    {
        $expected = 7177;

        $sql = "UPDATE `baseball_offensive_stats` SET `average` = ?, `runs_scored` = ?, `at_bats` = ?, `hits` = ?, `rbi` = ?, `total_bases` = ?, `slugging_percentage` = ?, `bases_on_balls` = ?, `strikeouts` = ?, `left_on_base` = ?, `left_in_scoring_position` = ?, `singles` = ?, `doubles` = ?, `triples` = ?, `home_runs` = ?, `grand_slams` = ?, `at_bats_per_rbi` = ?, `plate_appearances_per_rbi` = ?, `at_bats_per_home_run` = ?, `plate_appearances_per_home_run` = ?, `sac_flies` = ?, `sac_bunts` = ?, `grounded_into_double_play` = ?, `moved_up` = ?, `on_base_percentage` = ?, `stolen_bases` = ?, `stolen_bases_caught` = ?, `stolen_bases_average` = ?, `hit_by_pitch` = ?, `defensive_interferance_reaches` = ?, `on_base_plus_slugging` = ?, `plate_appearances` = ?, `hits_extra_base` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->average,
                $this->dto->runsScored,
                $this->dto->atBats,
                $this->dto->hits,
                $this->dto->rbi,
                $this->dto->totalBases,
                $this->dto->sluggingPercentage,
                $this->dto->basesOnBalls,
                $this->dto->strikeouts,
                $this->dto->leftOnBase,
                $this->dto->leftInScoringPosition,
                $this->dto->singles,
                $this->dto->doubles,
                $this->dto->triples,
                $this->dto->homeRuns,
                $this->dto->grandSlams,
                $this->dto->atBatsPerRbi,
                $this->dto->plateAppearancesPerRbi,
                $this->dto->atBatsPerHomeRun,
                $this->dto->plateAppearancesPerHomeRun,
                $this->dto->sacFlies,
                $this->dto->sacBunts,
                $this->dto->groundedIntoDoublePlay,
                $this->dto->movedUp,
                $this->dto->onBasePercentage,
                $this->dto->stolenBases,
                $this->dto->stolenBasesCaught,
                $this->dto->stolenBasesAverage,
                $this->dto->hitByPitch,
                $this->dto->defensiveInterferanceReaches,
                $this->dto->onBasePlusSlugging,
                $this->dto->plateAppearances,
                $this->dto->hitsExtraBase,
                $this->dto->id
            ]);
        $this->result->expects($this->once())
            ->method("rowCount")
            ->willReturn($expected);

        $actual = $this->repository->update($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testGet_ReturnsEmptyOnException(): void
    {
        $id = 2169;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 386;

        $sql = "SELECT `id`, `average`, `runs_scored`, `at_bats`, `hits`, `rbi`, `total_bases`, `slugging_percentage`, `bases_on_balls`, `strikeouts`, `left_on_base`, `left_in_scoring_position`, `singles`, `doubles`, `triples`, `home_runs`, `grand_slams`, `at_bats_per_rbi`, `plate_appearances_per_rbi`, `at_bats_per_home_run`, `plate_appearances_per_home_run`, `sac_flies`, `sac_bunts`, `grounded_into_double_play`, `moved_up`, `on_base_percentage`, `stolen_bases`, `stolen_bases_caught`, `stolen_bases_average`, `hit_by_pitch`, `defensive_interferance_reaches`, `on_base_plus_slugging`, `plate_appearances`, `hits_extra_base`
                FROM `baseball_offensive_stats` WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([$id]);
        $this->result->expects($this->once())
            ->method("fetchAll")
            ->willReturn([$this->input]);

        $actual = $this->repository->get($id);
        $this->assertEquals($this->dto, $actual);
    }

    public function testGetAll_ReturnsEmptyOnException(): void
    {
        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->getAll();
        $this->assertEmpty($actual);
    }

    public function testGetAll_ReturnsDtos(): void
    {
        $sql = "SELECT `id`, `average`, `runs_scored`, `at_bats`, `hits`, `rbi`, `total_bases`, `slugging_percentage`, `bases_on_balls`, `strikeouts`, `left_on_base`, `left_in_scoring_position`, `singles`, `doubles`, `triples`, `home_runs`, `grand_slams`, `at_bats_per_rbi`, `plate_appearances_per_rbi`, `at_bats_per_home_run`, `plate_appearances_per_home_run`, `sac_flies`, `sac_bunts`, `grounded_into_double_play`, `moved_up`, `on_base_percentage`, `stolen_bases`, `stolen_bases_caught`, `stolen_bases_average`, `hit_by_pitch`, `defensive_interferance_reaches`, `on_base_plus_slugging`, `plate_appearances`, `hits_extra_base`
                FROM `baseball_offensive_stats`";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute");
        $this->result->expects($this->once())
            ->method("fetchAll")
            ->willReturn([$this->input]);

        $actual = $this->repository->getAll();
        $this->assertEquals([$this->dto], $actual);
    }

    public function testDelete_ReturnsFailedOnException(): void
    {
        $id = 3977;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 6367;
        $expected = 1747;

        $sql = "DELETE FROM `baseball_offensive_stats` WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([$id]);
        $this->result->expects($this->once())
            ->method("rowCount")
            ->willReturn($expected);

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }
}