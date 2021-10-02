<?php

declare(strict_types=1);

namespace Sports\MotorRacingRaceStats;

class MotorRacingRaceStatsDto 
{
    public int $id;
    public string $timeBehindLeader;
    public string $lapsBehindLeader;
    public string $timeAheadFollower;
    public string $lapsAheadFollower;
    public string $time;
    public string $points;
    public string $pointsRookie;
    public string $bonus;
    public string $lapsCompleted;
    public string $lapsLeadingTotal;
    public string $distanceLeading;
    public string $distanceCompleted;
    public string $distanceUnits;
    public string $speedAverage;
    public string $speedUnits;
    public string $status;
    public string $finishesTop5;
    public string $finishesTop10;
    public string $starts;
    public string $finishes;
    public string $nonFinishes;
    public string $wins;
    public string $racesLeading;
    public string $money;
    public string $moneyUnits;
    public string $leadsTotal;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->timeBehindLeader = $row["time_behind_leader"] ?? "";
        $this->lapsBehindLeader = $row["laps_behind_leader"] ?? "";
        $this->timeAheadFollower = $row["time_ahead_follower"] ?? "";
        $this->lapsAheadFollower = $row["laps_ahead_follower"] ?? "";
        $this->time = $row["time"] ?? "";
        $this->points = $row["points"] ?? "";
        $this->pointsRookie = $row["points_rookie"] ?? "";
        $this->bonus = $row["bonus"] ?? "";
        $this->lapsCompleted = $row["laps_completed"] ?? "";
        $this->lapsLeadingTotal = $row["laps_leading_total"] ?? "";
        $this->distanceLeading = $row["distance_leading"] ?? "";
        $this->distanceCompleted = $row["distance_completed"] ?? "";
        $this->distanceUnits = $row["distance_units"] ?? "";
        $this->speedAverage = $row["speed_average"] ?? "";
        $this->speedUnits = $row["speed_units"] ?? "";
        $this->status = $row["status"] ?? "";
        $this->finishesTop5 = $row["finishes_top_5"] ?? "";
        $this->finishesTop10 = $row["finishes_top_10"] ?? "";
        $this->starts = $row["starts"] ?? "";
        $this->finishes = $row["finishes"] ?? "";
        $this->nonFinishes = $row["non_finishes"] ?? "";
        $this->wins = $row["wins"] ?? "";
        $this->racesLeading = $row["races_leading"] ?? "";
        $this->money = $row["money"] ?? "";
        $this->moneyUnits = $row["money_units"] ?? "";
        $this->leadsTotal = $row["leads_total"] ?? "";
    }
}