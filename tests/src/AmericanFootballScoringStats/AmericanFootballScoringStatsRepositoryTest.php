<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballScoringStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\AmericanFootballScoringStats\{ AmericanFootballScoringStatsDto, IAmericanFootballScoringStatsRepository, AmericanFootballScoringStatsRepository };

class AmericanFootballScoringStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private AmericanFootballScoringStatsDto $dto;
    private IAmericanFootballScoringStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 573,
            "touchdowns_total" => "one",
            "touchdowns_passing" => "hour",
            "touchdowns_rushing" => "move",
            "touchdowns_special_teams" => "let",
            "touchdowns_defensive" => "summer",
            "extra_points_attempts" => "become",
            "extra_points_made" => "three",
            "extra_points_missed" => "believe",
            "extra_points_blocked" => "turn",
            "field_goal_attempts" => "stay",
            "field_goals_made" => "tend",
            "field_goals_missed" => "side",
            "field_goals_blocked" => "radio",
            "safeties_against" => "fish",
            "two_point_conversions_attempts" => "run",
            "two_point_conversions_made" => "yes",
            "touchbacks_total" => "discussion",
        ];
        $this->dto = new AmericanFootballScoringStatsDto($this->input);
        $this->repository = new AmericanFootballScoringStatsRepository($this->db);
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
        $expected = 4684;

        $sql = "INSERT INTO `american_football_scoring_stats` (`touchdowns_total`, `touchdowns_passing`, `touchdowns_rushing`, `touchdowns_special_teams`, `touchdowns_defensive`, `extra_points_attempts`, `extra_points_made`, `extra_points_missed`, `extra_points_blocked`, `field_goal_attempts`, `field_goals_made`, `field_goals_missed`, `field_goals_blocked`, `safeties_against`, `two_point_conversions_attempts`, `two_point_conversions_made`, `touchbacks_total`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->touchdownsTotal,
                $this->dto->touchdownsPassing,
                $this->dto->touchdownsRushing,
                $this->dto->touchdownsSpecialTeams,
                $this->dto->touchdownsDefensive,
                $this->dto->extraPointsAttempts,
                $this->dto->extraPointsMade,
                $this->dto->extraPointsMissed,
                $this->dto->extraPointsBlocked,
                $this->dto->fieldGoalAttempts,
                $this->dto->fieldGoalsMade,
                $this->dto->fieldGoalsMissed,
                $this->dto->fieldGoalsBlocked,
                $this->dto->safetiesAgainst,
                $this->dto->twoPointConversionsAttempts,
                $this->dto->twoPointConversionsMade,
                $this->dto->touchbacksTotal
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
        $expected = 2147;

        $sql = "UPDATE `american_football_scoring_stats` SET `touchdowns_total` = ?, `touchdowns_passing` = ?, `touchdowns_rushing` = ?, `touchdowns_special_teams` = ?, `touchdowns_defensive` = ?, `extra_points_attempts` = ?, `extra_points_made` = ?, `extra_points_missed` = ?, `extra_points_blocked` = ?, `field_goal_attempts` = ?, `field_goals_made` = ?, `field_goals_missed` = ?, `field_goals_blocked` = ?, `safeties_against` = ?, `two_point_conversions_attempts` = ?, `two_point_conversions_made` = ?, `touchbacks_total` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->touchdownsTotal,
                $this->dto->touchdownsPassing,
                $this->dto->touchdownsRushing,
                $this->dto->touchdownsSpecialTeams,
                $this->dto->touchdownsDefensive,
                $this->dto->extraPointsAttempts,
                $this->dto->extraPointsMade,
                $this->dto->extraPointsMissed,
                $this->dto->extraPointsBlocked,
                $this->dto->fieldGoalAttempts,
                $this->dto->fieldGoalsMade,
                $this->dto->fieldGoalsMissed,
                $this->dto->fieldGoalsBlocked,
                $this->dto->safetiesAgainst,
                $this->dto->twoPointConversionsAttempts,
                $this->dto->twoPointConversionsMade,
                $this->dto->touchbacksTotal,
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
        $id = 5037;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 1798;

        $sql = "SELECT `id`, `touchdowns_total`, `touchdowns_passing`, `touchdowns_rushing`, `touchdowns_special_teams`, `touchdowns_defensive`, `extra_points_attempts`, `extra_points_made`, `extra_points_missed`, `extra_points_blocked`, `field_goal_attempts`, `field_goals_made`, `field_goals_missed`, `field_goals_blocked`, `safeties_against`, `two_point_conversions_attempts`, `two_point_conversions_made`, `touchbacks_total`
                FROM `american_football_scoring_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `touchdowns_total`, `touchdowns_passing`, `touchdowns_rushing`, `touchdowns_special_teams`, `touchdowns_defensive`, `extra_points_attempts`, `extra_points_made`, `extra_points_missed`, `extra_points_blocked`, `field_goal_attempts`, `field_goals_made`, `field_goals_missed`, `field_goals_blocked`, `safeties_against`, `two_point_conversions_attempts`, `two_point_conversions_made`, `touchbacks_total`
                FROM `american_football_scoring_stats`";

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
        $id = 6484;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 4111;
        $expected = 7322;

        $sql = "DELETE FROM `american_football_scoring_stats` WHERE `id` = ?";

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