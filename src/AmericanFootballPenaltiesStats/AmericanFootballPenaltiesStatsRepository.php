<?php

declare(strict_types=1);

namespace Sports\AmericanFootballPenaltiesStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class AmericanFootballPenaltiesStatsRepository implements IAmericanFootballPenaltiesStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(AmericanFootballPenaltiesStatsDto $dto): int
    {
        $sql = "INSERT INTO `american_football_penalties_stats` (`penalties_total`, `penalty_yards`, `penalty_first_downs`)
                VALUES (?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->penaltiesTotal,
                $dto->penaltyYards,
                $dto->penaltyFirstDowns
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(AmericanFootballPenaltiesStatsDto $dto): int
    {
        $sql = "UPDATE `american_football_penalties_stats` SET `penalties_total` = ?, `penalty_yards` = ?, `penalty_first_downs` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->penaltiesTotal,
                $dto->penaltyYards,
                $dto->penaltyFirstDowns,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?AmericanFootballPenaltiesStatsDto
    {
        $sql = "SELECT `id`, `penalties_total`, `penalty_yards`, `penalty_first_downs`
                FROM `american_football_penalties_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new AmericanFootballPenaltiesStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `penalties_total`, `penalty_yards`, `penalty_first_downs`
                FROM `american_football_penalties_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new AmericanFootballPenaltiesStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `american_football_penalties_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}