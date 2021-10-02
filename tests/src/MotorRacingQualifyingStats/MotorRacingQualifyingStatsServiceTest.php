<?php

declare(strict_types=1);

namespace Sports\Tests\MotorRacingQualifyingStats;

use PHPUnit\Framework\TestCase;
use Sports\MotorRacingQualifyingStats\{ MotorRacingQualifyingStatsDto, MotorRacingQualifyingStatsModel, IMotorRacingQualifyingStatsService, MotorRacingQualifyingStatsService };

class MotorRacingQualifyingStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private MotorRacingQualifyingStatsDto $dto;
    private MotorRacingQualifyingStatsModel $model;
    private IMotorRacingQualifyingStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\MotorRacingQualifyingStats\IMotorRacingQualifyingStatsRepository");
        $this->input = [
            "id" => 7142,
            "grid" => "fight",
            "pole_position" => "feeling",
            "pole_wins" => "kind",
            "qualifying_speed" => "sense",
            "qualifying_speed_units" => "agreement",
            "qualifying_time" => "debate",
            "qualifying_position" => "individual",
        ];
        $this->dto = new MotorRacingQualifyingStatsDto($this->input);
        $this->model = new MotorRacingQualifyingStatsModel($this->dto);
        $this->service = new MotorRacingQualifyingStatsService($this->repository);
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
        $expected = 367;

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
        $expected = 937;

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
        $id = 5066;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 5919;

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
        $id = 5105;
        $expected = 6464;

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