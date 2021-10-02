<?php

declare(strict_types=1);

namespace Sports\AmericanFootballSacksAgainstStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class AmericanFootballSacksAgainstStatsRepository implements IAmericanFootballSacksAgainstStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(AmericanFootballSacksAgainstStatsDto $dto): int
    {
        $sql = "INSERT INTO `american_football_sacks_against_stats` (`sacks_against_yards`, `sacks_against_total`)
                VALUES (?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->sacksAgainstYards,
                $dto->sacksAgainstTotal
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(AmericanFootballSacksAgainstStatsDto $dto): int
    {
        $sql = "UPDATE `american_football_sacks_against_stats` SET `sacks_against_yards` = ?, `sacks_against_total` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->sacksAgainstYards,
                $dto->sacksAgainstTotal,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?AmericanFootballSacksAgainstStatsDto
    {
        $sql = "SELECT `id`, `sacks_against_yards`, `sacks_against_total`
                FROM `american_football_sacks_against_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new AmericanFootballSacksAgainstStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `sacks_against_yards`, `sacks_against_total`
                FROM `american_football_sacks_against_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new AmericanFootballSacksAgainstStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `american_football_sacks_against_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}