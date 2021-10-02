<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballDefensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballDefensiveStats\{ AmericanFootballDefensiveStatsDto, AmericanFootballDefensiveStatsModel, IAmericanFootballDefensiveStatsService, AmericanFootballDefensiveStatsService };

class AmericanFootballDefensiveStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private AmericanFootballDefensiveStatsDto $dto;
    private AmericanFootballDefensiveStatsModel $model;
    private IAmericanFootballDefensiveStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\AmericanFootballDefensiveStats\IAmericanFootballDefensiveStatsRepository");
        $this->input = [
            "id" => 7771,
            "tackles_total" => "adult",
            "tackles_solo" => "and",
            "tackles_assists" => "understand",
            "interceptions_total" => "program",
            "interceptions_yards" => "owner",
            "interceptions_average" => "hundred",
            "interceptions_longest" => "their",
            "interceptions_touchdown" => "boy",
            "quarterback_hurries" => "service",
            "sacks_total" => "without",
            "sacks_yards" => "price",
            "passes_defensed" => "air",
        ];
        $this->dto = new AmericanFootballDefensiveStatsDto($this->input);
        $this->model = new AmericanFootballDefensiveStatsModel($this->dto);
        $this->service = new AmericanFootballDefensiveStatsService($this->repository);
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
        $expected = 7757;

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
        $expected = 2639;

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
        $id = 4748;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 265;

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
        $id = 6530;
        $expected = 5711;

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