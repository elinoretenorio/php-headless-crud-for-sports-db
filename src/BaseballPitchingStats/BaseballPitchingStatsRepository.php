<?php

declare(strict_types=1);

namespace Sports\BaseballPitchingStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class BaseballPitchingStatsRepository implements IBaseballPitchingStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(BaseballPitchingStatsDto $dto): int
    {
        $sql = "INSERT INTO `baseball_pitching_stats` (`runs_allowed`, `singles_allowed`, `doubles_allowed`, `triples_allowed`, `home_runs_allowed`, `innings_pitched`, `hits`, `earned_runs`, `unearned_runs`, `bases_on_balls`, `bases_on_balls_intentional`, `strikeouts`, `strikeout_to_bb_ratio`, `number_of_pitches`, `era`, `inherited_runners_scored`, `pick_offs`, `errors_hit_with_pitch`, `errors_wild_pitch`, `balks`, `wins`, `losses`, `saves`, `shutouts`, `games_complete`, `games_finished`, `winning_percentage`, `event_credit`, `save_credit`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->runsAllowed,
                $dto->singlesAllowed,
                $dto->doublesAllowed,
                $dto->triplesAllowed,
                $dto->homeRunsAllowed,
                $dto->inningsPitched,
                $dto->hits,
                $dto->earnedRuns,
                $dto->unearnedRuns,
                $dto->basesOnBalls,
                $dto->basesOnBallsIntentional,
                $dto->strikeouts,
                $dto->strikeoutToBbRatio,
                $dto->numberOfPitches,
                $dto->era,
                $dto->inheritedRunnersScored,
                $dto->pickOffs,
                $dto->errorsHitWithPitch,
                $dto->errorsWildPitch,
                $dto->balks,
                $dto->wins,
                $dto->losses,
                $dto->saves,
                $dto->shutouts,
                $dto->gamesComplete,
                $dto->gamesFinished,
                $dto->winningPercentage,
                $dto->eventCredit,
                $dto->saveCredit
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(BaseballPitchingStatsDto $dto): int
    {
        $sql = "UPDATE `baseball_pitching_stats` SET `runs_allowed` = ?, `singles_allowed` = ?, `doubles_allowed` = ?, `triples_allowed` = ?, `home_runs_allowed` = ?, `innings_pitched` = ?, `hits` = ?, `earned_runs` = ?, `unearned_runs` = ?, `bases_on_balls` = ?, `bases_on_balls_intentional` = ?, `strikeouts` = ?, `strikeout_to_bb_ratio` = ?, `number_of_pitches` = ?, `era` = ?, `inherited_runners_scored` = ?, `pick_offs` = ?, `errors_hit_with_pitch` = ?, `errors_wild_pitch` = ?, `balks` = ?, `wins` = ?, `losses` = ?, `saves` = ?, `shutouts` = ?, `games_complete` = ?, `games_finished` = ?, `winning_percentage` = ?, `event_credit` = ?, `save_credit` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->runsAllowed,
                $dto->singlesAllowed,
                $dto->doublesAllowed,
                $dto->triplesAllowed,
                $dto->homeRunsAllowed,
                $dto->inningsPitched,
                $dto->hits,
                $dto->earnedRuns,
                $dto->unearnedRuns,
                $dto->basesOnBalls,
                $dto->basesOnBallsIntentional,
                $dto->strikeouts,
                $dto->strikeoutToBbRatio,
                $dto->numberOfPitches,
                $dto->era,
                $dto->inheritedRunnersScored,
                $dto->pickOffs,
                $dto->errorsHitWithPitch,
                $dto->errorsWildPitch,
                $dto->balks,
                $dto->wins,
                $dto->losses,
                $dto->saves,
                $dto->shutouts,
                $dto->gamesComplete,
                $dto->gamesFinished,
                $dto->winningPercentage,
                $dto->eventCredit,
                $dto->saveCredit,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?BaseballPitchingStatsDto
    {
        $sql = "SELECT `id`, `runs_allowed`, `singles_allowed`, `doubles_allowed`, `triples_allowed`, `home_runs_allowed`, `innings_pitched`, `hits`, `earned_runs`, `unearned_runs`, `bases_on_balls`, `bases_on_balls_intentional`, `strikeouts`, `strikeout_to_bb_ratio`, `number_of_pitches`, `era`, `inherited_runners_scored`, `pick_offs`, `errors_hit_with_pitch`, `errors_wild_pitch`, `balks`, `wins`, `losses`, `saves`, `shutouts`, `games_complete`, `games_finished`, `winning_percentage`, `event_credit`, `save_credit`
                FROM `baseball_pitching_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new BaseballPitchingStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `runs_allowed`, `singles_allowed`, `doubles_allowed`, `triples_allowed`, `home_runs_allowed`, `innings_pitched`, `hits`, `earned_runs`, `unearned_runs`, `bases_on_balls`, `bases_on_balls_intentional`, `strikeouts`, `strikeout_to_bb_ratio`, `number_of_pitches`, `era`, `inherited_runners_scored`, `pick_offs`, `errors_hit_with_pitch`, `errors_wild_pitch`, `balks`, `wins`, `losses`, `saves`, `shutouts`, `games_complete`, `games_finished`, `winning_percentage`, `event_credit`, `save_credit`
                FROM `baseball_pitching_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new BaseballPitchingStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `baseball_pitching_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}