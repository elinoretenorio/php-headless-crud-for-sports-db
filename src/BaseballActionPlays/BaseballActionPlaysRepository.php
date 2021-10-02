<?php

declare(strict_types=1);

namespace Sports\BaseballActionPlays;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class BaseballActionPlaysRepository implements IBaseballActionPlaysRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(BaseballActionPlaysDto $dto): int
    {
        $sql = "INSERT INTO `baseball_action_plays` (`baseball_event_state_id`, `play_type`, `notation`, `notation_yaml`, `baseball_defensive_group_id`, `comment`, `runner_on_first_advance`, `runner_on_second_advance`, `runner_on_third_advance`, `outs_recorded`, `rbi`, `runs_scored`, `earned_runs_scored`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->baseballEventStateId,
                $dto->playType,
                $dto->notation,
                $dto->notationYaml,
                $dto->baseballDefensiveGroupId,
                $dto->comment,
                $dto->runnerOnFirstAdvance,
                $dto->runnerOnSecondAdvance,
                $dto->runnerOnThirdAdvance,
                $dto->outsRecorded,
                $dto->rbi,
                $dto->runsScored,
                $dto->earnedRunsScored
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(BaseballActionPlaysDto $dto): int
    {
        $sql = "UPDATE `baseball_action_plays` SET `baseball_event_state_id` = ?, `play_type` = ?, `notation` = ?, `notation_yaml` = ?, `baseball_defensive_group_id` = ?, `comment` = ?, `runner_on_first_advance` = ?, `runner_on_second_advance` = ?, `runner_on_third_advance` = ?, `outs_recorded` = ?, `rbi` = ?, `runs_scored` = ?, `earned_runs_scored` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->baseballEventStateId,
                $dto->playType,
                $dto->notation,
                $dto->notationYaml,
                $dto->baseballDefensiveGroupId,
                $dto->comment,
                $dto->runnerOnFirstAdvance,
                $dto->runnerOnSecondAdvance,
                $dto->runnerOnThirdAdvance,
                $dto->outsRecorded,
                $dto->rbi,
                $dto->runsScored,
                $dto->earnedRunsScored,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?BaseballActionPlaysDto
    {
        $sql = "SELECT `id`, `baseball_event_state_id`, `play_type`, `notation`, `notation_yaml`, `baseball_defensive_group_id`, `comment`, `runner_on_first_advance`, `runner_on_second_advance`, `runner_on_third_advance`, `outs_recorded`, `rbi`, `runs_scored`, `earned_runs_scored`
                FROM `baseball_action_plays` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new BaseballActionPlaysDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `baseball_event_state_id`, `play_type`, `notation`, `notation_yaml`, `baseball_defensive_group_id`, `comment`, `runner_on_first_advance`, `runner_on_second_advance`, `runner_on_third_advance`, `outs_recorded`, `rbi`, `runs_scored`, `earned_runs_scored`
                FROM `baseball_action_plays`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new BaseballActionPlaysDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `baseball_action_plays` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}