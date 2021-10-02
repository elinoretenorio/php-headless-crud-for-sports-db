<?php

declare(strict_types=1);

namespace Sports\AmericanFootballOffensiveStats;

class AmericanFootballOffensiveStatsService implements IAmericanFootballOffensiveStatsService
{
    private IAmericanFootballOffensiveStatsRepository $repository;

    public function __construct(IAmericanFootballOffensiveStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(AmericanFootballOffensiveStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(AmericanFootballOffensiveStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?AmericanFootballOffensiveStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new AmericanFootballOffensiveStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var AmericanFootballOffensiveStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new AmericanFootballOffensiveStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?AmericanFootballOffensiveStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new AmericanFootballOffensiveStatsDto($row);

        return new AmericanFootballOffensiveStatsModel($dto);
    }
}