<?php

declare(strict_types=1);

namespace Sports\IceHockeyActionParticipants;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class IceHockeyActionParticipantsRepository implements IIceHockeyActionParticipantsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(IceHockeyActionParticipantsDto $dto): int
    {
        $sql = "INSERT INTO `ice_hockey_action_participants` (`ice_hockey_action_play_id`, `person_id`, `participant_role`, `point_credit`)
                VALUES (?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->iceHockeyActionPlayId,
                $dto->personId,
                $dto->participantRole,
                $dto->pointCredit
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(IceHockeyActionParticipantsDto $dto): int
    {
        $sql = "UPDATE `ice_hockey_action_participants` SET `ice_hockey_action_play_id` = ?, `person_id` = ?, `participant_role` = ?, `point_credit` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->iceHockeyActionPlayId,
                $dto->personId,
                $dto->participantRole,
                $dto->pointCredit,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?IceHockeyActionParticipantsDto
    {
        $sql = "SELECT `id`, `ice_hockey_action_play_id`, `person_id`, `participant_role`, `point_credit`
                FROM `ice_hockey_action_participants` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new IceHockeyActionParticipantsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `ice_hockey_action_play_id`, `person_id`, `participant_role`, `point_credit`
                FROM `ice_hockey_action_participants`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new IceHockeyActionParticipantsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `ice_hockey_action_participants` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}