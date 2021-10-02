<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballSpecialTeamsStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballSpecialTeamsStats\{ AmericanFootballSpecialTeamsStatsDto, AmericanFootballSpecialTeamsStatsModel, IAmericanFootballSpecialTeamsStatsService, AmericanFootballSpecialTeamsStatsService };

class AmericanFootballSpecialTeamsStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private AmericanFootballSpecialTeamsStatsDto $dto;
    private AmericanFootballSpecialTeamsStatsModel $model;
    private IAmericanFootballSpecialTeamsStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\AmericanFootballSpecialTeamsStats\IAmericanFootballSpecialTeamsStatsRepository");
        $this->input = [
            "id" => 3290,
            "returns_punt_total" => "college",
            "returns_punt_yards" => "gun",
            "returns_punt_average" => "expert",
            "returns_punt_longest" => "popular",
            "returns_punt_touchdown" => "lot",
            "returns_kickoff_total" => "interest",
            "returns_kickoff_yards" => "light",
            "returns_kickoff_average" => "win",
            "returns_kickoff_longest" => "spring",
            "returns_kickoff_touchdown" => "energy",
            "returns_total" => "tell",
            "returns_yards" => "test",
            "punts_total" => "yet",
            "punts_yards_gross" => "image",
            "punts_yards_net" => "discuss",
            "punts_longest" => "cost",
            "punts_inside_20" => "place",
            "punts_inside_20_percentage" => "manager",
            "punts_average" => "specific",
            "punts_blocked" => "air",
            "touchbacks_total" => "anyone",
            "touchbacks_total_percentage" => "commercial",
            "touchbacks_kickoffs" => "front",
            "touchbacks_kickoffs_percentage" => "country",
            "touchbacks_punts" => "identify",
            "touchbacks_punts_percentage" => "herself",
            "touchbacks_interceptions" => "some",
            "touchbacks_interceptions_percentage" => "material",
            "fair_catches" => "cost",
        ];
        $this->dto = new AmericanFootballSpecialTeamsStatsDto($this->input);
        $this->model = new AmericanFootballSpecialTeamsStatsModel($this->dto);
        $this->service = new AmericanFootballSpecialTeamsStatsService($this->repository);
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
        $expected = 5099;

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
        $expected = 675;

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
        $id = 6374;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 7683;

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
        $id = 7210;
        $expected = 4078;

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