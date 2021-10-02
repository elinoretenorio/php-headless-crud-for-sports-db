<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballFumblesStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballFumblesStats\{ AmericanFootballFumblesStatsDto, AmericanFootballFumblesStatsModel };

class AmericanFootballFumblesStatsModelTest extends TestCase
{
    private array $input;
    private AmericanFootballFumblesStatsDto $dto;
    private AmericanFootballFumblesStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 3927,
            "fumbles_committed" => "edge",
            "fumbles_forced" => "many",
            "fumbles_recovered" => "heart",
            "fumbles_lost" => "perform",
            "fumbles_yards_gained" => "around",
            "fumbles_own_committed" => "they",
            "fumbles_own_recovered" => "area",
            "fumbles_own_lost" => "mother",
            "fumbles_own_yards_gained" => "know",
            "fumbles_opposing_committed" => "out",
            "fumbles_opposing_recovered" => "large",
            "fumbles_opposing_lost" => "read",
            "fumbles_opposing_yards_gained" => "after",
        ];
        $this->dto = new AmericanFootballFumblesStatsDto($this->input);
        $this->model = new AmericanFootballFumblesStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new AmericanFootballFumblesStatsModel(null);

        $this->assertInstanceOf(AmericanFootballFumblesStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 7487;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetFumblesCommitted(): void
    {
        $this->assertEquals($this->dto->fumblesCommitted, $this->model->getFumblesCommitted());
    }

    public function testSetFumblesCommitted(): void
    {
        $expected = "back";
        $model = $this->model;
        $model->setFumblesCommitted($expected);

        $this->assertEquals($expected, $model->getFumblesCommitted());
    }

    public function testGetFumblesForced(): void
    {
        $this->assertEquals($this->dto->fumblesForced, $this->model->getFumblesForced());
    }

    public function testSetFumblesForced(): void
    {
        $expected = "plan";
        $model = $this->model;
        $model->setFumblesForced($expected);

        $this->assertEquals($expected, $model->getFumblesForced());
    }

    public function testGetFumblesRecovered(): void
    {
        $this->assertEquals($this->dto->fumblesRecovered, $this->model->getFumblesRecovered());
    }

    public function testSetFumblesRecovered(): void
    {
        $expected = "analysis";
        $model = $this->model;
        $model->setFumblesRecovered($expected);

        $this->assertEquals($expected, $model->getFumblesRecovered());
    }

    public function testGetFumblesLost(): void
    {
        $this->assertEquals($this->dto->fumblesLost, $this->model->getFumblesLost());
    }

    public function testSetFumblesLost(): void
    {
        $expected = "meet";
        $model = $this->model;
        $model->setFumblesLost($expected);

        $this->assertEquals($expected, $model->getFumblesLost());
    }

    public function testGetFumblesYardsGained(): void
    {
        $this->assertEquals($this->dto->fumblesYardsGained, $this->model->getFumblesYardsGained());
    }

    public function testSetFumblesYardsGained(): void
    {
        $expected = "range";
        $model = $this->model;
        $model->setFumblesYardsGained($expected);

        $this->assertEquals($expected, $model->getFumblesYardsGained());
    }

    public function testGetFumblesOwnCommitted(): void
    {
        $this->assertEquals($this->dto->fumblesOwnCommitted, $this->model->getFumblesOwnCommitted());
    }

    public function testSetFumblesOwnCommitted(): void
    {
        $expected = "open";
        $model = $this->model;
        $model->setFumblesOwnCommitted($expected);

        $this->assertEquals($expected, $model->getFumblesOwnCommitted());
    }

    public function testGetFumblesOwnRecovered(): void
    {
        $this->assertEquals($this->dto->fumblesOwnRecovered, $this->model->getFumblesOwnRecovered());
    }

    public function testSetFumblesOwnRecovered(): void
    {
        $expected = "alone";
        $model = $this->model;
        $model->setFumblesOwnRecovered($expected);

        $this->assertEquals($expected, $model->getFumblesOwnRecovered());
    }

    public function testGetFumblesOwnLost(): void
    {
        $this->assertEquals($this->dto->fumblesOwnLost, $this->model->getFumblesOwnLost());
    }

    public function testSetFumblesOwnLost(): void
    {
        $expected = "result";
        $model = $this->model;
        $model->setFumblesOwnLost($expected);

        $this->assertEquals($expected, $model->getFumblesOwnLost());
    }

    public function testGetFumblesOwnYardsGained(): void
    {
        $this->assertEquals($this->dto->fumblesOwnYardsGained, $this->model->getFumblesOwnYardsGained());
    }

    public function testSetFumblesOwnYardsGained(): void
    {
        $expected = "use";
        $model = $this->model;
        $model->setFumblesOwnYardsGained($expected);

        $this->assertEquals($expected, $model->getFumblesOwnYardsGained());
    }

    public function testGetFumblesOpposingCommitted(): void
    {
        $this->assertEquals($this->dto->fumblesOpposingCommitted, $this->model->getFumblesOpposingCommitted());
    }

    public function testSetFumblesOpposingCommitted(): void
    {
        $expected = "order";
        $model = $this->model;
        $model->setFumblesOpposingCommitted($expected);

        $this->assertEquals($expected, $model->getFumblesOpposingCommitted());
    }

    public function testGetFumblesOpposingRecovered(): void
    {
        $this->assertEquals($this->dto->fumblesOpposingRecovered, $this->model->getFumblesOpposingRecovered());
    }

    public function testSetFumblesOpposingRecovered(): void
    {
        $expected = "military";
        $model = $this->model;
        $model->setFumblesOpposingRecovered($expected);

        $this->assertEquals($expected, $model->getFumblesOpposingRecovered());
    }

    public function testGetFumblesOpposingLost(): void
    {
        $this->assertEquals($this->dto->fumblesOpposingLost, $this->model->getFumblesOpposingLost());
    }

    public function testSetFumblesOpposingLost(): void
    {
        $expected = "mention";
        $model = $this->model;
        $model->setFumblesOpposingLost($expected);

        $this->assertEquals($expected, $model->getFumblesOpposingLost());
    }

    public function testGetFumblesOpposingYardsGained(): void
    {
        $this->assertEquals($this->dto->fumblesOpposingYardsGained, $this->model->getFumblesOpposingYardsGained());
    }

    public function testSetFumblesOpposingYardsGained(): void
    {
        $expected = "mention";
        $model = $this->model;
        $model->setFumblesOpposingYardsGained($expected);

        $this->assertEquals($expected, $model->getFumblesOpposingYardsGained());
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