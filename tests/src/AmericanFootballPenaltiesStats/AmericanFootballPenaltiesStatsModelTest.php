<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballPenaltiesStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballPenaltiesStats\{ AmericanFootballPenaltiesStatsDto, AmericanFootballPenaltiesStatsModel };

class AmericanFootballPenaltiesStatsModelTest extends TestCase
{
    private array $input;
    private AmericanFootballPenaltiesStatsDto $dto;
    private AmericanFootballPenaltiesStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 7980,
            "penalties_total" => "market",
            "penalty_yards" => "vote",
            "penalty_first_downs" => "almost",
        ];
        $this->dto = new AmericanFootballPenaltiesStatsDto($this->input);
        $this->model = new AmericanFootballPenaltiesStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new AmericanFootballPenaltiesStatsModel(null);

        $this->assertInstanceOf(AmericanFootballPenaltiesStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 3018;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetPenaltiesTotal(): void
    {
        $this->assertEquals($this->dto->penaltiesTotal, $this->model->getPenaltiesTotal());
    }

    public function testSetPenaltiesTotal(): void
    {
        $expected = "discuss";
        $model = $this->model;
        $model->setPenaltiesTotal($expected);

        $this->assertEquals($expected, $model->getPenaltiesTotal());
    }

    public function testGetPenaltyYards(): void
    {
        $this->assertEquals($this->dto->penaltyYards, $this->model->getPenaltyYards());
    }

    public function testSetPenaltyYards(): void
    {
        $expected = "include";
        $model = $this->model;
        $model->setPenaltyYards($expected);

        $this->assertEquals($expected, $model->getPenaltyYards());
    }

    public function testGetPenaltyFirstDowns(): void
    {
        $this->assertEquals($this->dto->penaltyFirstDowns, $this->model->getPenaltyFirstDowns());
    }

    public function testSetPenaltyFirstDowns(): void
    {
        $expected = "the";
        $model = $this->model;
        $model->setPenaltyFirstDowns($expected);

        $this->assertEquals($expected, $model->getPenaltyFirstDowns());
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