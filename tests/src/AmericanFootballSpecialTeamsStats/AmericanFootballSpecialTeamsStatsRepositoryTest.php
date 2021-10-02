<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballSpecialTeamsStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\AmericanFootballSpecialTeamsStats\{ AmericanFootballSpecialTeamsStatsDto, IAmericanFootballSpecialTeamsStatsRepository, AmericanFootballSpecialTeamsStatsRepository };

class AmericanFootballSpecialTeamsStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private AmericanFootballSpecialTeamsStatsDto $dto;
    private IAmericanFootballSpecialTeamsStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 1991,
            "returns_punt_total" => "during",
            "returns_punt_yards" => "garden",
            "returns_punt_average" => "price",
            "returns_punt_longest" => "this",
            "returns_punt_touchdown" => "strategy",
            "returns_kickoff_total" => "despite",
            "returns_kickoff_yards" => "morning",
            "returns_kickoff_average" => "address",
            "returns_kickoff_longest" => "letter",
            "returns_kickoff_touchdown" => "official",
            "returns_total" => "check",
            "returns_yards" => "table",
            "punts_total" => "avoid",
            "punts_yards_gross" => "campaign",
            "punts_yards_net" => "usually",
            "punts_longest" => "sign",
            "punts_inside_20" => "draw",
            "punts_inside_20_percentage" => "network",
            "punts_average" => "spring",
            "punts_blocked" => "under",
            "touchbacks_total" => "step",
            "touchbacks_total_percentage" => "several",
            "touchbacks_kickoffs" => "control",
            "touchbacks_kickoffs_percentage" => "herself",
            "touchbacks_punts" => "window",
            "touchbacks_punts_percentage" => "child",
            "touchbacks_interceptions" => "know",
            "touchbacks_interceptions_percentage" => "least",
            "fair_catches" => "tough",
        ];
        $this->dto = new AmericanFootballSpecialTeamsStatsDto($this->input);
        $this->repository = new AmericanFootballSpecialTeamsStatsRepository($this->db);
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
        $expected = 7115;

        $sql = "INSERT INTO `american_football_special_teams_stats` (`returns_punt_total`, `returns_punt_yards`, `returns_punt_average`, `returns_punt_longest`, `returns_punt_touchdown`, `returns_kickoff_total`, `returns_kickoff_yards`, `returns_kickoff_average`, `returns_kickoff_longest`, `returns_kickoff_touchdown`, `returns_total`, `returns_yards`, `punts_total`, `punts_yards_gross`, `punts_yards_net`, `punts_longest`, `punts_inside_20`, `punts_inside_20_percentage`, `punts_average`, `punts_blocked`, `touchbacks_total`, `touchbacks_total_percentage`, `touchbacks_kickoffs`, `touchbacks_kickoffs_percentage`, `touchbacks_punts`, `touchbacks_punts_percentage`, `touchbacks_interceptions`, `touchbacks_interceptions_percentage`, `fair_catches`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->returnsPuntTotal,
                $this->dto->returnsPuntYards,
                $this->dto->returnsPuntAverage,
                $this->dto->returnsPuntLongest,
                $this->dto->returnsPuntTouchdown,
                $this->dto->returnsKickoffTotal,
                $this->dto->returnsKickoffYards,
                $this->dto->returnsKickoffAverage,
                $this->dto->returnsKickoffLongest,
                $this->dto->returnsKickoffTouchdown,
                $this->dto->returnsTotal,
                $this->dto->returnsYards,
                $this->dto->puntsTotal,
                $this->dto->puntsYardsGross,
                $this->dto->puntsYardsNet,
                $this->dto->puntsLongest,
                $this->dto->puntsInside20,
                $this->dto->puntsInside20Percentage,
                $this->dto->puntsAverage,
                $this->dto->puntsBlocked,
                $this->dto->touchbacksTotal,
                $this->dto->touchbacksTotalPercentage,
                $this->dto->touchbacksKickoffs,
                $this->dto->touchbacksKickoffsPercentage,
                $this->dto->touchbacksPunts,
                $this->dto->touchbacksPuntsPercentage,
                $this->dto->touchbacksInterceptions,
                $this->dto->touchbacksInterceptionsPercentage,
                $this->dto->fairCatches
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
        $expected = 6518;

        $sql = "UPDATE `american_football_special_teams_stats` SET `returns_punt_total` = ?, `returns_punt_yards` = ?, `returns_punt_average` = ?, `returns_punt_longest` = ?, `returns_punt_touchdown` = ?, `returns_kickoff_total` = ?, `returns_kickoff_yards` = ?, `returns_kickoff_average` = ?, `returns_kickoff_longest` = ?, `returns_kickoff_touchdown` = ?, `returns_total` = ?, `returns_yards` = ?, `punts_total` = ?, `punts_yards_gross` = ?, `punts_yards_net` = ?, `punts_longest` = ?, `punts_inside_20` = ?, `punts_inside_20_percentage` = ?, `punts_average` = ?, `punts_blocked` = ?, `touchbacks_total` = ?, `touchbacks_total_percentage` = ?, `touchbacks_kickoffs` = ?, `touchbacks_kickoffs_percentage` = ?, `touchbacks_punts` = ?, `touchbacks_punts_percentage` = ?, `touchbacks_interceptions` = ?, `touchbacks_interceptions_percentage` = ?, `fair_catches` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->returnsPuntTotal,
                $this->dto->returnsPuntYards,
                $this->dto->returnsPuntAverage,
                $this->dto->returnsPuntLongest,
                $this->dto->returnsPuntTouchdown,
                $this->dto->returnsKickoffTotal,
                $this->dto->returnsKickoffYards,
                $this->dto->returnsKickoffAverage,
                $this->dto->returnsKickoffLongest,
                $this->dto->returnsKickoffTouchdown,
                $this->dto->returnsTotal,
                $this->dto->returnsYards,
                $this->dto->puntsTotal,
                $this->dto->puntsYardsGross,
                $this->dto->puntsYardsNet,
                $this->dto->puntsLongest,
                $this->dto->puntsInside20,
                $this->dto->puntsInside20Percentage,
                $this->dto->puntsAverage,
                $this->dto->puntsBlocked,
                $this->dto->touchbacksTotal,
                $this->dto->touchbacksTotalPercentage,
                $this->dto->touchbacksKickoffs,
                $this->dto->touchbacksKickoffsPercentage,
                $this->dto->touchbacksPunts,
                $this->dto->touchbacksPuntsPercentage,
                $this->dto->touchbacksInterceptions,
                $this->dto->touchbacksInterceptionsPercentage,
                $this->dto->fairCatches,
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
        $id = 3538;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 1248;

        $sql = "SELECT `id`, `returns_punt_total`, `returns_punt_yards`, `returns_punt_average`, `returns_punt_longest`, `returns_punt_touchdown`, `returns_kickoff_total`, `returns_kickoff_yards`, `returns_kickoff_average`, `returns_kickoff_longest`, `returns_kickoff_touchdown`, `returns_total`, `returns_yards`, `punts_total`, `punts_yards_gross`, `punts_yards_net`, `punts_longest`, `punts_inside_20`, `punts_inside_20_percentage`, `punts_average`, `punts_blocked`, `touchbacks_total`, `touchbacks_total_percentage`, `touchbacks_kickoffs`, `touchbacks_kickoffs_percentage`, `touchbacks_punts`, `touchbacks_punts_percentage`, `touchbacks_interceptions`, `touchbacks_interceptions_percentage`, `fair_catches`
                FROM `american_football_special_teams_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `returns_punt_total`, `returns_punt_yards`, `returns_punt_average`, `returns_punt_longest`, `returns_punt_touchdown`, `returns_kickoff_total`, `returns_kickoff_yards`, `returns_kickoff_average`, `returns_kickoff_longest`, `returns_kickoff_touchdown`, `returns_total`, `returns_yards`, `punts_total`, `punts_yards_gross`, `punts_yards_net`, `punts_longest`, `punts_inside_20`, `punts_inside_20_percentage`, `punts_average`, `punts_blocked`, `touchbacks_total`, `touchbacks_total_percentage`, `touchbacks_kickoffs`, `touchbacks_kickoffs_percentage`, `touchbacks_punts`, `touchbacks_punts_percentage`, `touchbacks_interceptions`, `touchbacks_interceptions_percentage`, `fair_catches`
                FROM `american_football_special_teams_stats`";

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
        $id = 4067;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 6384;
        $expected = 6489;

        $sql = "DELETE FROM `american_football_special_teams_stats` WHERE `id` = ?";

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