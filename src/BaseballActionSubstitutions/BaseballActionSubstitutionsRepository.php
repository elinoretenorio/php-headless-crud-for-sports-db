<?php

declare(strict_types=1);

namespace Sports\BaseballActionSubstitutions;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class BaseballActionSubstitutionsRepository implements IBaseballActionSubstitutionsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(BaseballActionSubstitutionsDto $dto): int
    {
        $sql = "INSERT INTO `baseball_action_substitutions` (`baseball_event_state_id`, `sequence_number`, `person_type`, `person_original_id`, `person_original_position_id`, `person_original_lineup_slot`, `person_replacing_id`, `person_replacing_position_id`, `person_replacing_lineup_slot`, `substitution_reason`, `comment`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->baseballEventStateId,
                $dto->sequenceNumber,
                $dto->personType,
                $dto->personOriginalId,
                $dto->personOriginalPositionId,
                $dto->personOriginalLineupSlot,
                $dto->personReplacingId,
                $dto->personReplacingPositionId,
                $dto->personReplacingLineupSlot,
                $dto->substitutionReason,
                $dto->comment
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(BaseballActionSubstitutionsDto $dto): int
    {
        $sql = "UPDATE `baseball_action_substitutions` SET `baseball_event_state_id` = ?, `sequence_number` = ?, `person_type` = ?, `person_original_id` = ?, `person_original_position_id` = ?, `person_original_lineup_slot` = ?, `person_replacing_id` = ?, `person_replacing_position_id` = ?, `person_replacing_lineup_slot` = ?, `substitution_reason` = ?, `comment` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->baseballEventStateId,
                $dto->sequenceNumber,
                $dto->personType,
                $dto->personOriginalId,
                $dto->personOriginalPositionId,
                $dto->personOriginalLineupSlot,
                $dto->personReplacingId,
                $dto->personReplacingPositionId,
                $dto->personReplacingLineupSlot,
                $dto->substitutionReason,
                $dto->comment,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?BaseballActionSubstitutionsDto
    {
        $sql = "SELECT `id`, `baseball_event_state_id`, `sequence_number`, `person_type`, `person_original_id`, `person_original_position_id`, `person_original_lineup_slot`, `person_replacing_id`, `person_replacing_position_id`, `person_replacing_lineup_slot`, `substitution_reason`, `comment`
                FROM `baseball_action_substitutions` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new BaseballActionSubstitutionsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `baseball_event_state_id`, `sequence_number`, `person_type`, `person_original_id`, `person_original_position_id`, `person_original_lineup_slot`, `person_replacing_id`, `person_replacing_position_id`, `person_replacing_lineup_slot`, `substitution_reason`, `comment`
                FROM `baseball_action_substitutions`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new BaseballActionSubstitutionsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `baseball_action_substitutions` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}