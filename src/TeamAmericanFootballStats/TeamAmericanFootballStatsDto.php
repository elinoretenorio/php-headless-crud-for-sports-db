<?php

declare(strict_types=1);

namespace Sports\TeamAmericanFootballStats;

class TeamAmericanFootballStatsDto 
{
    public int $id;
    public string $yardsPerAttempt;
    public string $averageStartingPosition;
    public string $timeouts;
    public string $timeOfPossession;
    public string $turnoverRatio;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->yardsPerAttempt = $row["yards_per_attempt"] ?? "";
        $this->averageStartingPosition = $row["average_starting_position"] ?? "";
        $this->timeouts = $row["timeouts"] ?? "";
        $this->timeOfPossession = $row["time_of_possession"] ?? "";
        $this->turnoverRatio = $row["turnover_ratio"] ?? "";
    }
}