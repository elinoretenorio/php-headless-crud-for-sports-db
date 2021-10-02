<?php

declare(strict_types=1);

namespace Sports\TeamAmericanFootballStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class TeamAmericanFootballStatsRepository implements ITeamAmericanFootballStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(TeamAmericanFootballStatsDto $dto): int
    {
        $sql = "INSERT INTO `team_american_football_stats` (`yards_per_attempt`, `average_starting_position`, `timeouts`, `time_of_possession`, `turnover_ratio`)
                VALUES (?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->yardsPerAttempt,
                $dto->averageStartingPosition,
                $dto->timeouts,
                $dto->timeOfPossession,
                $dto->turnoverRatio
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(TeamAmericanFootballStatsDto $dto): int
    {
        $sql = "UPDATE `team_american_football_stats` SET `yards_per_attempt` = ?, `average_starting_position` = ?, `timeouts` = ?, `time_of_possession` = ?, `turnover_ratio` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->yardsPerAttempt,
                $dto->averageStartingPosition,
                $dto->timeouts,
                $dto->timeOfPossession,
                $dto->turnoverRatio,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?TeamAmericanFootballStatsDto
    {
        $sql = "SELECT `id`, `yards_per_attempt`, `average_starting_position`, `timeouts`, `time_of_possession`, `turnover_ratio`
                FROM `team_american_football_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new TeamAmericanFootballStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `yards_per_attempt`, `average_starting_position`, `timeouts`, `time_of_possession`, `turnover_ratio`
                FROM `team_american_football_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new TeamAmericanFootballStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `team_american_football_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}