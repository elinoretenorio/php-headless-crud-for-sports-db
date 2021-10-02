<?php

declare(strict_types=1);

namespace Sports\AmericanFootballRushingStats;

class AmericanFootballRushingStatsDto 
{
    public int $id;
    public string $rushesAttempts;
    public string $rushesYards;
    public string $rushesTouchdowns;
    public string $rushingAverageYardsPer;
    public string $rushesFirstDown;
    public string $rushesLongest;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->rushesAttempts = $row["rushes_attempts"] ?? "";
        $this->rushesYards = $row["rushes_yards"] ?? "";
        $this->rushesTouchdowns = $row["rushes_touchdowns"] ?? "";
        $this->rushingAverageYardsPer = $row["rushing_average_yards_per"] ?? "";
        $this->rushesFirstDown = $row["rushes_first_down"] ?? "";
        $this->rushesLongest = $row["rushes_longest"] ?? "";
    }
}