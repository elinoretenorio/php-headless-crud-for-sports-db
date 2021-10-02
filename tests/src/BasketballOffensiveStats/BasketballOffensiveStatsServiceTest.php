<?php

declare(strict_types=1);

namespace Sports\Tests\BasketballOffensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\BasketballOffensiveStats\{ BasketballOffensiveStatsDto, BasketballOffensiveStatsModel, IBasketballOffensiveStatsService, BasketballOffensiveStatsService };

class BasketballOffensiveStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private BasketballOffensiveStatsDto $dto;
    private BasketballOffensiveStatsModel $model;
    private IBasketballOffensiveStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\BasketballOffensiveStats\IBasketballOffensiveStatsRepository");
        $this->input = [
            "id" => 1090,
            "field_goals_made" => 4790,
            "field_goals_attempted" => 4808,
            "field_goals_percentage" => "candidate",
            "field_goals_per_game" => "what",
            "field_goals_attempted_per_game" => "particular",
            "field_goals_percentage_adjusted" => "easy",
            "three_pointers_made" => 3319,
            "three_pointers_attempted" => 5787,
            "three_pointers_percentage" => "especially",
            "three_pointers_per_game" => "charge",
            "three_pointers_attempted_per_game" => "tell",
            "free_throws_made" => "sound",
            "free_throws_attempted" => "talk",
            "free_throws_percentage" => "trial",
            "free_throws_per_game" => "sense",
            "free_throws_attempted_per_game" => "yourself",
            "points_scored_total" => "economic",
            "points_scored_per_game" => "letter",
            "assists_total" => "its",
            "assists_per_game" => "floor",
            "turnovers_total" => "century",
            "turnovers_per_game" => "where",
            "points_scored_off_turnovers" => "whole",
            "points_scored_in_paint" => "surface",
            "points_scored_on_second_chance" => "toward",
            "points_scored_on_fast_break" => "ahead",
        ];
        $this->dto = new BasketballOffensiveStatsDto($this->input);
        $this->model = new BasketballOffensiveStatsModel($this->dto);
        $this->service = new BasketballOffensiveStatsService($this->repository);
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
        $expected = 1855;

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
        $expected = 1780;

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
        $id = 3880;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 6559;

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
        $id = 1718;
        $expected = 1183;

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