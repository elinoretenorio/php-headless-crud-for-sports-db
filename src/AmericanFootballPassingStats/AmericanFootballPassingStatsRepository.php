<?php

declare(strict_types=1);

namespace Sports\AmericanFootballPassingStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class AmericanFootballPassingStatsRepository implements IAmericanFootballPassingStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(AmericanFootballPassingStatsDto $dto): int
    {
        $sql = "INSERT INTO `american_football_passing_stats` (`passes_attempts`, `passes_completions`, `passes_percentage`, `passes_yards_gross`, `passes_yards_net`, `passes_yards_lost`, `passes_touchdowns`, `passes_touchdowns_percentage`, `passes_interceptions`, `passes_interceptions_percentage`, `passes_longest`, `passes_average_yards_per`, `passer_rating`, `receptions_total`, `receptions_yards`, `receptions_touchdowns`, `receptions_first_down`, `receptions_longest`, `receptions_average_yards_per`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->passesAttempts,
                $dto->passesCompletions,
                $dto->passesPercentage,
                $dto->passesYardsGross,
                $dto->passesYardsNet,
                $dto->passesYardsLost,
                $dto->passesTouchdowns,
                $dto->passesTouchdownsPercentage,
                $dto->passesInterceptions,
                $dto->passesInterceptionsPercentage,
                $dto->passesLongest,
                $dto->passesAverageYardsPer,
                $dto->passerRating,
                $dto->receptionsTotal,
                $dto->receptionsYards,
                $dto->receptionsTouchdowns,
                $dto->receptionsFirstDown,
                $dto->receptionsLongest,
                $dto->receptionsAverageYardsPer
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(AmericanFootballPassingStatsDto $dto): int
    {
        $sql = "UPDATE `american_football_passing_stats` SET `passes_attempts` = ?, `passes_completions` = ?, `passes_percentage` = ?, `passes_yards_gross` = ?, `passes_yards_net` = ?, `passes_yards_lost` = ?, `passes_touchdowns` = ?, `passes_touchdowns_percentage` = ?, `passes_interceptions` = ?, `passes_interceptions_percentage` = ?, `passes_longest` = ?, `passes_average_yards_per` = ?, `passer_rating` = ?, `receptions_total` = ?, `receptions_yards` = ?, `receptions_touchdowns` = ?, `receptions_first_down` = ?, `receptions_longest` = ?, `receptions_average_yards_per` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->passesAttempts,
                $dto->passesCompletions,
                $dto->passesPercentage,
                $dto->passesYardsGross,
                $dto->passesYardsNet,
                $dto->passesYardsLost,
                $dto->passesTouchdowns,
                $dto->passesTouchdownsPercentage,
                $dto->passesInterceptions,
                $dto->passesInterceptionsPercentage,
                $dto->passesLongest,
                $dto->passesAverageYardsPer,
                $dto->passerRating,
                $dto->receptionsTotal,
                $dto->receptionsYards,
                $dto->receptionsTouchdowns,
                $dto->receptionsFirstDown,
                $dto->receptionsLongest,
                $dto->receptionsAverageYardsPer,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?AmericanFootballPassingStatsDto
    {
        $sql = "SELECT `id`, `passes_attempts`, `passes_completions`, `passes_percentage`, `passes_yards_gross`, `passes_yards_net`, `passes_yards_lost`, `passes_touchdowns`, `passes_touchdowns_percentage`, `passes_interceptions`, `passes_interceptions_percentage`, `passes_longest`, `passes_average_yards_per`, `passer_rating`, `receptions_total`, `receptions_yards`, `receptions_touchdowns`, `receptions_first_down`, `receptions_longest`, `receptions_average_yards_per`
                FROM `american_football_passing_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new AmericanFootballPassingStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `passes_attempts`, `passes_completions`, `passes_percentage`, `passes_yards_gross`, `passes_yards_net`, `passes_yards_lost`, `passes_touchdowns`, `passes_touchdowns_percentage`, `passes_interceptions`, `passes_interceptions_percentage`, `passes_longest`, `passes_average_yards_per`, `passer_rating`, `receptions_total`, `receptions_yards`, `receptions_touchdowns`, `receptions_first_down`, `receptions_longest`, `receptions_average_yards_per`
                FROM `american_football_passing_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new AmericanFootballPassingStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `american_football_passing_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}