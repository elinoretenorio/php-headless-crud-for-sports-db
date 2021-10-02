<?php

declare(strict_types=1);

namespace Sports\SoccerDefensiveStats;

class SoccerDefensiveStatsService implements ISoccerDefensiveStatsService
{
    private ISoccerDefensiveStatsRepository $repository;

    public function __construct(ISoccerDefensiveStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(SoccerDefensiveStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(SoccerDefensiveStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?SoccerDefensiveStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new SoccerDefensiveStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var SoccerDefensiveStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new SoccerDefensiveStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?SoccerDefensiveStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new SoccerDefensiveStatsDto($row);

        return new SoccerDefensiveStatsModel($dto);
    }
}