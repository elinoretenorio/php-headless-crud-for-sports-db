<?php

declare(strict_types=1);

namespace Sports\BaseballPitchingStats;

class BaseballPitchingStatsService implements IBaseballPitchingStatsService
{
    private IBaseballPitchingStatsRepository $repository;

    public function __construct(IBaseballPitchingStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(BaseballPitchingStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(BaseballPitchingStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?BaseballPitchingStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new BaseballPitchingStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var BaseballPitchingStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new BaseballPitchingStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?BaseballPitchingStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new BaseballPitchingStatsDto($row);

        return new BaseballPitchingStatsModel($dto);
    }
}