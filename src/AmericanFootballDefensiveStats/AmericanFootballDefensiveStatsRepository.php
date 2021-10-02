<?php

declare(strict_types=1);

namespace Sports\AmericanFootballDefensiveStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class AmericanFootballDefensiveStatsRepository implements IAmericanFootballDefensiveStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(AmericanFootballDefensiveStatsDto $dto): int
    {
        $sql = "INSERT INTO `american_football_defensive_stats` (`tackles_total`, `tackles_solo`, `tackles_assists`, `interceptions_total`, `interceptions_yards`, `interceptions_average`, `interceptions_longest`, `interceptions_touchdown`, `quarterback_hurries`, `sacks_total`, `sacks_yards`, `passes_defensed`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->tacklesTotal,
                $dto->tacklesSolo,
                $dto->tacklesAssists,
                $dto->interceptionsTotal,
                $dto->interceptionsYards,
                $dto->interceptionsAverage,
                $dto->interceptionsLongest,
                $dto->interceptionsTouchdown,
                $dto->quarterbackHurries,
                $dto->sacksTotal,
                $dto->sacksYards,
                $dto->passesDefensed
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(AmericanFootballDefensiveStatsDto $dto): int
    {
        $sql = "UPDATE `american_football_defensive_stats` SET `tackles_total` = ?, `tackles_solo` = ?, `tackles_assists` = ?, `interceptions_total` = ?, `interceptions_yards` = ?, `interceptions_average` = ?, `interceptions_longest` = ?, `interceptions_touchdown` = ?, `quarterback_hurries` = ?, `sacks_total` = ?, `sacks_yards` = ?, `passes_defensed` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->tacklesTotal,
                $dto->tacklesSolo,
                $dto->tacklesAssists,
                $dto->interceptionsTotal,
                $dto->interceptionsYards,
                $dto->interceptionsAverage,
                $dto->interceptionsLongest,
                $dto->interceptionsTouchdown,
                $dto->quarterbackHurries,
                $dto->sacksTotal,
                $dto->sacksYards,
                $dto->passesDefensed,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?AmericanFootballDefensiveStatsDto
    {
        $sql = "SELECT `id`, `tackles_total`, `tackles_solo`, `tackles_assists`, `interceptions_total`, `interceptions_yards`, `interceptions_average`, `interceptions_longest`, `interceptions_touchdown`, `quarterback_hurries`, `sacks_total`, `sacks_yards`, `passes_defensed`
                FROM `american_football_defensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new AmericanFootballDefensiveStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `tackles_total`, `tackles_solo`, `tackles_assists`, `interceptions_total`, `interceptions_yards`, `interceptions_average`, `interceptions_longest`, `interceptions_touchdown`, `quarterback_hurries`, `sacks_total`, `sacks_yards`, `passes_defensed`
                FROM `american_football_defensive_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new AmericanFootballDefensiveStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `american_football_defensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}