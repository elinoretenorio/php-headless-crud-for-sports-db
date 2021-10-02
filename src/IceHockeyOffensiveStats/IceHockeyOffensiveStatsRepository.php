<?php

declare(strict_types=1);

namespace Sports\IceHockeyOffensiveStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class IceHockeyOffensiveStatsRepository implements IIceHockeyOffensiveStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(IceHockeyOffensiveStatsDto $dto): int
    {
        $sql = "INSERT INTO `ice_hockey_offensive_stats` (`goals_game_winning`, `goals_game_tying`, `goals_power_play`, `goals_short_handed`, `goals_even_strength`, `goals_empty_net`, `goals_overtime`, `goals_shootout`, `goals_penalty_shot`, `assists`, `points`, `power_play_amount`, `power_play_percentage`, `shots_penalty_shot_taken`, `shots_penalty_shot_missed`, `shots_penalty_shot_percentage`, `giveaways`, `minutes_power_play`, `faceoff_wins`, `faceoff_losses`, `faceoff_win_percentage`, `scoring_chances`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->goalsGameWinning,
                $dto->goalsGameTying,
                $dto->goalsPowerPlay,
                $dto->goalsShortHanded,
                $dto->goalsEvenStrength,
                $dto->goalsEmptyNet,
                $dto->goalsOvertime,
                $dto->goalsShootout,
                $dto->goalsPenaltyShot,
                $dto->assists,
                $dto->points,
                $dto->powerPlayAmount,
                $dto->powerPlayPercentage,
                $dto->shotsPenaltyShotTaken,
                $dto->shotsPenaltyShotMissed,
                $dto->shotsPenaltyShotPercentage,
                $dto->giveaways,
                $dto->minutesPowerPlay,
                $dto->faceoffWins,
                $dto->faceoffLosses,
                $dto->faceoffWinPercentage,
                $dto->scoringChances
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(IceHockeyOffensiveStatsDto $dto): int
    {
        $sql = "UPDATE `ice_hockey_offensive_stats` SET `goals_game_winning` = ?, `goals_game_tying` = ?, `goals_power_play` = ?, `goals_short_handed` = ?, `goals_even_strength` = ?, `goals_empty_net` = ?, `goals_overtime` = ?, `goals_shootout` = ?, `goals_penalty_shot` = ?, `assists` = ?, `points` = ?, `power_play_amount` = ?, `power_play_percentage` = ?, `shots_penalty_shot_taken` = ?, `shots_penalty_shot_missed` = ?, `shots_penalty_shot_percentage` = ?, `giveaways` = ?, `minutes_power_play` = ?, `faceoff_wins` = ?, `faceoff_losses` = ?, `faceoff_win_percentage` = ?, `scoring_chances` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->goalsGameWinning,
                $dto->goalsGameTying,
                $dto->goalsPowerPlay,
                $dto->goalsShortHanded,
                $dto->goalsEvenStrength,
                $dto->goalsEmptyNet,
                $dto->goalsOvertime,
                $dto->goalsShootout,
                $dto->goalsPenaltyShot,
                $dto->assists,
                $dto->points,
                $dto->powerPlayAmount,
                $dto->powerPlayPercentage,
                $dto->shotsPenaltyShotTaken,
                $dto->shotsPenaltyShotMissed,
                $dto->shotsPenaltyShotPercentage,
                $dto->giveaways,
                $dto->minutesPowerPlay,
                $dto->faceoffWins,
                $dto->faceoffLosses,
                $dto->faceoffWinPercentage,
                $dto->scoringChances,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?IceHockeyOffensiveStatsDto
    {
        $sql = "SELECT `id`, `goals_game_winning`, `goals_game_tying`, `goals_power_play`, `goals_short_handed`, `goals_even_strength`, `goals_empty_net`, `goals_overtime`, `goals_shootout`, `goals_penalty_shot`, `assists`, `points`, `power_play_amount`, `power_play_percentage`, `shots_penalty_shot_taken`, `shots_penalty_shot_missed`, `shots_penalty_shot_percentage`, `giveaways`, `minutes_power_play`, `faceoff_wins`, `faceoff_losses`, `faceoff_win_percentage`, `scoring_chances`
                FROM `ice_hockey_offensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new IceHockeyOffensiveStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `goals_game_winning`, `goals_game_tying`, `goals_power_play`, `goals_short_handed`, `goals_even_strength`, `goals_empty_net`, `goals_overtime`, `goals_shootout`, `goals_penalty_shot`, `assists`, `points`, `power_play_amount`, `power_play_percentage`, `shots_penalty_shot_taken`, `shots_penalty_shot_missed`, `shots_penalty_shot_percentage`, `giveaways`, `minutes_power_play`, `faceoff_wins`, `faceoff_losses`, `faceoff_win_percentage`, `scoring_chances`
                FROM `ice_hockey_offensive_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new IceHockeyOffensiveStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `ice_hockey_offensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}