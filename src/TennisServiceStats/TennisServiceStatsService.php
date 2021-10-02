<?php

declare(strict_types=1);

namespace Sports\TennisServiceStats;

class TennisServiceStatsService implements ITennisServiceStatsService
{
    private ITennisServiceStatsRepository $repository;

    public function __construct(ITennisServiceStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(TennisServiceStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(TennisServiceStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?TennisServiceStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new TennisServiceStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var TennisServiceStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new TennisServiceStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?TennisServiceStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new TennisServiceStatsDto($row);

        return new TennisServiceStatsModel($dto);
    }
}