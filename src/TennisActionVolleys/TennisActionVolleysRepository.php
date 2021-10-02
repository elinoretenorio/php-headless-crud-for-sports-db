<?php

declare(strict_types=1);

namespace Sports\TennisActionVolleys;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class TennisActionVolleysRepository implements ITennisActionVolleysRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(TennisActionVolleysDto $dto): int
    {
        $sql = "INSERT INTO `tennis_action_volleys` (`sequence_number`, `tennis_action_points_id`, `landing_location`, `swing_type`, `result`, `spin_type`, `trajectory_details`)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->sequenceNumber,
                $dto->tennisActionPointsId,
                $dto->landingLocation,
                $dto->swingType,
                $dto->result,
                $dto->spinType,
                $dto->trajectoryDetails
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(TennisActionVolleysDto $dto): int
    {
        $sql = "UPDATE `tennis_action_volleys` SET `sequence_number` = ?, `tennis_action_points_id` = ?, `landing_location` = ?, `swing_type` = ?, `result` = ?, `spin_type` = ?, `trajectory_details` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->sequenceNumber,
                $dto->tennisActionPointsId,
                $dto->landingLocation,
                $dto->swingType,
                $dto->result,
                $dto->spinType,
                $dto->trajectoryDetails,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?TennisActionVolleysDto
    {
        $sql = "SELECT `id`, `sequence_number`, `tennis_action_points_id`, `landing_location`, `swing_type`, `result`, `spin_type`, `trajectory_details`
                FROM `tennis_action_volleys` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new TennisActionVolleysDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `sequence_number`, `tennis_action_points_id`, `landing_location`, `swing_type`, `result`, `spin_type`, `trajectory_details`
                FROM `tennis_action_volleys`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new TennisActionVolleysDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `tennis_action_volleys` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}