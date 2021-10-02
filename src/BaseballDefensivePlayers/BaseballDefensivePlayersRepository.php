<?php

declare(strict_types=1);

namespace Sports\BaseballDefensivePlayers;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class BaseballDefensivePlayersRepository implements IBaseballDefensivePlayersRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(BaseballDefensivePlayersDto $dto): int
    {
        $sql = "INSERT INTO `baseball_defensive_players` (`baseball_defensive_group_id`, `player_id`, `position_id`)
                VALUES (?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->baseballDefensiveGroupId,
                $dto->playerId,
                $dto->positionId
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(BaseballDefensivePlayersDto $dto): int
    {
        $sql = "UPDATE `baseball_defensive_players` SET `baseball_defensive_group_id` = ?, `player_id` = ?, `position_id` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->baseballDefensiveGroupId,
                $dto->playerId,
                $dto->positionId,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?BaseballDefensivePlayersDto
    {
        $sql = "SELECT `id`, `baseball_defensive_group_id`, `player_id`, `position_id`
                FROM `baseball_defensive_players` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new BaseballDefensivePlayersDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `baseball_defensive_group_id`, `player_id`, `position_id`
                FROM `baseball_defensive_players`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new BaseballDefensivePlayersDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `baseball_defensive_players` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}