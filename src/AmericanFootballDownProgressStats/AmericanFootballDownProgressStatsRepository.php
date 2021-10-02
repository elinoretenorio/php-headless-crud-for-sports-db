<?php

declare(strict_types=1);

namespace Sports\AmericanFootballDownProgressStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class AmericanFootballDownProgressStatsRepository implements IAmericanFootballDownProgressStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(AmericanFootballDownProgressStatsDto $dto): int
    {
        $sql = "INSERT INTO `american_football_down_progress_stats` (`first_downs_total`, `first_downs_pass`, `first_downs_run`, `first_downs_penalty`, `conversions_third_down`, `conversions_third_down_attempts`, `conversions_third_down_percentage`, `conversions_fourth_down`, `conversions_fourth_down_attempts`, `conversions_fourth_down_percentage`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->firstDownsTotal,
                $dto->firstDownsPass,
                $dto->firstDownsRun,
                $dto->firstDownsPenalty,
                $dto->conversionsThirdDown,
                $dto->conversionsThirdDownAttempts,
                $dto->conversionsThirdDownPercentage,
                $dto->conversionsFourthDown,
                $dto->conversionsFourthDownAttempts,
                $dto->conversionsFourthDownPercentage
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(AmericanFootballDownProgressStatsDto $dto): int
    {
        $sql = "UPDATE `american_football_down_progress_stats` SET `first_downs_total` = ?, `first_downs_pass` = ?, `first_downs_run` = ?, `first_downs_penalty` = ?, `conversions_third_down` = ?, `conversions_third_down_attempts` = ?, `conversions_third_down_percentage` = ?, `conversions_fourth_down` = ?, `conversions_fourth_down_attempts` = ?, `conversions_fourth_down_percentage` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->firstDownsTotal,
                $dto->firstDownsPass,
                $dto->firstDownsRun,
                $dto->firstDownsPenalty,
                $dto->conversionsThirdDown,
                $dto->conversionsThirdDownAttempts,
                $dto->conversionsThirdDownPercentage,
                $dto->conversionsFourthDown,
                $dto->conversionsFourthDownAttempts,
                $dto->conversionsFourthDownPercentage,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?AmericanFootballDownProgressStatsDto
    {
        $sql = "SELECT `id`, `first_downs_total`, `first_downs_pass`, `first_downs_run`, `first_downs_penalty`, `conversions_third_down`, `conversions_third_down_attempts`, `conversions_third_down_percentage`, `conversions_fourth_down`, `conversions_fourth_down_attempts`, `conversions_fourth_down_percentage`
                FROM `american_football_down_progress_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new AmericanFootballDownProgressStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `first_downs_total`, `first_downs_pass`, `first_downs_run`, `first_downs_penalty`, `conversions_third_down`, `conversions_third_down_attempts`, `conversions_third_down_percentage`, `conversions_fourth_down`, `conversions_fourth_down_attempts`, `conversions_fourth_down_percentage`
                FROM `american_football_down_progress_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new AmericanFootballDownProgressStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `american_football_down_progress_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}