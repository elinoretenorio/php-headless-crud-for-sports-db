<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballActionPlays;

use PHPUnit\Framework\TestCase;
use Sports\BaseballActionPlays\{ BaseballActionPlaysDto, BaseballActionPlaysModel, IBaseballActionPlaysService, BaseballActionPlaysService };

class BaseballActionPlaysServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private BaseballActionPlaysDto $dto;
    private BaseballActionPlaysModel $model;
    private IBaseballActionPlaysService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\BaseballActionPlays\IBaseballActionPlaysRepository");
        $this->input = [
            "id" => 7621,
            "baseball_event_state_id" => 2214,
            "play_type" => "interesting",
            "notation" => "training",
            "notation_yaml" => "Wife throw role cell. Almost foreign executive stay like benefit. Probably none these.",
            "baseball_defensive_group_id" => 4863,
            "comment" => "just",
            "runner_on_first_advance" => 5704,
            "runner_on_second_advance" => 7500,
            "runner_on_third_advance" => 8223,
            "outs_recorded" => 6363,
            "rbi" => 3052,
            "runs_scored" => 8227,
            "earned_runs_scored" => "sea",
        ];
        $this->dto = new BaseballActionPlaysDto($this->input);
        $this->model = new BaseballActionPlaysModel($this->dto);
        $this->service = new BaseballActionPlaysService($this->repository);
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
        $expected = 7123;

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
        $expected = 9081;

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
        $id = 5677;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 4509;

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
        $id = 6476;
        $expected = 4795;

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