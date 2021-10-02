<?php

declare(strict_types=1);

namespace Sports\TennisServiceStats;

class TennisServiceStatsDto 
{
    public int $id;
    public string $servicesPlayed;
    public string $matchesPlayed;
    public string $aces;
    public string $firstServicesGood;
    public string $firstServicesGoodPct;
    public string $firstServicePointsWon;
    public string $firstServicePointsWonPct;
    public string $secondServicePointsWon;
    public string $secondServicePointsWonPct;
    public string $serviceGamesPlayed;
    public string $serviceGamesWon;
    public string $serviceGamesWonPct;
    public string $breakPointsPlayed;
    public string $breakPointsSaved;
    public string $breakPointsSavedPct;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->servicesPlayed = $row["services_played"] ?? "";
        $this->matchesPlayed = $row["matches_played"] ?? "";
        $this->aces = $row["aces"] ?? "";
        $this->firstServicesGood = $row["first_services_good"] ?? "";
        $this->firstServicesGoodPct = $row["first_services_good_pct"] ?? "";
        $this->firstServicePointsWon = $row["first_service_points_won"] ?? "";
        $this->firstServicePointsWonPct = $row["first_service_points_won_pct"] ?? "";
        $this->secondServicePointsWon = $row["second_service_points_won"] ?? "";
        $this->secondServicePointsWonPct = $row["second_service_points_won_pct"] ?? "";
        $this->serviceGamesPlayed = $row["service_games_played"] ?? "";
        $this->serviceGamesWon = $row["service_games_won"] ?? "";
        $this->serviceGamesWonPct = $row["service_games_won_pct"] ?? "";
        $this->breakPointsPlayed = $row["break_points_played"] ?? "";
        $this->breakPointsSaved = $row["break_points_saved"] ?? "";
        $this->breakPointsSavedPct = $row["break_points_saved_pct"] ?? "";
    }
}