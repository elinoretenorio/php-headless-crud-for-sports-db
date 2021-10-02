<?php

declare(strict_types=1);

namespace Sports\Tests\SoccerOffensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\SoccerOffensiveStats\{ SoccerOffensiveStatsDto, SoccerOffensiveStatsModel, ISoccerOffensiveStatsService, SoccerOffensiveStatsService };

class SoccerOffensiveStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private SoccerOffensiveStatsDto $dto;
    private SoccerOffensiveStatsModel $model;
    private ISoccerOffensiveStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\SoccerOffensiveStats\ISoccerOffensiveStatsRepository");
        $this->input = [
            "id" => 2882,
            "goals_game_winning" => "method",
            "goals_game_tying" => "former",
            "goals_overtime" => "production",
            "goals_shootout" => "suggest",
            "goals_total" => "mission",
            "assists_game_winning" => "low",
            "assists_game_tying" => "church",
            "assists_overtime" => "direction",
            "assists_total" => "page",
            "points" => "within",
            "shots_total" => "light",
            "shots_on_goal_total" => "long",
            "shots_hit_frame" => "door",
            "shots_penalty_shot_taken" => "floor",
            "shots_penalty_shot_scored" => "situation",
            "shots_penalty_shot_missed" => "child",
            "shots_penalty_shot_percentage" => "rate",
            "shots_shootout_taken" => "plan",
            "shots_shootout_scored" => "step",
            "shots_shootout_missed" => "message",
            "shots_shootout_percentage" => "great",
            "giveaways" => "history",
            "offsides" => "situation",
            "corner_kicks" => "south",
            "hat_tricks" => "soon",
        ];
        $this->dto = new SoccerOffensiveStatsDto($this->input);
        $this->model = new SoccerOffensiveStatsModel($this->dto);
        $this->service = new SoccerOffensiveStatsService($this->repository);
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
        $expected = 1686;

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
        $expected = 2874;

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
        $id = 3645;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 2404;

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
        $id = 6113;
        $expected = 4456;

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