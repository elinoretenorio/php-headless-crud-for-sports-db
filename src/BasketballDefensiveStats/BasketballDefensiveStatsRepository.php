<?php

declare(strict_types=1);

namespace Sports\BasketballDefensiveStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class BasketballDefensiveStatsRepository implements IBasketballDefensiveStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(BasketballDefensiveStatsDto $dto): int
    {
        $sql = "INSERT INTO `basketball_defensive_stats` (`steals_total`, `steals_per_game`, `blocks_total`, `blocks_per_game`)
                VALUES (?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->stealsTotal,
                $dto->stealsPerGame,
                $dto->blocksTotal,
                $dto->blocksPerGame
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(BasketballDefensiveStatsDto $dto): int
    {
        $sql = "UPDATE `basketball_defensive_stats` SET `steals_total` = ?, `steals_per_game` = ?, `blocks_total` = ?, `blocks_per_game` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->stealsTotal,
                $dto->stealsPerGame,
                $dto->blocksTotal,
                $dto->blocksPerGame,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?BasketballDefensiveStatsDto
    {
        $sql = "SELECT `id`, `steals_total`, `steals_per_game`, `blocks_total`, `blocks_per_game`
                FROM `basketball_defensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new BasketballDefensiveStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `steals_total`, `steals_per_game`, `blocks_total`, `blocks_per_game`
                FROM `basketball_defensive_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new BasketballDefensiveStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `basketball_defensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}