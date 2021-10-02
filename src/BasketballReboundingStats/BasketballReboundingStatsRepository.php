<?php

declare(strict_types=1);

namespace Sports\BasketballReboundingStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class BasketballReboundingStatsRepository implements IBasketballReboundingStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(BasketballReboundingStatsDto $dto): int
    {
        $sql = "INSERT INTO `basketball_rebounding_stats` (`rebounds_total`, `rebounds_per_game`, `rebounds_defensive`, `rebounds_offensive`, `team_rebounds_total`, `team_rebounds_per_game`, `team_rebounds_defensive`, `team_rebounds_offensive`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->reboundsTotal,
                $dto->reboundsPerGame,
                $dto->reboundsDefensive,
                $dto->reboundsOffensive,
                $dto->teamReboundsTotal,
                $dto->teamReboundsPerGame,
                $dto->teamReboundsDefensive,
                $dto->teamReboundsOffensive
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(BasketballReboundingStatsDto $dto): int
    {
        $sql = "UPDATE `basketball_rebounding_stats` SET `rebounds_total` = ?, `rebounds_per_game` = ?, `rebounds_defensive` = ?, `rebounds_offensive` = ?, `team_rebounds_total` = ?, `team_rebounds_per_game` = ?, `team_rebounds_defensive` = ?, `team_rebounds_offensive` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->reboundsTotal,
                $dto->reboundsPerGame,
                $dto->reboundsDefensive,
                $dto->reboundsOffensive,
                $dto->teamReboundsTotal,
                $dto->teamReboundsPerGame,
                $dto->teamReboundsDefensive,
                $dto->teamReboundsOffensive,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?BasketballReboundingStatsDto
    {
        $sql = "SELECT `id`, `rebounds_total`, `rebounds_per_game`, `rebounds_defensive`, `rebounds_offensive`, `team_rebounds_total`, `team_rebounds_per_game`, `team_rebounds_defensive`, `team_rebounds_offensive`
                FROM `basketball_rebounding_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new BasketballReboundingStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `rebounds_total`, `rebounds_per_game`, `rebounds_defensive`, `rebounds_offensive`, `team_rebounds_total`, `team_rebounds_per_game`, `team_rebounds_defensive`, `team_rebounds_offensive`
                FROM `basketball_rebounding_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new BasketballReboundingStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `basketball_rebounding_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}