<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballEventStates;

use PHPUnit\Framework\TestCase;
use Sports\BaseballEventStates\{ BaseballEventStatesDto, BaseballEventStatesModel, IBaseballEventStatesService, BaseballEventStatesService };

class BaseballEventStatesServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private BaseballEventStatesDto $dto;
    private BaseballEventStatesModel $model;
    private IBaseballEventStatesService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\BaseballEventStates\IBaseballEventStatesRepository");
        $this->input = [
            "id" => 6328,
            "event_id" => 8634,
            "current_state" => 8589,
            "sequence_number" => 6692,
            "at_bat_number" => 7598,
            "inning_value" => 2020,
            "inning_half" => "too",
            "outs" => 3144,
            "balls" => 4487,
            "strikes" => 4820,
            "runner_on_first_id" => 4697,
            "runner_on_second_id" => 5825,
            "runner_on_third_id" => 9593,
            "runner_on_first" => 1773,
            "runner_on_second" => 6364,
            "runner_on_third" => 4807,
            "runs_this_inning_half" => 7875,
            "pitcher_id" => 8289,
            "batter_id" => 6000,
            "batter_side" => "present",
            "context" => "although",
        ];
        $this->dto = new BaseballEventStatesDto($this->input);
        $this->model = new BaseballEventStatesModel($this->dto);
        $this->service = new BaseballEventStatesService($this->repository);
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
        $expected = 6159;

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
        $expected = 2570;

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
        $id = 2461;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 1019;

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
        $id = 3335;
        $expected = 7239;

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