<?php

declare(strict_types=1);

namespace Sports\TennisServiceStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class TennisServiceStatsRepository implements ITennisServiceStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(TennisServiceStatsDto $dto): int
    {
        $sql = "INSERT INTO `tennis_service_stats` (`services_played`, `matches_played`, `aces`, `first_services_good`, `first_services_good_pct`, `first_service_points_won`, `first_service_points_won_pct`, `second_service_points_won`, `second_service_points_won_pct`, `service_games_played`, `service_games_won`, `service_games_won_pct`, `break_points_played`, `break_points_saved`, `break_points_saved_pct`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->servicesPlayed,
                $dto->matchesPlayed,
                $dto->aces,
                $dto->firstServicesGood,
                $dto->firstServicesGoodPct,
                $dto->firstServicePointsWon,
                $dto->firstServicePointsWonPct,
                $dto->secondServicePointsWon,
                $dto->secondServicePointsWonPct,
                $dto->serviceGamesPlayed,
                $dto->serviceGamesWon,
                $dto->serviceGamesWonPct,
                $dto->breakPointsPlayed,
                $dto->breakPointsSaved,
                $dto->breakPointsSavedPct
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(TennisServiceStatsDto $dto): int
    {
        $sql = "UPDATE `tennis_service_stats` SET `services_played` = ?, `matches_played` = ?, `aces` = ?, `first_services_good` = ?, `first_services_good_pct` = ?, `first_service_points_won` = ?, `first_service_points_won_pct` = ?, `second_service_points_won` = ?, `second_service_points_won_pct` = ?, `service_games_played` = ?, `service_games_won` = ?, `service_games_won_pct` = ?, `break_points_played` = ?, `break_points_saved` = ?, `break_points_saved_pct` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->servicesPlayed,
                $dto->matchesPlayed,
                $dto->aces,
                $dto->firstServicesGood,
                $dto->firstServicesGoodPct,
                $dto->firstServicePointsWon,
                $dto->firstServicePointsWonPct,
                $dto->secondServicePointsWon,
                $dto->secondServicePointsWonPct,
                $dto->serviceGamesPlayed,
                $dto->serviceGamesWon,
                $dto->serviceGamesWonPct,
                $dto->breakPointsPlayed,
                $dto->breakPointsSaved,
                $dto->breakPointsSavedPct,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?TennisServiceStatsDto
    {
        $sql = "SELECT `id`, `services_played`, `matches_played`, `aces`, `first_services_good`, `first_services_good_pct`, `first_service_points_won`, `first_service_points_won_pct`, `second_service_points_won`, `second_service_points_won_pct`, `service_games_played`, `service_games_won`, `service_games_won_pct`, `break_points_played`, `break_points_saved`, `break_points_saved_pct`
                FROM `tennis_service_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new TennisServiceStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `services_played`, `matches_played`, `aces`, `first_services_good`, `first_services_good_pct`, `first_service_points_won`, `first_service_points_won_pct`, `second_service_points_won`, `second_service_points_won_pct`, `service_games_played`, `service_games_won`, `service_games_won_pct`, `break_points_played`, `break_points_saved`, `break_points_saved_pct`
                FROM `tennis_service_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new TennisServiceStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `tennis_service_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}