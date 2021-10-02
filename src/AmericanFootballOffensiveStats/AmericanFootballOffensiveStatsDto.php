<?php

declare(strict_types=1);

namespace Sports\AmericanFootballOffensiveStats;

class AmericanFootballOffensiveStatsDto 
{
    public int $id;
    public string $offensivePlaysYards;
    public string $offensivePlaysNumber;
    public string $offensivePlaysAverageYardsPer;
    public string $possessionDuration;
    public string $turnoversGiveaway;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->offensivePlaysYards = $row["offensive_plays_yards"] ?? "";
        $this->offensivePlaysNumber = $row["offensive_plays_number"] ?? "";
        $this->offensivePlaysAverageYardsPer = $row["offensive_plays_average_yards_per"] ?? "";
        $this->possessionDuration = $row["possession_duration"] ?? "";
        $this->turnoversGiveaway = $row["turnovers_giveaway"] ?? "";
    }
}