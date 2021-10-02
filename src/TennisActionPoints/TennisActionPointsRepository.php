<?php

declare(strict_types=1);

namespace Sports\TennisActionPoints;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class TennisActionPointsRepository implements ITennisActionPointsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(TennisActionPointsDto $dto): int
    {
        $sql = "INSERT INTO `tennis_action_points` (`sub_period_id`, `sequence_number`, `win_type`)
                VALUES (?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->subPeriodId,
                $dto->sequenceNumber,
                $dto->winType
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(TennisActionPointsDto $dto): int
    {
        $sql = "UPDATE `tennis_action_points` SET `sub_period_id` = ?, `sequence_number` = ?, `win_type` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->subPeriodId,
                $dto->sequenceNumber,
                $dto->winType,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?TennisActionPointsDto
    {
        $sql = "SELECT `id`, `sub_period_id`, `sequence_number`, `win_type`
                FROM `tennis_action_points` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new TennisActionPointsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `sub_period_id`, `sequence_number`, `win_type`
                FROM `tennis_action_points`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new TennisActionPointsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `tennis_action_points` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}