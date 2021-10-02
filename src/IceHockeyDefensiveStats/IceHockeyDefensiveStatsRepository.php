<?php

declare(strict_types=1);

namespace Sports\IceHockeyDefensiveStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class IceHockeyDefensiveStatsRepository implements IIceHockeyDefensiveStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(IceHockeyDefensiveStatsDto $dto): int
    {
        $sql = "INSERT INTO `ice_hockey_defensive_stats` (`shots_power_play_allowed`, `shots_penalty_shot_allowed`, `goals_power_play_allowed`, `goals_penalty_shot_allowed`, `goals_against_average`, `saves`, `save_percentage`, `penalty_killing_amount`, `penalty_killing_percentage`, `shots_blocked`, `takeaways`, `shutouts`, `minutes_penalty_killing`, `hits`, `goals_empty_net_allowed`, `goals_short_handed_allowed`, `goals_shootout_allowed`, `shots_shootout_allowed`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->shotsPowerPlayAllowed,
                $dto->shotsPenaltyShotAllowed,
                $dto->goalsPowerPlayAllowed,
                $dto->goalsPenaltyShotAllowed,
                $dto->goalsAgainstAverage,
                $dto->saves,
                $dto->savePercentage,
                $dto->penaltyKillingAmount,
                $dto->penaltyKillingPercentage,
                $dto->shotsBlocked,
                $dto->takeaways,
                $dto->shutouts,
                $dto->minutesPenaltyKilling,
                $dto->hits,
                $dto->goalsEmptyNetAllowed,
                $dto->goalsShortHandedAllowed,
                $dto->goalsShootoutAllowed,
                $dto->shotsShootoutAllowed
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(IceHockeyDefensiveStatsDto $dto): int
    {
        $sql = "UPDATE `ice_hockey_defensive_stats` SET `shots_power_play_allowed` = ?, `shots_penalty_shot_allowed` = ?, `goals_power_play_allowed` = ?, `goals_penalty_shot_allowed` = ?, `goals_against_average` = ?, `saves` = ?, `save_percentage` = ?, `penalty_killing_amount` = ?, `penalty_killing_percentage` = ?, `shots_blocked` = ?, `takeaways` = ?, `shutouts` = ?, `minutes_penalty_killing` = ?, `hits` = ?, `goals_empty_net_allowed` = ?, `goals_short_handed_allowed` = ?, `goals_shootout_allowed` = ?, `shots_shootout_allowed` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->shotsPowerPlayAllowed,
                $dto->shotsPenaltyShotAllowed,
                $dto->goalsPowerPlayAllowed,
                $dto->goalsPenaltyShotAllowed,
                $dto->goalsAgainstAverage,
                $dto->saves,
                $dto->savePercentage,
                $dto->penaltyKillingAmount,
                $dto->penaltyKillingPercentage,
                $dto->shotsBlocked,
                $dto->takeaways,
                $dto->shutouts,
                $dto->minutesPenaltyKilling,
                $dto->hits,
                $dto->goalsEmptyNetAllowed,
                $dto->goalsShortHandedAllowed,
                $dto->goalsShootoutAllowed,
                $dto->shotsShootoutAllowed,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?IceHockeyDefensiveStatsDto
    {
        $sql = "SELECT `id`, `shots_power_play_allowed`, `shots_penalty_shot_allowed`, `goals_power_play_allowed`, `goals_penalty_shot_allowed`, `goals_against_average`, `saves`, `save_percentage`, `penalty_killing_amount`, `penalty_killing_percentage`, `shots_blocked`, `takeaways`, `shutouts`, `minutes_penalty_killing`, `hits`, `goals_empty_net_allowed`, `goals_short_handed_allowed`, `goals_shootout_allowed`, `shots_shootout_allowed`
                FROM `ice_hockey_defensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new IceHockeyDefensiveStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `shots_power_play_allowed`, `shots_penalty_shot_allowed`, `goals_power_play_allowed`, `goals_penalty_shot_allowed`, `goals_against_average`, `saves`, `save_percentage`, `penalty_killing_amount`, `penalty_killing_percentage`, `shots_blocked`, `takeaways`, `shutouts`, `minutes_penalty_killing`, `hits`, `goals_empty_net_allowed`, `goals_short_handed_allowed`, `goals_shootout_allowed`, `shots_shootout_allowed`
                FROM `ice_hockey_defensive_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new IceHockeyDefensiveStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `ice_hockey_defensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}