<?php

declare(strict_types=1);

namespace Sports\AmericanFootballDefensiveStats;

class AmericanFootballDefensiveStatsService implements IAmericanFootballDefensiveStatsService
{
    private IAmericanFootballDefensiveStatsRepository $repository;

    public function __construct(IAmericanFootballDefensiveStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(AmericanFootballDefensiveStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(AmericanFootballDefensiveStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?AmericanFootballDefensiveStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new AmericanFootballDefensiveStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var AmericanFootballDefensiveStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new AmericanFootballDefensiveStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?AmericanFootballDefensiveStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new AmericanFootballDefensiveStatsDto($row);

        return new AmericanFootballDefensiveStatsModel($dto);
    }
}