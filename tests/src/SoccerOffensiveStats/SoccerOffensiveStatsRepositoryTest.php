<?php

declare(strict_types=1);

namespace Sports\Tests\SoccerOffensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\SoccerOffensiveStats\{ SoccerOffensiveStatsDto, ISoccerOffensiveStatsRepository, SoccerOffensiveStatsRepository };

class SoccerOffensiveStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private SoccerOffensiveStatsDto $dto;
    private ISoccerOffensiveStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 3869,
            "goals_game_winning" => "training",
            "goals_game_tying" => "check",
            "goals_overtime" => "threat",
            "goals_shootout" => "him",
            "goals_total" => "reflect",
            "assists_game_winning" => "sometimes",
            "assists_game_tying" => "director",
            "assists_overtime" => "when",
            "assists_total" => "billion",
            "points" => "start",
            "shots_total" => "hold",
            "shots_on_goal_total" => "garden",
            "shots_hit_frame" => "condition",
            "shots_penalty_shot_taken" => "middle",
            "shots_penalty_shot_scored" => "tree",
            "shots_penalty_shot_missed" => "bed",
            "shots_penalty_shot_percentage" => "significant",
            "shots_shootout_taken" => "area",
            "shots_shootout_scored" => "conference",
            "shots_shootout_missed" => "summer",
            "shots_shootout_percentage" => "provide",
            "giveaways" => "region",
            "offsides" => "current",
            "corner_kicks" => "almost",
            "hat_tricks" => "keep",
        ];
        $this->dto = new SoccerOffensiveStatsDto($this->input);
        $this->repository = new SoccerOffensiveStatsRepository($this->db);
    }

    protected function tearDown(): void
    {
        unset($this->db);
        unset($this->result);
        unset($this->input);
        unset($this->dto);
        unset($this->repository);
    }

    public function testInsert_ReturnsFailedOnException(): void
    {
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->insert($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testInsert_ReturnsId(): void
    {
        $expected = 6304;

        $sql = "INSERT INTO `soccer_offensive_stats` (`goals_game_winning`, `goals_game_tying`, `goals_overtime`, `goals_shootout`, `goals_total`, `assists_game_winning`, `assists_game_tying`, `assists_overtime`, `assists_total`, `points`, `shots_total`, `shots_on_goal_total`, `shots_hit_frame`, `shots_penalty_shot_taken`, `shots_penalty_shot_scored`, `shots_penalty_shot_missed`, `shots_penalty_shot_percentage`, `shots_shootout_taken`, `shots_shootout_scored`, `shots_shootout_missed`, `shots_shootout_percentage`, `giveaways`, `offsides`, `corner_kicks`, `hat_tricks`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->goalsGameWinning,
                $this->dto->goalsGameTying,
                $this->dto->goalsOvertime,
                $this->dto->goalsShootout,
                $this->dto->goalsTotal,
                $this->dto->assistsGameWinning,
                $this->dto->assistsGameTying,
                $this->dto->assistsOvertime,
                $this->dto->assistsTotal,
                $this->dto->points,
                $this->dto->shotsTotal,
                $this->dto->shotsOnGoalTotal,
                $this->dto->shotsHitFrame,
                $this->dto->shotsPenaltyShotTaken,
                $this->dto->shotsPenaltyShotScored,
                $this->dto->shotsPenaltyShotMissed,
                $this->dto->shotsPenaltyShotPercentage,
                $this->dto->shotsShootoutTaken,
                $this->dto->shotsShootoutScored,
                $this->dto->shotsShootoutMissed,
                $this->dto->shotsShootoutPercentage,
                $this->dto->giveaways,
                $this->dto->offsides,
                $this->dto->cornerKicks,
                $this->dto->hatTricks
            ]);
        $this->db->expects($this->once())
            ->method("lastInsertId")
            ->willReturn($expected);

        $actual = $this->repository->insert($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testUpdate_ReturnsFailedOnException(): void
    {
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->update($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testUpdate_ReturnsRowCount(): void
    {
        $expected = 3887;

        $sql = "UPDATE `soccer_offensive_stats` SET `goals_game_winning` = ?, `goals_game_tying` = ?, `goals_overtime` = ?, `goals_shootout` = ?, `goals_total` = ?, `assists_game_winning` = ?, `assists_game_tying` = ?, `assists_overtime` = ?, `assists_total` = ?, `points` = ?, `shots_total` = ?, `shots_on_goal_total` = ?, `shots_hit_frame` = ?, `shots_penalty_shot_taken` = ?, `shots_penalty_shot_scored` = ?, `shots_penalty_shot_missed` = ?, `shots_penalty_shot_percentage` = ?, `shots_shootout_taken` = ?, `shots_shootout_scored` = ?, `shots_shootout_missed` = ?, `shots_shootout_percentage` = ?, `giveaways` = ?, `offsides` = ?, `corner_kicks` = ?, `hat_tricks` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->goalsGameWinning,
                $this->dto->goalsGameTying,
                $this->dto->goalsOvertime,
                $this->dto->goalsShootout,
                $this->dto->goalsTotal,
                $this->dto->assistsGameWinning,
                $this->dto->assistsGameTying,
                $this->dto->assistsOvertime,
                $this->dto->assistsTotal,
                $this->dto->points,
                $this->dto->shotsTotal,
                $this->dto->shotsOnGoalTotal,
                $this->dto->shotsHitFrame,
                $this->dto->shotsPenaltyShotTaken,
                $this->dto->shotsPenaltyShotScored,
                $this->dto->shotsPenaltyShotMissed,
                $this->dto->shotsPenaltyShotPercentage,
                $this->dto->shotsShootoutTaken,
                $this->dto->shotsShootoutScored,
                $this->dto->shotsShootoutMissed,
                $this->dto->shotsShootoutPercentage,
                $this->dto->giveaways,
                $this->dto->offsides,
                $this->dto->cornerKicks,
                $this->dto->hatTricks,
                $this->dto->id
            ]);
        $this->result->expects($this->once())
            ->method("rowCount")
            ->willReturn($expected);

        $actual = $this->repository->update($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testGet_ReturnsEmptyOnException(): void
    {
        $id = 9344;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 3641;

        $sql = "SELECT `id`, `goals_game_winning`, `goals_game_tying`, `goals_overtime`, `goals_shootout`, `goals_total`, `assists_game_winning`, `assists_game_tying`, `assists_overtime`, `assists_total`, `points`, `shots_total`, `shots_on_goal_total`, `shots_hit_frame`, `shots_penalty_shot_taken`, `shots_penalty_shot_scored`, `shots_penalty_shot_missed`, `shots_penalty_shot_percentage`, `shots_shootout_taken`, `shots_shootout_scored`, `shots_shootout_missed`, `shots_shootout_percentage`, `giveaways`, `offsides`, `corner_kicks`, `hat_tricks`
                FROM `soccer_offensive_stats` WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([$id]);
        $this->result->expects($this->once())
            ->method("fetchAll")
            ->willReturn([$this->input]);

        $actual = $this->repository->get($id);
        $this->assertEquals($this->dto, $actual);
    }

    public function testGetAll_ReturnsEmptyOnException(): void
    {
        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->getAll();
        $this->assertEmpty($actual);
    }

    public function testGetAll_ReturnsDtos(): void
    {
        $sql = "SELECT `id`, `goals_game_winning`, `goals_game_tying`, `goals_overtime`, `goals_shootout`, `goals_total`, `assists_game_winning`, `assists_game_tying`, `assists_overtime`, `assists_total`, `points`, `shots_total`, `shots_on_goal_total`, `shots_hit_frame`, `shots_penalty_shot_taken`, `shots_penalty_shot_scored`, `shots_penalty_shot_missed`, `shots_penalty_shot_percentage`, `shots_shootout_taken`, `shots_shootout_scored`, `shots_shootout_missed`, `shots_shootout_percentage`, `giveaways`, `offsides`, `corner_kicks`, `hat_tricks`
                FROM `soccer_offensive_stats`";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute");
        $this->result->expects($this->once())
            ->method("fetchAll")
            ->willReturn([$this->input]);

        $actual = $this->repository->getAll();
        $this->assertEquals([$this->dto], $actual);
    }

    public function testDelete_ReturnsFailedOnException(): void
    {
        $id = 6213;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 6078;
        $expected = 6986;

        $sql = "DELETE FROM `soccer_offensive_stats` WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([$id]);
        $this->result->expects($this->once())
            ->method("rowCount")
            ->willReturn($expected);

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }
}