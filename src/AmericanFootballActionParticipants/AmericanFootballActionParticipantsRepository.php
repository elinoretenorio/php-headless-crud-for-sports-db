<?php

declare(strict_types=1);

namespace Sports\AmericanFootballActionParticipants;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class AmericanFootballActionParticipantsRepository implements IAmericanFootballActionParticipantsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(AmericanFootballActionParticipantsDto $dto): int
    {
        $sql = "INSERT INTO `american_football_action_participants` (`american_football_action_play_id`, `person_id`, `participant_role`, `score_type`, `field_line`, `yardage`, `score_credit`, `yards_gained`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->americanFootballActionPlayId,
                $dto->personId,
                $dto->participantRole,
                $dto->scoreType,
                $dto->fieldLine,
                $dto->yardage,
                $dto->scoreCredit,
                $dto->yardsGained
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(AmericanFootballActionParticipantsDto $dto): int
    {
        $sql = "UPDATE `american_football_action_participants` SET `american_football_action_play_id` = ?, `person_id` = ?, `participant_role` = ?, `score_type` = ?, `field_line` = ?, `yardage` = ?, `score_credit` = ?, `yards_gained` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->americanFootballActionPlayId,
                $dto->personId,
                $dto->participantRole,
                $dto->scoreType,
                $dto->fieldLine,
                $dto->yardage,
                $dto->scoreCredit,
                $dto->yardsGained,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?AmericanFootballActionParticipantsDto
    {
        $sql = "SELECT `id`, `american_football_action_play_id`, `person_id`, `participant_role`, `score_type`, `field_line`, `yardage`, `score_credit`, `yards_gained`
                FROM `american_football_action_participants` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new AmericanFootballActionParticipantsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `american_football_action_play_id`, `person_id`, `participant_role`, `score_type`, `field_line`, `yardage`, `score_credit`, `yards_gained`
                FROM `american_football_action_participants`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new AmericanFootballActionParticipantsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `american_football_action_participants` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}