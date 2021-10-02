<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballFumblesStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballFumblesStats\{ AmericanFootballFumblesStatsDto, AmericanFootballFumblesStatsModel, IAmericanFootballFumblesStatsService, AmericanFootballFumblesStatsService };

class AmericanFootballFumblesStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private AmericanFootballFumblesStatsDto $dto;
    private AmericanFootballFumblesStatsModel $model;
    private IAmericanFootballFumblesStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\AmericanFootballFumblesStats\IAmericanFootballFumblesStatsRepository");
        $this->input = [
            "id" => 7213,
            "fumbles_committed" => "and",
            "fumbles_forced" => "safe",
            "fumbles_recovered" => "relationship",
            "fumbles_lost" => "the",
            "fumbles_yards_gained" => "open",
            "fumbles_own_committed" => "stay",
            "fumbles_own_recovered" => "day",
            "fumbles_own_lost" => "say",
            "fumbles_own_yards_gained" => "billion",
            "fumbles_opposing_committed" => "only",
            "fumbles_opposing_recovered" => "firm",
            "fumbles_opposing_lost" => "executive",
            "fumbles_opposing_yards_gained" => "help",
        ];
        $this->dto = new AmericanFootballFumblesStatsDto($this->input);
        $this->model = new AmericanFootballFumblesStatsModel($this->dto);
        $this->service = new AmericanFootballFumblesStatsService($this->repository);
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
        $expected = 6177;

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
        $expected = 2186;

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
        $id = 129;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 7067;

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
        $id = 8324;
        $expected = 7111;

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