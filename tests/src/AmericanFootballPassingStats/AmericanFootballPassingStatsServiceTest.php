<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballPassingStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballPassingStats\{ AmericanFootballPassingStatsDto, AmericanFootballPassingStatsModel, IAmericanFootballPassingStatsService, AmericanFootballPassingStatsService };

class AmericanFootballPassingStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private AmericanFootballPassingStatsDto $dto;
    private AmericanFootballPassingStatsModel $model;
    private IAmericanFootballPassingStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\AmericanFootballPassingStats\IAmericanFootballPassingStatsRepository");
        $this->input = [
            "id" => 4970,
            "passes_attempts" => "beyond",
            "passes_completions" => "type",
            "passes_percentage" => "assume",
            "passes_yards_gross" => "per",
            "passes_yards_net" => "do",
            "passes_yards_lost" => "site",
            "passes_touchdowns" => "set",
            "passes_touchdowns_percentage" => "each",
            "passes_interceptions" => "fight",
            "passes_interceptions_percentage" => "understand",
            "passes_longest" => "shoulder",
            "passes_average_yards_per" => "back",
            "passer_rating" => "individual",
            "receptions_total" => "treat",
            "receptions_yards" => "impact",
            "receptions_touchdowns" => "owner",
            "receptions_first_down" => "democratic",
            "receptions_longest" => "more",
            "receptions_average_yards_per" => "their",
        ];
        $this->dto = new AmericanFootballPassingStatsDto($this->input);
        $this->model = new AmericanFootballPassingStatsModel($this->dto);
        $this->service = new AmericanFootballPassingStatsService($this->repository);
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
        $expected = 3504;

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
        $expected = 7599;

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
        $id = 928;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 3496;

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
        $id = 4765;
        $expected = 9335;

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