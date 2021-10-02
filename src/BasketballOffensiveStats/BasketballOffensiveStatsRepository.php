<?php

declare(strict_types=1);

namespace Sports\BasketballOffensiveStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class BasketballOffensiveStatsRepository implements IBasketballOffensiveStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(BasketballOffensiveStatsDto $dto): int
    {
        $sql = "INSERT INTO `basketball_offensive_stats` (`field_goals_made`, `field_goals_attempted`, `field_goals_percentage`, `field_goals_per_game`, `field_goals_attempted_per_game`, `field_goals_percentage_adjusted`, `three_pointers_made`, `three_pointers_attempted`, `three_pointers_percentage`, `three_pointers_per_game`, `three_pointers_attempted_per_game`, `free_throws_made`, `free_throws_attempted`, `free_throws_percentage`, `free_throws_per_game`, `free_throws_attempted_per_game`, `points_scored_total`, `points_scored_per_game`, `assists_total`, `assists_per_game`, `turnovers_total`, `turnovers_per_game`, `points_scored_off_turnovers`, `points_scored_in_paint`, `points_scored_on_second_chance`, `points_scored_on_fast_break`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->fieldGoalsMade,
                $dto->fieldGoalsAttempted,
                $dto->fieldGoalsPercentage,
                $dto->fieldGoalsPerGame,
                $dto->fieldGoalsAttemptedPerGame,
                $dto->fieldGoalsPercentageAdjusted,
                $dto->threePointersMade,
                $dto->threePointersAttempted,
                $dto->threePointersPercentage,
                $dto->threePointersPerGame,
                $dto->threePointersAttemptedPerGame,
                $dto->freeThrowsMade,
                $dto->freeThrowsAttempted,
                $dto->freeThrowsPercentage,
                $dto->freeThrowsPerGame,
                $dto->freeThrowsAttemptedPerGame,
                $dto->pointsScoredTotal,
                $dto->pointsScoredPerGame,
                $dto->assistsTotal,
                $dto->assistsPerGame,
                $dto->turnoversTotal,
                $dto->turnoversPerGame,
                $dto->pointsScoredOffTurnovers,
                $dto->pointsScoredInPaint,
                $dto->pointsScoredOnSecondChance,
                $dto->pointsScoredOnFastBreak
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(BasketballOffensiveStatsDto $dto): int
    {
        $sql = "UPDATE `basketball_offensive_stats` SET `field_goals_made` = ?, `field_goals_attempted` = ?, `field_goals_percentage` = ?, `field_goals_per_game` = ?, `field_goals_attempted_per_game` = ?, `field_goals_percentage_adjusted` = ?, `three_pointers_made` = ?, `three_pointers_attempted` = ?, `three_pointers_percentage` = ?, `three_pointers_per_game` = ?, `three_pointers_attempted_per_game` = ?, `free_throws_made` = ?, `free_throws_attempted` = ?, `free_throws_percentage` = ?, `free_throws_per_game` = ?, `free_throws_attempted_per_game` = ?, `points_scored_total` = ?, `points_scored_per_game` = ?, `assists_total` = ?, `assists_per_game` = ?, `turnovers_total` = ?, `turnovers_per_game` = ?, `points_scored_off_turnovers` = ?, `points_scored_in_paint` = ?, `points_scored_on_second_chance` = ?, `points_scored_on_fast_break` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->fieldGoalsMade,
                $dto->fieldGoalsAttempted,
                $dto->fieldGoalsPercentage,
                $dto->fieldGoalsPerGame,
                $dto->fieldGoalsAttemptedPerGame,
                $dto->fieldGoalsPercentageAdjusted,
                $dto->threePointersMade,
                $dto->threePointersAttempted,
                $dto->threePointersPercentage,
                $dto->threePointersPerGame,
                $dto->threePointersAttemptedPerGame,
                $dto->freeThrowsMade,
                $dto->freeThrowsAttempted,
                $dto->freeThrowsPercentage,
                $dto->freeThrowsPerGame,
                $dto->freeThrowsAttemptedPerGame,
                $dto->pointsScoredTotal,
                $dto->pointsScoredPerGame,
                $dto->assistsTotal,
                $dto->assistsPerGame,
                $dto->turnoversTotal,
                $dto->turnoversPerGame,
                $dto->pointsScoredOffTurnovers,
                $dto->pointsScoredInPaint,
                $dto->pointsScoredOnSecondChance,
                $dto->pointsScoredOnFastBreak,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?BasketballOffensiveStatsDto
    {
        $sql = "SELECT `id`, `field_goals_made`, `field_goals_attempted`, `field_goals_percentage`, `field_goals_per_game`, `field_goals_attempted_per_game`, `field_goals_percentage_adjusted`, `three_pointers_made`, `three_pointers_attempted`, `three_pointers_percentage`, `three_pointers_per_game`, `three_pointers_attempted_per_game`, `free_throws_made`, `free_throws_attempted`, `free_throws_percentage`, `free_throws_per_game`, `free_throws_attempted_per_game`, `points_scored_total`, `points_scored_per_game`, `assists_total`, `assists_per_game`, `turnovers_total`, `turnovers_per_game`, `points_scored_off_turnovers`, `points_scored_in_paint`, `points_scored_on_second_chance`, `points_scored_on_fast_break`
                FROM `basketball_offensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new BasketballOffensiveStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `field_goals_made`, `field_goals_attempted`, `field_goals_percentage`, `field_goals_per_game`, `field_goals_attempted_per_game`, `field_goals_percentage_adjusted`, `three_pointers_made`, `three_pointers_attempted`, `three_pointers_percentage`, `three_pointers_per_game`, `three_pointers_attempted_per_game`, `free_throws_made`, `free_throws_attempted`, `free_throws_percentage`, `free_throws_per_game`, `free_throws_attempted_per_game`, `points_scored_total`, `points_scored_per_game`, `assists_total`, `assists_per_game`, `turnovers_total`, `turnovers_per_game`, `points_scored_off_turnovers`, `points_scored_in_paint`, `points_scored_on_second_chance`, `points_scored_on_fast_break`
                FROM `basketball_offensive_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new BasketballOffensiveStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `basketball_offensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}