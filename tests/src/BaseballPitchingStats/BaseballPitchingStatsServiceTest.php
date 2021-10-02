<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballPitchingStats;

use PHPUnit\Framework\TestCase;
use Sports\BaseballPitchingStats\{ BaseballPitchingStatsDto, BaseballPitchingStatsModel, IBaseballPitchingStatsService, BaseballPitchingStatsService };

class BaseballPitchingStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private BaseballPitchingStatsDto $dto;
    private BaseballPitchingStatsModel $model;
    private IBaseballPitchingStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\BaseballPitchingStats\IBaseballPitchingStatsRepository");
        $this->input = [
            "id" => 1628,
            "runs_allowed" => 4182,
            "singles_allowed" => 252,
            "doubles_allowed" => 5414,
            "triples_allowed" => 9200,
            "home_runs_allowed" => 2935,
            "innings_pitched" => "month",
            "hits" => 8780,
            "earned_runs" => 1967,
            "unearned_runs" => 3096,
            "bases_on_balls" => 1576,
            "bases_on_balls_intentional" => 4067,
            "strikeouts" => 7737,
            "strikeout_to_bb_ratio" => 309.70,
            "number_of_pitches" => 6472,
            "era" => 825.60,
            "inherited_runners_scored" => 6753,
            "pick_offs" => 1663,
            "errors_hit_with_pitch" => 4727,
            "errors_wild_pitch" => 9399,
            "balks" => 6245,
            "wins" => 68,
            "losses" => 8733,
            "saves" => 8382,
            "shutouts" => 3265,
            "games_complete" => 195,
            "games_finished" => 5765,
            "winning_percentage" => 877.32,
            "event_credit" => "bad",
            "save_credit" => "little",
        ];
        $this->dto = new BaseballPitchingStatsDto($this->input);
        $this->model = new BaseballPitchingStatsModel($this->dto);
        $this->service = new BaseballPitchingStatsService($this->repository);
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
        $expected = 6401;

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
        $expected = 6780;

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
        $id = 2352;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 2563;

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
        $id = 3133;
        $expected = 3444;

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