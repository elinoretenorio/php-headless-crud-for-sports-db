<?php

declare(strict_types=1);

namespace Sports\Tests\SoccerDefensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\SoccerDefensiveStats\{ SoccerDefensiveStatsDto, SoccerDefensiveStatsModel, ISoccerDefensiveStatsService, SoccerDefensiveStatsService };

class SoccerDefensiveStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private SoccerDefensiveStatsDto $dto;
    private SoccerDefensiveStatsModel $model;
    private ISoccerDefensiveStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\SoccerDefensiveStats\ISoccerDefensiveStatsRepository");
        $this->input = [
            "id" => 1654,
            "shots_penalty_shot_allowed" => "physical",
            "goals_penalty_shot_allowed" => "support",
            "goals_against_average" => "TV",
            "goals_against_total" => "turn",
            "saves" => "teach",
            "save_percentage" => "rise",
            "catches_punches" => "happen",
            "shots_on_goal_total" => "gun",
            "shots_shootout_total" => "similar",
            "shots_shootout_allowed" => "ask",
            "shots_blocked" => "east",
            "shutouts" => "blue",
        ];
        $this->dto = new SoccerDefensiveStatsDto($this->input);
        $this->model = new SoccerDefensiveStatsModel($this->dto);
        $this->service = new SoccerDefensiveStatsService($this->repository);
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
        $expected = 2725;

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
        $expected = 6556;

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
        $id = 8758;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 4757;

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
        $id = 3721;
        $expected = 9376;

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