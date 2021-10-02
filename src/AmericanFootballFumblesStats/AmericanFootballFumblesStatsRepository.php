<?php

declare(strict_types=1);

namespace Sports\AmericanFootballFumblesStats;

use Sports\Database\IDatabase;
use Sports\Database\DatabaseException;

class AmericanFootballFumblesStatsRepository implements IAmericanFootballFumblesStatsRepository
{
    private IDatabase $db;

    public function __construct(IDatabase $db)
    {
        $this->db = $db;
    }

    public function insert(AmericanFootballFumblesStatsDto $dto): int
    {
        $sql = "INSERT INTO `american_football_fumbles_stats` (`fumbles_committed`, `fumbles_forced`, `fumbles_recovered`, `fumbles_lost`, `fumbles_yards_gained`, `fumbles_own_committed`, `fumbles_own_recovered`, `fumbles_own_lost`, `fumbles_own_yards_gained`, `fumbles_opposing_committed`, `fumbles_opposing_recovered`, `fumbles_opposing_lost`, `fumbles_opposing_yards_gained`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->fumblesCommitted,
                $dto->fumblesForced,
                $dto->fumblesRecovered,
                $dto->fumblesLost,
                $dto->fumblesYardsGained,
                $dto->fumblesOwnCommitted,
                $dto->fumblesOwnRecovered,
                $dto->fumblesOwnLost,
                $dto->fumblesOwnYardsGained,
                $dto->fumblesOpposingCommitted,
                $dto->fumblesOpposingRecovered,
                $dto->fumblesOpposingLost,
                $dto->fumblesOpposingYardsGained
            ]);

            return $this->db->lastInsertId();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function update(AmericanFootballFumblesStatsDto $dto): int
    {
        $sql = "UPDATE `american_football_fumbles_stats` SET `fumbles_committed` = ?, `fumbles_forced` = ?, `fumbles_recovered` = ?, `fumbles_lost` = ?, `fumbles_yards_gained` = ?, `fumbles_own_committed` = ?, `fumbles_own_recovered` = ?, `fumbles_own_lost` = ?, `fumbles_own_yards_gained` = ?, `fumbles_opposing_committed` = ?, `fumbles_opposing_recovered` = ?, `fumbles_opposing_lost` = ?, `fumbles_opposing_yards_gained` = ?
                WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([
                $dto->fumblesCommitted,
                $dto->fumblesForced,
                $dto->fumblesRecovered,
                $dto->fumblesLost,
                $dto->fumblesYardsGained,
                $dto->fumblesOwnCommitted,
                $dto->fumblesOwnRecovered,
                $dto->fumblesOwnLost,
                $dto->fumblesOwnYardsGained,
                $dto->fumblesOpposingCommitted,
                $dto->fumblesOpposingRecovered,
                $dto->fumblesOpposingLost,
                $dto->fumblesOpposingYardsGained,
                $dto->id
            ]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }

    public function get(int $id): ?AmericanFootballFumblesStatsDto
    {
        $sql = "SELECT `id`, `fumbles_committed`, `fumbles_forced`, `fumbles_recovered`, `fumbles_lost`, `fumbles_yards_gained`, `fumbles_own_committed`, `fumbles_own_recovered`, `fumbles_own_lost`, `fumbles_own_yards_gained`, `fumbles_opposing_committed`, `fumbles_opposing_recovered`, `fumbles_opposing_lost`, `fumbles_opposing_yards_gained`
                FROM `american_football_fumbles_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);
            $row = $result->fetchAll();

            return (!empty($row)) ? new AmericanFootballFumblesStatsDto($row[0]) : null;
        } catch (DatabaseException $exception) {
            return null;
        }
    }

    public function getAll(): array
    {
        $sql = "SELECT `id`, `fumbles_committed`, `fumbles_forced`, `fumbles_recovered`, `fumbles_lost`, `fumbles_yards_gained`, `fumbles_own_committed`, `fumbles_own_recovered`, `fumbles_own_lost`, `fumbles_own_yards_gained`, `fumbles_opposing_committed`, `fumbles_opposing_recovered`, `fumbles_opposing_lost`, `fumbles_opposing_yards_gained`
                FROM `american_football_fumbles_stats`";

        try {
            $result = $this->db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();

            $result = [];
            foreach ($rows as $row) {
                $result[] = new AmericanFootballFumblesStatsDto($row);
            }

            return $result;
        } catch (DatabaseException $exception) {
            return [];
        }
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM `american_football_fumbles_stats` WHERE `id` = ?";

        try {
            $result = $this->db->prepare($sql);
            $result->execute([$id]);

            return $result->rowCount();
        } catch (DatabaseException $exception) {
            return -1;
        }
    }
}