<?php

declare(strict_types=1);

namespace Sports\IceHockeyPlayerStats;

class IceHockeyPlayerStatsService implements IIceHockeyPlayerStatsService
{
    private IIceHockeyPlayerStatsRepository $repository;

    public function __construct(IIceHockeyPlayerStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(IceHockeyPlayerStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(IceHockeyPlayerStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?IceHockeyPlayerStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new IceHockeyPlayerStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var IceHockeyPlayerStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new IceHockeyPlayerStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?IceHockeyPlayerStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new IceHockeyPlayerStatsDto($row);

        return new IceHockeyPlayerStatsModel($dto);
    }
}