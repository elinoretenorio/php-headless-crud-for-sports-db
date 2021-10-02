<?php

declare(strict_types=1);

namespace Sports\MotorRacingQualifyingStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class MotorRacingQualifyingStatsRepository implements IMotorRacingQualifyingStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(MotorRacingQualifyingStatsDto $dto): int
    {
        $sql = "INSERT INTO `motor_racing_qualifying_stats` (`grid`, `pole_position`, `pole_wins`, `qualifying_speed`, `qualifying_speed_units`, `qualifying_time`, `qualifying_position`)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->grid,
                $dto->polePosition,
                $dto->poleWins,
                $dto->qualifyingSpeed,
                $dto->qualifyingSpeedUnits,
                $dto->qualifyingTime,
                $dto->qualifyingPosition
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(MotorRacingQualifyingStatsDto $dto): int
    {
        $sql = "UPDATE `motor_racing_qualifying_stats` SET `grid` = ?, `pole_position` = ?, `pole_wins` = ?, `qualifying_speed` = ?, `qualifying_speed_units` = ?, `qualifying_time` = ?, `qualifying_position` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->grid,
                $dto->polePosition,
                $dto->poleWins,
                $dto->qualifyingSpeed,
                $dto->qualifyingSpeedUnits,
                $dto->qualifyingTime,
                $dto->qualifyingPosition,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?MotorRacingQualifyingStatsDto
    {
        $sql = "SELECT `id`, `grid`, `pole_position`, `pole_wins`, `qualifying_speed`, `qualifying_speed_units`, `qualifying_time`, `qualifying_position`
                FROM `motor_racing_qualifying_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new MotorRacingQualifyingStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `grid`, `pole_position`, `pole_wins`, `qualifying_speed`, `qualifying_speed_units`, `qualifying_time`, `qualifying_position`
                FROM `motor_racing_qualifying_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new MotorRacingQualifyingStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `motor_racing_qualifying_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}