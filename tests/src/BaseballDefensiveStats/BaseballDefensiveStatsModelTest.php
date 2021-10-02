<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballDefensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\BaseballDefensiveStats\{ BaseballDefensiveStatsDto, BaseballDefensiveStatsModel };

class BaseballDefensiveStatsModelTest extends TestCase
{
    private array $input;
    private BaseballDefensiveStatsDto $dto;
    private BaseballDefensiveStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 2424,
            "double_plays" => 3351,
            "triple_plays" => 4559,
            "putouts" => 8405,
            "assists" => 1761,
            "errors" => 7912,
            "fielding_percentage" => 338.54,
            "defensive_average" => 678.00,
            "errors_passed_ball" => 9760,
            "errors_catchers_interference" => 2071,
        ];
        $this->dto = new BaseballDefensiveStatsDto($this->input);
        $this->model = new BaseballDefensiveStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new BaseballDefensiveStatsModel(null);

        $this->assertInstanceOf(BaseballDefensiveStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 1696;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetDoublePlays(): void
    {
        $this->assertEquals($this->dto->doublePlays, $this->model->getDoublePlays());
    }

    public function testSetDoublePlays(): void
    {
        $expected = 5214;
        $model = $this->model;
        $model->setDoublePlays($expected);

        $this->assertEquals($expected, $model->getDoublePlays());
    }

    public function testGetTriplePlays(): void
    {
        $this->assertEquals($this->dto->triplePlays, $this->model->getTriplePlays());
    }

    public function testSetTriplePlays(): void
    {
        $expected = 1865;
        $model = $this->model;
        $model->setTriplePlays($expected);

        $this->assertEquals($expected, $model->getTriplePlays());
    }

    public function testGetPutouts(): void
    {
        $this->assertEquals($this->dto->putouts, $this->model->getPutouts());
    }

    public function testSetPutouts(): void
    {
        $expected = 4148;
        $model = $this->model;
        $model->setPutouts($expected);

        $this->assertEquals($expected, $model->getPutouts());
    }

    public function testGetAssists(): void
    {
        $this->assertEquals($this->dto->assists, $this->model->getAssists());
    }

    public function testSetAssists(): void
    {
        $expected = 6556;
        $model = $this->model;
        $model->setAssists($expected);

        $this->assertEquals($expected, $model->getAssists());
    }

    public function testGetErrors(): void
    {
        $this->assertEquals($this->dto->errors, $this->model->getErrors());
    }

    public function testSetErrors(): void
    {
        $expected = 5505;
        $model = $this->model;
        $model->setErrors($expected);

        $this->assertEquals($expected, $model->getErrors());
    }

    public function testGetFieldingPercentage(): void
    {
        $this->assertEquals($this->dto->fieldingPercentage, $this->model->getFieldingPercentage());
    }

    public function testSetFieldingPercentage(): void
    {
        $expected = 928.92;
        $model = $this->model;
        $model->setFieldingPercentage($expected);

        $this->assertEquals($expected, $model->getFieldingPercentage());
    }

    public function testGetDefensiveAverage(): void
    {
        $this->assertEquals($this->dto->defensiveAverage, $this->model->getDefensiveAverage());
    }

    public function testSetDefensiveAverage(): void
    {
        $expected = 579.34;
        $model = $this->model;
        $model->setDefensiveAverage($expected);

        $this->assertEquals($expected, $model->getDefensiveAverage());
    }

    public function testGetErrorsPassedBall(): void
    {
        $this->assertEquals($this->dto->errorsPassedBall, $this->model->getErrorsPassedBall());
    }

    public function testSetErrorsPassedBall(): void
    {
        $expected = 6675;
        $model = $this->model;
        $model->setErrorsPassedBall($expected);

        $this->assertEquals($expected, $model->getErrorsPassedBall());
    }

    public function testGetErrorsCatchersInterference(): void
    {
        $this->assertEquals($this->dto->errorsCatchersInterference, $this->model->getErrorsCatchersInterference());
    }

    public function testSetErrorsCatchersInterference(): void
    {
        $expected = 5454;
        $model = $this->model;
        $model->setErrorsCatchersInterference($expected);

        $this->assertEquals($expected, $model->getErrorsCatchersInterference());
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