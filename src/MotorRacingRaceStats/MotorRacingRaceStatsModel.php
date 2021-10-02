<?php

declare(strict_types=1);

namespace Sports\MotorRacingRaceStats;

use JsonSerializable;

class MotorRacingRaceStatsModel implements JsonSerializable
{
    private int $id;
    private string $timeBehindLeader;
    private string $lapsBehindLeader;
    private string $timeAheadFollower;
    private string $lapsAheadFollower;
    private string $time;
    private string $points;
    private string $pointsRookie;
    private string $bonus;
    private string $lapsCompleted;
    private string $lapsLeadingTotal;
    private string $distanceLeading;
    private string $distanceCompleted;
    private string $distanceUnits;
    private string $speedAverage;
    private string $speedUnits;
    private string $status;
    private string $finishesTop5;
    private string $finishesTop10;
    private string $starts;
    private string $finishes;
    private string $nonFinishes;
    private string $wins;
    private string $racesLeading;
    private string $money;
    private string $moneyUnits;
    private string $leadsTotal;

    public function __construct(MotorRacingRaceStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->timeBehindLeader = $dto->timeBehindLeader;
        $this->lapsBehindLeader = $dto->lapsBehindLeader;
        $this->timeAheadFollower = $dto->timeAheadFollower;
        $this->lapsAheadFollower = $dto->lapsAheadFollower;
        $this->time = $dto->time;
        $this->points = $dto->points;
        $this->pointsRookie = $dto->pointsRookie;
        $this->bonus = $dto->bonus;
        $this->lapsCompleted = $dto->lapsCompleted;
        $this->lapsLeadingTotal = $dto->lapsLeadingTotal;
        $this->distanceLeading = $dto->distanceLeading;
        $this->distanceCompleted = $dto->distanceCompleted;
        $this->distanceUnits = $dto->distanceUnits;
        $this->speedAverage = $dto->speedAverage;
        $this->speedUnits = $dto->speedUnits;
        $this->status = $dto->status;
        $this->finishesTop5 = $dto->finishesTop5;
        $this->finishesTop10 = $dto->finishesTop10;
        $this->starts = $dto->starts;
        $this->finishes = $dto->finishes;
        $this->nonFinishes = $dto->nonFinishes;
        $this->wins = $dto->wins;
        $this->racesLeading = $dto->racesLeading;
        $this->money = $dto->money;
        $this->moneyUnits = $dto->moneyUnits;
        $this->leadsTotal = $dto->leadsTotal;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTimeBehindLeader(): string
    {
        return $this->timeBehindLeader;
    }

    public function setTimeBehindLeader(string $timeBehindLeader): void
    {
        $this->timeBehindLeader = $timeBehindLeader;
    }

    public function getLapsBehindLeader(): string
    {
        return $this->lapsBehindLeader;
    }

    public function setLapsBehindLeader(string $lapsBehindLeader): void
    {
        $this->lapsBehindLeader = $lapsBehindLeader;
    }

    public function getTimeAheadFollower(): string
    {
        return $this->timeAheadFollower;
    }

    public function setTimeAheadFollower(string $timeAheadFollower): void
    {
        $this->timeAheadFollower = $timeAheadFollower;
    }

    public function getLapsAheadFollower(): string
    {
        return $this->lapsAheadFollower;
    }

    public function setLapsAheadFollower(string $lapsAheadFollower): void
    {
        $this->lapsAheadFollower = $lapsAheadFollower;
    }

    public function getTime(): string
    {
        return $this->time;
    }

    public function setTime(string $time): void
    {
        $this->time = $time;
    }

    public function getPoints(): string
    {
        return $this->points;
    }

    public function setPoints(string $points): void
    {
        $this->points = $points;
    }

    public function getPointsRookie(): string
    {
        return $this->pointsRookie;
    }

    public function setPointsRookie(string $pointsRookie): void
    {
        $this->pointsRookie = $pointsRookie;
    }

    public function getBonus(): string
    {
        return $this->bonus;
    }

    public function setBonus(string $bonus): void
    {
        $this->bonus = $bonus;
    }

    public function getLapsCompleted(): string
    {
        return $this->lapsCompleted;
    }

    public function setLapsCompleted(string $lapsCompleted): void
    {
        $this->lapsCompleted = $lapsCompleted;
    }

    public function getLapsLeadingTotal(): string
    {
        return $this->lapsLeadingTotal;
    }

    public function setLapsLeadingTotal(string $lapsLeadingTotal): void
    {
        $this->lapsLeadingTotal = $lapsLeadingTotal;
    }

    public function getDistanceLeading(): string
    {
        return $this->distanceLeading;
    }

    public function setDistanceLeading(string $distanceLeading): void
    {
        $this->distanceLeading = $distanceLeading;
    }

    public function getDistanceCompleted(): string
    {
        return $this->distanceCompleted;
    }

    public function setDistanceCompleted(string $distanceCompleted): void
    {
        $this->distanceCompleted = $distanceCompleted;
    }

    public function getDistanceUnits(): string
    {
        return $this->distanceUnits;
    }

    public function setDistanceUnits(string $distanceUnits): void
    {
        $this->distanceUnits = $distanceUnits;
    }

    public function getSpeedAverage(): string
    {
        return $this->speedAverage;
    }

    public function setSpeedAverage(string $speedAverage): void
    {
        $this->speedAverage = $speedAverage;
    }

    public function getSpeedUnits(): string
    {
        return $this->speedUnits;
    }

    public function setSpeedUnits(string $speedUnits): void
    {
        $this->speedUnits = $speedUnits;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getFinishesTop5(): string
    {
        return $this->finishesTop5;
    }

    public function setFinishesTop5(string $finishesTop5): void
    {
        $this->finishesTop5 = $finishesTop5;
    }

    public function getFinishesTop10(): string
    {
        return $this->finishesTop10;
    }

    public function setFinishesTop10(string $finishesTop10): void
    {
        $this->finishesTop10 = $finishesTop10;
    }

    public function getStarts(): string
    {
        return $this->starts;
    }

    public function setStarts(string $starts): void
    {
        $this->starts = $starts;
    }

    public function getFinishes(): string
    {
        return $this->finishes;
    }

    public function setFinishes(string $finishes): void
    {
        $this->finishes = $finishes;
    }

    public function getNonFinishes(): string
    {
        return $this->nonFinishes;
    }

    public function setNonFinishes(string $nonFinishes): void
    {
        $this->nonFinishes = $nonFinishes;
    }

    public function getWins(): string
    {
        return $this->wins;
    }

    public function setWins(string $wins): void
    {
        $this->wins = $wins;
    }

    public function getRacesLeading(): string
    {
        return $this->racesLeading;
    }

    public function setRacesLeading(string $racesLeading): void
    {
        $this->racesLeading = $racesLeading;
    }

    public function getMoney(): string
    {
        return $this->money;
    }

    public function setMoney(string $money): void
    {
        $this->money = $money;
    }

    public function getMoneyUnits(): string
    {
        return $this->moneyUnits;
    }

    public function setMoneyUnits(string $moneyUnits): void
    {
        $this->moneyUnits = $moneyUnits;
    }

    public function getLeadsTotal(): string
    {
        return $this->leadsTotal;
    }

    public function setLeadsTotal(string $leadsTotal): void
    {
        $this->leadsTotal = $leadsTotal;
    }

    public function toDto(): MotorRacingRaceStatsDto
    {
        $dto = new MotorRacingRaceStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->timeBehindLeader = $this->timeBehindLeader ?? "";
        $dto->lapsBehindLeader = $this->lapsBehindLeader ?? "";
        $dto->timeAheadFollower = $this->timeAheadFollower ?? "";
        $dto->lapsAheadFollower = $this->lapsAheadFollower ?? "";
        $dto->time = $this->time ?? "";
        $dto->points = $this->points ?? "";
        $dto->pointsRookie = $this->pointsRookie ?? "";
        $dto->bonus = $this->bonus ?? "";
        $dto->lapsCompleted = $this->lapsCompleted ?? "";
        $dto->lapsLeadingTotal = $this->lapsLeadingTotal ?? "";
        $dto->distanceLeading = $this->distanceLeading ?? "";
        $dto->distanceCompleted = $this->distanceCompleted ?? "";
        $dto->distanceUnits = $this->distanceUnits ?? "";
        $dto->speedAverage = $this->speedAverage ?? "";
        $dto->speedUnits = $this->speedUnits ?? "";
        $dto->status = $this->status ?? "";
        $dto->finishesTop5 = $this->finishesTop5 ?? "";
        $dto->finishesTop10 = $this->finishesTop10 ?? "";
        $dto->starts = $this->starts ?? "";
        $dto->finishes = $this->finishes ?? "";
        $dto->nonFinishes = $this->nonFinishes ?? "";
        $dto->wins = $this->wins ?? "";
        $dto->racesLeading = $this->racesLeading ?? "";
        $dto->money = $this->money ?? "";
        $dto->moneyUnits = $this->moneyUnits ?? "";
        $dto->leadsTotal = $this->leadsTotal ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "time_behind_leader" => $this->timeBehindLeader,
            "laps_behind_leader" => $this->lapsBehindLeader,
            "time_ahead_follower" => $this->timeAheadFollower,
            "laps_ahead_follower" => $this->lapsAheadFollower,
            "time" => $this->time,
            "points" => $this->points,
            "points_rookie" => $this->pointsRookie,
            "bonus" => $this->bonus,
            "laps_completed" => $this->lapsCompleted,
            "laps_leading_total" => $this->lapsLeadingTotal,
            "distance_leading" => $this->distanceLeading,
            "distance_completed" => $this->distanceCompleted,
            "distance_units" => $this->distanceUnits,
            "speed_average" => $this->speedAverage,
            "speed_units" => $this->speedUnits,
            "status" => $this->status,
            "finishes_top_5" => $this->finishesTop5,
            "finishes_top_10" => $this->finishesTop10,
            "starts" => $this->starts,
            "finishes" => $this->finishes,
            "non_finishes" => $this->nonFinishes,
            "wins" => $this->wins,
            "races_leading" => $this->racesLeading,
            "money" => $this->money,
            "money_units" => $this->moneyUnits,
            "leads_total" => $this->leadsTotal,
        ];
    }
}