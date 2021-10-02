<?php

declare(strict_types=1);

namespace Sports\AmericanFootballRushingStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class AmericanFootballRushingStatsRepository implements IAmericanFootballRushingStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(AmericanFootballRushingStatsDto $dto): int
    {
        $sql = "INSERT INTO `american_football_rushing_stats` (`rushes_attempts`, `rushes_yards`, `rushes_touchdowns`, `rushing_average_yards_per`, `rushes_first_down`, `rushes_longest`)
                VALUES (?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->rushesAttempts,
                $dto->rushesYards,
                $dto->rushesTouchdowns,
                $dto->rushingAverageYardsPer,
                $dto->rushesFirstDown,
                $dto->rushesLongest
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(AmericanFootballRushingStatsDto $dto): int
    {
        $sql = "UPDATE `american_football_rushing_stats` SET `rushes_attempts` = ?, `rushes_yards` = ?, `rushes_touchdowns` = ?, `rushing_average_yards_per` = ?, `rushes_first_down` = ?, `rushes_longest` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->rushesAttempts,
                $dto->rushesYards,
                $dto->rushesTouchdowns,
                $dto->rushingAverageYardsPer,
                $dto->rushesFirstDown,
                $dto->rushesLongest,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?AmericanFootballRushingStatsDto
    {
        $sql = "SELECT `id`, `rushes_attempts`, `rushes_yards`, `rushes_touchdowns`, `rushing_average_yards_per`, `rushes_first_down`, `rushes_longest`
                FROM `american_football_rushing_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new AmericanFootballRushingStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `rushes_attempts`, `rushes_yards`, `rushes_touchdowns`, `rushing_average_yards_per`, `rushes_first_down`, `rushes_longest`
                FROM `american_football_rushing_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new AmericanFootballRushingStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `american_football_rushing_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}