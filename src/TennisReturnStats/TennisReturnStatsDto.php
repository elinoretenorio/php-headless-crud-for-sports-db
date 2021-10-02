<?php

declare(strict_types=1);

namespace Sports\TennisReturnStats;

class TennisReturnStatsDto 
{
    public int $id;
    public string $returnsPlayed;
    public string $matchesPlayed;
    public string $firstServiceReturnPointsWon;
    public string $firstServiceReturnPointsWonPct;
    public string $secondServiceReturnPointsWon;
    public string $secondServiceReturnPointsWonPct;
    public string $returnGamesPlayed;
    public string $returnGamesWon;
    public string $returnGamesWonPct;
    public string $breakPointsPlayed;
    public string $breakPointsConverted;
    public string $breakPointsConvertedPct;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->returnsPlayed = $row["returns_played"] ?? "";
        $this->matchesPlayed = $row["matches_played"] ?? "";
        $this->firstServiceReturnPointsWon = $row["first_service_return_points_won"] ?? "";
        $this->firstServiceReturnPointsWonPct = $row["first_service_return_points_won_pct"] ?? "";
        $this->secondServiceReturnPointsWon = $row["second_service_return_points_won"] ?? "";
        $this->secondServiceReturnPointsWonPct = $row["second_service_return_points_won_pct"] ?? "";
        $this->returnGamesPlayed = $row["return_games_played"] ?? "";
        $this->returnGamesWon = $row["return_games_won"] ?? "";
        $this->returnGamesWonPct = $row["return_games_won_pct"] ?? "";
        $this->breakPointsPlayed = $row["break_points_played"] ?? "";
        $this->breakPointsConverted = $row["break_points_converted"] ?? "";
        $this->breakPointsConvertedPct = $row["break_points_converted_pct"] ?? "";
    }
}