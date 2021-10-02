<?php

declare(strict_types=1);

namespace Sports\AmericanFootballPenaltiesStats;

class AmericanFootballPenaltiesStatsDto 
{
    public int $id;
    public string $penaltiesTotal;
    public string $penaltyYards;
    public string $penaltyFirstDowns;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->penaltiesTotal = $row["penalties_total"] ?? "";
        $this->penaltyYards = $row["penalty_yards"] ?? "";
        $this->penaltyFirstDowns = $row["penalty_first_downs"] ?? "";
    }
}