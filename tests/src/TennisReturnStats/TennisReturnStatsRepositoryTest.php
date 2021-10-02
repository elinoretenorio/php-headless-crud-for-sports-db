<?php

declare(strict_types=1);

namespace Sports\Tests\TennisReturnStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\TennisReturnStats\{ TennisReturnStatsDto, ITennisReturnStatsRepository, TennisReturnStatsRepository };

class TennisReturnStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private TennisReturnStatsDto $dto;
    private ITennisReturnStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 8292,
            "returns_played" => "officer",
            "matches_played" => "glass",
            "first_service_return_points_won" => "table",
            "first_service_return_points_won_pct" => "arm",
            "second_service_return_points_won" => "past",
            "second_service_return_points_won_pct" => "wait",
            "return_games_played" => "identify",
            "return_games_won" => "since",
            "return_games_won_pct" => "sound",
            "break_points_played" => "theory",
            "break_points_converted" => "partner",
            "break_points_converted_pct" => "a",
        ];
        $this->dto = new TennisReturnStatsDto($this->input);
        $this->repository = new TennisReturnStatsRepository($this->db);
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
        $expected = 9539;

        $sql = "INSERT INTO `tennis_return_stats` (`returns_played`, `matches_played`, `first_service_return_points_won`, `first_service_return_points_won_pct`, `second_service_return_points_won`, `second_service_return_points_won_pct`, `return_games_played`, `return_games_won`, `return_games_won_pct`, `break_points_played`, `break_points_converted`, `break_points_converted_pct`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->returnsPlayed,
                $this->dto->matchesPlayed,
                $this->dto->firstServiceReturnPointsWon,
                $this->dto->firstServiceReturnPointsWonPct,
                $this->dto->secondServiceReturnPointsWon,
                $this->dto->secondServiceReturnPointsWonPct,
                $this->dto->returnGamesPlayed,
                $this->dto->returnGamesWon,
                $this->dto->returnGamesWonPct,
                $this->dto->breakPointsPlayed,
                $this->dto->breakPointsConverted,
                $this->dto->breakPointsConvertedPct
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
        $expected = 1731;

        $sql = "UPDATE `tennis_return_stats` SET `returns_played` = ?, `matches_played` = ?, `first_service_return_points_won` = ?, `first_service_return_points_won_pct` = ?, `second_service_return_points_won` = ?, `second_service_return_points_won_pct` = ?, `return_games_played` = ?, `return_games_won` = ?, `return_games_won_pct` = ?, `break_points_played` = ?, `break_points_converted` = ?, `break_points_converted_pct` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->returnsPlayed,
                $this->dto->matchesPlayed,
                $this->dto->firstServiceReturnPointsWon,
                $this->dto->firstServiceReturnPointsWonPct,
                $this->dto->secondServiceReturnPointsWon,
                $this->dto->secondServiceReturnPointsWonPct,
                $this->dto->returnGamesPlayed,
                $this->dto->returnGamesWon,
                $this->dto->returnGamesWonPct,
                $this->dto->breakPointsPlayed,
                $this->dto->breakPointsConverted,
                $this->dto->breakPointsConvertedPct,
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
        $id = 5170;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 6203;

        $sql = "SELECT `id`, `returns_played`, `matches_played`, `first_service_return_points_won`, `first_service_return_points_won_pct`, `second_service_return_points_won`, `second_service_return_points_won_pct`, `return_games_played`, `return_games_won`, `return_games_won_pct`, `break_points_played`, `break_points_converted`, `break_points_converted_pct`
                FROM `tennis_return_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `returns_played`, `matches_played`, `first_service_return_points_won`, `first_service_return_points_won_pct`, `second_service_return_points_won`, `second_service_return_points_won_pct`, `return_games_played`, `return_games_won`, `return_games_won_pct`, `break_points_played`, `break_points_converted`, `break_points_converted_pct`
                FROM `tennis_return_stats`";

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
        $id = 5514;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 2081;
        $expected = 7533;

        $sql = "DELETE FROM `tennis_return_stats` WHERE `id` = ?";

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