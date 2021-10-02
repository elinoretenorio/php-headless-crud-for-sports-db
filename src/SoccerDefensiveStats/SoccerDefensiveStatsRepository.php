<?php

declare(strict_types=1);

namespace Sports\SoccerDefensiveStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class SoccerDefensiveStatsRepository implements ISoccerDefensiveStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(SoccerDefensiveStatsDto $dto): int
    {
        $sql = "INSERT INTO `soccer_defensive_stats` (`shots_penalty_shot_allowed`, `goals_penalty_shot_allowed`, `goals_against_average`, `goals_against_total`, `saves`, `save_percentage`, `catches_punches`, `shots_on_goal_total`, `shots_shootout_total`, `shots_shootout_allowed`, `shots_blocked`, `shutouts`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->shotsPenaltyShotAllowed,
                $dto->goalsPenaltyShotAllowed,
                $dto->goalsAgainstAverage,
                $dto->goalsAgainstTotal,
                $dto->saves,
                $dto->savePercentage,
                $dto->catchesPunches,
                $dto->shotsOnGoalTotal,
                $dto->shotsShootoutTotal,
                $dto->shotsShootoutAllowed,
                $dto->shotsBlocked,
                $dto->shutouts
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(SoccerDefensiveStatsDto $dto): int
    {
        $sql = "UPDATE `soccer_defensive_stats` SET `shots_penalty_shot_allowed` = ?, `goals_penalty_shot_allowed` = ?, `goals_against_average` = ?, `goals_against_total` = ?, `saves` = ?, `save_percentage` = ?, `catches_punches` = ?, `shots_on_goal_total` = ?, `shots_shootout_total` = ?, `shots_shootout_allowed` = ?, `shots_blocked` = ?, `shutouts` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->shotsPenaltyShotAllowed,
                $dto->goalsPenaltyShotAllowed,
                $dto->goalsAgainstAverage,
                $dto->goalsAgainstTotal,
                $dto->saves,
                $dto->savePercentage,
                $dto->catchesPunches,
                $dto->shotsOnGoalTotal,
                $dto->shotsShootoutTotal,
                $dto->shotsShootoutAllowed,
                $dto->shotsBlocked,
                $dto->shutouts,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?SoccerDefensiveStatsDto
    {
        $sql = "SELECT `id`, `shots_penalty_shot_allowed`, `goals_penalty_shot_allowed`, `goals_against_average`, `goals_against_total`, `saves`, `save_percentage`, `catches_punches`, `shots_on_goal_total`, `shots_shootout_total`, `shots_shootout_allowed`, `shots_blocked`, `shutouts`
                FROM `soccer_defensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new SoccerDefensiveStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `shots_penalty_shot_allowed`, `goals_penalty_shot_allowed`, `goals_against_average`, `goals_against_total`, `saves`, `save_percentage`, `catches_punches`, `shots_on_goal_total`, `shots_shootout_total`, `shots_shootout_allowed`, `shots_blocked`, `shutouts`
                FROM `soccer_defensive_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new SoccerDefensiveStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `soccer_defensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}