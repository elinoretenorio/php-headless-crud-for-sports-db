<?php

declare(strict_types=1);

namespace Sports\Tests\BasketballOffensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\BasketballOffensiveStats\{ BasketballOffensiveStatsDto, IBasketballOffensiveStatsRepository, BasketballOffensiveStatsRepository };

class BasketballOffensiveStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private BasketballOffensiveStatsDto $dto;
    private IBasketballOffensiveStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 7038,
            "field_goals_made" => 5250,
            "field_goals_attempted" => 351,
            "field_goals_percentage" => "over",
            "field_goals_per_game" => "prepare",
            "field_goals_attempted_per_game" => "site",
            "field_goals_percentage_adjusted" => "ahead",
            "three_pointers_made" => 6364,
            "three_pointers_attempted" => 2333,
            "three_pointers_percentage" => "rise",
            "three_pointers_per_game" => "leader",
            "three_pointers_attempted_per_game" => "those",
            "free_throws_made" => "drive",
            "free_throws_attempted" => "appear",
            "free_throws_percentage" => "middle",
            "free_throws_per_game" => "purpose",
            "free_throws_attempted_per_game" => "significant",
            "points_scored_total" => "exactly",
            "points_scored_per_game" => "ground",
            "assists_total" => "follow",
            "assists_per_game" => "front",
            "turnovers_total" => "fact",
            "turnovers_per_game" => "level",
            "points_scored_off_turnovers" => "government",
            "points_scored_in_paint" => "trouble",
            "points_scored_on_second_chance" => "reduce",
            "points_scored_on_fast_break" => "political",
        ];
        $this->dto = new BasketballOffensiveStatsDto($this->input);
        $this->repository = new BasketballOffensiveStatsRepository($this->db);
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
        $expected = 5290;

        $sql = "INSERT INTO `basketball_offensive_stats` (`field_goals_made`, `field_goals_attempted`, `field_goals_percentage`, `field_goals_per_game`, `field_goals_attempted_per_game`, `field_goals_percentage_adjusted`, `three_pointers_made`, `three_pointers_attempted`, `three_pointers_percentage`, `three_pointers_per_game`, `three_pointers_attempted_per_game`, `free_throws_made`, `free_throws_attempted`, `free_throws_percentage`, `free_throws_per_game`, `free_throws_attempted_per_game`, `points_scored_total`, `points_scored_per_game`, `assists_total`, `assists_per_game`, `turnovers_total`, `turnovers_per_game`, `points_scored_off_turnovers`, `points_scored_in_paint`, `points_scored_on_second_chance`, `points_scored_on_fast_break`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->fieldGoalsMade,
                $this->dto->fieldGoalsAttempted,
                $this->dto->fieldGoalsPercentage,
                $this->dto->fieldGoalsPerGame,
                $this->dto->fieldGoalsAttemptedPerGame,
                $this->dto->fieldGoalsPercentageAdjusted,
                $this->dto->threePointersMade,
                $this->dto->threePointersAttempted,
                $this->dto->threePointersPercentage,
                $this->dto->threePointersPerGame,
                $this->dto->threePointersAttemptedPerGame,
                $this->dto->freeThrowsMade,
                $this->dto->freeThrowsAttempted,
                $this->dto->freeThrowsPercentage,
                $this->dto->freeThrowsPerGame,
                $this->dto->freeThrowsAttemptedPerGame,
                $this->dto->pointsScoredTotal,
                $this->dto->pointsScoredPerGame,
                $this->dto->assistsTotal,
                $this->dto->assistsPerGame,
                $this->dto->turnoversTotal,
                $this->dto->turnoversPerGame,
                $this->dto->pointsScoredOffTurnovers,
                $this->dto->pointsScoredInPaint,
                $this->dto->pointsScoredOnSecondChance,
                $this->dto->pointsScoredOnFastBreak
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
        $expected = 6712;

        $sql = "UPDATE `basketball_offensive_stats` SET `field_goals_made` = ?, `field_goals_attempted` = ?, `field_goals_percentage` = ?, `field_goals_per_game` = ?, `field_goals_attempted_per_game` = ?, `field_goals_percentage_adjusted` = ?, `three_pointers_made` = ?, `three_pointers_attempted` = ?, `three_pointers_percentage` = ?, `three_pointers_per_game` = ?, `three_pointers_attempted_per_game` = ?, `free_throws_made` = ?, `free_throws_attempted` = ?, `free_throws_percentage` = ?, `free_throws_per_game` = ?, `free_throws_attempted_per_game` = ?, `points_scored_total` = ?, `points_scored_per_game` = ?, `assists_total` = ?, `assists_per_game` = ?, `turnovers_total` = ?, `turnovers_per_game` = ?, `points_scored_off_turnovers` = ?, `points_scored_in_paint` = ?, `points_scored_on_second_chance` = ?, `points_scored_on_fast_break` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->fieldGoalsMade,
                $this->dto->fieldGoalsAttempted,
                $this->dto->fieldGoalsPercentage,
                $this->dto->fieldGoalsPerGame,
                $this->dto->fieldGoalsAttemptedPerGame,
                $this->dto->fieldGoalsPercentageAdjusted,
                $this->dto->threePointersMade,
                $this->dto->threePointersAttempted,
                $this->dto->threePointersPercentage,
                $this->dto->threePointersPerGame,
                $this->dto->threePointersAttemptedPerGame,
                $this->dto->freeThrowsMade,
                $this->dto->freeThrowsAttempted,
                $this->dto->freeThrowsPercentage,
                $this->dto->freeThrowsPerGame,
                $this->dto->freeThrowsAttemptedPerGame,
                $this->dto->pointsScoredTotal,
                $this->dto->pointsScoredPerGame,
                $this->dto->assistsTotal,
                $this->dto->assistsPerGame,
                $this->dto->turnoversTotal,
                $this->dto->turnoversPerGame,
                $this->dto->pointsScoredOffTurnovers,
                $this->dto->pointsScoredInPaint,
                $this->dto->pointsScoredOnSecondChance,
                $this->dto->pointsScoredOnFastBreak,
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
        $id = 7155;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 5096;

        $sql = "SELECT `id`, `field_goals_made`, `field_goals_attempted`, `field_goals_percentage`, `field_goals_per_game`, `field_goals_attempted_per_game`, `field_goals_percentage_adjusted`, `three_pointers_made`, `three_pointers_attempted`, `three_pointers_percentage`, `three_pointers_per_game`, `three_pointers_attempted_per_game`, `free_throws_made`, `free_throws_attempted`, `free_throws_percentage`, `free_throws_per_game`, `free_throws_attempted_per_game`, `points_scored_total`, `points_scored_per_game`, `assists_total`, `assists_per_game`, `turnovers_total`, `turnovers_per_game`, `points_scored_off_turnovers`, `points_scored_in_paint`, `points_scored_on_second_chance`, `points_scored_on_fast_break`
                FROM `basketball_offensive_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `field_goals_made`, `field_goals_attempted`, `field_goals_percentage`, `field_goals_per_game`, `field_goals_attempted_per_game`, `field_goals_percentage_adjusted`, `three_pointers_made`, `three_pointers_attempted`, `three_pointers_percentage`, `three_pointers_per_game`, `three_pointers_attempted_per_game`, `free_throws_made`, `free_throws_attempted`, `free_throws_percentage`, `free_throws_per_game`, `free_throws_attempted_per_game`, `points_scored_total`, `points_scored_per_game`, `assists_total`, `assists_per_game`, `turnovers_total`, `turnovers_per_game`, `points_scored_off_turnovers`, `points_scored_in_paint`, `points_scored_on_second_chance`, `points_scored_on_fast_break`
                FROM `basketball_offensive_stats`";

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
        $id = 6210;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 4992;
        $expected = 7798;

        $sql = "DELETE FROM `basketball_offensive_stats` WHERE `id` = ?";

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