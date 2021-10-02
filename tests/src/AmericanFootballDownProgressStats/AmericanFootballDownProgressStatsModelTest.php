<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballDownProgressStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballDownProgressStats\{ AmericanFootballDownProgressStatsDto, AmericanFootballDownProgressStatsModel };

class AmericanFootballDownProgressStatsModelTest extends TestCase
{
    private array $input;
    private AmericanFootballDownProgressStatsDto $dto;
    private AmericanFootballDownProgressStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 2305,
            "first_downs_total" => "despite",
            "first_downs_pass" => "your",
            "first_downs_run" => "present",
            "first_downs_penalty" => "occur",
            "conversions_third_down" => "heart",
            "conversions_third_down_attempts" => "money",
            "conversions_third_down_percentage" => "production",
            "conversions_fourth_down" => "book",
            "conversions_fourth_down_attempts" => "its",
            "conversions_fourth_down_percentage" => "but",
        ];
        $this->dto = new AmericanFootballDownProgressStatsDto($this->input);
        $this->model = new AmericanFootballDownProgressStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new AmericanFootballDownProgressStatsModel(null);

        $this->assertInstanceOf(AmericanFootballDownProgressStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 9141;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetFirstDownsTotal(): void
    {
        $this->assertEquals($this->dto->firstDownsTotal, $this->model->getFirstDownsTotal());
    }

    public function testSetFirstDownsTotal(): void
    {
        $expected = "responsibility";
        $model = $this->model;
        $model->setFirstDownsTotal($expected);

        $this->assertEquals($expected, $model->getFirstDownsTotal());
    }

    public function testGetFirstDownsPass(): void
    {
        $this->assertEquals($this->dto->firstDownsPass, $this->model->getFirstDownsPass());
    }

    public function testSetFirstDownsPass(): void
    {
        $expected = "store";
        $model = $this->model;
        $model->setFirstDownsPass($expected);

        $this->assertEquals($expected, $model->getFirstDownsPass());
    }

    public function testGetFirstDownsRun(): void
    {
        $this->assertEquals($this->dto->firstDownsRun, $this->model->getFirstDownsRun());
    }

    public function testSetFirstDownsRun(): void
    {
        $expected = "offer";
        $model = $this->model;
        $model->setFirstDownsRun($expected);

        $this->assertEquals($expected, $model->getFirstDownsRun());
    }

    public function testGetFirstDownsPenalty(): void
    {
        $this->assertEquals($this->dto->firstDownsPenalty, $this->model->getFirstDownsPenalty());
    }

    public function testSetFirstDownsPenalty(): void
    {
        $expected = "idea";
        $model = $this->model;
        $model->setFirstDownsPenalty($expected);

        $this->assertEquals($expected, $model->getFirstDownsPenalty());
    }

    public function testGetConversionsThirdDown(): void
    {
        $this->assertEquals($this->dto->conversionsThirdDown, $this->model->getConversionsThirdDown());
    }

    public function testSetConversionsThirdDown(): void
    {
        $expected = "we";
        $model = $this->model;
        $model->setConversionsThirdDown($expected);

        $this->assertEquals($expected, $model->getConversionsThirdDown());
    }

    public function testGetConversionsThirdDownAttempts(): void
    {
        $this->assertEquals($this->dto->conversionsThirdDownAttempts, $this->model->getConversionsThirdDownAttempts());
    }

    public function testSetConversionsThirdDownAttempts(): void
    {
        $expected = "season";
        $model = $this->model;
        $model->setConversionsThirdDownAttempts($expected);

        $this->assertEquals($expected, $model->getConversionsThirdDownAttempts());
    }

    public function testGetConversionsThirdDownPercentage(): void
    {
        $this->assertEquals($this->dto->conversionsThirdDownPercentage, $this->model->getConversionsThirdDownPercentage());
    }

    public function testSetConversionsThirdDownPercentage(): void
    {
        $expected = "data";
        $model = $this->model;
        $model->setConversionsThirdDownPercentage($expected);

        $this->assertEquals($expected, $model->getConversionsThirdDownPercentage());
    }

    public function testGetConversionsFourthDown(): void
    {
        $this->assertEquals($this->dto->conversionsFourthDown, $this->model->getConversionsFourthDown());
    }

    public function testSetConversionsFourthDown(): void
    {
        $expected = "office";
        $model = $this->model;
        $model->setConversionsFourthDown($expected);

        $this->assertEquals($expected, $model->getConversionsFourthDown());
    }

    public function testGetConversionsFourthDownAttempts(): void
    {
        $this->assertEquals($this->dto->conversionsFourthDownAttempts, $this->model->getConversionsFourthDownAttempts());
    }

    public function testSetConversionsFourthDownAttempts(): void
    {
        $expected = "nice";
        $model = $this->model;
        $model->setConversionsFourthDownAttempts($expected);

        $this->assertEquals($expected, $model->getConversionsFourthDownAttempts());
    }

    public function testGetConversionsFourthDownPercentage(): void
    {
        $this->assertEquals($this->dto->conversionsFourthDownPercentage, $this->model->getConversionsFourthDownPercentage());
    }

    public function testSetConversionsFourthDownPercentage(): void
    {
        $expected = "over";
        $model = $this->model;
        $model->setConversionsFourthDownPercentage($expected);

        $this->assertEquals($expected, $model->getConversionsFourthDownPercentage());
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