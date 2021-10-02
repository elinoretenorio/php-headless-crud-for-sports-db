<?php

declare(strict_types=1);

namespace Sports\Tests\BasketballTeamStats;

use PHPUnit\Framework\TestCase;
use Sports\BasketballTeamStats\{ BasketballTeamStatsDto, BasketballTeamStatsModel };

class BasketballTeamStatsModelTest extends TestCase
{
    private array $input;
    private BasketballTeamStatsDto $dto;
    private BasketballTeamStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 438,
            "timeouts_left" => "exactly",
            "largest_lead" => "lot",
            "fouls_total" => "our",
            "turnover_margin" => "interview",
        ];
        $this->dto = new BasketballTeamStatsDto($this->input);
        $this->model = new BasketballTeamStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new BasketballTeamStatsModel(null);

        $this->assertInstanceOf(BasketballTeamStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 8905;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetTimeoutsLeft(): void
    {
        $this->assertEquals($this->dto->timeoutsLeft, $this->model->getTimeoutsLeft());
    }

    public function testSetTimeoutsLeft(): void
    {
        $expected = "time";
        $model = $this->model;
        $model->setTimeoutsLeft($expected);

        $this->assertEquals($expected, $model->getTimeoutsLeft());
    }

    public function testGetLargestLead(): void
    {
        $this->assertEquals($this->dto->largestLead, $this->model->getLargestLead());
    }

    public function testSetLargestLead(): void
    {
        $expected = "heavy";
        $model = $this->model;
        $model->setLargestLead($expected);

        $this->assertEquals($expected, $model->getLargestLead());
    }

    public function testGetFoulsTotal(): void
    {
        $this->assertEquals($this->dto->foulsTotal, $this->model->getFoulsTotal());
    }

    public function testSetFoulsTotal(): void
    {
        $expected = "investment";
        $model = $this->model;
        $model->setFoulsTotal($expected);

        $this->assertEquals($expected, $model->getFoulsTotal());
    }

    public function testGetTurnoverMargin(): void
    {
        $this->assertEquals($this->dto->turnoverMargin, $this->model->getTurnoverMargin());
    }

    public function testSetTurnoverMargin(): void
    {
        $expected = "simply";
        $model = $this->model;
        $model->setTurnoverMargin($expected);

        $this->assertEquals($expected, $model->getTurnoverMargin());
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