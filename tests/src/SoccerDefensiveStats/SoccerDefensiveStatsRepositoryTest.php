<?php

declare(strict_types=1);

namespace Sports\Tests\SoccerDefensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\SoccerDefensiveStats\{ SoccerDefensiveStatsDto, ISoccerDefensiveStatsRepository, SoccerDefensiveStatsRepository };

class SoccerDefensiveStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private SoccerDefensiveStatsDto $dto;
    private ISoccerDefensiveStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 6450,
            "shots_penalty_shot_allowed" => "seem",
            "goals_penalty_shot_allowed" => "begin",
            "goals_against_average" => "charge",
            "goals_against_total" => "single",
            "saves" => "religious",
            "save_percentage" => "parent",
            "catches_punches" => "statement",
            "shots_on_goal_total" => "fall",
            "shots_shootout_total" => "bring",
            "shots_shootout_allowed" => "commercial",
            "shots_blocked" => "stand",
            "shutouts" => "result",
        ];
        $this->dto = new SoccerDefensiveStatsDto($this->input);
        $this->repository = new SoccerDefensiveStatsRepository($this->db);
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
        $expected = 1982;

        $sql = "INSERT INTO `soccer_defensive_stats` (`shots_penalty_shot_allowed`, `goals_penalty_shot_allowed`, `goals_against_average`, `goals_against_total`, `saves`, `save_percentage`, `catches_punches`, `shots_on_goal_total`, `shots_shootout_total`, `shots_shootout_allowed`, `shots_blocked`, `shutouts`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->shotsPenaltyShotAllowed,
                $this->dto->goalsPenaltyShotAllowed,
                $this->dto->goalsAgainstAverage,
                $this->dto->goalsAgainstTotal,
                $this->dto->saves,
                $this->dto->savePercentage,
                $this->dto->catchesPunches,
                $this->dto->shotsOnGoalTotal,
                $this->dto->shotsShootoutTotal,
                $this->dto->shotsShootoutAllowed,
                $this->dto->shotsBlocked,
                $this->dto->shutouts
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
        $expected = 7892;

        $sql = "UPDATE `soccer_defensive_stats` SET `shots_penalty_shot_allowed` = ?, `goals_penalty_shot_allowed` = ?, `goals_against_average` = ?, `goals_against_total` = ?, `saves` = ?, `save_percentage` = ?, `catches_punches` = ?, `shots_on_goal_total` = ?, `shots_shootout_total` = ?, `shots_shootout_allowed` = ?, `shots_blocked` = ?, `shutouts` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->shotsPenaltyShotAllowed,
                $this->dto->goalsPenaltyShotAllowed,
                $this->dto->goalsAgainstAverage,
                $this->dto->goalsAgainstTotal,
                $this->dto->saves,
                $this->dto->savePercentage,
                $this->dto->catchesPunches,
                $this->dto->shotsOnGoalTotal,
                $this->dto->shotsShootoutTotal,
                $this->dto->shotsShootoutAllowed,
                $this->dto->shotsBlocked,
                $this->dto->shutouts,
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
        $id = 2478;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 8160;

        $sql = "SELECT `id`, `shots_penalty_shot_allowed`, `goals_penalty_shot_allowed`, `goals_against_average`, `goals_against_total`, `saves`, `save_percentage`, `catches_punches`, `shots_on_goal_total`, `shots_shootout_total`, `shots_shootout_allowed`, `shots_blocked`, `shutouts`
                FROM `soccer_defensive_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `shots_penalty_shot_allowed`, `goals_penalty_shot_allowed`, `goals_against_average`, `goals_against_total`, `saves`, `save_percentage`, `catches_punches`, `shots_on_goal_total`, `shots_shootout_total`, `shots_shootout_allowed`, `shots_blocked`, `shutouts`
                FROM `soccer_defensive_stats`";

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
        $id = 3081;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 9721;
        $expected = 7330;

        $sql = "DELETE FROM `soccer_defensive_stats` WHERE `id` = ?";

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