<?php

declare(strict_types=1);

namespace Sports\Tests\BasketballDefensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\BasketballDefensiveStats\{ BasketballDefensiveStatsDto, BasketballDefensiveStatsModel };

class BasketballDefensiveStatsModelTest extends TestCase
{
    private array $input;
    private BasketballDefensiveStatsDto $dto;
    private BasketballDefensiveStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 7039,
            "steals_total" => "space",
            "steals_per_game" => "piece",
            "blocks_total" => "garden",
            "blocks_per_game" => "report",
        ];
        $this->dto = new BasketballDefensiveStatsDto($this->input);
        $this->model = new BasketballDefensiveStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new BasketballDefensiveStatsModel(null);

        $this->assertInstanceOf(BasketballDefensiveStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 9046;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetStealsTotal(): void
    {
        $this->assertEquals($this->dto->stealsTotal, $this->model->getStealsTotal());
    }

    public function testSetStealsTotal(): void
    {
        $expected = "see";
        $model = $this->model;
        $model->setStealsTotal($expected);

        $this->assertEquals($expected, $model->getStealsTotal());
    }

    public function testGetStealsPerGame(): void
    {
        $this->assertEquals($this->dto->stealsPerGame, $this->model->getStealsPerGame());
    }

    public function testSetStealsPerGame(): void
    {
        $expected = "two";
        $model = $this->model;
        $model->setStealsPerGame($expected);

        $this->assertEquals($expected, $model->getStealsPerGame());
    }

    public function testGetBlocksTotal(): void
    {
        $this->assertEquals($this->dto->blocksTotal, $this->model->getBlocksTotal());
    }

    public function testSetBlocksTotal(): void
    {
        $expected = "within";
        $model = $this->model;
        $model->setBlocksTotal($expected);

        $this->assertEquals($expected, $model->getBlocksTotal());
    }

    public function testGetBlocksPerGame(): void
    {
        $this->assertEquals($this->dto->blocksPerGame, $this->model->getBlocksPerGame());
    }

    public function testSetBlocksPerGame(): void
    {
        $expected = "job";
        $model = $this->model;
        $model->setBlocksPerGame($expected);

        $this->assertEquals($expected, $model->getBlocksPerGame());
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