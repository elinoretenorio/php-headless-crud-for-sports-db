<?php

declare(strict_types=1);

namespace Sports\Tests\BasketballReboundingStats;

use PHPUnit\Framework\TestCase;
use Sports\BasketballReboundingStats\{ BasketballReboundingStatsDto, BasketballReboundingStatsModel, IBasketballReboundingStatsService, BasketballReboundingStatsService };

class BasketballReboundingStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private BasketballReboundingStatsDto $dto;
    private BasketballReboundingStatsModel $model;
    private IBasketballReboundingStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\BasketballReboundingStats\IBasketballReboundingStatsRepository");
        $this->input = [
            "id" => 1716,
            "rebounds_total" => "character",
            "rebounds_per_game" => "them",
            "rebounds_defensive" => "speak",
            "rebounds_offensive" => "man",
            "team_rebounds_total" => "sing",
            "team_rebounds_per_game" => "despite",
            "team_rebounds_defensive" => "I",
            "team_rebounds_offensive" => "decision",
        ];
        $this->dto = new BasketballReboundingStatsDto($this->input);
        $this->model = new BasketballReboundingStatsModel($this->dto);
        $this->service = new BasketballReboundingStatsService($this->repository);
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
        $expected = 5685;

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
        $expected = 8434;

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
        $id = 4796;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 6779;

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
        $id = 1408;
        $expected = 1491;

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