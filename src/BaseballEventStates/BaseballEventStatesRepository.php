<?php

declare(strict_types=1);

namespace Sports\BaseballEventStates;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class BaseballEventStatesRepository implements IBaseballEventStatesRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(BaseballEventStatesDto $dto): int
    {
        $sql = "INSERT INTO `baseball_event_states` (`event_id`, `current_state`, `sequence_number`, `at_bat_number`, `inning_value`, `inning_half`, `outs`, `balls`, `strikes`, `runner_on_first_id`, `runner_on_second_id`, `runner_on_third_id`, `runner_on_first`, `runner_on_second`, `runner_on_third`, `runs_this_inning_half`, `pitcher_id`, `batter_id`, `batter_side`, `context`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->eventId,
                $dto->currentState,
                $dto->sequenceNumber,
                $dto->atBatNumber,
                $dto->inningValue,
                $dto->inningHalf,
                $dto->outs,
                $dto->balls,
                $dto->strikes,
                $dto->runnerOnFirstId,
                $dto->runnerOnSecondId,
                $dto->runnerOnThirdId,
                $dto->runnerOnFirst,
                $dto->runnerOnSecond,
                $dto->runnerOnThird,
                $dto->runsThisInningHalf,
                $dto->pitcherId,
                $dto->batterId,
                $dto->batterSide,
                $dto->context
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(BaseballEventStatesDto $dto): int
    {
        $sql = "UPDATE `baseball_event_states` SET `event_id` = ?, `current_state` = ?, `sequence_number` = ?, `at_bat_number` = ?, `inning_value` = ?, `inning_half` = ?, `outs` = ?, `balls` = ?, `strikes` = ?, `runner_on_first_id` = ?, `runner_on_second_id` = ?, `runner_on_third_id` = ?, `runner_on_first` = ?, `runner_on_second` = ?, `runner_on_third` = ?, `runs_this_inning_half` = ?, `pitcher_id` = ?, `batter_id` = ?, `batter_side` = ?, `context` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->eventId,
                $dto->currentState,
                $dto->sequenceNumber,
                $dto->atBatNumber,
                $dto->inningValue,
                $dto->inningHalf,
                $dto->outs,
                $dto->balls,
                $dto->strikes,
                $dto->runnerOnFirstId,
                $dto->runnerOnSecondId,
                $dto->runnerOnThirdId,
                $dto->runnerOnFirst,
                $dto->runnerOnSecond,
                $dto->runnerOnThird,
                $dto->runsThisInningHalf,
                $dto->pitcherId,
                $dto->batterId,
                $dto->batterSide,
                $dto->context,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?BaseballEventStatesDto
    {
        $sql = "SELECT `id`, `event_id`, `current_state`, `sequence_number`, `at_bat_number`, `inning_value`, `inning_half`, `outs`, `balls`, `strikes`, `runner_on_first_id`, `runner_on_second_id`, `runner_on_third_id`, `runner_on_first`, `runner_on_second`, `runner_on_third`, `runs_this_inning_half`, `pitcher_id`, `batter_id`, `batter_side`, `context`
                FROM `baseball_event_states` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new BaseballEventStatesDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `event_id`, `current_state`, `sequence_number`, `at_bat_number`, `inning_value`, `inning_half`, `outs`, `balls`, `strikes`, `runner_on_first_id`, `runner_on_second_id`, `runner_on_third_id`, `runner_on_first`, `runner_on_second`, `runner_on_third`, `runs_this_inning_half`, `pitcher_id`, `batter_id`, `batter_side`, `context`
                FROM `baseball_event_states`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new BaseballEventStatesDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `baseball_event_states` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}