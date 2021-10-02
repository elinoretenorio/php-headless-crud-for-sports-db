<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballActionParticipants;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballActionParticipants\{ AmericanFootballActionParticipantsDto, AmericanFootballActionParticipantsModel, IAmericanFootballActionParticipantsService, AmericanFootballActionParticipantsService };

class AmericanFootballActionParticipantsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private AmericanFootballActionParticipantsDto $dto;
    private AmericanFootballActionParticipantsModel $model;
    private IAmericanFootballActionParticipantsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\AmericanFootballActionParticipants\IAmericanFootballActionParticipantsRepository");
        $this->input = [
            "id" => 4758,
            "american_football_action_play_id" => 7898,
            "person_id" => 549,
            "participant_role" => "why",
            "score_type" => "price",
            "field_line" => 3644,
            "yardage" => 1804,
            "score_credit" => 5038,
            "yards_gained" => 5131,
        ];
        $this->dto = new AmericanFootballActionParticipantsDto($this->input);
        $this->model = new AmericanFootballActionParticipantsModel($this->dto);
        $this->service = new AmericanFootballActionParticipantsService($this->repository);
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
        $expected = 9371;

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
        $expected = 6287;

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
        $id = 2880;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 6021;

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
        $id = 431;
        $expected = 668;

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