<?php

declare(strict_types=1);

namespace Sports\Tests\TeamAmericanFootballStats;

use PHPUnit\Framework\TestCase;
use Sports\TeamAmericanFootballStats\{ TeamAmericanFootballStatsDto, TeamAmericanFootballStatsModel };

class TeamAmericanFootballStatsModelTest extends TestCase
{
    private array $input;
    private TeamAmericanFootballStatsDto $dto;
    private TeamAmericanFootballStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 767,
            "yards_per_attempt" => "raise",
            "average_starting_position" => "health",
            "timeouts" => "else",
            "time_of_possession" => "Mr",
            "turnover_ratio" => "page",
        ];
        $this->dto = new TeamAmericanFootballStatsDto($this->input);
        $this->model = new TeamAmericanFootballStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new TeamAmericanFootballStatsModel(null);

        $this->assertInstanceOf(TeamAmericanFootballStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 7868;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetYardsPerAttempt(): void
    {
        $this->assertEquals($this->dto->yardsPerAttempt, $this->model->getYardsPerAttempt());
    }

    public function testSetYardsPerAttempt(): void
    {
        $expected = "project";
        $model = $this->model;
        $model->setYardsPerAttempt($expected);

        $this->assertEquals($expected, $model->getYardsPerAttempt());
    }

    public function testGetAverageStartingPosition(): void
    {
        $this->assertEquals($this->dto->averageStartingPosition, $this->model->getAverageStartingPosition());
    }

    public function testSetAverageStartingPosition(): void
    {
        $expected = "worry";
        $model = $this->model;
        $model->setAverageStartingPosition($expected);

        $this->assertEquals($expected, $model->getAverageStartingPosition());
    }

    public function testGetTimeouts(): void
    {
        $this->assertEquals($this->dto->timeouts, $this->model->getTimeouts());
    }

    public function testSetTimeouts(): void
    {
        $expected = "tend";
        $model = $this->model;
        $model->setTimeouts($expected);

        $this->assertEquals($expected, $model->getTimeouts());
    }

    public function testGetTimeOfPossession(): void
    {
        $this->assertEquals($this->dto->timeOfPossession, $this->model->getTimeOfPossession());
    }

    public function testSetTimeOfPossession(): void
    {
        $expected = "he";
        $model = $this->model;
        $model->setTimeOfPossession($expected);

        $this->assertEquals($expected, $model->getTimeOfPossession());
    }

    public function testGetTurnoverRatio(): void
    {
        $this->assertEquals($this->dto->turnoverRatio, $this->model->getTurnoverRatio());
    }

    public function testSetTurnoverRatio(): void
    {
        $expected = "market";
        $model = $this->model;
        $model->setTurnoverRatio($expected);

        $this->assertEquals($expected, $model->getTurnoverRatio());
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