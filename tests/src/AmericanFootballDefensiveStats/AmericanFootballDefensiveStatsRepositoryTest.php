<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballDefensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\AmericanFootballDefensiveStats\{ AmericanFootballDefensiveStatsDto, IAmericanFootballDefensiveStatsRepository, AmericanFootballDefensiveStatsRepository };

class AmericanFootballDefensiveStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private AmericanFootballDefensiveStatsDto $dto;
    private IAmericanFootballDefensiveStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 5352,
            "tackles_total" => "ever",
            "tackles_solo" => "nature",
            "tackles_assists" => "force",
            "interceptions_total" => "television",
            "interceptions_yards" => "less",
            "interceptions_average" => "partner",
            "interceptions_longest" => "beat",
            "interceptions_touchdown" => "whole",
            "quarterback_hurries" => "when",
            "sacks_total" => "run",
            "sacks_yards" => "practice",
            "passes_defensed" => "without",
        ];
        $this->dto = new AmericanFootballDefensiveStatsDto($this->input);
        $this->repository = new AmericanFootballDefensiveStatsRepository($this->db);
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
        $expected = 3262;

        $sql = "INSERT INTO `american_football_defensive_stats` (`tackles_total`, `tackles_solo`, `tackles_assists`, `interceptions_total`, `interceptions_yards`, `interceptions_average`, `interceptions_longest`, `interceptions_touchdown`, `quarterback_hurries`, `sacks_total`, `sacks_yards`, `passes_defensed`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->tacklesTotal,
                $this->dto->tacklesSolo,
                $this->dto->tacklesAssists,
                $this->dto->interceptionsTotal,
                $this->dto->interceptionsYards,
                $this->dto->interceptionsAverage,
                $this->dto->interceptionsLongest,
                $this->dto->interceptionsTouchdown,
                $this->dto->quarterbackHurries,
                $this->dto->sacksTotal,
                $this->dto->sacksYards,
                $this->dto->passesDefensed
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
        $expected = 1436;

        $sql = "UPDATE `american_football_defensive_stats` SET `tackles_total` = ?, `tackles_solo` = ?, `tackles_assists` = ?, `interceptions_total` = ?, `interceptions_yards` = ?, `interceptions_average` = ?, `interceptions_longest` = ?, `interceptions_touchdown` = ?, `quarterback_hurries` = ?, `sacks_total` = ?, `sacks_yards` = ?, `passes_defensed` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->tacklesTotal,
                $this->dto->tacklesSolo,
                $this->dto->tacklesAssists,
                $this->dto->interceptionsTotal,
                $this->dto->interceptionsYards,
                $this->dto->interceptionsAverage,
                $this->dto->interceptionsLongest,
                $this->dto->interceptionsTouchdown,
                $this->dto->quarterbackHurries,
                $this->dto->sacksTotal,
                $this->dto->sacksYards,
                $this->dto->passesDefensed,
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
        $id = 58;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 7294;

        $sql = "SELECT `id`, `tackles_total`, `tackles_solo`, `tackles_assists`, `interceptions_total`, `interceptions_yards`, `interceptions_average`, `interceptions_longest`, `interceptions_touchdown`, `quarterback_hurries`, `sacks_total`, `sacks_yards`, `passes_defensed`
                FROM `american_football_defensive_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `tackles_total`, `tackles_solo`, `tackles_assists`, `interceptions_total`, `interceptions_yards`, `interceptions_average`, `interceptions_longest`, `interceptions_touchdown`, `quarterback_hurries`, `sacks_total`, `sacks_yards`, `passes_defensed`
                FROM `american_football_defensive_stats`";

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
        $id = 6827;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 1969;
        $expected = 113;

        $sql = "DELETE FROM `american_football_defensive_stats` WHERE `id` = ?";

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