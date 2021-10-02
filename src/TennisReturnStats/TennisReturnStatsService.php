<?php

declare(strict_types=1);

namespace Sports\TennisReturnStats;

class TennisReturnStatsService implements ITennisReturnStatsService
{
    private ITennisReturnStatsRepository $repository;

    public function __construct(ITennisReturnStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(TennisReturnStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(TennisReturnStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?TennisReturnStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new TennisReturnStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var TennisReturnStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new TennisReturnStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?TennisReturnStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new TennisReturnStatsDto($row);

        return new TennisReturnStatsModel($dto);
    }
}