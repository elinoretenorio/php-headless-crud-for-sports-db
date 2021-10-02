<?php

declare(strict_types=1);

namespace Sports\IceHockeyActionPlays;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class IceHockeyActionPlaysRepository implements IIceHockeyActionPlaysRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(IceHockeyActionPlaysDto $dto): int
    {
        $sql = "INSERT INTO `ice_hockey_action_plays` (`ice_hockey_event_state_id`, `play_type`, `score_attempt_type`, `play_result`, `comment`)
                VALUES (?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->iceHockeyEventStateId,
                $dto->playType,
                $dto->scoreAttemptType,
                $dto->playResult,
                $dto->comment
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(IceHockeyActionPlaysDto $dto): int
    {
        $sql = "UPDATE `ice_hockey_action_plays` SET `ice_hockey_event_state_id` = ?, `play_type` = ?, `score_attempt_type` = ?, `play_result` = ?, `comment` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->iceHockeyEventStateId,
                $dto->playType,
                $dto->scoreAttemptType,
                $dto->playResult,
                $dto->comment,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?IceHockeyActionPlaysDto
    {
        $sql = "SELECT `id`, `ice_hockey_event_state_id`, `play_type`, `score_attempt_type`, `play_result`, `comment`
                FROM `ice_hockey_action_plays` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new IceHockeyActionPlaysDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `ice_hockey_event_state_id`, `play_type`, `score_attempt_type`, `play_result`, `comment`
                FROM `ice_hockey_action_plays`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new IceHockeyActionPlaysDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `ice_hockey_action_plays` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}