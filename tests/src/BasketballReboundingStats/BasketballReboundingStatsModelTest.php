<?php

declare(strict_types=1);

namespace Sports\Tests\BasketballReboundingStats;

use PHPUnit\Framework\TestCase;
use Sports\BasketballReboundingStats\{ BasketballReboundingStatsDto, BasketballReboundingStatsModel };

class BasketballReboundingStatsModelTest extends TestCase
{
    private array $input;
    private BasketballReboundingStatsDto $dto;
    private BasketballReboundingStatsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 610,
            "rebounds_total" => "especially",
            "rebounds_per_game" => "resource",
            "rebounds_defensive" => "degree",
            "rebounds_offensive" => "become",
            "team_rebounds_total" => "role",
            "team_rebounds_per_game" => "miss",
            "team_rebounds_defensive" => "catch",
            "team_rebounds_offensive" => "almost",
        ];
        $this->dto = new BasketballReboundingStatsDto($this->input);
        $this->model = new BasketballReboundingStatsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new BasketballReboundingStatsModel(null);

        $this->assertInstanceOf(BasketballReboundingStatsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 2629;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetReboundsTotal(): void
    {
        $this->assertEquals($this->dto->reboundsTotal, $this->model->getReboundsTotal());
    }

    public function testSetReboundsTotal(): void
    {
        $expected = "alone";
        $model = $this->model;
        $model->setReboundsTotal($expected);

        $this->assertEquals($expected, $model->getReboundsTotal());
    }

    public function testGetReboundsPerGame(): void
    {
        $this->assertEquals($this->dto->reboundsPerGame, $this->model->getReboundsPerGame());
    }

    public function testSetReboundsPerGame(): void
    {
        $expected = "present";
        $model = $this->model;
        $model->setReboundsPerGame($expected);

        $this->assertEquals($expected, $model->getReboundsPerGame());
    }

    public function testGetReboundsDefensive(): void
    {
        $this->assertEquals($this->dto->reboundsDefensive, $this->model->getReboundsDefensive());
    }

    public function testSetReboundsDefensive(): void
    {
        $expected = "performance";
        $model = $this->model;
        $model->setReboundsDefensive($expected);

        $this->assertEquals($expected, $model->getReboundsDefensive());
    }

    public function testGetReboundsOffensive(): void
    {
        $this->assertEquals($this->dto->reboundsOffensive, $this->model->getReboundsOffensive());
    }

    public function testSetReboundsOffensive(): void
    {
        $expected = "notice";
        $model = $this->model;
        $model->setReboundsOffensive($expected);

        $this->assertEquals($expected, $model->getReboundsOffensive());
    }

    public function testGetTeamReboundsTotal(): void
    {
        $this->assertEquals($this->dto->teamReboundsTotal, $this->model->getTeamReboundsTotal());
    }

    public function testSetTeamReboundsTotal(): void
    {
        $expected = "agent";
        $model = $this->model;
        $model->setTeamReboundsTotal($expected);

        $this->assertEquals($expected, $model->getTeamReboundsTotal());
    }

    public function testGetTeamReboundsPerGame(): void
    {
        $this->assertEquals($this->dto->teamReboundsPerGame, $this->model->getTeamReboundsPerGame());
    }

    public function testSetTeamReboundsPerGame(): void
    {
        $expected = "environment";
        $model = $this->model;
        $model->setTeamReboundsPerGame($expected);

        $this->assertEquals($expected, $model->getTeamReboundsPerGame());
    }

    public function testGetTeamReboundsDefensive(): void
    {
        $this->assertEquals($this->dto->teamReboundsDefensive, $this->model->getTeamReboundsDefensive());
    }

    public function testSetTeamReboundsDefensive(): void
    {
        $expected = "wall";
        $model = $this->model;
        $model->setTeamReboundsDefensive($expected);

        $this->assertEquals($expected, $model->getTeamReboundsDefensive());
    }

    public function testGetTeamReboundsOffensive(): void
    {
        $this->assertEquals($this->dto->teamReboundsOffensive, $this->model->getTeamReboundsOffensive());
    }

    public function testSetTeamReboundsOffensive(): void
    {
        $expected = "set";
        $model = $this->model;
        $model->setTeamReboundsOffensive($expected);

        $this->assertEquals($expected, $model->getTeamReboundsOffensive());
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