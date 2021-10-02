<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballEventStates;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballEventStates\{ AmericanFootballEventStatesDto, AmericanFootballEventStatesModel, IAmericanFootballEventStatesService, AmericanFootballEventStatesService };

class AmericanFootballEventStatesServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private AmericanFootballEventStatesDto $dto;
    private AmericanFootballEventStatesModel $model;
    private IAmericanFootballEventStatesService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\AmericanFootballEventStates\IAmericanFootballEventStatesRepository");
        $this->input = [
            "id" => 1332,
            "event_id" => 3310,
            "current_state" => 1235,
            "sequence_number" => 114,
            "period_value" => 1075,
            "period_time_elapsed" => "yet",
            "period_time_remaining" => "break",
            "clock_state" => "citizen",
            "down" => 9906,
            "team_in_possession_id" => 7718,
            "distance_for_1st_down" => 1483,
            "field_side" => "forget",
            "field_line" => 8318,
            "context" => "attention",
        ];
        $this->dto = new AmericanFootballEventStatesDto($this->input);
        $this->model = new AmericanFootballEventStatesModel($this->dto);
        $this->service = new AmericanFootballEventStatesService($this->repository);
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
        $expected = 1048;

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
        $expected = 2793;

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
        $id = 8596;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 7619;

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
        $id = 1672;
        $expected = 1226;

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