<?php

declare(strict_types=1);

namespace Sports\AmericanFootballOffensiveStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class AmericanFootballOffensiveStatsRepository implements IAmericanFootballOffensiveStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(AmericanFootballOffensiveStatsDto $dto): int
    {
        $sql = "INSERT INTO `american_football_offensive_stats` (`offensive_plays_yards`, `offensive_plays_number`, `offensive_plays_average_yards_per`, `possession_duration`, `turnovers_giveaway`)
                VALUES (?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->offensivePlaysYards,
                $dto->offensivePlaysNumber,
                $dto->offensivePlaysAverageYardsPer,
                $dto->possessionDuration,
                $dto->turnoversGiveaway
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(AmericanFootballOffensiveStatsDto $dto): int
    {
        $sql = "UPDATE `american_football_offensive_stats` SET `offensive_plays_yards` = ?, `offensive_plays_number` = ?, `offensive_plays_average_yards_per` = ?, `possession_duration` = ?, `turnovers_giveaway` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->offensivePlaysYards,
                $dto->offensivePlaysNumber,
                $dto->offensivePlaysAverageYardsPer,
                $dto->possessionDuration,
                $dto->turnoversGiveaway,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?AmericanFootballOffensiveStatsDto
    {
        $sql = "SELECT `id`, `offensive_plays_yards`, `offensive_plays_number`, `offensive_plays_average_yards_per`, `possession_duration`, `turnovers_giveaway`
                FROM `american_football_offensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new AmericanFootballOffensiveStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `offensive_plays_yards`, `offensive_plays_number`, `offensive_plays_average_yards_per`, `possession_duration`, `turnovers_giveaway`
                FROM `american_football_offensive_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new AmericanFootballOffensiveStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `american_football_offensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}