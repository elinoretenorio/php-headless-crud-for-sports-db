<?php

declare(strict_types=1);

namespace Sports\Tests\IceHockeyDefensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\IceHockeyDefensiveStats\{ IceHockeyDefensiveStatsDto, IceHockeyDefensiveStatsModel, IIceHockeyDefensiveStatsService, IceHockeyDefensiveStatsService };

class IceHockeyDefensiveStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private IceHockeyDefensiveStatsDto $dto;
    private IceHockeyDefensiveStatsModel $model;
    private IIceHockeyDefensiveStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\IceHockeyDefensiveStats\IIceHockeyDefensiveStatsRepository");
        $this->input = [
            "id" => 2186,
            "shots_power_play_allowed" => "offer",
            "shots_penalty_shot_allowed" => "fight",
            "goals_power_play_allowed" => "available",
            "goals_penalty_shot_allowed" => "figure",
            "goals_against_average" => "protect",
            "saves" => "inside",
            "save_percentage" => "itself",
            "penalty_killing_amount" => "can",
            "penalty_killing_percentage" => "issue",
            "shots_blocked" => "traditional",
            "takeaways" => "happy",
            "shutouts" => "past",
            "minutes_penalty_killing" => "price",
            "hits" => "interest",
            "goals_empty_net_allowed" => "impact",
            "goals_short_handed_allowed" => "home",
            "goals_shootout_allowed" => "pretty",
            "shots_shootout_allowed" => "partner",
        ];
        $this->dto = new IceHockeyDefensiveStatsDto($this->input);
        $this->model = new IceHockeyDefensiveStatsModel($this->dto);
        $this->service = new IceHockeyDefensiveStatsService($this->repository);
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
        $expected = 9106;

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
        $expected = 1839;

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
        $id = 7006;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 6814;

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
        $id = 4239;
        $expected = 2223;

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