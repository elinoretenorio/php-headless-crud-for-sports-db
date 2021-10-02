<?php

declare(strict_types=1);

namespace Sports\AmericanFootballSpecialTeamsStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class AmericanFootballSpecialTeamsStatsRepository implements IAmericanFootballSpecialTeamsStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(AmericanFootballSpecialTeamsStatsDto $dto): int
    {
        $sql = "INSERT INTO `american_football_special_teams_stats` (`returns_punt_total`, `returns_punt_yards`, `returns_punt_average`, `returns_punt_longest`, `returns_punt_touchdown`, `returns_kickoff_total`, `returns_kickoff_yards`, `returns_kickoff_average`, `returns_kickoff_longest`, `returns_kickoff_touchdown`, `returns_total`, `returns_yards`, `punts_total`, `punts_yards_gross`, `punts_yards_net`, `punts_longest`, `punts_inside_20`, `punts_inside_20_percentage`, `punts_average`, `punts_blocked`, `touchbacks_total`, `touchbacks_total_percentage`, `touchbacks_kickoffs`, `touchbacks_kickoffs_percentage`, `touchbacks_punts`, `touchbacks_punts_percentage`, `touchbacks_interceptions`, `touchbacks_interceptions_percentage`, `fair_catches`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->returnsPuntTotal,
                $dto->returnsPuntYards,
                $dto->returnsPuntAverage,
                $dto->returnsPuntLongest,
                $dto->returnsPuntTouchdown,
                $dto->returnsKickoffTotal,
                $dto->returnsKickoffYards,
                $dto->returnsKickoffAverage,
                $dto->returnsKickoffLongest,
                $dto->returnsKickoffTouchdown,
                $dto->returnsTotal,
                $dto->returnsYards,
                $dto->puntsTotal,
                $dto->puntsYardsGross,
                $dto->puntsYardsNet,
                $dto->puntsLongest,
                $dto->puntsInside20,
                $dto->puntsInside20Percentage,
                $dto->puntsAverage,
                $dto->puntsBlocked,
                $dto->touchbacksTotal,
                $dto->touchbacksTotalPercentage,
                $dto->touchbacksKickoffs,
                $dto->touchbacksKickoffsPercentage,
                $dto->touchbacksPunts,
                $dto->touchbacksPuntsPercentage,
                $dto->touchbacksInterceptions,
                $dto->touchbacksInterceptionsPercentage,
                $dto->fairCatches
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(AmericanFootballSpecialTeamsStatsDto $dto): int
    {
        $sql = "UPDATE `american_football_special_teams_stats` SET `returns_punt_total` = ?, `returns_punt_yards` = ?, `returns_punt_average` = ?, `returns_punt_longest` = ?, `returns_punt_touchdown` = ?, `returns_kickoff_total` = ?, `returns_kickoff_yards` = ?, `returns_kickoff_average` = ?, `returns_kickoff_longest` = ?, `returns_kickoff_touchdown` = ?, `returns_total` = ?, `returns_yards` = ?, `punts_total` = ?, `punts_yards_gross` = ?, `punts_yards_net` = ?, `punts_longest` = ?, `punts_inside_20` = ?, `punts_inside_20_percentage` = ?, `punts_average` = ?, `punts_blocked` = ?, `touchbacks_total` = ?, `touchbacks_total_percentage` = ?, `touchbacks_kickoffs` = ?, `touchbacks_kickoffs_percentage` = ?, `touchbacks_punts` = ?, `touchbacks_punts_percentage` = ?, `touchbacks_interceptions` = ?, `touchbacks_interceptions_percentage` = ?, `fair_catches` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->returnsPuntTotal,
                $dto->returnsPuntYards,
                $dto->returnsPuntAverage,
                $dto->returnsPuntLongest,
                $dto->returnsPuntTouchdown,
                $dto->returnsKickoffTotal,
                $dto->returnsKickoffYards,
                $dto->returnsKickoffAverage,
                $dto->returnsKickoffLongest,
                $dto->returnsKickoffTouchdown,
                $dto->returnsTotal,
                $dto->returnsYards,
                $dto->puntsTotal,
                $dto->puntsYardsGross,
                $dto->puntsYardsNet,
                $dto->puntsLongest,
                $dto->puntsInside20,
                $dto->puntsInside20Percentage,
                $dto->puntsAverage,
                $dto->puntsBlocked,
                $dto->touchbacksTotal,
                $dto->touchbacksTotalPercentage,
                $dto->touchbacksKickoffs,
                $dto->touchbacksKickoffsPercentage,
                $dto->touchbacksPunts,
                $dto->touchbacksPuntsPercentage,
                $dto->touchbacksInterceptions,
                $dto->touchbacksInterceptionsPercentage,
                $dto->fairCatches,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?AmericanFootballSpecialTeamsStatsDto
    {
        $sql = "SELECT `id`, `returns_punt_total`, `returns_punt_yards`, `returns_punt_average`, `returns_punt_longest`, `returns_punt_touchdown`, `returns_kickoff_total`, `returns_kickoff_yards`, `returns_kickoff_average`, `returns_kickoff_longest`, `returns_kickoff_touchdown`, `returns_total`, `returns_yards`, `punts_total`, `punts_yards_gross`, `punts_yards_net`, `punts_longest`, `punts_inside_20`, `punts_inside_20_percentage`, `punts_average`, `punts_blocked`, `touchbacks_total`, `touchbacks_total_percentage`, `touchbacks_kickoffs`, `touchbacks_kickoffs_percentage`, `touchbacks_punts`, `touchbacks_punts_percentage`, `touchbacks_interceptions`, `touchbacks_interceptions_percentage`, `fair_catches`
                FROM `american_football_special_teams_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new AmericanFootballSpecialTeamsStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `returns_punt_total`, `returns_punt_yards`, `returns_punt_average`, `returns_punt_longest`, `returns_punt_touchdown`, `returns_kickoff_total`, `returns_kickoff_yards`, `returns_kickoff_average`, `returns_kickoff_longest`, `returns_kickoff_touchdown`, `returns_total`, `returns_yards`, `punts_total`, `punts_yards_gross`, `punts_yards_net`, `punts_longest`, `punts_inside_20`, `punts_inside_20_percentage`, `punts_average`, `punts_blocked`, `touchbacks_total`, `touchbacks_total_percentage`, `touchbacks_kickoffs`, `touchbacks_kickoffs_percentage`, `touchbacks_punts`, `touchbacks_punts_percentage`, `touchbacks_interceptions`, `touchbacks_interceptions_percentage`, `fair_catches`
                FROM `american_football_special_teams_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new AmericanFootballSpecialTeamsStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `american_football_special_teams_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}