<?php

declare(strict_types=1);

namespace Sports\SoccerFoulStats;

class SoccerFoulStatsService implements ISoccerFoulStatsService
{
    private ISoccerFoulStatsRepository $repository;

    public function __construct(ISoccerFoulStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(SoccerFoulStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(SoccerFoulStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?SoccerFoulStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new SoccerFoulStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var SoccerFoulStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new SoccerFoulStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?SoccerFoulStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new SoccerFoulStatsDto($row);

        return new SoccerFoulStatsModel($dto);
    }
}