<?php

declare(strict_types=1);

namespace Sports\BaseballOffensiveStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class BaseballOffensiveStatsRepository implements IBaseballOffensiveStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(BaseballOffensiveStatsDto $dto): int
    {
        $sql = "INSERT INTO `baseball_offensive_stats` (`average`, `runs_scored`, `at_bats`, `hits`, `rbi`, `total_bases`, `slugging_percentage`, `bases_on_balls`, `strikeouts`, `left_on_base`, `left_in_scoring_position`, `singles`, `doubles`, `triples`, `home_runs`, `grand_slams`, `at_bats_per_rbi`, `plate_appearances_per_rbi`, `at_bats_per_home_run`, `plate_appearances_per_home_run`, `sac_flies`, `sac_bunts`, `grounded_into_double_play`, `moved_up`, `on_base_percentage`, `stolen_bases`, `stolen_bases_caught`, `stolen_bases_average`, `hit_by_pitch`, `defensive_interferance_reaches`, `on_base_plus_slugging`, `plate_appearances`, `hits_extra_base`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->average,
                $dto->runsScored,
                $dto->atBats,
                $dto->hits,
                $dto->rbi,
                $dto->totalBases,
                $dto->sluggingPercentage,
                $dto->basesOnBalls,
                $dto->strikeouts,
                $dto->leftOnBase,
                $dto->leftInScoringPosition,
                $dto->singles,
                $dto->doubles,
                $dto->triples,
                $dto->homeRuns,
                $dto->grandSlams,
                $dto->atBatsPerRbi,
                $dto->plateAppearancesPerRbi,
                $dto->atBatsPerHomeRun,
                $dto->plateAppearancesPerHomeRun,
                $dto->sacFlies,
                $dto->sacBunts,
                $dto->groundedIntoDoublePlay,
                $dto->movedUp,
                $dto->onBasePercentage,
                $dto->stolenBases,
                $dto->stolenBasesCaught,
                $dto->stolenBasesAverage,
                $dto->hitByPitch,
                $dto->defensiveInterferanceReaches,
                $dto->onBasePlusSlugging,
                $dto->plateAppearances,
                $dto->hitsExtraBase
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(BaseballOffensiveStatsDto $dto): int
    {
        $sql = "UPDATE `baseball_offensive_stats` SET `average` = ?, `runs_scored` = ?, `at_bats` = ?, `hits` = ?, `rbi` = ?, `total_bases` = ?, `slugging_percentage` = ?, `bases_on_balls` = ?, `strikeouts` = ?, `left_on_base` = ?, `left_in_scoring_position` = ?, `singles` = ?, `doubles` = ?, `triples` = ?, `home_runs` = ?, `grand_slams` = ?, `at_bats_per_rbi` = ?, `plate_appearances_per_rbi` = ?, `at_bats_per_home_run` = ?, `plate_appearances_per_home_run` = ?, `sac_flies` = ?, `sac_bunts` = ?, `grounded_into_double_play` = ?, `moved_up` = ?, `on_base_percentage` = ?, `stolen_bases` = ?, `stolen_bases_caught` = ?, `stolen_bases_average` = ?, `hit_by_pitch` = ?, `defensive_interferance_reaches` = ?, `on_base_plus_slugging` = ?, `plate_appearances` = ?, `hits_extra_base` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->average,
                $dto->runsScored,
                $dto->atBats,
                $dto->hits,
                $dto->rbi,
                $dto->totalBases,
                $dto->sluggingPercentage,
                $dto->basesOnBalls,
                $dto->strikeouts,
                $dto->leftOnBase,
                $dto->leftInScoringPosition,
                $dto->singles,
                $dto->doubles,
                $dto->triples,
                $dto->homeRuns,
                $dto->grandSlams,
                $dto->atBatsPerRbi,
                $dto->plateAppearancesPerRbi,
                $dto->atBatsPerHomeRun,
                $dto->plateAppearancesPerHomeRun,
                $dto->sacFlies,
                $dto->sacBunts,
                $dto->groundedIntoDoublePlay,
                $dto->movedUp,
                $dto->onBasePercentage,
                $dto->stolenBases,
                $dto->stolenBasesCaught,
                $dto->stolenBasesAverage,
                $dto->hitByPitch,
                $dto->defensiveInterferanceReaches,
                $dto->onBasePlusSlugging,
                $dto->plateAppearances,
                $dto->hitsExtraBase,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?BaseballOffensiveStatsDto
    {
        $sql = "SELECT `id`, `average`, `runs_scored`, `at_bats`, `hits`, `rbi`, `total_bases`, `slugging_percentage`, `bases_on_balls`, `strikeouts`, `left_on_base`, `left_in_scoring_position`, `singles`, `doubles`, `triples`, `home_runs`, `grand_slams`, `at_bats_per_rbi`, `plate_appearances_per_rbi`, `at_bats_per_home_run`, `plate_appearances_per_home_run`, `sac_flies`, `sac_bunts`, `grounded_into_double_play`, `moved_up`, `on_base_percentage`, `stolen_bases`, `stolen_bases_caught`, `stolen_bases_average`, `hit_by_pitch`, `defensive_interferance_reaches`, `on_base_plus_slugging`, `plate_appearances`, `hits_extra_base`
                FROM `baseball_offensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new BaseballOffensiveStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `average`, `runs_scored`, `at_bats`, `hits`, `rbi`, `total_bases`, `slugging_percentage`, `bases_on_balls`, `strikeouts`, `left_on_base`, `left_in_scoring_position`, `singles`, `doubles`, `triples`, `home_runs`, `grand_slams`, `at_bats_per_rbi`, `plate_appearances_per_rbi`, `at_bats_per_home_run`, `plate_appearances_per_home_run`, `sac_flies`, `sac_bunts`, `grounded_into_double_play`, `moved_up`, `on_base_percentage`, `stolen_bases`, `stolen_bases_caught`, `stolen_bases_average`, `hit_by_pitch`, `defensive_interferance_reaches`, `on_base_plus_slugging`, `plate_appearances`, `hits_extra_base`
                FROM `baseball_offensive_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new BaseballOffensiveStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `baseball_offensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}