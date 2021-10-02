<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballSacksAgainstStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballSacksAgainstStats\{ AmericanFootballSacksAgainstStatsDto, AmericanFootballSacksAgainstStatsModel };

class AmericanFootballSacksAgainstStatsModelTest extends TestCase
{
    private array $input;
    private AmericanFootballSacksAgainstStatsDto $dto;
    private AmericanFootballSacksAgainstStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 1907,
            "sacks_against_yards" => "would",
            "sacks_against_total" => "behind",
        ];
        $this->dto = new AmericanFootballSacksAgainstStatsDto($this->input);
        $this->model = new AmericanFootballSacksAgainstStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new AmericanFootballSacksAgainstStatsModel(null);

        $this->assertInstanceOf(AmericanFootballSacksAgainstStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 5579;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetSacksAgainstYards(): void
    {
        $this->assertEquals($this->dto->sacksAgainstYards, $this->model->getSacksAgainstYards());
    }

    public function testSetSacksAgainstYards(): void
    {
        $expected = "sometimes";
        $model = $this->model;
        $model->setSacksAgainstYards($expected);

        $this->assertEquals($expected, $model->getSacksAgainstYards());
    }

    public function testGetSacksAgainstTotal(): void
    {
        $this->assertEquals($this->dto->sacksAgainstTotal, $this->model->getSacksAgainstTotal());
    }

    public function testSetSacksAgainstTotal(): void
    {
        $expected = "drug";
        $model = $this->model;
        $model->setSacksAgainstTotal($expected);

        $this->assertEquals($expected, $model->getSacksAgainstTotal());
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