<?php

declare(strict_types=1);

namespace Sports\AmericanFootballPassingStats;

class AmericanFootballPassingStatsDto 
{
    public int $id;
    public string $passesAttempts;
    public string $passesCompletions;
    public string $passesPercentage;
    public string $passesYardsGross;
    public string $passesYardsNet;
    public string $passesYardsLost;
    public string $passesTouchdowns;
    public string $passesTouchdownsPercentage;
    public string $passesInterceptions;
    public string $passesInterceptionsPercentage;
    public string $passesLongest;
    public string $passesAverageYardsPer;
    public string $passerRating;
    public string $receptionsTotal;
    public string $receptionsYards;
    public string $receptionsTouchdowns;
    public string $receptionsFirstDown;
    public string $receptionsLongest;
    public string $receptionsAverageYardsPer;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->passesAttempts = $row["passes_attempts"] ?? "";
        $this->passesCompletions = $row["passes_completions"] ?? "";
        $this->passesPercentage = $row["passes_percentage"] ?? "";
        $this->passesYardsGross = $row["passes_yards_gross"] ?? "";
        $this->passesYardsNet = $row["passes_yards_net"] ?? "";
        $this->passesYardsLost = $row["passes_yards_lost"] ?? "";
        $this->passesTouchdowns = $row["passes_touchdowns"] ?? "";
        $this->passesTouchdownsPercentage = $row["passes_touchdowns_percentage"] ?? "";
        $this->passesInterceptions = $row["passes_interceptions"] ?? "";
        $this->passesInterceptionsPercentage = $row["passes_interceptions_percentage"] ?? "";
        $this->passesLongest = $row["passes_longest"] ?? "";
        $this->passesAverageYardsPer = $row["passes_average_yards_per"] ?? "";
        $this->passerRating = $row["passer_rating"] ?? "";
        $this->receptionsTotal = $row["receptions_total"] ?? "";
        $this->receptionsYards = $row["receptions_yards"] ?? "";
        $this->receptionsTouchdowns = $row["receptions_touchdowns"] ?? "";
        $this->receptionsFirstDown = $row["receptions_first_down"] ?? "";
        $this->receptionsLongest = $row["receptions_longest"] ?? "";
        $this->receptionsAverageYardsPer = $row["receptions_average_yards_per"] ?? "";
    }
}