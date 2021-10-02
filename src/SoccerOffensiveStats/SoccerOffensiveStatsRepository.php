<?php

declare(strict_types=1);

namespace Sports\SoccerOffensiveStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class SoccerOffensiveStatsRepository implements ISoccerOffensiveStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(SoccerOffensiveStatsDto $dto): int
    {
        $sql = "INSERT INTO `soccer_offensive_stats` (`goals_game_winning`, `goals_game_tying`, `goals_overtime`, `goals_shootout`, `goals_total`, `assists_game_winning`, `assists_game_tying`, `assists_overtime`, `assists_total`, `points`, `shots_total`, `shots_on_goal_total`, `shots_hit_frame`, `shots_penalty_shot_taken`, `shots_penalty_shot_scored`, `shots_penalty_shot_missed`, `shots_penalty_shot_percentage`, `shots_shootout_taken`, `shots_shootout_scored`, `shots_shootout_missed`, `shots_shootout_percentage`, `giveaways`, `offsides`, `corner_kicks`, `hat_tricks`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->goalsGameWinning,
                $dto->goalsGameTying,
                $dto->goalsOvertime,
                $dto->goalsShootout,
                $dto->goalsTotal,
                $dto->assistsGameWinning,
                $dto->assistsGameTying,
                $dto->assistsOvertime,
                $dto->assistsTotal,
                $dto->points,
                $dto->shotsTotal,
                $dto->shotsOnGoalTotal,
                $dto->shotsHitFrame,
                $dto->shotsPenaltyShotTaken,
                $dto->shotsPenaltyShotScored,
                $dto->shotsPenaltyShotMissed,
                $dto->shotsPenaltyShotPercentage,
                $dto->shotsShootoutTaken,
                $dto->shotsShootoutScored,
                $dto->shotsShootoutMissed,
                $dto->shotsShootoutPercentage,
                $dto->giveaways,
                $dto->offsides,
                $dto->cornerKicks,
                $dto->hatTricks
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(SoccerOffensiveStatsDto $dto): int
    {
        $sql = "UPDATE `soccer_offensive_stats` SET `goals_game_winning` = ?, `goals_game_tying` = ?, `goals_overtime` = ?, `goals_shootout` = ?, `goals_total` = ?, `assists_game_winning` = ?, `assists_game_tying` = ?, `assists_overtime` = ?, `assists_total` = ?, `points` = ?, `shots_total` = ?, `shots_on_goal_total` = ?, `shots_hit_frame` = ?, `shots_penalty_shot_taken` = ?, `shots_penalty_shot_scored` = ?, `shots_penalty_shot_missed` = ?, `shots_penalty_shot_percentage` = ?, `shots_shootout_taken` = ?, `shots_shootout_scored` = ?, `shots_shootout_missed` = ?, `shots_shootout_percentage` = ?, `giveaways` = ?, `offsides` = ?, `corner_kicks` = ?, `hat_tricks` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->goalsGameWinning,
                $dto->goalsGameTying,
                $dto->goalsOvertime,
                $dto->goalsShootout,
                $dto->goalsTotal,
                $dto->assistsGameWinning,
                $dto->assistsGameTying,
                $dto->assistsOvertime,
                $dto->assistsTotal,
                $dto->points,
                $dto->shotsTotal,
                $dto->shotsOnGoalTotal,
                $dto->shotsHitFrame,
                $dto->shotsPenaltyShotTaken,
                $dto->shotsPenaltyShotScored,
                $dto->shotsPenaltyShotMissed,
                $dto->shotsPenaltyShotPercentage,
                $dto->shotsShootoutTaken,
                $dto->shotsShootoutScored,
                $dto->shotsShootoutMissed,
                $dto->shotsShootoutPercentage,
                $dto->giveaways,
                $dto->offsides,
                $dto->cornerKicks,
                $dto->hatTricks,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?SoccerOffensiveStatsDto
    {
        $sql = "SELECT `id`, `goals_game_winning`, `goals_game_tying`, `goals_overtime`, `goals_shootout`, `goals_total`, `assists_game_winning`, `assists_game_tying`, `assists_overtime`, `assists_total`, `points`, `shots_total`, `shots_on_goal_total`, `shots_hit_frame`, `shots_penalty_shot_taken`, `shots_penalty_shot_scored`, `shots_penalty_shot_missed`, `shots_penalty_shot_percentage`, `shots_shootout_taken`, `shots_shootout_scored`, `shots_shootout_missed`, `shots_shootout_percentage`, `giveaways`, `offsides`, `corner_kicks`, `hat_tricks`
                FROM `soccer_offensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new SoccerOffensiveStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `goals_game_winning`, `goals_game_tying`, `goals_overtime`, `goals_shootout`, `goals_total`, `assists_game_winning`, `assists_game_tying`, `assists_overtime`, `assists_total`, `points`, `shots_total`, `shots_on_goal_total`, `shots_hit_frame`, `shots_penalty_shot_taken`, `shots_penalty_shot_scored`, `shots_penalty_shot_missed`, `shots_penalty_shot_percentage`, `shots_shootout_taken`, `shots_shootout_scored`, `shots_shootout_missed`, `shots_shootout_percentage`, `giveaways`, `offsides`, `corner_kicks`, `hat_tricks`
                FROM `soccer_offensive_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new SoccerOffensiveStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `soccer_offensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}