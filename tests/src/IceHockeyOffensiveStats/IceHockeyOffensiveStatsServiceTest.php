<?php

declare(strict_types=1);

namespace Sports\Tests\IceHockeyOffensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\IceHockeyOffensiveStats\{ IceHockeyOffensiveStatsDto, IceHockeyOffensiveStatsModel, IIceHockeyOffensiveStatsService, IceHockeyOffensiveStatsService };

class IceHockeyOffensiveStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private IceHockeyOffensiveStatsDto $dto;
    private IceHockeyOffensiveStatsModel $model;
    private IIceHockeyOffensiveStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\IceHockeyOffensiveStats\IIceHockeyOffensiveStatsRepository");
        $this->input = [
            "id" => 7949,
            "goals_game_winning" => "already",
            "goals_game_tying" => "new",
            "goals_power_play" => "property",
            "goals_short_handed" => "American",
            "goals_even_strength" => "author",
            "goals_empty_net" => "hard",
            "goals_overtime" => "success",
            "goals_shootout" => "yard",
            "goals_penalty_shot" => "forget",
            "assists" => "high",
            "points" => "relationship",
            "power_play_amount" => "service",
            "power_play_percentage" => "item",
            "shots_penalty_shot_taken" => "staff",
            "shots_penalty_shot_missed" => "building",
            "shots_penalty_shot_percentage" => "despite",
            "giveaways" => "factor",
            "minutes_power_play" => "herself",
            "faceoff_wins" => "organization",
            "faceoff_losses" => "natural",
            "faceoff_win_percentage" => "politics",
            "scoring_chances" => "shoulder",
        ];
        $this->dto = new IceHockeyOffensiveStatsDto($this->input);
        $this->model = new IceHockeyOffensiveStatsModel($this->dto);
        $this->service = new IceHockeyOffensiveStatsService($this->repository);
    }

    protected function tearDown(): void
    {
        unset($this->repository);
        unset($this->input);
        unset($this->dto);
        unset($this->model);
        unset($this->service);
    }

    public function testInsert_ReturnsId(): void
    {
        $expected = 3764;

        $this->repository->expects($this->once())
            ->method("insert")
            ->with($this->dto)
            ->willReturn($expected);

        $actual = $this->service->insert($this->model);
        $this->assertEquals($expected, $actual);
    }

    public function testInsert_ReturnsEmpty(): void
    {
        $expected = 0;

        $this->repository->expects($this->once())
            ->method("insert")
            ->with($this->dto)
            ->willReturn($expected);

        $actual = $this->service->insert($this->model);
        $this->assertEmpty($actual);
    }

    public function testUpdate_ReturnsRowCount(): void
    {
        $expected = 8634;

        $this->repository->expects($this->once())
            ->method("update")
            ->with($this->dto)
            ->willReturn($expected);

        $actual = $this->service->update($this->model);
        $this->assertEquals($expected, $actual);
    }

    public function testUpdate_ReturnsEmpty(): void
    {
        $expected = 0;

        $this->repository->expects($this->once())
            ->method("update")
            ->with($this->dto)
            ->willReturn($expected);

        $actual = $this->service->update($this->model);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsNull(): void
    {
        $id = 1871;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 9821;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn($this->dto);

        $actual = $this->service->get($id);
        $this->assertEquals($this->model, $actual);
    }

    public function testGetAll_ReturnsEmpty(): void
    {
        $this->repository->expects($this->once())
            ->method("getAll")
            ->willReturn([]);

        $actual = $this->service->getAll();
        $this->assertEmpty($actual);
    }

    public function testGetAll_ReturnsModels(): void
    {
        $this->repository->expects($this->once())
            ->method("getAll")
            ->willReturn([$this->dto]);

        $actual = $this->service->getAll();
        $this->assertEquals([$this->model], $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 6503;
        $expected = 6035;

        $this->repository->expects($this->once())
            ->method("delete")
            ->with($id)
            ->willReturn($expected);

        $actual = $this->service->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testCreateModel_ReturnsNullIfEmpty(): void
    {
        $actual = $this->service->createModel([]);
        $this->assertNull($actual);
    }

    public function testCreateModel_ReturnsModel(): void
    {
        $actual = $this->service->createModel($this->input);
        $this->assertEquals($this->model, $actual);
    }
}