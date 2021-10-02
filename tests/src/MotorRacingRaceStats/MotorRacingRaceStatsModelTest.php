<?php

declare(strict_types=1);

namespace Sports\Tests\MotorRacingRaceStats;

use PHPUnit\Framework\TestCase;
use Sports\MotorRacingRaceStats\{ MotorRacingRaceStatsDto, MotorRacingRaceStatsModel };

class MotorRacingRaceStatsModelTest extends TestCase
{
    private array $input;
    private MotorRacingRaceStatsDto $dto;
    private MotorRacingRaceStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 1121,
            "time_behind_leader" => "wind",
            "laps_behind_leader" => "radio",
            "time_ahead_follower" => "could",
            "laps_ahead_follower" => "house",
            "time" => "foreign",
            "points" => "approach",
            "points_rookie" => "contain",
            "bonus" => "chair",
            "laps_completed" => "middle",
            "laps_leading_total" => "event",
            "distance_leading" => "room",
            "distance_completed" => "level",
            "distance_units" => "into",
            "speed_average" => "most",
            "speed_units" => "film",
            "status" => "live",
            "finishes_top_5" => "never",
            "finishes_top_10" => "evening",
            "starts" => "whole",
            "finishes" => "represent",
            "non_finishes" => "center",
            "wins" => "hour",
            "races_leading" => "officer",
            "money" => "beautiful",
            "money_units" => "difference",
            "leads_total" => "expert",
        ];
        $this->dto = new MotorRacingRaceStatsDto($this->input);
        $this->model = new MotorRacingRaceStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new MotorRacingRaceStatsModel(null);

        $this->assertInstanceOf(MotorRacingRaceStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 1338;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetTimeBehindLeader(): void
    {
        $this->assertEquals($this->dto->timeBehindLeader, $this->model->getTimeBehindLeader());
    }

    public function testSetTimeBehindLeader(): void
    {
        $expected = "character";
        $model = $this->model;
        $model->setTimeBehindLeader($expected);

        $this->assertEquals($expected, $model->getTimeBehindLeader());
    }

    public function testGetLapsBehindLeader(): void
    {
        $this->assertEquals($this->dto->lapsBehindLeader, $this->model->getLapsBehindLeader());
    }

    public function testSetLapsBehindLeader(): void
    {
        $expected = "eight";
        $model = $this->model;
        $model->setLapsBehindLeader($expected);

        $this->assertEquals($expected, $model->getLapsBehindLeader());
    }

    public function testGetTimeAheadFollower(): void
    {
        $this->assertEquals($this->dto->timeAheadFollower, $this->model->getTimeAheadFollower());
    }

    public function testSetTimeAheadFollower(): void
    {
        $expected = "for";
        $model = $this->model;
        $model->setTimeAheadFollower($expected);

        $this->assertEquals($expected, $model->getTimeAheadFollower());
    }

    public function testGetLapsAheadFollower(): void
    {
        $this->assertEquals($this->dto->lapsAheadFollower, $this->model->getLapsAheadFollower());
    }

    public function testSetLapsAheadFollower(): void
    {
        $expected = "per";
        $model = $this->model;
        $model->setLapsAheadFollower($expected);

        $this->assertEquals($expected, $model->getLapsAheadFollower());
    }

    public function testGetTime(): void
    {
        $this->assertEquals($this->dto->time, $this->model->getTime());
    }

    public function testSetTime(): void
    {
        $expected = "reflect";
        $model = $this->model;
        $model->setTime($expected);

        $this->assertEquals($expected, $model->getTime());
    }

    public function testGetPoints(): void
    {
        $this->assertEquals($this->dto->points, $this->model->getPoints());
    }

    public function testSetPoints(): void
    {
        $expected = "interest";
        $model = $this->model;
        $model->setPoints($expected);

        $this->assertEquals($expected, $model->getPoints());
    }

    public function testGetPointsRookie(): void
    {
        $this->assertEquals($this->dto->pointsRookie, $this->model->getPointsRookie());
    }

    public function testSetPointsRookie(): void
    {
        $expected = "my";
        $model = $this->model;
        $model->setPointsRookie($expected);

        $this->assertEquals($expected, $model->getPointsRookie());
    }

    public function testGetBonus(): void
    {
        $this->assertEquals($this->dto->bonus, $this->model->getBonus());
    }

    public function testSetBonus(): void
    {
        $expected = "soldier";
        $model = $this->model;
        $model->setBonus($expected);

        $this->assertEquals($expected, $model->getBonus());
    }

    public function testGetLapsCompleted(): void
    {
        $this->assertEquals($this->dto->lapsCompleted, $this->model->getLapsCompleted());
    }

    public function testSetLapsCompleted(): void
    {
        $expected = "heavy";
        $model = $this->model;
        $model->setLapsCompleted($expected);

        $this->assertEquals($expected, $model->getLapsCompleted());
    }

    public function testGetLapsLeadingTotal(): void
    {
        $this->assertEquals($this->dto->lapsLeadingTotal, $this->model->getLapsLeadingTotal());
    }

    public function testSetLapsLeadingTotal(): void
    {
        $expected = "month";
        $model = $this->model;
        $model->setLapsLeadingTotal($expected);

        $this->assertEquals($expected, $model->getLapsLeadingTotal());
    }

    public function testGetDistanceLeading(): void
    {
        $this->assertEquals($this->dto->distanceLeading, $this->model->getDistanceLeading());
    }

    public function testSetDistanceLeading(): void
    {
        $expected = "thus";
        $model = $this->model;
        $model->setDistanceLeading($expected);

        $this->assertEquals($expected, $model->getDistanceLeading());
    }

    public function testGetDistanceCompleted(): void
    {
        $this->assertEquals($this->dto->distanceCompleted, $this->model->getDistanceCompleted());
    }

    public function testSetDistanceCompleted(): void
    {
        $expected = "hit";
        $model = $this->model;
        $model->setDistanceCompleted($expected);

        $this->assertEquals($expected, $model->getDistanceCompleted());
    }

    public function testGetDistanceUnits(): void
    {
        $this->assertEquals($this->dto->distanceUnits, $this->model->getDistanceUnits());
    }

    public function testSetDistanceUnits(): void
    {
        $expected = "ahead";
        $model = $this->model;
        $model->setDistanceUnits($expected);

        $this->assertEquals($expected, $model->getDistanceUnits());
    }

    public function testGetSpeedAverage(): void
    {
        $this->assertEquals($this->dto->speedAverage, $this->model->getSpeedAverage());
    }

    public function testSetSpeedAverage(): void
    {
        $expected = "art";
        $model = $this->model;
        $model->setSpeedAverage($expected);

        $this->assertEquals($expected, $model->getSpeedAverage());
    }

    public function testGetSpeedUnits(): void
    {
        $this->assertEquals($this->dto->speedUnits, $this->model->getSpeedUnits());
    }

    public function testSetSpeedUnits(): void
    {
        $expected = "bank";
        $model = $this->model;
        $model->setSpeedUnits($expected);

        $this->assertEquals($expected, $model->getSpeedUnits());
    }

    public function testGetStatus(): void
    {
        $this->assertEquals($this->dto->status, $this->model->getStatus());
    }

    public function testSetStatus(): void
    {
        $expected = "kind";
        $model = $this->model;
        $model->setStatus($expected);

        $this->assertEquals($expected, $model->getStatus());
    }

    public function testGetFinishesTop5(): void
    {
        $this->assertEquals($this->dto->finishesTop5, $this->model->getFinishesTop5());
    }

    public function testSetFinishesTop5(): void
    {
        $expected = "management";
        $model = $this->model;
        $model->setFinishesTop5($expected);

        $this->assertEquals($expected, $model->getFinishesTop5());
    }

    public function testGetFinishesTop10(): void
    {
        $this->assertEquals($this->dto->finishesTop10, $this->model->getFinishesTop10());
    }

    public function testSetFinishesTop10(): void
    {
        $expected = "would";
        $model = $this->model;
        $model->setFinishesTop10($expected);

        $this->assertEquals($expected, $model->getFinishesTop10());
    }

    public function testGetStarts(): void
    {
        $this->assertEquals($this->dto->starts, $this->model->getStarts());
    }

    public function testSetStarts(): void
    {
        $expected = "enough";
        $model = $this->model;
        $model->setStarts($expected);

        $this->assertEquals($expected, $model->getStarts());
    }

    public function testGetFinishes(): void
    {
        $this->assertEquals($this->dto->finishes, $this->model->getFinishes());
    }

    public function testSetFinishes(): void
    {
        $expected = "buy";
        $model = $this->model;
        $model->setFinishes($expected);

        $this->assertEquals($expected, $model->getFinishes());
    }

    public function testGetNonFinishes(): void
    {
        $this->assertEquals($this->dto->nonFinishes, $this->model->getNonFinishes());
    }

    public function testSetNonFinishes(): void
    {
        $expected = "leave";
        $model = $this->model;
        $model->setNonFinishes($expected);

        $this->assertEquals($expected, $model->getNonFinishes());
    }

    public function testGetWins(): void
    {
        $this->assertEquals($this->dto->wins, $this->model->getWins());
    }

    public function testSetWins(): void
    {
        $expected = "evidence";
        $model = $this->model;
        $model->setWins($expected);

        $this->assertEquals($expected, $model->getWins());
    }

    public function testGetRacesLeading(): void
    {
        $this->assertEquals($this->dto->racesLeading, $this->model->getRacesLeading());
    }

    public function testSetRacesLeading(): void
    {
        $expected = "page";
        $model = $this->model;
        $model->setRacesLeading($expected);

        $this->assertEquals($expected, $model->getRacesLeading());
    }

    public function testGetMoney(): void
    {
        $this->assertEquals($this->dto->money, $this->model->getMoney());
    }

    public function testSetMoney(): void
    {
        $expected = "instead";
        $model = $this->model;
        $model->setMoney($expected);

        $this->assertEquals($expected, $model->getMoney());
    }

    public function testGetMoneyUnits(): void
    {
        $this->assertEquals($this->dto->moneyUnits, $this->model->getMoneyUnits());
    }

    public function testSetMoneyUnits(): void
    {
        $expected = "generation";
        $model = $this->model;
        $model->setMoneyUnits($expected);

        $this->assertEquals($expected, $model->getMoneyUnits());
    }

    public function testGetLeadsTotal(): void
    {
        $this->assertEquals($this->dto->leadsTotal, $this->model->getLeadsTotal());
    }

    public function testSetLeadsTotal(): void
    {
        $expected = "box";
        $model = $this->model;
        $model->setLeadsTotal($expected);

        $this->assertEquals($expected, $model->getLeadsTotal());
    }

    public function testToDto(): void
    {
        $this->assertEquals($this->dto, $this->model->toDto());
    }

    public function testJsonSerialize(): void
    {
        $this->assertEquals($this->input, $this->model->jsonSerialize());
    }
}