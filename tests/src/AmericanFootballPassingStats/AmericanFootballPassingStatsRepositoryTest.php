<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballPassingStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\AmericanFootballPassingStats\{ AmericanFootballPassingStatsDto, IAmericanFootballPassingStatsRepository, AmericanFootballPassingStatsRepository };

class AmericanFootballPassingStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private AmericanFootballPassingStatsDto $dto;
    private IAmericanFootballPassingStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 7503,
            "passes_attempts" => "seem",
            "passes_completions" => "energy",
            "passes_percentage" => "about",
            "passes_yards_gross" => "store",
            "passes_yards_net" => "possible",
            "passes_yards_lost" => "send",
            "passes_touchdowns" => "alone",
            "passes_touchdowns_percentage" => "edge",
            "passes_interceptions" => "movie",
            "passes_interceptions_percentage" => "take",
            "passes_longest" => "wait",
            "passes_average_yards_per" => "project",
            "passer_rating" => "similar",
            "receptions_total" => "room",
            "receptions_yards" => "approach",
            "receptions_touchdowns" => "glass",
            "receptions_first_down" => "suffer",
            "receptions_longest" => "series",
            "receptions_average_yards_per" => "car",
        ];
        $this->dto = new AmericanFootballPassingStatsDto($this->input);
        $this->repository = new AmericanFootballPassingStatsRepository($this->db);
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
        $expected = 2443;

        $sql = "INSERT INTO `american_football_passing_stats` (`passes_attempts`, `passes_completions`, `passes_percentage`, `passes_yards_gross`, `passes_yards_net`, `passes_yards_lost`, `passes_touchdowns`, `passes_touchdowns_percentage`, `passes_interceptions`, `passes_interceptions_percentage`, `passes_longest`, `passes_average_yards_per`, `passer_rating`, `receptions_total`, `receptions_yards`, `receptions_touchdowns`, `receptions_first_down`, `receptions_longest`, `receptions_average_yards_per`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->passesAttempts,
                $this->dto->passesCompletions,
                $this->dto->passesPercentage,
                $this->dto->passesYardsGross,
                $this->dto->passesYardsNet,
                $this->dto->passesYardsLost,
                $this->dto->passesTouchdowns,
                $this->dto->passesTouchdownsPercentage,
                $this->dto->passesInterceptions,
                $this->dto->passesInterceptionsPercentage,
                $this->dto->passesLongest,
                $this->dto->passesAverageYardsPer,
                $this->dto->passerRating,
                $this->dto->receptionsTotal,
                $this->dto->receptionsYards,
                $this->dto->receptionsTouchdowns,
                $this->dto->receptionsFirstDown,
                $this->dto->receptionsLongest,
                $this->dto->receptionsAverageYardsPer
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
        $expected = 6466;

        $sql = "UPDATE `american_football_passing_stats` SET `passes_attempts` = ?, `passes_completions` = ?, `passes_percentage` = ?, `passes_yards_gross` = ?, `passes_yards_net` = ?, `passes_yards_lost` = ?, `passes_touchdowns` = ?, `passes_touchdowns_percentage` = ?, `passes_interceptions` = ?, `passes_interceptions_percentage` = ?, `passes_longest` = ?, `passes_average_yards_per` = ?, `passer_rating` = ?, `receptions_total` = ?, `receptions_yards` = ?, `receptions_touchdowns` = ?, `receptions_first_down` = ?, `receptions_longest` = ?, `receptions_average_yards_per` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->passesAttempts,
                $this->dto->passesCompletions,
                $this->dto->passesPercentage,
                $this->dto->passesYardsGross,
                $this->dto->passesYardsNet,
                $this->dto->passesYardsLost,
                $this->dto->passesTouchdowns,
                $this->dto->passesTouchdownsPercentage,
                $this->dto->passesInterceptions,
                $this->dto->passesInterceptionsPercentage,
                $this->dto->passesLongest,
                $this->dto->passesAverageYardsPer,
                $this->dto->passerRating,
                $this->dto->receptionsTotal,
                $this->dto->receptionsYards,
                $this->dto->receptionsTouchdowns,
                $this->dto->receptionsFirstDown,
                $this->dto->receptionsLongest,
                $this->dto->receptionsAverageYardsPer,
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
        $id = 7285;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 2469;

        $sql = "SELECT `id`, `passes_attempts`, `passes_completions`, `passes_percentage`, `passes_yards_gross`, `passes_yards_net`, `passes_yards_lost`, `passes_touchdowns`, `passes_touchdowns_percentage`, `passes_interceptions`, `passes_interceptions_percentage`, `passes_longest`, `passes_average_yards_per`, `passer_rating`, `receptions_total`, `receptions_yards`, `receptions_touchdowns`, `receptions_first_down`, `receptions_longest`, `receptions_average_yards_per`
                FROM `american_football_passing_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `passes_attempts`, `passes_completions`, `passes_percentage`, `passes_yards_gross`, `passes_yards_net`, `passes_yards_lost`, `passes_touchdowns`, `passes_touchdowns_percentage`, `passes_interceptions`, `passes_interceptions_percentage`, `passes_longest`, `passes_average_yards_per`, `passer_rating`, `receptions_total`, `receptions_yards`, `receptions_touchdowns`, `receptions_first_down`, `receptions_longest`, `receptions_average_yards_per`
                FROM `american_football_passing_stats`";

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
        $id = 4467;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 2442;
        $expected = 4297;

        $sql = "DELETE FROM `american_football_passing_stats` WHERE `id` = ?";

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