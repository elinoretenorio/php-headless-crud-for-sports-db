<?php

declare(strict_types=1);

namespace Sports\TennisReturnStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class TennisReturnStatsRepository implements ITennisReturnStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(TennisReturnStatsDto $dto): int
    {
        $sql = "INSERT INTO `tennis_return_stats` (`returns_played`, `matches_played`, `first_service_return_points_won`, `first_service_return_points_won_pct`, `second_service_return_points_won`, `second_service_return_points_won_pct`, `return_games_played`, `return_games_won`, `return_games_won_pct`, `break_points_played`, `break_points_converted`, `break_points_converted_pct`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->returnsPlayed,
                $dto->matchesPlayed,
                $dto->firstServiceReturnPointsWon,
                $dto->firstServiceReturnPointsWonPct,
                $dto->secondServiceReturnPointsWon,
                $dto->secondServiceReturnPointsWonPct,
                $dto->returnGamesPlayed,
                $dto->returnGamesWon,
                $dto->returnGamesWonPct,
                $dto->breakPointsPlayed,
                $dto->breakPointsConverted,
                $dto->breakPointsConvertedPct
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(TennisReturnStatsDto $dto): int
    {
        $sql = "UPDATE `tennis_return_stats` SET `returns_played` = ?, `matches_played` = ?, `first_service_return_points_won` = ?, `first_service_return_points_won_pct` = ?, `second_service_return_points_won` = ?, `second_service_return_points_won_pct` = ?, `return_games_played` = ?, `return_games_won` = ?, `return_games_won_pct` = ?, `break_points_played` = ?, `break_points_converted` = ?, `break_points_converted_pct` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->returnsPlayed,
                $dto->matchesPlayed,
                $dto->firstServiceReturnPointsWon,
                $dto->firstServiceReturnPointsWonPct,
                $dto->secondServiceReturnPointsWon,
                $dto->secondServiceReturnPointsWonPct,
                $dto->returnGamesPlayed,
                $dto->returnGamesWon,
                $dto->returnGamesWonPct,
                $dto->breakPointsPlayed,
                $dto->breakPointsConverted,
                $dto->breakPointsConvertedPct,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?TennisReturnStatsDto
    {
        $sql = "SELECT `id`, `returns_played`, `matches_played`, `first_service_return_points_won`, `first_service_return_points_won_pct`, `second_service_return_points_won`, `second_service_return_points_won_pct`, `return_games_played`, `return_games_won`, `return_games_won_pct`, `break_points_played`, `break_points_converted`, `break_points_converted_pct`
                FROM `tennis_return_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new TennisReturnStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `returns_played`, `matches_played`, `first_service_return_points_won`, `first_service_return_points_won_pct`, `second_service_return_points_won`, `second_service_return_points_won_pct`, `return_games_played`, `return_games_won`, `return_games_won_pct`, `break_points_played`, `break_points_converted`, `break_points_converted_pct`
                FROM `tennis_return_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new TennisReturnStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `tennis_return_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}