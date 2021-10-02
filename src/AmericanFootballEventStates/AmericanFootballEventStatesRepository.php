<?php

declare(strict_types=1);

namespace Sports\AmericanFootballEventStates;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class AmericanFootballEventStatesRepository implements IAmericanFootballEventStatesRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(AmericanFootballEventStatesDto $dto): int
    {
        $sql = "INSERT INTO `american_football_event_states` (`event_id`, `current_state`, `sequence_number`, `period_value`, `period_time_elapsed`, `period_time_remaining`, `clock_state`, `down`, `team_in_possession_id`, `distance_for_1st_down`, `field_side`, `field_line`, `context`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->eventId,
                $dto->currentState,
                $dto->sequenceNumber,
                $dto->periodValue,
                $dto->periodTimeElapsed,
                $dto->periodTimeRemaining,
                $dto->clockState,
                $dto->down,
                $dto->teamInPossessionId,
                $dto->distanceFor1stDown,
                $dto->fieldSide,
                $dto->fieldLine,
                $dto->context
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(AmericanFootballEventStatesDto $dto): int
    {
        $sql = "UPDATE `american_football_event_states` SET `event_id` = ?, `current_state` = ?, `sequence_number` = ?, `period_value` = ?, `period_time_elapsed` = ?, `period_time_remaining` = ?, `clock_state` = ?, `down` = ?, `team_in_possession_id` = ?, `distance_for_1st_down` = ?, `field_side` = ?, `field_line` = ?, `context` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->eventId,
                $dto->currentState,
                $dto->sequenceNumber,
                $dto->periodValue,
                $dto->periodTimeElapsed,
                $dto->periodTimeRemaining,
                $dto->clockState,
                $dto->down,
                $dto->teamInPossessionId,
                $dto->distanceFor1stDown,
                $dto->fieldSide,
                $dto->fieldLine,
                $dto->context,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?AmericanFootballEventStatesDto
    {
        $sql = "SELECT `id`, `event_id`, `current_state`, `sequence_number`, `period_value`, `period_time_elapsed`, `period_time_remaining`, `clock_state`, `down`, `team_in_possession_id`, `distance_for_1st_down`, `field_side`, `field_line`, `context`
                FROM `american_football_event_states` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new AmericanFootballEventStatesDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `event_id`, `current_state`, `sequence_number`, `period_value`, `period_time_elapsed`, `period_time_remaining`, `clock_state`, `down`, `team_in_possession_id`, `distance_for_1st_down`, `field_side`, `field_line`, `context`
                FROM `american_football_event_states`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new AmericanFootballEventStatesDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `american_football_event_states` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}