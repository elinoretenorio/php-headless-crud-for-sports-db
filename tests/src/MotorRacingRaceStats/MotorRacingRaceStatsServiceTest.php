<?php

declare(strict_types=1);

namespace Sports\Tests\MotorRacingRaceStats;

use PHPUnit\Framework\TestCase;
use Sports\MotorRacingRaceStats\{ MotorRacingRaceStatsDto, MotorRacingRaceStatsModel, IMotorRacingRaceStatsService, MotorRacingRaceStatsService };

class MotorRacingRaceStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private MotorRacingRaceStatsDto $dto;
    private MotorRacingRaceStatsModel $model;
    private IMotorRacingRaceStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\MotorRacingRaceStats\IMotorRacingRaceStatsRepository");
        $this->input = [
            "id" => 4018,
            "time_behind_leader" => "interesting",
            "laps_behind_leader" => "store",
            "time_ahead_follower" => "this",
            "laps_ahead_follower" => "carry",
            "time" => "under",
            "points" => "alone",
            "points_rookie" => "vote",
            "bonus" => "pressure",
            "laps_completed" => "fly",
            "laps_leading_total" => "business",
            "distance_leading" => "five",
            "distance_completed" => "great",
            "distance_units" => "much",
            "speed_average" => "technology",
            "speed_units" => "most",
            "status" => "population",
            "finishes_top_5" => "answer",
            "finishes_top_10" => "serve",
            "starts" => "public",
            "finishes" => "prepare",
            "non_finishes" => "agree",
            "wins" => "stuff",
            "races_leading" => "director",
            "money" => "or",
            "money_units" => "over",
            "leads_total" => "mind",
        ];
        $this->dto = new MotorRacingRaceStatsDto($this->input);
        $this->model = new MotorRacingRaceStatsModel($this->dto);
        $this->service = new MotorRacingRaceStatsService($this->repository);
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
        $expected = 5852;

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
        $expected = 31;

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
        $id = 4089;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 3136;

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
        $id = 7281;
        $expected = 7339;

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