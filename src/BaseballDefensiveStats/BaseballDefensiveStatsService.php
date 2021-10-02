<?php

declare(strict_types=1);

namespace Sports\BaseballDefensiveStats;

class BaseballDefensiveStatsService implements IBaseballDefensiveStatsService
{
    private IBaseballDefensiveStatsRepository $repository;

    public function __construct(IBaseballDefensiveStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(BaseballDefensiveStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(BaseballDefensiveStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?BaseballDefensiveStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new BaseballDefensiveStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var BaseballDefensiveStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new BaseballDefensiveStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?BaseballDefensiveStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new BaseballDefensiveStatsDto($row);

        return new BaseballDefensiveStatsModel($dto);
    }
}