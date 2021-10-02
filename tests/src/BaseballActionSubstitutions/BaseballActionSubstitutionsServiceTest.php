<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballActionSubstitutions;

use PHPUnit\Framework\TestCase;
use Sports\BaseballActionSubstitutions\{ BaseballActionSubstitutionsDto, BaseballActionSubstitutionsModel, IBaseballActionSubstitutionsService, BaseballActionSubstitutionsService };

class BaseballActionSubstitutionsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private BaseballActionSubstitutionsDto $dto;
    private BaseballActionSubstitutionsModel $model;
    private IBaseballActionSubstitutionsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\BaseballActionSubstitutions\IBaseballActionSubstitutionsRepository");
        $this->input = [
            "id" => 7934,
            "baseball_event_state_id" => 8276,
            "sequence_number" => 5531,
            "person_type" => "create",
            "person_original_id" => 2647,
            "person_original_position_id" => 2544,
            "person_original_lineup_slot" => 3527,
            "person_replacing_id" => 5363,
            "person_replacing_position_id" => 1646,
            "person_replacing_lineup_slot" => 8515,
            "substitution_reason" => "available",
            "comment" => "choice",
        ];
        $this->dto = new BaseballActionSubstitutionsDto($this->input);
        $this->model = new BaseballActionSubstitutionsModel($this->dto);
        $this->service = new BaseballActionSubstitutionsService($this->repository);
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
        $expected = 2525;

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
        $expected = 6764;

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
        $id = 8503;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 4734;

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
        $id = 3062;
        $expected = 5177;

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