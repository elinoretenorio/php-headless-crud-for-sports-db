<?php

declare(strict_types=1);

namespace Sports\Tests\IceHockeyPlayerStats;

use PHPUnit\Framework\TestCase;
use Sports\IceHockeyPlayerStats\{ IceHockeyPlayerStatsDto, IceHockeyPlayerStatsModel };

class IceHockeyPlayerStatsModelTest extends TestCase
{
    private array $input;
    private IceHockeyPlayerStatsDto $dto;
    private IceHockeyPlayerStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 9655,
            "plus_minus" => "now",
        ];
        $this->dto = new IceHockeyPlayerStatsDto($this->input);
        $this->model = new IceHockeyPlayerStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new IceHockeyPlayerStatsModel(null);

        $this->assertInstanceOf(IceHockeyPlayerStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 8440;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetPlusMinus(): void
    {
        $this->assertEquals($this->dto->plusMinus, $this->model->getPlusMinus());
    }

    public function testSetPlusMinus(): void
    {
        $expected = "social";
        $model = $this->model;
        $model->setPlusMinus($expected);

        $this->assertEquals($expected, $model->getPlusMinus());
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