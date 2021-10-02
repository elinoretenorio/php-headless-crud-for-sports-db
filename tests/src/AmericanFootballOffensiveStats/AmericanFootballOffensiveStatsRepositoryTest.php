<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballOffensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\AmericanFootballOffensiveStats\{ AmericanFootballOffensiveStatsDto, IAmericanFootballOffensiveStatsRepository, AmericanFootballOffensiveStatsRepository };

class AmericanFootballOffensiveStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private AmericanFootballOffensiveStatsDto $dto;
    private IAmericanFootballOffensiveStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 7769,
            "offensive_plays_yards" => "really",
            "offensive_plays_number" => "fact",
            "offensive_plays_average_yards_per" => "authority",
            "possession_duration" => "where",
            "turnovers_giveaway" => "he",
        ];
        $this->dto = new AmericanFootballOffensiveStatsDto($this->input);
        $this->repository = new AmericanFootballOffensiveStatsRepository($this->db);
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
        $expected = 6130;

        $sql = "INSERT INTO `american_football_offensive_stats` (`offensive_plays_yards`, `offensive_plays_number`, `offensive_plays_average_yards_per`, `possession_duration`, `turnovers_giveaway`)
                VALUES (?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->offensivePlaysYards,
                $this->dto->offensivePlaysNumber,
                $this->dto->offensivePlaysAverageYardsPer,
                $this->dto->possessionDuration,
                $this->dto->turnoversGiveaway
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
        $expected = 3114;

        $sql = "UPDATE `american_football_offensive_stats` SET `offensive_plays_yards` = ?, `offensive_plays_number` = ?, `offensive_plays_average_yards_per` = ?, `possession_duration` = ?, `turnovers_giveaway` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->offensivePlaysYards,
                $this->dto->offensivePlaysNumber,
                $this->dto->offensivePlaysAverageYardsPer,
                $this->dto->possessionDuration,
                $this->dto->turnoversGiveaway,
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
        $id = 7665;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 5417;

        $sql = "SELECT `id`, `offensive_plays_yards`, `offensive_plays_number`, `offensive_plays_average_yards_per`, `possession_duration`, `turnovers_giveaway`
                FROM `american_football_offensive_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `offensive_plays_yards`, `offensive_plays_number`, `offensive_plays_average_yards_per`, `possession_duration`, `turnovers_giveaway`
                FROM `american_football_offensive_stats`";

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
        $id = 5843;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 4843;
        $expected = 9985;

        $sql = "DELETE FROM `american_football_offensive_stats` WHERE `id` = ?";

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