<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballOffensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballOffensiveStats\{ AmericanFootballOffensiveStatsDto, AmericanFootballOffensiveStatsModel };

class AmericanFootballOffensiveStatsModelTest extends TestCase
{
    private array $input;
    private AmericanFootballOffensiveStatsDto $dto;
    private AmericanFootballOffensiveStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 6520,
            "offensive_plays_yards" => "should",
            "offensive_plays_number" => "person",
            "offensive_plays_average_yards_per" => "door",
            "possession_duration" => "away",
            "turnovers_giveaway" => "computer",
        ];
        $this->dto = new AmericanFootballOffensiveStatsDto($this->input);
        $this->model = new AmericanFootballOffensiveStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new AmericanFootballOffensiveStatsModel(null);

        $this->assertInstanceOf(AmericanFootballOffensiveStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 6533;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetOffensivePlaysYards(): void
    {
        $this->assertEquals($this->dto->offensivePlaysYards, $this->model->getOffensivePlaysYards());
    }

    public function testSetOffensivePlaysYards(): void
    {
        $expected = "resource";
        $model = $this->model;
        $model->setOffensivePlaysYards($expected);

        $this->assertEquals($expected, $model->getOffensivePlaysYards());
    }

    public function testGetOffensivePlaysNumber(): void
    {
        $this->assertEquals($this->dto->offensivePlaysNumber, $this->model->getOffensivePlaysNumber());
    }

    public function testSetOffensivePlaysNumber(): void
    {
        $expected = "public";
        $model = $this->model;
        $model->setOffensivePlaysNumber($expected);

        $this->assertEquals($expected, $model->getOffensivePlaysNumber());
    }

    public function testGetOffensivePlaysAverageYardsPer(): void
    {
        $this->assertEquals($this->dto->offensivePlaysAverageYardsPer, $this->model->getOffensivePlaysAverageYardsPer());
    }

    public function testSetOffensivePlaysAverageYardsPer(): void
    {
        $expected = "radio";
        $model = $this->model;
        $model->setOffensivePlaysAverageYardsPer($expected);

        $this->assertEquals($expected, $model->getOffensivePlaysAverageYardsPer());
    }

    public function testGetPossessionDuration(): void
    {
        $this->assertEquals($this->dto->possessionDuration, $this->model->getPossessionDuration());
    }

    public function testSetPossessionDuration(): void
    {
        $expected = "north";
        $model = $this->model;
        $model->setPossessionDuration($expected);

        $this->assertEquals($expected, $model->getPossessionDuration());
    }

    public function testGetTurnoversGiveaway(): void
    {
        $this->assertEquals($this->dto->turnoversGiveaway, $this->model->getTurnoversGiveaway());
    }

    public function testSetTurnoversGiveaway(): void
    {
        $expected = "land";
        $model = $this->model;
        $model->setTurnoversGiveaway($expected);

        $this->assertEquals($expected, $model->getTurnoversGiveaway());
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