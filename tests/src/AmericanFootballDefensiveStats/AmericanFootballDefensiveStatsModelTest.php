<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballDefensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballDefensiveStats\{ AmericanFootballDefensiveStatsDto, AmericanFootballDefensiveStatsModel };

class AmericanFootballDefensiveStatsModelTest extends TestCase
{
    private array $input;
    private AmericanFootballDefensiveStatsDto $dto;
    private AmericanFootballDefensiveStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 4728,
            "tackles_total" => "attack",
            "tackles_solo" => "own",
            "tackles_assists" => "our",
            "interceptions_total" => "official",
            "interceptions_yards" => "rule",
            "interceptions_average" => "partner",
            "interceptions_longest" => "world",
            "interceptions_touchdown" => "director",
            "quarterback_hurries" => "during",
            "sacks_total" => "none",
            "sacks_yards" => "management",
            "passes_defensed" => "rather",
        ];
        $this->dto = new AmericanFootballDefensiveStatsDto($this->input);
        $this->model = new AmericanFootballDefensiveStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new AmericanFootballDefensiveStatsModel(null);

        $this->assertInstanceOf(AmericanFootballDefensiveStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 6931;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetTacklesTotal(): void
    {
        $this->assertEquals($this->dto->tacklesTotal, $this->model->getTacklesTotal());
    }

    public function testSetTacklesTotal(): void
    {
        $expected = "improve";
        $model = $this->model;
        $model->setTacklesTotal($expected);

        $this->assertEquals($expected, $model->getTacklesTotal());
    }

    public function testGetTacklesSolo(): void
    {
        $this->assertEquals($this->dto->tacklesSolo, $this->model->getTacklesSolo());
    }

    public function testSetTacklesSolo(): void
    {
        $expected = "bar";
        $model = $this->model;
        $model->setTacklesSolo($expected);

        $this->assertEquals($expected, $model->getTacklesSolo());
    }

    public function testGetTacklesAssists(): void
    {
        $this->assertEquals($this->dto->tacklesAssists, $this->model->getTacklesAssists());
    }

    public function testSetTacklesAssists(): void
    {
        $expected = "dark";
        $model = $this->model;
        $model->setTacklesAssists($expected);

        $this->assertEquals($expected, $model->getTacklesAssists());
    }

    public function testGetInterceptionsTotal(): void
    {
        $this->assertEquals($this->dto->interceptionsTotal, $this->model->getInterceptionsTotal());
    }

    public function testSetInterceptionsTotal(): void
    {
        $expected = "soon";
        $model = $this->model;
        $model->setInterceptionsTotal($expected);

        $this->assertEquals($expected, $model->getInterceptionsTotal());
    }

    public function testGetInterceptionsYards(): void
    {
        $this->assertEquals($this->dto->interceptionsYards, $this->model->getInterceptionsYards());
    }

    public function testSetInterceptionsYards(): void
    {
        $expected = "threat";
        $model = $this->model;
        $model->setInterceptionsYards($expected);

        $this->assertEquals($expected, $model->getInterceptionsYards());
    }

    public function testGetInterceptionsAverage(): void
    {
        $this->assertEquals($this->dto->interceptionsAverage, $this->model->getInterceptionsAverage());
    }

    public function testSetInterceptionsAverage(): void
    {
        $expected = "anything";
        $model = $this->model;
        $model->setInterceptionsAverage($expected);

        $this->assertEquals($expected, $model->getInterceptionsAverage());
    }

    public function testGetInterceptionsLongest(): void
    {
        $this->assertEquals($this->dto->interceptionsLongest, $this->model->getInterceptionsLongest());
    }

    public function testSetInterceptionsLongest(): void
    {
        $expected = "continue";
        $model = $this->model;
        $model->setInterceptionsLongest($expected);

        $this->assertEquals($expected, $model->getInterceptionsLongest());
    }

    public function testGetInterceptionsTouchdown(): void
    {
        $this->assertEquals($this->dto->interceptionsTouchdown, $this->model->getInterceptionsTouchdown());
    }

    public function testSetInterceptionsTouchdown(): void
    {
        $expected = "station";
        $model = $this->model;
        $model->setInterceptionsTouchdown($expected);

        $this->assertEquals($expected, $model->getInterceptionsTouchdown());
    }

    public function testGetQuarterbackHurries(): void
    {
        $this->assertEquals($this->dto->quarterbackHurries, $this->model->getQuarterbackHurries());
    }

    public function testSetQuarterbackHurries(): void
    {
        $expected = "many";
        $model = $this->model;
        $model->setQuarterbackHurries($expected);

        $this->assertEquals($expected, $model->getQuarterbackHurries());
    }

    public function testGetSacksTotal(): void
    {
        $this->assertEquals($this->dto->sacksTotal, $this->model->getSacksTotal());
    }

    public function testSetSacksTotal(): void
    {
        $expected = "establish";
        $model = $this->model;
        $model->setSacksTotal($expected);

        $this->assertEquals($expected, $model->getSacksTotal());
    }

    public function testGetSacksYards(): void
    {
        $this->assertEquals($this->dto->sacksYards, $this->model->getSacksYards());
    }

    public function testSetSacksYards(): void
    {
        $expected = "risk";
        $model = $this->model;
        $model->setSacksYards($expected);

        $this->assertEquals($expected, $model->getSacksYards());
    }

    public function testGetPassesDefensed(): void
    {
        $this->assertEquals($this->dto->passesDefensed, $this->model->getPassesDefensed());
    }

    public function testSetPassesDefensed(): void
    {
        $expected = "above";
        $model = $this->model;
        $model->setPassesDefensed($expected);

        $this->assertEquals($expected, $model->getPassesDefensed());
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