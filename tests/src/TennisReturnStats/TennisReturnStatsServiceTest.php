<?php

declare(strict_types=1);

namespace Sports\Tests\TennisReturnStats;

use PHPUnit\Framework\TestCase;
use Sports\TennisReturnStats\{ TennisReturnStatsDto, TennisReturnStatsModel, ITennisReturnStatsService, TennisReturnStatsService };

class TennisReturnStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private TennisReturnStatsDto $dto;
    private TennisReturnStatsModel $model;
    private ITennisReturnStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\TennisReturnStats\ITennisReturnStatsRepository");
        $this->input = [
            "id" => 3705,
            "returns_played" => "common",
            "matches_played" => "energy",
            "first_service_return_points_won" => "scene",
            "first_service_return_points_won_pct" => "material",
            "second_service_return_points_won" => "professional",
            "second_service_return_points_won_pct" => "be",
            "return_games_played" => "dream",
            "return_games_won" => "foot",
            "return_games_won_pct" => "factor",
            "break_points_played" => "tell",
            "break_points_converted" => "hope",
            "break_points_converted_pct" => "resource",
        ];
        $this->dto = new TennisReturnStatsDto($this->input);
        $this->model = new TennisReturnStatsModel($this->dto);
        $this->service = new TennisReturnStatsService($this->repository);
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
        $expected = 9010;

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
        $expected = 7882;

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
        $id = 6508;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 6931;

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
        $id = 5662;
        $expected = 3099;

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