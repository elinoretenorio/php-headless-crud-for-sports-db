<?php

declare(strict_types=1);

namespace Sports\IceHockeyDefensiveStats;

class IceHockeyDefensiveStatsService implements IIceHockeyDefensiveStatsService
{
    private IIceHockeyDefensiveStatsRepository $repository;

    public function __construct(IIceHockeyDefensiveStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(IceHockeyDefensiveStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(IceHockeyDefensiveStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?IceHockeyDefensiveStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new IceHockeyDefensiveStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var IceHockeyDefensiveStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new IceHockeyDefensiveStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?IceHockeyDefensiveStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new IceHockeyDefensiveStatsDto($row);

        return new IceHockeyDefensiveStatsModel($dto);
    }
}