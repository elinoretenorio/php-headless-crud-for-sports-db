<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballRushingStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballRushingStats\{ AmericanFootballRushingStatsDto, AmericanFootballRushingStatsModel };

class AmericanFootballRushingStatsModelTest extends TestCase
{
    private array $input;
    private AmericanFootballRushingStatsDto $dto;
    private AmericanFootballRushingStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 1362,
            "rushes_attempts" => "step",
            "rushes_yards" => "over",
            "rushes_touchdowns" => "resource",
            "rushing_average_yards_per" => "list",
            "rushes_first_down" => "east",
            "rushes_longest" => "store",
        ];
        $this->dto = new AmericanFootballRushingStatsDto($this->input);
        $this->model = new AmericanFootballRushingStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new AmericanFootballRushingStatsModel(null);

        $this->assertInstanceOf(AmericanFootballRushingStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 2133;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetRushesAttempts(): void
    {
        $this->assertEquals($this->dto->rushesAttempts, $this->model->getRushesAttempts());
    }

    public function testSetRushesAttempts(): void
    {
        $expected = "black";
        $model = $this->model;
        $model->setRushesAttempts($expected);

        $this->assertEquals($expected, $model->getRushesAttempts());
    }

    public function testGetRushesYards(): void
    {
        $this->assertEquals($this->dto->rushesYards, $this->model->getRushesYards());
    }

    public function testSetRushesYards(): void
    {
        $expected = "choice";
        $model = $this->model;
        $model->setRushesYards($expected);

        $this->assertEquals($expected, $model->getRushesYards());
    }

    public function testGetRushesTouchdowns(): void
    {
        $this->assertEquals($this->dto->rushesTouchdowns, $this->model->getRushesTouchdowns());
    }

    public function testSetRushesTouchdowns(): void
    {
        $expected = "wide";
        $model = $this->model;
        $model->setRushesTouchdowns($expected);

        $this->assertEquals($expected, $model->getRushesTouchdowns());
    }

    public function testGetRushingAverageYardsPer(): void
    {
        $this->assertEquals($this->dto->rushingAverageYardsPer, $this->model->getRushingAverageYardsPer());
    }

    public function testSetRushingAverageYardsPer(): void
    {
        $expected = "central";
        $model = $this->model;
        $model->setRushingAverageYardsPer($expected);

        $this->assertEquals($expected, $model->getRushingAverageYardsPer());
    }

    public function testGetRushesFirstDown(): void
    {
        $this->assertEquals($this->dto->rushesFirstDown, $this->model->getRushesFirstDown());
    }

    public function testSetRushesFirstDown(): void
    {
        $expected = "executive";
        $model = $this->model;
        $model->setRushesFirstDown($expected);

        $this->assertEquals($expected, $model->getRushesFirstDown());
    }

    public function testGetRushesLongest(): void
    {
        $this->assertEquals($this->dto->rushesLongest, $this->model->getRushesLongest());
    }

    public function testSetRushesLongest(): void
    {
        $expected = "lead";
        $model = $this->model;
        $model->setRushesLongest($expected);

        $this->assertEquals($expected, $model->getRushesLongest());
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