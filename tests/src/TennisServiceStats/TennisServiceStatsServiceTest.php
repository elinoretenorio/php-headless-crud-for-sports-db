<?php

declare(strict_types=1);

namespace Sports\Tests\TennisServiceStats;

use PHPUnit\Framework\TestCase;
use Sports\TennisServiceStats\{ TennisServiceStatsDto, TennisServiceStatsModel, ITennisServiceStatsService, TennisServiceStatsService };

class TennisServiceStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private TennisServiceStatsDto $dto;
    private TennisServiceStatsModel $model;
    private ITennisServiceStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\TennisServiceStats\ITennisServiceStatsRepository");
        $this->input = [
            "id" => 8276,
            "services_played" => "address",
            "matches_played" => "go",
            "aces" => "any",
            "first_services_good" => "phone",
            "first_services_good_pct" => "check",
            "first_service_points_won" => "test",
            "first_service_points_won_pct" => "affect",
            "second_service_points_won" => "wear",
            "second_service_points_won_pct" => "painting",
            "service_games_played" => "form",
            "service_games_won" => "hair",
            "service_games_won_pct" => "action",
            "break_points_played" => "modern",
            "break_points_saved" => "manage",
            "break_points_saved_pct" => "chance",
        ];
        $this->dto = new TennisServiceStatsDto($this->input);
        $this->model = new TennisServiceStatsModel($this->dto);
        $this->service = new TennisServiceStatsService($this->repository);
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
        $expected = 5039;

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
        $expected = 2229;

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
        $id = 9436;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 6272;

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
        $id = 9861;
        $expected = 4332;

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