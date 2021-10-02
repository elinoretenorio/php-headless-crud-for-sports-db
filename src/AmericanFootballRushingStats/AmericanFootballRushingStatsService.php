<?php

declare(strict_types=1);

namespace Sports\AmericanFootballRushingStats;

class AmericanFootballRushingStatsService implements IAmericanFootballRushingStatsService
{
    private IAmericanFootballRushingStatsRepository $repository;

    public function __construct(IAmericanFootballRushingStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(AmericanFootballRushingStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(AmericanFootballRushingStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?AmericanFootballRushingStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new AmericanFootballRushingStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var AmericanFootballRushingStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new AmericanFootballRushingStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?AmericanFootballRushingStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new AmericanFootballRushingStatsDto($row);

        return new AmericanFootballRushingStatsModel($dto);
    }
}