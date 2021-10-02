<?php

declare(strict_types=1);

namespace Sports\BasketballOffensiveStats;

use JsonSerializable;

class BasketballOffensiveStatsModel implements JsonSerializable
{
    private int $id;
    private int $fieldGoalsMade;
    private int $fieldGoalsAttempted;
    private string $fieldGoalsPercentage;
    private string $fieldGoalsPerGame;
    private string $fieldGoalsAttemptedPerGame;
    private string $fieldGoalsPercentageAdjusted;
    private int $threePointersMade;
    private int $threePointersAttempted;
    private string $threePointersPercentage;
    private string $threePointersPerGame;
    private string $threePointersAttemptedPerGame;
    private string $freeThrowsMade;
    private string $freeThrowsAttempted;
    private string $freeThrowsPercentage;
    private string $freeThrowsPerGame;
    private string $freeThrowsAttemptedPerGame;
    private string $pointsScoredTotal;
    private string $pointsScoredPerGame;
    private string $assistsTotal;
    private string $assistsPerGame;
    private string $turnoversTotal;
    private string $turnoversPerGame;
    private string $pointsScoredOffTurnovers;
    private string $pointsScoredInPaint;
    private string $pointsScoredOnSecondChance;
    private string $pointsScoredOnFastBreak;

    public function __construct(BasketballOffensiveStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->fieldGoalsMade = $dto->fieldGoalsMade;
        $this->fieldGoalsAttempted = $dto->fieldGoalsAttempted;
        $this->fieldGoalsPercentage = $dto->fieldGoalsPercentage;
        $this->fieldGoalsPerGame = $dto->fieldGoalsPerGame;
        $this->fieldGoalsAttemptedPerGame = $dto->fieldGoalsAttemptedPerGame;
        $this->fieldGoalsPercentageAdjusted = $dto->fieldGoalsPercentageAdjusted;
        $this->threePointersMade = $dto->threePointersMade;
        $this->threePointersAttempted = $dto->threePointersAttempted;
        $this->threePointersPercentage = $dto->threePointersPercentage;
        $this->threePointersPerGame = $dto->threePointersPerGame;
        $this->threePointersAttemptedPerGame = $dto->threePointersAttemptedPerGame;
        $this->freeThrowsMade = $dto->freeThrowsMade;
        $this->freeThrowsAttempted = $dto->freeThrowsAttempted;
        $this->freeThrowsPercentage = $dto->freeThrowsPercentage;
        $this->freeThrowsPerGame = $dto->freeThrowsPerGame;
        $this->freeThrowsAttemptedPerGame = $dto->freeThrowsAttemptedPerGame;
        $this->pointsScoredTotal = $dto->pointsScoredTotal;
        $this->pointsScoredPerGame = $dto->pointsScoredPerGame;
        $this->assistsTotal = $dto->assistsTotal;
        $this->assistsPerGame = $dto->assistsPerGame;
        $this->turnoversTotal = $dto->turnoversTotal;
        $this->turnoversPerGame = $dto->turnoversPerGame;
        $this->pointsScoredOffTurnovers = $dto->pointsScoredOffTurnovers;
        $this->pointsScoredInPaint = $dto->pointsScoredInPaint;
        $this->pointsScoredOnSecondChance = $dto->pointsScoredOnSecondChance;
        $this->pointsScoredOnFastBreak = $dto->pointsScoredOnFastBreak;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getFieldGoalsMade(): int
    {
        return $this->fieldGoalsMade;
    }

    public function setFieldGoalsMade(int $fieldGoalsMade): void
    {
        $this->fieldGoalsMade = $fieldGoalsMade;
    }

    public function getFieldGoalsAttempted(): int
    {
        return $this->fieldGoalsAttempted;
    }

    public function setFieldGoalsAttempted(int $fieldGoalsAttempted): void
    {
        $this->fieldGoalsAttempted = $fieldGoalsAttempted;
    }

    public function getFieldGoalsPercentage(): string
    {
        return $this->fieldGoalsPercentage;
    }

    public function setFieldGoalsPercentage(string $fieldGoalsPercentage): void
    {
        $this->fieldGoalsPercentage = $fieldGoalsPercentage;
    }

    public function getFieldGoalsPerGame(): string
    {
        return $this->fieldGoalsPerGame;
    }

    public function setFieldGoalsPerGame(string $fieldGoalsPerGame): void
    {
        $this->fieldGoalsPerGame = $fieldGoalsPerGame;
    }

    public function getFieldGoalsAttemptedPerGame(): string
    {
        return $this->fieldGoalsAttemptedPerGame;
    }

    public function setFieldGoalsAttemptedPerGame(string $fieldGoalsAttemptedPerGame): void
    {
        $this->fieldGoalsAttemptedPerGame = $fieldGoalsAttemptedPerGame;
    }

    public function getFieldGoalsPercentageAdjusted(): string
    {
        return $this->fieldGoalsPercentageAdjusted;
    }

    public function setFieldGoalsPercentageAdjusted(string $fieldGoalsPercentageAdjusted): void
    {
        $this->fieldGoalsPercentageAdjusted = $fieldGoalsPercentageAdjusted;
    }

    public function getThreePointersMade(): int
    {
        return $this->threePointersMade;
    }

    public function setThreePointersMade(int $threePointersMade): void
    {
        $this->threePointersMade = $threePointersMade;
    }

    public function getThreePointersAttempted(): int
    {
        return $this->threePointersAttempted;
    }

    public function setThreePointersAttempted(int $threePointersAttempted): void
    {
        $this->threePointersAttempted = $threePointersAttempted;
    }

    public function getThreePointersPercentage(): string
    {
        return $this->threePointersPercentage;
    }

    public function setThreePointersPercentage(string $threePointersPercentage): void
    {
        $this->threePointersPercentage = $threePointersPercentage;
    }

    public function getThreePointersPerGame(): string
    {
        return $this->threePointersPerGame;
    }

    public function setThreePointersPerGame(string $threePointersPerGame): void
    {
        $this->threePointersPerGame = $threePointersPerGame;
    }

    public function getThreePointersAttemptedPerGame(): string
    {
        return $this->threePointersAttemptedPerGame;
    }

    public function setThreePointersAttemptedPerGame(string $threePointersAttemptedPerGame): void
    {
        $this->threePointersAttemptedPerGame = $threePointersAttemptedPerGame;
    }

    public function getFreeThrowsMade(): string
    {
        return $this->freeThrowsMade;
    }

    public function setFreeThrowsMade(string $freeThrowsMade): void
    {
        $this->freeThrowsMade = $freeThrowsMade;
    }

    public function getFreeThrowsAttempted(): string
    {
        return $this->freeThrowsAttempted;
    }

    public function setFreeThrowsAttempted(string $freeThrowsAttempted): void
    {
        $this->freeThrowsAttempted = $freeThrowsAttempted;
    }

    public function getFreeThrowsPercentage(): string
    {
        return $this->freeThrowsPercentage;
    }

    public function setFreeThrowsPercentage(string $freeThrowsPercentage): void
    {
        $this->freeThrowsPercentage = $freeThrowsPercentage;
    }

    public function getFreeThrowsPerGame(): string
    {
        return $this->freeThrowsPerGame;
    }

    public function setFreeThrowsPerGame(string $freeThrowsPerGame): void
    {
        $this->freeThrowsPerGame = $freeThrowsPerGame;
    }

    public function getFreeThrowsAttemptedPerGame(): string
    {
        return $this->freeThrowsAttemptedPerGame;
    }

    public function setFreeThrowsAttemptedPerGame(string $freeThrowsAttemptedPerGame): void
    {
        $this->freeThrowsAttemptedPerGame = $freeThrowsAttemptedPerGame;
    }

    public function getPointsScoredTotal(): string
    {
        return $this->pointsScoredTotal;
    }

    public function setPointsScoredTotal(string $pointsScoredTotal): void
    {
        $this->pointsScoredTotal = $pointsScoredTotal;
    }

    public function getPointsScoredPerGame(): string
    {
        return $this->pointsScoredPerGame;
    }

    public function setPointsScoredPerGame(string $pointsScoredPerGame): void
    {
        $this->pointsScoredPerGame = $pointsScoredPerGame;
    }

    public function getAssistsTotal(): string
    {
        return $this->assistsTotal;
    }

    public function setAssistsTotal(string $assistsTotal): void
    {
        $this->assistsTotal = $assistsTotal;
    }

    public function getAssistsPerGame(): string
    {
        return $this->assistsPerGame;
    }

    public function setAssistsPerGame(string $assistsPerGame): void
    {
        $this->assistsPerGame = $assistsPerGame;
    }

    public function getTurnoversTotal(): string
    {
        return $this->turnoversTotal;
    }

    public function setTurnoversTotal(string $turnoversTotal): void
    {
        $this->turnoversTotal = $turnoversTotal;
    }

    public function getTurnoversPerGame(): string
    {
        return $this->turnoversPerGame;
    }

    public function setTurnoversPerGame(string $turnoversPerGame): void
    {
        $this->turnoversPerGame = $turnoversPerGame;
    }

    public function getPointsScoredOffTurnovers(): string
    {
        return $this->pointsScoredOffTurnovers;
    }

    public function setPointsScoredOffTurnovers(string $pointsScoredOffTurnovers): void
    {
        $this->pointsScoredOffTurnovers = $pointsScoredOffTurnovers;
    }

    public function getPointsScoredInPaint(): string
    {
        return $this->pointsScoredInPaint;
    }

    public function setPointsScoredInPaint(string $pointsScoredInPaint): void
    {
        $this->pointsScoredInPaint = $pointsScoredInPaint;
    }

    public function getPointsScoredOnSecondChance(): string
    {
        return $this->pointsScoredOnSecondChance;
    }

    public function setPointsScoredOnSecondChance(string $pointsScoredOnSecondChance): void
    {
        $this->pointsScoredOnSecondChance = $pointsScoredOnSecondChance;
    }

    public function getPointsScoredOnFastBreak(): string
    {
        return $this->pointsScoredOnFastBreak;
    }

    public function setPointsScoredOnFastBreak(string $pointsScoredOnFastBreak): void
    {
        $this->pointsScoredOnFastBreak = $pointsScoredOnFastBreak;
    }

    public function toDto(): BasketballOffensiveStatsDto
    {
        $dto = new BasketballOffensiveStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->fieldGoalsMade = (int) ($this->fieldGoalsMade ?? 0);
        $dto->fieldGoalsAttempted = (int) ($this->fieldGoalsAttempted ?? 0);
        $dto->fieldGoalsPercentage = $this->fieldGoalsPercentage ?? "";
        $dto->fieldGoalsPerGame = $this->fieldGoalsPerGame ?? "";
        $dto->fieldGoalsAttemptedPerGame = $this->fieldGoalsAttemptedPerGame ?? "";
        $dto->fieldGoalsPercentageAdjusted = $this->fieldGoalsPercentageAdjusted ?? "";
        $dto->threePointersMade = (int) ($this->threePointersMade ?? 0);
        $dto->threePointersAttempted = (int) ($this->threePointersAttempted ?? 0);
        $dto->threePointersPercentage = $this->threePointersPercentage ?? "";
        $dto->threePointersPerGame = $this->threePointersPerGame ?? "";
        $dto->threePointersAttemptedPerGame = $this->threePointersAttemptedPerGame ?? "";
        $dto->freeThrowsMade = $this->freeThrowsMade ?? "";
        $dto->freeThrowsAttempted = $this->freeThrowsAttempted ?? "";
        $dto->freeThrowsPercentage = $this->freeThrowsPercentage ?? "";
        $dto->freeThrowsPerGame = $this->freeThrowsPerGame ?? "";
        $dto->freeThrowsAttemptedPerGame = $this->freeThrowsAttemptedPerGame ?? "";
        $dto->pointsScoredTotal = $this->pointsScoredTotal ?? "";
        $dto->pointsScoredPerGame = $this->pointsScoredPerGame ?? "";
        $dto->assistsTotal = $this->assistsTotal ?? "";
        $dto->assistsPerGame = $this->assistsPerGame ?? "";
        $dto->turnoversTotal = $this->turnoversTotal ?? "";
        $dto->turnoversPerGame = $this->turnoversPerGame ?? "";
        $dto->pointsScoredOffTurnovers = $this->pointsScoredOffTurnovers ?? "";
        $dto->pointsScoredInPaint = $this->pointsScoredInPaint ?? "";
        $dto->pointsScoredOnSecondChance = $this->pointsScoredOnSecondChance ?? "";
        $dto->pointsScoredOnFastBreak = $this->pointsScoredOnFastBreak ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "field_goals_made" => $this->fieldGoalsMade,
            "field_goals_attempted" => $this->fieldGoalsAttempted,
            "field_goals_percentage" => $this->fieldGoalsPercentage,
            "field_goals_per_game" => $this->fieldGoalsPerGame,
            "field_goals_attempted_per_game" => $this->fieldGoalsAttemptedPerGame,
            "field_goals_percentage_adjusted" => $this->fieldGoalsPercentageAdjusted,
            "three_pointers_made" => $this->threePointersMade,
            "three_pointers_attempted" => $this->threePointersAttempted,
            "three_pointers_percentage" => $this->threePointersPercentage,
            "three_pointers_per_game" => $this->threePointersPerGame,
            "three_pointers_attempted_per_game" => $this->threePointersAttemptedPerGame,
            "free_throws_made" => $this->freeThrowsMade,
            "free_throws_attempted" => $this->freeThrowsAttempted,
            "free_throws_percentage" => $this->freeThrowsPercentage,
            "free_throws_per_game" => $this->freeThrowsPerGame,
            "free_throws_attempted_per_game" => $this->freeThrowsAttemptedPerGame,
            "points_scored_total" => $this->pointsScoredTotal,
            "points_scored_per_game" => $this->pointsScoredPerGame,
            "assists_total" => $this->assistsTotal,
            "assists_per_game" => $this->assistsPerGame,
            "turnovers_total" => $this->turnoversTotal,
            "turnovers_per_game" => $this->turnoversPerGame,
            "points_scored_off_turnovers" => $this->pointsScoredOffTurnovers,
            "points_scored_in_paint" => $this->pointsScoredInPaint,
            "points_scored_on_second_chance" => $this->pointsScoredOnSecondChance,
            "points_scored_on_fast_break" => $this->pointsScoredOnFastBreak,
        ];
    }
}