<?php

declare(strict_types=1);

namespace Sports\Tests\MotorRacingQualifyingStats;

use PHPUnit\Framework\TestCase;
use Sports\MotorRacingQualifyingStats\{ MotorRacingQualifyingStatsDto, MotorRacingQualifyingStatsModel };

class MotorRacingQualifyingStatsModelTest extends TestCase
{
    private array $input;
    private MotorRacingQualifyingStatsDto $dto;
    private MotorRacingQualifyingStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 3674,
            "grid" => "say",
            "pole_position" => "call",
            "pole_wins" => "change",
            "qualifying_speed" => "old",
            "qualifying_speed_units" => "try",
            "qualifying_time" => "make",
            "qualifying_position" => "admit",
        ];
        $this->dto = new MotorRacingQualifyingStatsDto($this->input);
        $this->model = new MotorRacingQualifyingStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new MotorRacingQualifyingStatsModel(null);

        $this->assertInstanceOf(MotorRacingQualifyingStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 2442;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetGrid(): void
    {
        $this->assertEquals($this->dto->grid, $this->model->getGrid());
    }

    public function testSetGrid(): void
    {
        $expected = "candidate";
        $model = $this->model;
        $model->setGrid($expected);

        $this->assertEquals($expected, $model->getGrid());
    }

    public function testGetPolePosition(): void
    {
        $this->assertEquals($this->dto->polePosition, $this->model->getPolePosition());
    }

    public function testSetPolePosition(): void
    {
        $expected = "PM";
        $model = $this->model;
        $model->setPolePosition($expected);

        $this->assertEquals($expected, $model->getPolePosition());
    }

    public function testGetPoleWins(): void
    {
        $this->assertEquals($this->dto->poleWins, $this->model->getPoleWins());
    }

    public function testSetPoleWins(): void
    {
        $expected = "strategy";
        $model = $this->model;
        $model->setPoleWins($expected);

        $this->assertEquals($expected, $model->getPoleWins());
    }

    public function testGetQualifyingSpeed(): void
    {
        $this->assertEquals($this->dto->qualifyingSpeed, $this->model->getQualifyingSpeed());
    }

    public function testSetQualifyingSpeed(): void
    {
        $expected = "film";
        $model = $this->model;
        $model->setQualifyingSpeed($expected);

        $this->assertEquals($expected, $model->getQualifyingSpeed());
    }

    public function testGetQualifyingSpeedUnits(): void
    {
        $this->assertEquals($this->dto->qualifyingSpeedUnits, $this->model->getQualifyingSpeedUnits());
    }

    public function testSetQualifyingSpeedUnits(): void
    {
        $expected = "resource";
        $model = $this->model;
        $model->setQualifyingSpeedUnits($expected);

        $this->assertEquals($expected, $model->getQualifyingSpeedUnits());
    }

    public function testGetQualifyingTime(): void
    {
        $this->assertEquals($this->dto->qualifyingTime, $this->model->getQualifyingTime());
    }

    public function testSetQualifyingTime(): void
    {
        $expected = "election";
        $model = $this->model;
        $model->setQualifyingTime($expected);

        $this->assertEquals($expected, $model->getQualifyingTime());
    }

    public function testGetQualifyingPosition(): void
    {
        $this->assertEquals($this->dto->qualifyingPosition, $this->model->getQualifyingPosition());
    }

    public function testSetQualifyingPosition(): void
    {
        $expected = "career";
        $model = $this->model;
        $model->setQualifyingPosition($expected);

        $this->assertEquals($expected, $model->getQualifyingPosition());
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