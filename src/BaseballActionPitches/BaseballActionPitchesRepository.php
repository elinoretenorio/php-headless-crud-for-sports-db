<?php

declare(strict_types=1);

namespace Sports\BaseballActionPitches;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class BaseballActionPitchesRepository implements IBaseballActionPitchesRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(BaseballActionPitchesDto $dto): int
    {
        $sql = "INSERT INTO `baseball_action_pitches` (`baseball_action_play_id`, `sequence_number`, `baseball_defensive_group_id`, `umpire_call`, `pitch_location`, `pitch_type`, `pitch_velocity`, `comment`, `trajectory_coordinates`, `trajectory_formula`, `ball_type`, `strike_type`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->baseballActionPlayId,
                $dto->sequenceNumber,
                $dto->baseballDefensiveGroupId,
                $dto->umpireCall,
                $dto->pitchLocation,
                $dto->pitchType,
                $dto->pitchVelocity,
                $dto->comment,
                $dto->trajectoryCoordinates,
                $dto->trajectoryFormula,
                $dto->ballType,
                $dto->strikeType
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(BaseballActionPitchesDto $dto): int
    {
        $sql = "UPDATE `baseball_action_pitches` SET `baseball_action_play_id` = ?, `sequence_number` = ?, `baseball_defensive_group_id` = ?, `umpire_call` = ?, `pitch_location` = ?, `pitch_type` = ?, `pitch_velocity` = ?, `comment` = ?, `trajectory_coordinates` = ?, `trajectory_formula` = ?, `ball_type` = ?, `strike_type` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->baseballActionPlayId,
                $dto->sequenceNumber,
                $dto->baseballDefensiveGroupId,
                $dto->umpireCall,
                $dto->pitchLocation,
                $dto->pitchType,
                $dto->pitchVelocity,
                $dto->comment,
                $dto->trajectoryCoordinates,
                $dto->trajectoryFormula,
                $dto->ballType,
                $dto->strikeType,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?BaseballActionPitchesDto
    {
        $sql = "SELECT `id`, `baseball_action_play_id`, `sequence_number`, `baseball_defensive_group_id`, `umpire_call`, `pitch_location`, `pitch_type`, `pitch_velocity`, `comment`, `trajectory_coordinates`, `trajectory_formula`, `ball_type`, `strike_type`
                FROM `baseball_action_pitches` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new BaseballActionPitchesDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `baseball_action_play_id`, `sequence_number`, `baseball_defensive_group_id`, `umpire_call`, `pitch_location`, `pitch_type`, `pitch_velocity`, `comment`, `trajectory_coordinates`, `trajectory_formula`, `ball_type`, `strike_type`
                FROM `baseball_action_pitches`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new BaseballActionPitchesDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `baseball_action_pitches` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}