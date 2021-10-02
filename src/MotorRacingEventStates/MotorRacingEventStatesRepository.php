<?php

declare(strict_types=1);

namespace Sports\MotorRacingEventStates;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class MotorRacingEventStatesRepository implements IMotorRacingEventStatesRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(MotorRacingEventStatesDto $dto): int
    {
        $sql = "INSERT INTO `motor_racing_event_states` (`event_id`, `current_state`, `sequence_number`, `lap`, `laps_remaining`, `time_elapsed`, `flag_state`, `context`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->eventId,
                $dto->currentState,
                $dto->sequenceNumber,
                $dto->lap,
                $dto->lapsRemaining,
                $dto->timeElapsed,
                $dto->flagState,
                $dto->context
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(MotorRacingEventStatesDto $dto): int
    {
        $sql = "UPDATE `motor_racing_event_states` SET `event_id` = ?, `current_state` = ?, `sequence_number` = ?, `lap` = ?, `laps_remaining` = ?, `time_elapsed` = ?, `flag_state` = ?, `context` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->eventId,
                $dto->currentState,
                $dto->sequenceNumber,
                $dto->lap,
                $dto->lapsRemaining,
                $dto->timeElapsed,
                $dto->flagState,
                $dto->context,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?MotorRacingEventStatesDto
    {
        $sql = "SELECT `id`, `event_id`, `current_state`, `sequence_number`, `lap`, `laps_remaining`, `time_elapsed`, `flag_state`, `context`
                FROM `motor_racing_event_states` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new MotorRacingEventStatesDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `event_id`, `current_state`, `sequence_number`, `lap`, `laps_remaining`, `time_elapsed`, `flag_state`, `context`
                FROM `motor_racing_event_states`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new MotorRacingEventStatesDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `motor_racing_event_states` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}