<?php

declare(strict_types=1);

namespace Sports\AmericanFootballScoringStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class AmericanFootballScoringStatsRepository implements IAmericanFootballScoringStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(AmericanFootballScoringStatsDto $dto): int
    {
        $sql = "INSERT INTO `american_football_scoring_stats` (`touchdowns_total`, `touchdowns_passing`, `touchdowns_rushing`, `touchdowns_special_teams`, `touchdowns_defensive`, `extra_points_attempts`, `extra_points_made`, `extra_points_missed`, `extra_points_blocked`, `field_goal_attempts`, `field_goals_made`, `field_goals_missed`, `field_goals_blocked`, `safeties_against`, `two_point_conversions_attempts`, `two_point_conversions_made`, `touchbacks_total`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->touchdownsTotal,
                $dto->touchdownsPassing,
                $dto->touchdownsRushing,
                $dto->touchdownsSpecialTeams,
                $dto->touchdownsDefensive,
                $dto->extraPointsAttempts,
                $dto->extraPointsMade,
                $dto->extraPointsMissed,
                $dto->extraPointsBlocked,
                $dto->fieldGoalAttempts,
                $dto->fieldGoalsMade,
                $dto->fieldGoalsMissed,
                $dto->fieldGoalsBlocked,
                $dto->safetiesAgainst,
                $dto->twoPointConversionsAttempts,
                $dto->twoPointConversionsMade,
                $dto->touchbacksTotal
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(AmericanFootballScoringStatsDto $dto): int
    {
        $sql = "UPDATE `american_football_scoring_stats` SET `touchdowns_total` = ?, `touchdowns_passing` = ?, `touchdowns_rushing` = ?, `touchdowns_special_teams` = ?, `touchdowns_defensive` = ?, `extra_points_attempts` = ?, `extra_points_made` = ?, `extra_points_missed` = ?, `extra_points_blocked` = ?, `field_goal_attempts` = ?, `field_goals_made` = ?, `field_goals_missed` = ?, `field_goals_blocked` = ?, `safeties_against` = ?, `two_point_conversions_attempts` = ?, `two_point_conversions_made` = ?, `touchbacks_total` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->touchdownsTotal,
                $dto->touchdownsPassing,
                $dto->touchdownsRushing,
                $dto->touchdownsSpecialTeams,
                $dto->touchdownsDefensive,
                $dto->extraPointsAttempts,
                $dto->extraPointsMade,
                $dto->extraPointsMissed,
                $dto->extraPointsBlocked,
                $dto->fieldGoalAttempts,
                $dto->fieldGoalsMade,
                $dto->fieldGoalsMissed,
                $dto->fieldGoalsBlocked,
                $dto->safetiesAgainst,
                $dto->twoPointConversionsAttempts,
                $dto->twoPointConversionsMade,
                $dto->touchbacksTotal,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?AmericanFootballScoringStatsDto
    {
        $sql = "SELECT `id`, `touchdowns_total`, `touchdowns_passing`, `touchdowns_rushing`, `touchdowns_special_teams`, `touchdowns_defensive`, `extra_points_attempts`, `extra_points_made`, `extra_points_missed`, `extra_points_blocked`, `field_goal_attempts`, `field_goals_made`, `field_goals_missed`, `field_goals_blocked`, `safeties_against`, `two_point_conversions_attempts`, `two_point_conversions_made`, `touchbacks_total`
                FROM `american_football_scoring_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new AmericanFootballScoringStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `touchdowns_total`, `touchdowns_passing`, `touchdowns_rushing`, `touchdowns_special_teams`, `touchdowns_defensive`, `extra_points_attempts`, `extra_points_made`, `extra_points_missed`, `extra_points_blocked`, `field_goal_attempts`, `field_goals_made`, `field_goals_missed`, `field_goals_blocked`, `safeties_against`, `two_point_conversions_attempts`, `two_point_conversions_made`, `touchbacks_total`
                FROM `american_football_scoring_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new AmericanFootballScoringStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `american_football_scoring_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}