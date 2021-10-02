<?php

declare(strict_types=1);

namespace Sports\SoccerFoulStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class SoccerFoulStatsRepository implements ISoccerFoulStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(SoccerFoulStatsDto $dto): int
    {
        $sql = "INSERT INTO `soccer_foul_stats` (`fouls_suffered`, `fouls_commited`, `cautions_total`, `cautions_pending`, `caution_points_total`, `caution_points_pending`, `ejections_total`)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->foulsSuffered,
                $dto->foulsCommited,
                $dto->cautionsTotal,
                $dto->cautionsPending,
                $dto->cautionPointsTotal,
                $dto->cautionPointsPending,
                $dto->ejectionsTotal
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(SoccerFoulStatsDto $dto): int
    {
        $sql = "UPDATE `soccer_foul_stats` SET `fouls_suffered` = ?, `fouls_commited` = ?, `cautions_total` = ?, `cautions_pending` = ?, `caution_points_total` = ?, `caution_points_pending` = ?, `ejections_total` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->foulsSuffered,
                $dto->foulsCommited,
                $dto->cautionsTotal,
                $dto->cautionsPending,
                $dto->cautionPointsTotal,
                $dto->cautionPointsPending,
                $dto->ejectionsTotal,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?SoccerFoulStatsDto
    {
        $sql = "SELECT `id`, `fouls_suffered`, `fouls_commited`, `cautions_total`, `cautions_pending`, `caution_points_total`, `caution_points_pending`, `ejections_total`
                FROM `soccer_foul_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new SoccerFoulStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `fouls_suffered`, `fouls_commited`, `cautions_total`, `cautions_pending`, `caution_points_total`, `caution_points_pending`, `ejections_total`
                FROM `soccer_foul_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new SoccerFoulStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `soccer_foul_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}