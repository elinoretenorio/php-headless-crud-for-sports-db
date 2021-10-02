<?php

declare(strict_types=1);

namespace Sports\BasketballOffensiveStats;

class BasketballOffensiveStatsService implements IBasketballOffensiveStatsService
{
    private IBasketballOffensiveStatsRepository $repository;

    public function __construct(IBasketballOffensiveStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(BasketballOffensiveStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(BasketballOffensiveStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?BasketballOffensiveStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new BasketballOffensiveStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var BasketballOffensiveStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new BasketballOffensiveStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?BasketballOffensiveStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new BasketballOffensiveStatsDto($row);

        return new BasketballOffensiveStatsModel($dto);
    }
}