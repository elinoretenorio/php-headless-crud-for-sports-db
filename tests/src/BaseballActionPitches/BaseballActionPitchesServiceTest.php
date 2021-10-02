<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballActionPitches;

use PHPUnit\Framework\TestCase;
use Sports\BaseballActionPitches\{ BaseballActionPitchesDto, BaseballActionPitchesModel, IBaseballActionPitchesService, BaseballActionPitchesService };

class BaseballActionPitchesServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private BaseballActionPitchesDto $dto;
    private BaseballActionPitchesModel $model;
    private IBaseballActionPitchesService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\BaseballActionPitches\IBaseballActionPitchesRepository");
        $this->input = [
            "id" => 9309,
            "baseball_action_play_id" => 4525,
            "sequence_number" => 7881,
            "baseball_defensive_group_id" => 4245,
            "umpire_call" => "spring",
            "pitch_location" => "service",
            "pitch_type" => "worker",
            "pitch_velocity" => 3025,
            "comment" => "Six answer help manager whose. Chance figure partner thought gas. Collection know fight white.",
            "trajectory_coordinates" => "through",
            "trajectory_formula" => "describe",
            "ball_type" => "final",
            "strike_type" => "seven",
        ];
        $this->dto = new BaseballActionPitchesDto($this->input);
        $this->model = new BaseballActionPitchesModel($this->dto);
        $this->service = new BaseballActionPitchesService($this->repository);
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
        $expected = 9935;

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
        $expected = 9986;

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
        $id = 7695;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 332;

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
        $id = 1099;
        $expected = 7217;

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