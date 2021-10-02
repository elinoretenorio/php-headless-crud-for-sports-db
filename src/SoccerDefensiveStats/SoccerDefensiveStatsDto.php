<?php

declare(strict_types=1);

namespace Sports\SoccerDefensiveStats;

class SoccerDefensiveStatsDto 
{
    public int $id;
    public string $shotsPenaltyShotAllowed;
    public string $goalsPenaltyShotAllowed;
    public string $goalsAgainstAverage;
    public string $goalsAgainstTotal;
    public string $saves;
    public string $savePercentage;
    public string $catchesPunches;
    public string $shotsOnGoalTotal;
    public string $shotsShootoutTotal;
    public string $shotsShootoutAllowed;
    public string $shotsBlocked;
    public string $shutouts;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->shotsPenaltyShotAllowed = $row["shots_penalty_shot_allowed"] ?? "";
        $this->goalsPenaltyShotAllowed = $row["goals_penalty_shot_allowed"] ?? "";
        $this->goalsAgainstAverage = $row["goals_against_average"] ?? "";
        $this->goalsAgainstTotal = $row["goals_against_total"] ?? "";
        $this->saves = $row["saves"] ?? "";
        $this->savePercentage = $row["save_percentage"] ?? "";
        $this->catchesPunches = $row["catches_punches"] ?? "";
        $this->shotsOnGoalTotal = $row["shots_on_goal_total"] ?? "";
        $this->shotsShootoutTotal = $row["shots_shootout_total"] ?? "";
        $this->shotsShootoutAllowed = $row["shots_shootout_allowed"] ?? "";
        $this->shotsBlocked = $row["shots_blocked"] ?? "";
        $this->shutouts = $row["shutouts"] ?? "";
    }
}