<?php

declare(strict_types=1);

namespace Sports\BasketballTeamStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class BasketballTeamStatsRepository implements IBasketballTeamStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(BasketballTeamStatsDto $dto): int
    {
        $sql = "INSERT INTO `basketball_team_stats` (`timeouts_left`, `largest_lead`, `fouls_total`, `turnover_margin`)
                VALUES (?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->timeoutsLeft,
                $dto->largestLead,
                $dto->foulsTotal,
                $dto->turnoverMargin
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(BasketballTeamStatsDto $dto): int
    {
        $sql = "UPDATE `basketball_team_stats` SET `timeouts_left` = ?, `largest_lead` = ?, `fouls_total` = ?, `turnover_margin` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->timeoutsLeft,
                $dto->largestLead,
                $dto->foulsTotal,
                $dto->turnoverMargin,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?BasketballTeamStatsDto
    {
        $sql = "SELECT `id`, `timeouts_left`, `largest_lead`, `fouls_total`, `turnover_margin`
                FROM `basketball_team_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new BasketballTeamStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `timeouts_left`, `largest_lead`, `fouls_total`, `turnover_margin`
                FROM `basketball_team_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new BasketballTeamStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `basketball_team_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}