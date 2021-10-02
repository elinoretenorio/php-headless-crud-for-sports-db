<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballScoringStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballScoringStats\{ AmericanFootballScoringStatsDto, AmericanFootballScoringStatsModel, IAmericanFootballScoringStatsService, AmericanFootballScoringStatsService };

class AmericanFootballScoringStatsServiceTest extends TestCase
{
    private $repository;
    private array $input;
    private AmericanFootballScoringStatsDto $dto;
    private AmericanFootballScoringStatsModel $model;
    private IAmericanFootballScoringStatsService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createMock("Sports\AmericanFootballScoringStats\IAmericanFootballScoringStatsRepository");
        $this->input = [
            "id" => 8910,
            "touchdowns_total" => "society",
            "touchdowns_passing" => "face",
            "touchdowns_rushing" => "opportunity",
            "touchdowns_special_teams" => "improve",
            "touchdowns_defensive" => "color",
            "extra_points_attempts" => "plant",
            "extra_points_made" => "then",
            "extra_points_missed" => "follow",
            "extra_points_blocked" => "coach",
            "field_goal_attempts" => "growth",
            "field_goals_made" => "issue",
            "field_goals_missed" => "pattern",
            "field_goals_blocked" => "let",
            "safeties_against" => "look",
            "two_point_conversions_attempts" => "market",
            "two_point_conversions_made" => "trouble",
            "touchbacks_total" => "mention",
        ];
        $this->dto = new AmericanFootballScoringStatsDto($this->input);
        $this->model = new AmericanFootballScoringStatsModel($this->dto);
        $this->service = new AmericanFootballScoringStatsService($this->repository);
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
        $expected = 2115;

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
        $expected = 5199;

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
        $id = 8311;

        $this->repository->expects($this->once())
            ->method("get")
            ->with($id)
            ->willReturn(null);

        $actual = $this->service->get($id);
        $this->assertNull($actual);
    }

    public function testGet_ReturnsModel(): void
    {
        $id = 1262;

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
        $id = 3831;
        $expected = 1894;

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