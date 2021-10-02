<?php

declare(strict_types=1);

namespace Sports\BaseballActionContactDetails;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class BaseballActionContactDetailsRepository implements IBaseballActionContactDetailsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(BaseballActionContactDetailsDto $dto): int
    {
        $sql = "INSERT INTO `baseball_action_contact_details` (`baseball_action_pitch_id`, `location`, `strength`, `velocity`, `comment`, `trajectory_coordinates`, `trajectory_formula`)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->baseballActionPitchId,
                $dto->location,
                $dto->strength,
                $dto->velocity,
                $dto->comment,
                $dto->trajectoryCoordinates,
                $dto->trajectoryFormula
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(BaseballActionContactDetailsDto $dto): int
    {
        $sql = "UPDATE `baseball_action_contact_details` SET `baseball_action_pitch_id` = ?, `location` = ?, `strength` = ?, `velocity` = ?, `comment` = ?, `trajectory_coordinates` = ?, `trajectory_formula` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->baseballActionPitchId,
                $dto->location,
                $dto->strength,
                $dto->velocity,
                $dto->comment,
                $dto->trajectoryCoordinates,
                $dto->trajectoryFormula,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?BaseballActionContactDetailsDto
    {
        $sql = "SELECT `id`, `baseball_action_pitch_id`, `location`, `strength`, `velocity`, `comment`, `trajectory_coordinates`, `trajectory_formula`
                FROM `baseball_action_contact_details` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new BaseballActionContactDetailsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `baseball_action_pitch_id`, `location`, `strength`, `velocity`, `comment`, `trajectory_coordinates`, `trajectory_formula`
                FROM `baseball_action_contact_details`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new BaseballActionContactDetailsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `baseball_action_contact_details` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}