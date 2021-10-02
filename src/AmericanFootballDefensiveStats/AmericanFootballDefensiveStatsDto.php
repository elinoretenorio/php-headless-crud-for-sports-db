<?php

declare(strict_types=1);

namespace Sports\AmericanFootballDefensiveStats;

class AmericanFootballDefensiveStatsDto 
{
    public int $id;
    public string $tacklesTotal;
    public string $tacklesSolo;
    public string $tacklesAssists;
    public string $interceptionsTotal;
    public string $interceptionsYards;
    public string $interceptionsAverage;
    public string $interceptionsLongest;
    public string $interceptionsTouchdown;
    public string $quarterbackHurries;
    public string $sacksTotal;
    public string $sacksYards;
    public string $passesDefensed;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->tacklesTotal = $row["tackles_total"] ?? "";
        $this->tacklesSolo = $row["tackles_solo"] ?? "";
        $this->tacklesAssists = $row["tackles_assists"] ?? "";
        $this->interceptionsTotal = $row["interceptions_total"] ?? "";
        $this->interceptionsYards = $row["interceptions_yards"] ?? "";
        $this->interceptionsAverage = $row["interceptions_average"] ?? "";
        $this->interceptionsLongest = $row["interceptions_longest"] ?? "";
        $this->interceptionsTouchdown = $row["interceptions_touchdown"] ?? "";
        $this->quarterbackHurries = $row["quarterback_hurries"] ?? "";
        $this->sacksTotal = $row["sacks_total"] ?? "";
        $this->sacksYards = $row["sacks_yards"] ?? "";
        $this->passesDefensed = $row["passes_defensed"] ?? "";
    }
}