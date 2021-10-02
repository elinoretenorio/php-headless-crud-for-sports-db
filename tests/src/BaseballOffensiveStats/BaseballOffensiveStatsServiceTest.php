<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballOffensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\BaseballOffensiveStats\{ BaseballOffensiveStatsDto, BaseballOffensiveStatsModel, IBaseballOffensiveStatsService, BaseballOffensiveStatsService };

class BaseballOffensiveStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private BaseballOffensiveStatsDto $dto;
    private BaseballOffensiveStatsModel $model;
    private IBaseballOffensiveStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\BaseballOffensiveStats\IBaseballOffensiveStatsRepository");
        $this->input = [
            "id" => 6745,
            "average" => 657.20,
            "runs_scored" => 9509,
            "at_bats" => 2971,
            "hits" => 9585,
            "rbi" => 9349,
            "total_bases" => 4730,
            "slugging_percentage" => 184.80,
            "bases_on_balls" => 8999,
            "strikeouts" => 5622,
            "left_on_base" => 9901,
            "left_in_scoring_position" => 4207,
            "singles" => 3129,
            "doubles" => 7184,
            "triples" => 6,
            "home_runs" => 3659,
            "grand_slams" => 3141,
            "at_bats_per_rbi" => 923.18,
            "plate_appearances_per_rbi" => 362.00,
            "at_bats_per_home_run" => 595.33,
            "plate_appearances_per_home_run" => 80.82,
            "sac_flies" => 3492,
            "sac_bunts" => 1811,
            "grounded_into_double_play" => 1830,
            "moved_up" => 4239,
            "on_base_percentage" => 953.98,
            "stolen_bases" => 5283,
            "stolen_bases_caught" => 9866,
            "stolen_bases_average" => 127.00,
            "hit_by_pitch" => 6128,
            "defensive_interferance_reaches" => 224,
            "on_base_plus_slugging" => 715.70,
            "plate_appearances" => 4653,
            "hits_extra_base" => 1373,
        ];
        $this->dto = new BaseballOffensiveStatsDto($this->input);
        $this->model = new BaseballOffensiveStatsModel($this->dto);
        $this->service = new BaseballOffensiveStatsService($this->repository);
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
        $expected = 6263;

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
        $expected = 5713;

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
        $id = 4760;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 6266;

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
        $id = 5870;
        $expected = 5714;

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