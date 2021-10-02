<?php

declare(strict_types=1);

namespace Sports\BaseballOffensiveStats;

class BaseballOffensiveStatsService implements IBaseballOffensiveStatsService
{
    private IBaseballOffensiveStatsRepository $repository;

    public function __construct(IBaseballOffensiveStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(BaseballOffensiveStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(BaseballOffensiveStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?BaseballOffensiveStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new BaseballOffensiveStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var BaseballOffensiveStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new BaseballOffensiveStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?BaseballOffensiveStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new BaseballOffensiveStatsDto($row);

        return new BaseballOffensiveStatsModel($dto);
    }
}