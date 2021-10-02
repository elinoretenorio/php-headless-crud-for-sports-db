<?php

declare(strict_types=1);

namespace Sports\MotorRacingRaceStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class MotorRacingRaceStatsRepository implements IMotorRacingRaceStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(MotorRacingRaceStatsDto $dto): int
    {
        $sql = "INSERT INTO `motor_racing_race_stats` (`time_behind_leader`, `laps_behind_leader`, `time_ahead_follower`, `laps_ahead_follower`, `time`, `points`, `points_rookie`, `bonus`, `laps_completed`, `laps_leading_total`, `distance_leading`, `distance_completed`, `distance_units`, `speed_average`, `speed_units`, `status`, `finishes_top_5`, `finishes_top_10`, `starts`, `finishes`, `non_finishes`, `wins`, `races_leading`, `money`, `money_units`, `leads_total`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->timeBehindLeader,
                $dto->lapsBehindLeader,
                $dto->timeAheadFollower,
                $dto->lapsAheadFollower,
                $dto->time,
                $dto->points,
                $dto->pointsRookie,
                $dto->bonus,
                $dto->lapsCompleted,
                $dto->lapsLeadingTotal,
                $dto->distanceLeading,
                $dto->distanceCompleted,
                $dto->distanceUnits,
                $dto->speedAverage,
                $dto->speedUnits,
                $dto->status,
                $dto->finishesTop5,
                $dto->finishesTop10,
                $dto->starts,
                $dto->finishes,
                $dto->nonFinishes,
                $dto->wins,
                $dto->racesLeading,
                $dto->money,
                $dto->moneyUnits,
                $dto->leadsTotal
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(MotorRacingRaceStatsDto $dto): int
    {
        $sql = "UPDATE `motor_racing_race_stats` SET `time_behind_leader` = ?, `laps_behind_leader` = ?, `time_ahead_follower` = ?, `laps_ahead_follower` = ?, `time` = ?, `points` = ?, `points_rookie` = ?, `bonus` = ?, `laps_completed` = ?, `laps_leading_total` = ?, `distance_leading` = ?, `distance_completed` = ?, `distance_units` = ?, `speed_average` = ?, `speed_units` = ?, `status` = ?, `finishes_top_5` = ?, `finishes_top_10` = ?, `starts` = ?, `finishes` = ?, `non_finishes` = ?, `wins` = ?, `races_leading` = ?, `money` = ?, `money_units` = ?, `leads_total` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->timeBehindLeader,
                $dto->lapsBehindLeader,
                $dto->timeAheadFollower,
                $dto->lapsAheadFollower,
                $dto->time,
                $dto->points,
                $dto->pointsRookie,
                $dto->bonus,
                $dto->lapsCompleted,
                $dto->lapsLeadingTotal,
                $dto->distanceLeading,
                $dto->distanceCompleted,
                $dto->distanceUnits,
                $dto->speedAverage,
                $dto->speedUnits,
                $dto->status,
                $dto->finishesTop5,
                $dto->finishesTop10,
                $dto->starts,
                $dto->finishes,
                $dto->nonFinishes,
                $dto->wins,
                $dto->racesLeading,
                $dto->money,
                $dto->moneyUnits,
                $dto->leadsTotal,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?MotorRacingRaceStatsDto
    {
        $sql = "SELECT `id`, `time_behind_leader`, `laps_behind_leader`, `time_ahead_follower`, `laps_ahead_follower`, `time`, `points`, `points_rookie`, `bonus`, `laps_completed`, `laps_leading_total`, `distance_leading`, `distance_completed`, `distance_units`, `speed_average`, `speed_units`, `status`, `finishes_top_5`, `finishes_top_10`, `starts`, `finishes`, `non_finishes`, `wins`, `races_leading`, `money`, `money_units`, `leads_total`
                FROM `motor_racing_race_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new MotorRacingRaceStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `time_behind_leader`, `laps_behind_leader`, `time_ahead_follower`, `laps_ahead_follower`, `time`, `points`, `points_rookie`, `bonus`, `laps_completed`, `laps_leading_total`, `distance_leading`, `distance_completed`, `distance_units`, `speed_average`, `speed_units`, `status`, `finishes_top_5`, `finishes_top_10`, `starts`, `finishes`, `non_finishes`, `wins`, `races_leading`, `money`, `money_units`, `leads_total`
                FROM `motor_racing_race_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new MotorRacingRaceStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `motor_racing_race_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}