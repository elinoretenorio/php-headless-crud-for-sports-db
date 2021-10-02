<?php

declare(strict_types=1);

namespace Sports\BaseballDefensiveStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class BaseballDefensiveStatsRepository implements IBaseballDefensiveStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(BaseballDefensiveStatsDto $dto): int
    {
        $sql = "INSERT INTO `baseball_defensive_stats` (`double_plays`, `triple_plays`, `putouts`, `assists`, `errors`, `fielding_percentage`, `defensive_average`, `errors_passed_ball`, `errors_catchers_interference`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->doublePlays,
                $dto->triplePlays,
                $dto->putouts,
                $dto->assists,
                $dto->errors,
                $dto->fieldingPercentage,
                $dto->defensiveAverage,
                $dto->errorsPassedBall,
                $dto->errorsCatchersInterference
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(BaseballDefensiveStatsDto $dto): int
    {
        $sql = "UPDATE `baseball_defensive_stats` SET `double_plays` = ?, `triple_plays` = ?, `putouts` = ?, `assists` = ?, `errors` = ?, `fielding_percentage` = ?, `defensive_average` = ?, `errors_passed_ball` = ?, `errors_catchers_interference` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->doublePlays,
                $dto->triplePlays,
                $dto->putouts,
                $dto->assists,
                $dto->errors,
                $dto->fieldingPercentage,
                $dto->defensiveAverage,
                $dto->errorsPassedBall,
                $dto->errorsCatchersInterference,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?BaseballDefensiveStatsDto
    {
        $sql = "SELECT `id`, `double_plays`, `triple_plays`, `putouts`, `assists`, `errors`, `fielding_percentage`, `defensive_average`, `errors_passed_ball`, `errors_catchers_interference`
                FROM `baseball_defensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new BaseballDefensiveStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `double_plays`, `triple_plays`, `putouts`, `assists`, `errors`, `fielding_percentage`, `defensive_average`, `errors_passed_ball`, `errors_catchers_interference`
                FROM `baseball_defensive_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new BaseballDefensiveStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `baseball_defensive_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}