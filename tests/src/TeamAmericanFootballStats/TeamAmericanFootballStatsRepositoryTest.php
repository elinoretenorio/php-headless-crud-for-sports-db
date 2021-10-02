<?php

declare(strict_types=1);

namespace Sports\Tests\TeamAmericanFootballStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\TeamAmericanFootballStats\{ TeamAmericanFootballStatsDto, ITeamAmericanFootballStatsRepository, TeamAmericanFootballStatsRepository };

class TeamAmericanFootballStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private TeamAmericanFootballStatsDto $dto;
    private ITeamAmericanFootballStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 6568,
            "yards_per_attempt" => "service",
            "average_starting_position" => "win",
            "timeouts" => "actually",
            "time_of_possession" => "treatment",
            "turnover_ratio" => "hold",
        ];
        $this->dto = new TeamAmericanFootballStatsDto($this->input);
        $this->repository = new TeamAmericanFootballStatsRepository($this->db);
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
        $expected = 3350;

        $sql = "INSERT INTO `team_american_football_stats` (`yards_per_attempt`, `average_starting_position`, `timeouts`, `time_of_possession`, `turnover_ratio`)
                VALUES (?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->yardsPerAttempt,
                $this->dto->averageStartingPosition,
                $this->dto->timeouts,
                $this->dto->timeOfPossession,
                $this->dto->turnoverRatio
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
        $expected = 7037;

        $sql = "UPDATE `team_american_football_stats` SET `yards_per_attempt` = ?, `average_starting_position` = ?, `timeouts` = ?, `time_of_possession` = ?, `turnover_ratio` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->yardsPerAttempt,
                $this->dto->averageStartingPosition,
                $this->dto->timeouts,
                $this->dto->timeOfPossession,
                $this->dto->turnoverRatio,
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
        $id = 8820;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 6363;

        $sql = "SELECT `id`, `yards_per_attempt`, `average_starting_position`, `timeouts`, `time_of_possession`, `turnover_ratio`
                FROM `team_american_football_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `yards_per_attempt`, `average_starting_position`, `timeouts`, `time_of_possession`, `turnover_ratio`
                FROM `team_american_football_stats`";

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
        $id = 3298;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 4595;
        $expected = 2258;

        $sql = "DELETE FROM `team_american_football_stats` WHERE `id` = ?";

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