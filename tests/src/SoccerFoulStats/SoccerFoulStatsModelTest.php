<?php

declare(strict_types=1);

namespace Sports\Tests\SoccerFoulStats;

use PHPUnit\Framework\TestCase;
use Sports\SoccerFoulStats\{ SoccerFoulStatsDto, SoccerFoulStatsModel };

class SoccerFoulStatsModelTest extends TestCase
{
    private array $input;
    private SoccerFoulStatsDto $dto;
    private SoccerFoulStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 1149,
            "fouls_suffered" => "would",
            "fouls_commited" => "current",
            "cautions_total" => "with",
            "cautions_pending" => "create",
            "caution_points_total" => "through",
            "caution_points_pending" => "year",
            "ejections_total" => "yet",
        ];
        $this->dto = new SoccerFoulStatsDto($this->input);
        $this->model = new SoccerFoulStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new SoccerFoulStatsModel(null);

        $this->assertInstanceOf(SoccerFoulStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 1029;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetFoulsSuffered(): void
    {
        $this->assertEquals($this->dto->foulsSuffered, $this->model->getFoulsSuffered());
    }

    public function testSetFoulsSuffered(): void
    {
        $expected = "game";
        $model = $this->model;
        $model->setFoulsSuffered($expected);

        $this->assertEquals($expected, $model->getFoulsSuffered());
    }

    public function testGetFoulsCommited(): void
    {
        $this->assertEquals($this->dto->foulsCommited, $this->model->getFoulsCommited());
    }

    public function testSetFoulsCommited(): void
    {
        $expected = "product";
        $model = $this->model;
        $model->setFoulsCommited($expected);

        $this->assertEquals($expected, $model->getFoulsCommited());
    }

    public function testGetCautionsTotal(): void
    {
        $this->assertEquals($this->dto->cautionsTotal, $this->model->getCautionsTotal());
    }

    public function testSetCautionsTotal(): void
    {
        $expected = "ability";
        $model = $this->model;
        $model->setCautionsTotal($expected);

        $this->assertEquals($expected, $model->getCautionsTotal());
    }

    public function testGetCautionsPending(): void
    {
        $this->assertEquals($this->dto->cautionsPending, $this->model->getCautionsPending());
    }

    public function testSetCautionsPending(): void
    {
        $expected = "avoid";
        $model = $this->model;
        $model->setCautionsPending($expected);

        $this->assertEquals($expected, $model->getCautionsPending());
    }

    public function testGetCautionPointsTotal(): void
    {
        $this->assertEquals($this->dto->cautionPointsTotal, $this->model->getCautionPointsTotal());
    }

    public function testSetCautionPointsTotal(): void
    {
        $expected = "become";
        $model = $this->model;
        $model->setCautionPointsTotal($expected);

        $this->assertEquals($expected, $model->getCautionPointsTotal());
    }

    public function testGetCautionPointsPending(): void
    {
        $this->assertEquals($this->dto->cautionPointsPending, $this->model->getCautionPointsPending());
    }

    public function testSetCautionPointsPending(): void
    {
        $expected = "town";
        $model = $this->model;
        $model->setCautionPointsPending($expected);

        $this->assertEquals($expected, $model->getCautionPointsPending());
    }

    public function testGetEjectionsTotal(): void
    {
        $this->assertEquals($this->dto->ejectionsTotal, $this->model->getEjectionsTotal());
    }

    public function testSetEjectionsTotal(): void
    {
        $expected = "station";
        $model = $this->model;
        $model->setEjectionsTotal($expected);

        $this->assertEquals($expected, $model->getEjectionsTotal());
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