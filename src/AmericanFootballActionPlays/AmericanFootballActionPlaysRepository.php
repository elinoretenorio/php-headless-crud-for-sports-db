<?php

declare(strict_types=1);

namespace Sports\AmericanFootballActionPlays;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class AmericanFootballActionPlaysRepository implements IAmericanFootballActionPlaysRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(AmericanFootballActionPlaysDto $dto): int
    {
        $sql = "INSERT INTO `american_football_action_plays` (`american_football_event_state_id`, `play_type`, `score_attempt_type`, `drive_result`, `points`, `comment`)
                VALUES (?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->americanFootballEventStateId,
                $dto->playType,
                $dto->scoreAttemptType,
                $dto->driveResult,
                $dto->points,
                $dto->comment
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(AmericanFootballActionPlaysDto $dto): int
    {
        $sql = "UPDATE `american_football_action_plays` SET `american_football_event_state_id` = ?, `play_type` = ?, `score_attempt_type` = ?, `drive_result` = ?, `points` = ?, `comment` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->americanFootballEventStateId,
                $dto->playType,
                $dto->scoreAttemptType,
                $dto->driveResult,
                $dto->points,
                $dto->comment,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?AmericanFootballActionPlaysDto
    {
        $sql = "SELECT `id`, `american_football_event_state_id`, `play_type`, `score_attempt_type`, `drive_result`, `points`, `comment`
                FROM `american_football_action_plays` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new AmericanFootballActionPlaysDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `american_football_event_state_id`, `play_type`, `score_attempt_type`, `drive_result`, `points`, `comment`
                FROM `american_football_action_plays`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new AmericanFootballActionPlaysDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `american_football_action_plays` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}