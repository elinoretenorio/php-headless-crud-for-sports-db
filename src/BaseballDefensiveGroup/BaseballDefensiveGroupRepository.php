<?php

declare(strict_types=1);

namespace Sports\BaseballDefensiveGroup;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class BaseballDefensiveGroupRepository implements IBaseballDefensiveGroupRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(BaseballDefensiveGroupDto $dto): int
    {
        $sql = "INSERT INTO `baseball_defensive_group` (`description`)
                VALUES (?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->description
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(BaseballDefensiveGroupDto $dto): int
    {
        $sql = "UPDATE `baseball_defensive_group` SET `description` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->description,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?BaseballDefensiveGroupDto
    {
        $sql = "SELECT `id`, `description`
                FROM `baseball_defensive_group` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new BaseballDefensiveGroupDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `description`
                FROM `baseball_defensive_group`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new BaseballDefensiveGroupDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `baseball_defensive_group` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}