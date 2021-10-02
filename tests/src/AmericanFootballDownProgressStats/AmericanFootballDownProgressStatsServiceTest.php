<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballDownProgressStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballDownProgressStats\{ AmericanFootballDownProgressStatsDto, AmericanFootballDownProgressStatsModel, IAmericanFootballDownProgressStatsService, AmericanFootballDownProgressStatsService };

class AmericanFootballDownProgressStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private AmericanFootballDownProgressStatsDto $dto;
    private AmericanFootballDownProgressStatsModel $model;
    private IAmericanFootballDownProgressStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\AmericanFootballDownProgressStats\IAmericanFootballDownProgressStatsRepository");
        $this->input = [
            "id" => 3749,
            "first_downs_total" => "leg",
            "first_downs_pass" => "determine",
            "first_downs_run" => "test",
            "first_downs_penalty" => "edge",
            "conversions_third_down" => "public",
            "conversions_third_down_attempts" => "box",
            "conversions_third_down_percentage" => "take",
            "conversions_fourth_down" => "choose",
            "conversions_fourth_down_attempts" => "conference",
            "conversions_fourth_down_percentage" => "both",
        ];
        $this->dto = new AmericanFootballDownProgressStatsDto($this->input);
        $this->model = new AmericanFootballDownProgressStatsModel($this->dto);
        $this->service = new AmericanFootballDownProgressStatsService($this->repository);
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
        $expected = 926;

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
        $expected = 2433;

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
        $id = 8985;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 5446;

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
        $id = 1269;
        $expected = 1723;

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