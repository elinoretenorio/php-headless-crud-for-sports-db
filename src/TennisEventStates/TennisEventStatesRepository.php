<?php

declare(strict_types=1);

namespace Sports\TennisEventStates;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class TennisEventStatesRepository implements ITennisEventStatesRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(TennisEventStatesDto $dto): int
    {
        $sql = "INSERT INTO `tennis_event_states` (`event_id`, `current_state`, `sequence_number`, `tennis_set`, `game`, `server_person_id`, `server_score`, `receiver_person_id`, `receiver_score`, `service_number`, `context`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->eventId,
                $dto->currentState,
                $dto->sequenceNumber,
                $dto->tennisSet,
                $dto->game,
                $dto->serverPersonId,
                $dto->serverScore,
                $dto->receiverPersonId,
                $dto->receiverScore,
                $dto->serviceNumber,
                $dto->context
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(TennisEventStatesDto $dto): int
    {
        $sql = "UPDATE `tennis_event_states` SET `event_id` = ?, `current_state` = ?, `sequence_number` = ?, `tennis_set` = ?, `game` = ?, `server_person_id` = ?, `server_score` = ?, `receiver_person_id` = ?, `receiver_score` = ?, `service_number` = ?, `context` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->eventId,
                $dto->currentState,
                $dto->sequenceNumber,
                $dto->tennisSet,
                $dto->game,
                $dto->serverPersonId,
                $dto->serverScore,
                $dto->receiverPersonId,
                $dto->receiverScore,
                $dto->serviceNumber,
                $dto->context,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?TennisEventStatesDto
    {
        $sql = "SELECT `id`, `event_id`, `current_state`, `sequence_number`, `tennis_set`, `game`, `server_person_id`, `server_score`, `receiver_person_id`, `receiver_score`, `service_number`, `context`
                FROM `tennis_event_states` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new TennisEventStatesDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `event_id`, `current_state`, `sequence_number`, `tennis_set`, `game`, `server_person_id`, `server_score`, `receiver_person_id`, `receiver_score`, `service_number`, `context`
                FROM `tennis_event_states`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new TennisEventStatesDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `tennis_event_states` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}