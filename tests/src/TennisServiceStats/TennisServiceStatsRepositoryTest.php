<?php

declare(strict_types=1);

namespace Sports\Tests\TennisServiceStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\TennisServiceStats\{ TennisServiceStatsDto, ITennisServiceStatsRepository, TennisServiceStatsRepository };

class TennisServiceStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private TennisServiceStatsDto $dto;
    private ITennisServiceStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 4096,
            "services_played" => "agreement",
            "matches_played" => "left",
            "aces" => "kitchen",
            "first_services_good" => "determine",
            "first_services_good_pct" => "at",
            "first_service_points_won" => "not",
            "first_service_points_won_pct" => "down",
            "second_service_points_won" => "throughout",
            "second_service_points_won_pct" => "themselves",
            "service_games_played" => "follow",
            "service_games_won" => "role",
            "service_games_won_pct" => "sign",
            "break_points_played" => "both",
            "break_points_saved" => "TV",
            "break_points_saved_pct" => "choose",
        ];
        $this->dto = new TennisServiceStatsDto($this->input);
        $this->repository = new TennisServiceStatsRepository($this->db);
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
        $expected = 1047;

        $sql = "INSERT INTO `tennis_service_stats` (`services_played`, `matches_played`, `aces`, `first_services_good`, `first_services_good_pct`, `first_service_points_won`, `first_service_points_won_pct`, `second_service_points_won`, `second_service_points_won_pct`, `service_games_played`, `service_games_won`, `service_games_won_pct`, `break_points_played`, `break_points_saved`, `break_points_saved_pct`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->servicesPlayed,
                $this->dto->matchesPlayed,
                $this->dto->aces,
                $this->dto->firstServicesGood,
                $this->dto->firstServicesGoodPct,
                $this->dto->firstServicePointsWon,
                $this->dto->firstServicePointsWonPct,
                $this->dto->secondServicePointsWon,
                $this->dto->secondServicePointsWonPct,
                $this->dto->serviceGamesPlayed,
                $this->dto->serviceGamesWon,
                $this->dto->serviceGamesWonPct,
                $this->dto->breakPointsPlayed,
                $this->dto->breakPointsSaved,
                $this->dto->breakPointsSavedPct
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
        $expected = 1097;

        $sql = "UPDATE `tennis_service_stats` SET `services_played` = ?, `matches_played` = ?, `aces` = ?, `first_services_good` = ?, `first_services_good_pct` = ?, `first_service_points_won` = ?, `first_service_points_won_pct` = ?, `second_service_points_won` = ?, `second_service_points_won_pct` = ?, `service_games_played` = ?, `service_games_won` = ?, `service_games_won_pct` = ?, `break_points_played` = ?, `break_points_saved` = ?, `break_points_saved_pct` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->servicesPlayed,
                $this->dto->matchesPlayed,
                $this->dto->aces,
                $this->dto->firstServicesGood,
                $this->dto->firstServicesGoodPct,
                $this->dto->firstServicePointsWon,
                $this->dto->firstServicePointsWonPct,
                $this->dto->secondServicePointsWon,
                $this->dto->secondServicePointsWonPct,
                $this->dto->serviceGamesPlayed,
                $this->dto->serviceGamesWon,
                $this->dto->serviceGamesWonPct,
                $this->dto->breakPointsPlayed,
                $this->dto->breakPointsSaved,
                $this->dto->breakPointsSavedPct,
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
        $id = 2081;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 6760;

        $sql = "SELECT `id`, `services_played`, `matches_played`, `aces`, `first_services_good`, `first_services_good_pct`, `first_service_points_won`, `first_service_points_won_pct`, `second_service_points_won`, `second_service_points_won_pct`, `service_games_played`, `service_games_won`, `service_games_won_pct`, `break_points_played`, `break_points_saved`, `break_points_saved_pct`
                FROM `tennis_service_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `services_played`, `matches_played`, `aces`, `first_services_good`, `first_services_good_pct`, `first_service_points_won`, `first_service_points_won_pct`, `second_service_points_won`, `second_service_points_won_pct`, `service_games_played`, `service_games_won`, `service_games_won_pct`, `break_points_played`, `break_points_saved`, `break_points_saved_pct`
                FROM `tennis_service_stats`";

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
        $id = 8110;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 7690;
        $expected = 2079;

        $sql = "DELETE FROM `tennis_service_stats` WHERE `id` = ?";

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