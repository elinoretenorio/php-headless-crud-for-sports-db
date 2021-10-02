<?php

declare(strict_types=1);

namespace Sports\SoccerDefensiveStats;

use JsonSerializable;

class SoccerDefensiveStatsModel implements JsonSerializable
{
    private int $id;
    private string $shotsPenaltyShotAllowed;
    private string $goalsPenaltyShotAllowed;
    private string $goalsAgainstAverage;
    private string $goalsAgainstTotal;
    private string $saves;
    private string $savePercentage;
    private string $catchesPunches;
    private string $shotsOnGoalTotal;
    private string $shotsShootoutTotal;
    private string $shotsShootoutAllowed;
    private string $shotsBlocked;
    private string $shutouts;

    public function __construct(SoccerDefensiveStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->shotsPenaltyShotAllowed = $dto->shotsPenaltyShotAllowed;
        $this->goalsPenaltyShotAllowed = $dto->goalsPenaltyShotAllowed;
        $this->goalsAgainstAverage = $dto->goalsAgainstAverage;
        $this->goalsAgainstTotal = $dto->goalsAgainstTotal;
        $this->saves = $dto->saves;
        $this->savePercentage = $dto->savePercentage;
        $this->catchesPunches = $dto->catchesPunches;
        $this->shotsOnGoalTotal = $dto->shotsOnGoalTotal;
        $this->shotsShootoutTotal = $dto->shotsShootoutTotal;
        $this->shotsShootoutAllowed = $dto->shotsShootoutAllowed;
        $this->shotsBlocked = $dto->shotsBlocked;
        $this->shutouts = $dto->shutouts;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getShotsPenaltyShotAllowed(): string
    {
        return $this->shotsPenaltyShotAllowed;
    }

    public function setShotsPenaltyShotAllowed(string $shotsPenaltyShotAllowed): void
    {
        $this->shotsPenaltyShotAllowed = $shotsPenaltyShotAllowed;
    }

    public function getGoalsPenaltyShotAllowed(): string
    {
        return $this->goalsPenaltyShotAllowed;
    }

    public function setGoalsPenaltyShotAllowed(string $goalsPenaltyShotAllowed): void
    {
        $this->goalsPenaltyShotAllowed = $goalsPenaltyShotAllowed;
    }

    public function getGoalsAgainstAverage(): string
    {
        return $this->goalsAgainstAverage;
    }

    public function setGoalsAgainstAverage(string $goalsAgainstAverage): void
    {
        $this->goalsAgainstAverage = $goalsAgainstAverage;
    }

    public function getGoalsAgainstTotal(): string
    {
        return $this->goalsAgainstTotal;
    }

    public function setGoalsAgainstTotal(string $goalsAgainstTotal): void
    {
        $this->goalsAgainstTotal = $goalsAgainstTotal;
    }

    public function getSaves(): string
    {
        return $this->saves;
    }

    public function setSaves(string $saves): void
    {
        $this->saves = $saves;
    }

    public function getSavePercentage(): string
    {
        return $this->savePercentage;
    }

    public function setSavePercentage(string $savePercentage): void
    {
        $this->savePercentage = $savePercentage;
    }

    public function getCatchesPunches(): string
    {
        return $this->catchesPunches;
    }

    public function setCatchesPunches(string $catchesPunches): void
    {
        $this->catchesPunches = $catchesPunches;
    }

    public function getShotsOnGoalTotal(): string
    {
        return $this->shotsOnGoalTotal;
    }

    public function setShotsOnGoalTotal(string $shotsOnGoalTotal): void
    {
        $this->shotsOnGoalTotal = $shotsOnGoalTotal;
    }

    public function getShotsShootoutTotal(): string
    {
        return $this->shotsShootoutTotal;
    }

    public function setShotsShootoutTotal(string $shotsShootoutTotal): void
    {
        $this->shotsShootoutTotal = $shotsShootoutTotal;
    }

    public function getShotsShootoutAllowed(): string
    {
        return $this->shotsShootoutAllowed;
    }

    public function setShotsShootoutAllowed(string $shotsShootoutAllowed): void
    {
        $this->shotsShootoutAllowed = $shotsShootoutAllowed;
    }

    public function getShotsBlocked(): string
    {
        return $this->shotsBlocked;
    }

    public function setShotsBlocked(string $shotsBlocked): void
    {
        $this->shotsBlocked = $shotsBlocked;
    }

    public function getShutouts(): string
    {
        return $this->shutouts;
    }

    public function setShutouts(string $shutouts): void
    {
        $this->shutouts = $shutouts;
    }

    public function toDto(): SoccerDefensiveStatsDto
    {
        $dto = new SoccerDefensiveStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->shotsPenaltyShotAllowed = $this->shotsPenaltyShotAllowed ?? "";
        $dto->goalsPenaltyShotAllowed = $this->goalsPenaltyShotAllowed ?? "";
        $dto->goalsAgainstAverage = $this->goalsAgainstAverage ?? "";
        $dto->goalsAgainstTotal = $this->goalsAgainstTotal ?? "";
        $dto->saves = $this->saves ?? "";
        $dto->savePercentage = $this->savePercentage ?? "";
        $dto->catchesPunches = $this->catchesPunches ?? "";
        $dto->shotsOnGoalTotal = $this->shotsOnGoalTotal ?? "";
        $dto->shotsShootoutTotal = $this->shotsShootoutTotal ?? "";
        $dto->shotsShootoutAllowed = $this->shotsShootoutAllowed ?? "";
        $dto->shotsBlocked = $this->shotsBlocked ?? "";
        $dto->shutouts = $this->shutouts ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "shots_penalty_shot_allowed" => $this->shotsPenaltyShotAllowed,
            "goals_penalty_shot_allowed" => $this->goalsPenaltyShotAllowed,
            "goals_against_average" => $this->goalsAgainstAverage,
            "goals_against_total" => $this->goalsAgainstTotal,
            "saves" => $this->saves,
            "save_percentage" => $this->savePercentage,
            "catches_punches" => $this->catchesPunches,
            "shots_on_goal_total" => $this->shotsOnGoalTotal,
            "shots_shootout_total" => $this->shotsShootoutTotal,
            "shots_shootout_allowed" => $this->shotsShootoutAllowed,
            "shots_blocked" => $this->shotsBlocked,
            "shutouts" => $this->shutouts,
        ];
    }
}