<?php

declare(strict_types=1);

namespace Sports\BasketballOffensiveStats;

class BasketballOffensiveStatsDto 
{
    public int $id;
    public int $fieldGoalsMade;
    public int $fieldGoalsAttempted;
    public string $fieldGoalsPercentage;
    public string $fieldGoalsPerGame;
    public string $fieldGoalsAttemptedPerGame;
    public string $fieldGoalsPercentageAdjusted;
    public int $threePointersMade;
    public int $threePointersAttempted;
    public string $threePointersPercentage;
    public string $threePointersPerGame;
    public string $threePointersAttemptedPerGame;
    public string $freeThrowsMade;
    public string $freeThrowsAttempted;
    public string $freeThrowsPercentage;
    public string $freeThrowsPerGame;
    public string $freeThrowsAttemptedPerGame;
    public string $pointsScoredTotal;
    public string $pointsScoredPerGame;
    public string $assistsTotal;
    public string $assistsPerGame;
    public string $turnoversTotal;
    public string $turnoversPerGame;
    public string $pointsScoredOffTurnovers;
    public string $pointsScoredInPaint;
    public string $pointsScoredOnSecondChance;
    public string $pointsScoredOnFastBreak;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->fieldGoalsMade = (int) ($row["field_goals_made"] ?? 0);
        $this->fieldGoalsAttempted = (int) ($row["field_goals_attempted"] ?? 0);
        $this->fieldGoalsPercentage = $row["field_goals_percentage"] ?? "";
        $this->fieldGoalsPerGame = $row["field_goals_per_game"] ?? "";
        $this->fieldGoalsAttemptedPerGame = $row["field_goals_attempted_per_game"] ?? "";
        $this->fieldGoalsPercentageAdjusted = $row["field_goals_percentage_adjusted"] ?? "";
        $this->threePointersMade = (int) ($row["three_pointers_made"] ?? 0);
        $this->threePointersAttempted = (int) ($row["three_pointers_attempted"] ?? 0);
        $this->threePointersPercentage = $row["three_pointers_percentage"] ?? "";
        $this->threePointersPerGame = $row["three_pointers_per_game"] ?? "";
        $this->threePointersAttemptedPerGame = $row["three_pointers_attempted_per_game"] ?? "";
        $this->freeThrowsMade = $row["free_throws_made"] ?? "";
        $this->freeThrowsAttempted = $row["free_throws_attempted"] ?? "";
        $this->freeThrowsPercentage = $row["free_throws_percentage"] ?? "";
        $this->freeThrowsPerGame = $row["free_throws_per_game"] ?? "";
        $this->freeThrowsAttemptedPerGame = $row["free_throws_attempted_per_game"] ?? "";
        $this->pointsScoredTotal = $row["points_scored_total"] ?? "";
        $this->pointsScoredPerGame = $row["points_scored_per_game"] ?? "";
        $this->assistsTotal = $row["assists_total"] ?? "";
        $this->assistsPerGame = $row["assists_per_game"] ?? "";
        $this->turnoversTotal = $row["turnovers_total"] ?? "";
        $this->turnoversPerGame = $row["turnovers_per_game"] ?? "";
        $this->pointsScoredOffTurnovers = $row["points_scored_off_turnovers"] ?? "";
        $this->pointsScoredInPaint = $row["points_scored_in_paint"] ?? "";
        $this->pointsScoredOnSecondChance = $row["points_scored_on_second_chance"] ?? "";
        $this->pointsScoredOnFastBreak = $row["points_scored_on_fast_break"] ?? "";
    }
}