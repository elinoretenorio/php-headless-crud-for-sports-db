<?php

declare(strict_types=1);

namespace Sports\Tests\IceHockeyDefensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\IceHockeyDefensiveStats\{ IceHockeyDefensiveStatsDto, IIceHockeyDefensiveStatsRepository, IceHockeyDefensiveStatsRepository };

class IceHockeyDefensiveStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private IceHockeyDefensiveStatsDto $dto;
    private IIceHockeyDefensiveStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 8275,
            "shots_power_play_allowed" => "environment",
            "shots_penalty_shot_allowed" => "trial",
            "goals_power_play_allowed" => "event",
            "goals_penalty_shot_allowed" => "anyone",
            "goals_against_average" => "because",
            "saves" => "describe",
            "save_percentage" => "five",
            "penalty_killing_amount" => "series",
            "penalty_killing_percentage" => "realize",
            "shots_blocked" => "once",
            "takeaways" => "dark",
            "shutouts" => "artist",
            "minutes_penalty_killing" => "student",
            "hits" => "move",
            "goals_empty_net_allowed" => "increase",
            "goals_short_handed_allowed" => "scientist",
            "goals_shootout_allowed" => "certainly",
            "shots_shootout_allowed" => "else",
        ];
        $this->dto = new IceHockeyDefensiveStatsDto($this->input);
        $this->repository = new IceHockeyDefensiveStatsRepository($this->db);
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
        $expected = 827;

        $sql = "INSERT INTO `ice_hockey_defensive_stats` (`shots_power_play_allowed`, `shots_penalty_shot_allowed`, `goals_power_play_allowed`, `goals_penalty_shot_allowed`, `goals_against_average`, `saves`, `save_percentage`, `penalty_killing_amount`, `penalty_killing_percentage`, `shots_blocked`, `takeaways`, `shutouts`, `minutes_penalty_killing`, `hits`, `goals_empty_net_allowed`, `goals_short_handed_allowed`, `goals_shootout_allowed`, `shots_shootout_allowed`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->shotsPowerPlayAllowed,
                $this->dto->shotsPenaltyShotAllowed,
                $this->dto->goalsPowerPlayAllowed,
                $this->dto->goalsPenaltyShotAllowed,
                $this->dto->goalsAgainstAverage,
                $this->dto->saves,
                $this->dto->savePercentage,
                $this->dto->penaltyKillingAmount,
                $this->dto->penaltyKillingPercentage,
                $this->dto->shotsBlocked,
                $this->dto->takeaways,
                $this->dto->shutouts,
                $this->dto->minutesPenaltyKilling,
                $this->dto->hits,
                $this->dto->goalsEmptyNetAllowed,
                $this->dto->goalsShortHandedAllowed,
                $this->dto->goalsShootoutAllowed,
                $this->dto->shotsShootoutAllowed
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
        $expected = 3363;

        $sql = "UPDATE `ice_hockey_defensive_stats` SET `shots_power_play_allowed` = ?, `shots_penalty_shot_allowed` = ?, `goals_power_play_allowed` = ?, `goals_penalty_shot_allowed` = ?, `goals_against_average` = ?, `saves` = ?, `save_percentage` = ?, `penalty_killing_amount` = ?, `penalty_killing_percentage` = ?, `shots_blocked` = ?, `takeaways` = ?, `shutouts` = ?, `minutes_penalty_killing` = ?, `hits` = ?, `goals_empty_net_allowed` = ?, `goals_short_handed_allowed` = ?, `goals_shootout_allowed` = ?, `shots_shootout_allowed` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->shotsPowerPlayAllowed,
                $this->dto->shotsPenaltyShotAllowed,
                $this->dto->goalsPowerPlayAllowed,
                $this->dto->goalsPenaltyShotAllowed,
                $this->dto->goalsAgainstAverage,
                $this->dto->saves,
                $this->dto->savePercentage,
                $this->dto->penaltyKillingAmount,
                $this->dto->penaltyKillingPercentage,
                $this->dto->shotsBlocked,
                $this->dto->takeaways,
                $this->dto->shutouts,
                $this->dto->minutesPenaltyKilling,
                $this->dto->hits,
                $this->dto->goalsEmptyNetAllowed,
                $this->dto->goalsShortHandedAllowed,
                $this->dto->goalsShootoutAllowed,
                $this->dto->shotsShootoutAllowed,
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
        $id = 7892;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 9129;

        $sql = "SELECT `id`, `shots_power_play_allowed`, `shots_penalty_shot_allowed`, `goals_power_play_allowed`, `goals_penalty_shot_allowed`, `goals_against_average`, `saves`, `save_percentage`, `penalty_killing_amount`, `penalty_killing_percentage`, `shots_blocked`, `takeaways`, `shutouts`, `minutes_penalty_killing`, `hits`, `goals_empty_net_allowed`, `goals_short_handed_allowed`, `goals_shootout_allowed`, `shots_shootout_allowed`
                FROM `ice_hockey_defensive_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `shots_power_play_allowed`, `shots_penalty_shot_allowed`, `goals_power_play_allowed`, `goals_penalty_shot_allowed`, `goals_against_average`, `saves`, `save_percentage`, `penalty_killing_amount`, `penalty_killing_percentage`, `shots_blocked`, `takeaways`, `shutouts`, `minutes_penalty_killing`, `hits`, `goals_empty_net_allowed`, `goals_short_handed_allowed`, `goals_shootout_allowed`, `shots_shootout_allowed`
                FROM `ice_hockey_defensive_stats`";

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
        $id = 599;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 1599;
        $expected = 3089;

        $sql = "DELETE FROM `ice_hockey_defensive_stats` WHERE `id` = ?";

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