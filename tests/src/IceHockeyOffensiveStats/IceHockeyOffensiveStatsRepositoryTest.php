<?php

declare(strict_types=1);

namespace Sports\Tests\IceHockeyOffensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\IceHockeyOffensiveStats\{ IceHockeyOffensiveStatsDto, IIceHockeyOffensiveStatsRepository, IceHockeyOffensiveStatsRepository };

class IceHockeyOffensiveStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private IceHockeyOffensiveStatsDto $dto;
    private IIceHockeyOffensiveStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 8959,
            "goals_game_winning" => "material",
            "goals_game_tying" => "leader",
            "goals_power_play" => "probably",
            "goals_short_handed" => "series",
            "goals_even_strength" => "ground",
            "goals_empty_net" => "issue",
            "goals_overtime" => "nor",
            "goals_shootout" => "while",
            "goals_penalty_shot" => "garden",
            "assists" => "improve",
            "points" => "far",
            "power_play_amount" => "he",
            "power_play_percentage" => "serious",
            "shots_penalty_shot_taken" => "soldier",
            "shots_penalty_shot_missed" => "that",
            "shots_penalty_shot_percentage" => "early",
            "giveaways" => "save",
            "minutes_power_play" => "which",
            "faceoff_wins" => "just",
            "faceoff_losses" => "reach",
            "faceoff_win_percentage" => "thus",
            "scoring_chances" => "beat",
        ];
        $this->dto = new IceHockeyOffensiveStatsDto($this->input);
        $this->repository = new IceHockeyOffensiveStatsRepository($this->db);
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
        $expected = 5941;

        $sql = "INSERT INTO `ice_hockey_offensive_stats` (`goals_game_winning`, `goals_game_tying`, `goals_power_play`, `goals_short_handed`, `goals_even_strength`, `goals_empty_net`, `goals_overtime`, `goals_shootout`, `goals_penalty_shot`, `assists`, `points`, `power_play_amount`, `power_play_percentage`, `shots_penalty_shot_taken`, `shots_penalty_shot_missed`, `shots_penalty_shot_percentage`, `giveaways`, `minutes_power_play`, `faceoff_wins`, `faceoff_losses`, `faceoff_win_percentage`, `scoring_chances`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->goalsGameWinning,
                $this->dto->goalsGameTying,
                $this->dto->goalsPowerPlay,
                $this->dto->goalsShortHanded,
                $this->dto->goalsEvenStrength,
                $this->dto->goalsEmptyNet,
                $this->dto->goalsOvertime,
                $this->dto->goalsShootout,
                $this->dto->goalsPenaltyShot,
                $this->dto->assists,
                $this->dto->points,
                $this->dto->powerPlayAmount,
                $this->dto->powerPlayPercentage,
                $this->dto->shotsPenaltyShotTaken,
                $this->dto->shotsPenaltyShotMissed,
                $this->dto->shotsPenaltyShotPercentage,
                $this->dto->giveaways,
                $this->dto->minutesPowerPlay,
                $this->dto->faceoffWins,
                $this->dto->faceoffLosses,
                $this->dto->faceoffWinPercentage,
                $this->dto->scoringChances
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
        $expected = 1241;

        $sql = "UPDATE `ice_hockey_offensive_stats` SET `goals_game_winning` = ?, `goals_game_tying` = ?, `goals_power_play` = ?, `goals_short_handed` = ?, `goals_even_strength` = ?, `goals_empty_net` = ?, `goals_overtime` = ?, `goals_shootout` = ?, `goals_penalty_shot` = ?, `assists` = ?, `points` = ?, `power_play_amount` = ?, `power_play_percentage` = ?, `shots_penalty_shot_taken` = ?, `shots_penalty_shot_missed` = ?, `shots_penalty_shot_percentage` = ?, `giveaways` = ?, `minutes_power_play` = ?, `faceoff_wins` = ?, `faceoff_losses` = ?, `faceoff_win_percentage` = ?, `scoring_chances` = ?
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
                $this->dto->goalsPowerPlay,
                $this->dto->goalsShortHanded,
                $this->dto->goalsEvenStrength,
                $this->dto->goalsEmptyNet,
                $this->dto->goalsOvertime,
                $this->dto->goalsShootout,
                $this->dto->goalsPenaltyShot,
                $this->dto->assists,
                $this->dto->points,
                $this->dto->powerPlayAmount,
                $this->dto->powerPlayPercentage,
                $this->dto->shotsPenaltyShotTaken,
                $this->dto->shotsPenaltyShotMissed,
                $this->dto->shotsPenaltyShotPercentage,
                $this->dto->giveaways,
                $this->dto->minutesPowerPlay,
                $this->dto->faceoffWins,
                $this->dto->faceoffLosses,
                $this->dto->faceoffWinPercentage,
                $this->dto->scoringChances,
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
        $id = 2649;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 5580;

        $sql = "SELECT `id`, `goals_game_winning`, `goals_game_tying`, `goals_power_play`, `goals_short_handed`, `goals_even_strength`, `goals_empty_net`, `goals_overtime`, `goals_shootout`, `goals_penalty_shot`, `assists`, `points`, `power_play_amount`, `power_play_percentage`, `shots_penalty_shot_taken`, `shots_penalty_shot_missed`, `shots_penalty_shot_percentage`, `giveaways`, `minutes_power_play`, `faceoff_wins`, `faceoff_losses`, `faceoff_win_percentage`, `scoring_chances`
                FROM `ice_hockey_offensive_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `goals_game_winning`, `goals_game_tying`, `goals_power_play`, `goals_short_handed`, `goals_even_strength`, `goals_empty_net`, `goals_overtime`, `goals_shootout`, `goals_penalty_shot`, `assists`, `points`, `power_play_amount`, `power_play_percentage`, `shots_penalty_shot_taken`, `shots_penalty_shot_missed`, `shots_penalty_shot_percentage`, `giveaways`, `minutes_power_play`, `faceoff_wins`, `faceoff_losses`, `faceoff_win_percentage`, `scoring_chances`
                FROM `ice_hockey_offensive_stats`";

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
        $id = 7988;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 4090;
        $expected = 2714;

        $sql = "DELETE FROM `ice_hockey_offensive_stats` WHERE `id` = ?";

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