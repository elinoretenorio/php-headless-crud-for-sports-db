<?php

declare(strict_types=1);

namespace Sports\IceHockeyPlayerStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class IceHockeyPlayerStatsRepository implements IIceHockeyPlayerStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(IceHockeyPlayerStatsDto $dto): int
    {
        $sql = "INSERT INTO `ice_hockey_player_stats` (`plus_minus`)
                VALUES (?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->plusMinus
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(IceHockeyPlayerStatsDto $dto): int
    {
        $sql = "UPDATE `ice_hockey_player_stats` SET `plus_minus` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->plusMinus,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?IceHockeyPlayerStatsDto
    {
        $sql = "SELECT `id`, `plus_minus`
                FROM `ice_hockey_player_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new IceHockeyPlayerStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `plus_minus`
                FROM `ice_hockey_player_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new IceHockeyPlayerStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `ice_hockey_player_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}