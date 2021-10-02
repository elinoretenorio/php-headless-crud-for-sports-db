<?php

declare(strict_types=1);

namespace Sports\Tests\MotorRacingRaceStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\MotorRacingRaceStats\{ MotorRacingRaceStatsDto, IMotorRacingRaceStatsRepository, MotorRacingRaceStatsRepository };

class MotorRacingRaceStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private MotorRacingRaceStatsDto $dto;
    private IMotorRacingRaceStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 9870,
            "time_behind_leader" => "many",
            "laps_behind_leader" => "amount",
            "time_ahead_follower" => "rule",
            "laps_ahead_follower" => "education",
            "time" => "art",
            "points" => "protect",
            "points_rookie" => "enough",
            "bonus" => "trouble",
            "laps_completed" => "when",
            "laps_leading_total" => "able",
            "distance_leading" => "account",
            "distance_completed" => "get",
            "distance_units" => "some",
            "speed_average" => "effort",
            "speed_units" => "out",
            "status" => "practice",
            "finishes_top_5" => "drop",
            "finishes_top_10" => "popular",
            "starts" => "above",
            "finishes" => "for",
            "non_finishes" => "organization",
            "wins" => "sport",
            "races_leading" => "member",
            "money" => "lot",
            "money_units" => "responsibility",
            "leads_total" => "wrong",
        ];
        $this->dto = new MotorRacingRaceStatsDto($this->input);
        $this->repository = new MotorRacingRaceStatsRepository($this->db);
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
        $expected = 3392;

        $sql = "INSERT INTO `motor_racing_race_stats` (`time_behind_leader`, `laps_behind_leader`, `time_ahead_follower`, `laps_ahead_follower`, `time`, `points`, `points_rookie`, `bonus`, `laps_completed`, `laps_leading_total`, `distance_leading`, `distance_completed`, `distance_units`, `speed_average`, `speed_units`, `status`, `finishes_top_5`, `finishes_top_10`, `starts`, `finishes`, `non_finishes`, `wins`, `races_leading`, `money`, `money_units`, `leads_total`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->timeBehindLeader,
                $this->dto->lapsBehindLeader,
                $this->dto->timeAheadFollower,
                $this->dto->lapsAheadFollower,
                $this->dto->time,
                $this->dto->points,
                $this->dto->pointsRookie,
                $this->dto->bonus,
                $this->dto->lapsCompleted,
                $this->dto->lapsLeadingTotal,
                $this->dto->distanceLeading,
                $this->dto->distanceCompleted,
                $this->dto->distanceUnits,
                $this->dto->speedAverage,
                $this->dto->speedUnits,
                $this->dto->status,
                $this->dto->finishesTop5,
                $this->dto->finishesTop10,
                $this->dto->starts,
                $this->dto->finishes,
                $this->dto->nonFinishes,
                $this->dto->wins,
                $this->dto->racesLeading,
                $this->dto->money,
                $this->dto->moneyUnits,
                $this->dto->leadsTotal
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
        $expected = 6061;

        $sql = "UPDATE `motor_racing_race_stats` SET `time_behind_leader` = ?, `laps_behind_leader` = ?, `time_ahead_follower` = ?, `laps_ahead_follower` = ?, `time` = ?, `points` = ?, `points_rookie` = ?, `bonus` = ?, `laps_completed` = ?, `laps_leading_total` = ?, `distance_leading` = ?, `distance_completed` = ?, `distance_units` = ?, `speed_average` = ?, `speed_units` = ?, `status` = ?, `finishes_top_5` = ?, `finishes_top_10` = ?, `starts` = ?, `finishes` = ?, `non_finishes` = ?, `wins` = ?, `races_leading` = ?, `money` = ?, `money_units` = ?, `leads_total` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->timeBehindLeader,
                $this->dto->lapsBehindLeader,
                $this->dto->timeAheadFollower,
                $this->dto->lapsAheadFollower,
                $this->dto->time,
                $this->dto->points,
                $this->dto->pointsRookie,
                $this->dto->bonus,
                $this->dto->lapsCompleted,
                $this->dto->lapsLeadingTotal,
                $this->dto->distanceLeading,
                $this->dto->distanceCompleted,
                $this->dto->distanceUnits,
                $this->dto->speedAverage,
                $this->dto->speedUnits,
                $this->dto->status,
                $this->dto->finishesTop5,
                $this->dto->finishesTop10,
                $this->dto->starts,
                $this->dto->finishes,
                $this->dto->nonFinishes,
                $this->dto->wins,
                $this->dto->racesLeading,
                $this->dto->money,
                $this->dto->moneyUnits,
                $this->dto->leadsTotal,
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
        $id = 4999;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 4774;

        $sql = "SELECT `id`, `time_behind_leader`, `laps_behind_leader`, `time_ahead_follower`, `laps_ahead_follower`, `time`, `points`, `points_rookie`, `bonus`, `laps_completed`, `laps_leading_total`, `distance_leading`, `distance_completed`, `distance_units`, `speed_average`, `speed_units`, `status`, `finishes_top_5`, `finishes_top_10`, `starts`, `finishes`, `non_finishes`, `wins`, `races_leading`, `money`, `money_units`, `leads_total`
                FROM `motor_racing_race_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `time_behind_leader`, `laps_behind_leader`, `time_ahead_follower`, `laps_ahead_follower`, `time`, `points`, `points_rookie`, `bonus`, `laps_completed`, `laps_leading_total`, `distance_leading`, `distance_completed`, `distance_units`, `speed_average`, `speed_units`, `status`, `finishes_top_5`, `finishes_top_10`, `starts`, `finishes`, `non_finishes`, `wins`, `races_leading`, `money`, `money_units`, `leads_total`
                FROM `motor_racing_race_stats`";

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
        $id = 7244;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 2554;
        $expected = 4241;

        $sql = "DELETE FROM `motor_racing_race_stats` WHERE `id` = ?";

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