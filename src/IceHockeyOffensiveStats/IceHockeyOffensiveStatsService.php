<?php

declare(strict_types=1);

namespace Sports\IceHockeyOffensiveStats;

class IceHockeyOffensiveStatsService implements IIceHockeyOffensiveStatsService
{
    private IIceHockeyOffensiveStatsRepository $repository;

    public function __construct(IIceHockeyOffensiveStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(IceHockeyOffensiveStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(IceHockeyOffensiveStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?IceHockeyOffensiveStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new IceHockeyOffensiveStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var IceHockeyOffensiveStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new IceHockeyOffensiveStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?IceHockeyOffensiveStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new IceHockeyOffensiveStatsDto($row);

        return new IceHockeyOffensiveStatsModel($dto);
    }
}