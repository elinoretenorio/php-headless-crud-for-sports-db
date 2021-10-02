<?php

declare(strict_types=1);

namespace Sports\SoccerOffensiveStats;

class SoccerOffensiveStatsService implements ISoccerOffensiveStatsService
{
    private ISoccerOffensiveStatsRepository $repository;

    public function __construct(ISoccerOffensiveStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(SoccerOffensiveStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(SoccerOffensiveStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?SoccerOffensiveStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new SoccerOffensiveStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var SoccerOffensiveStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new SoccerOffensiveStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?SoccerOffensiveStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new SoccerOffensiveStatsDto($row);

        return new SoccerOffensiveStatsModel($dto);
    }
}