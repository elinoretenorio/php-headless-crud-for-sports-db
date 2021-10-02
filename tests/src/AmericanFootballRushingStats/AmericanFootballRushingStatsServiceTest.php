<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballRushingStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballRushingStats\{ AmericanFootballRushingStatsDto, AmericanFootballRushingStatsModel, IAmericanFootballRushingStatsService, AmericanFootballRushingStatsService };

class AmericanFootballRushingStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private AmericanFootballRushingStatsDto $dto;
    private AmericanFootballRushingStatsModel $model;
    private IAmericanFootballRushingStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\AmericanFootballRushingStats\IAmericanFootballRushingStatsRepository");
        $this->input = [
            "id" => 6136,
            "rushes_attempts" => "fire",
            "rushes_yards" => "life",
            "rushes_touchdowns" => "large",
            "rushing_average_yards_per" => "phone",
            "rushes_first_down" => "hold",
            "rushes_longest" => "law",
        ];
        $this->dto = new AmericanFootballRushingStatsDto($this->input);
        $this->model = new AmericanFootballRushingStatsModel($this->dto);
        $this->service = new AmericanFootballRushingStatsService($this->repository);
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
        $expected = 769;

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
        $expected = 9900;

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
        $id = 2345;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 6532;

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
        $id = 5271;
        $expected = 3125;

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