<?php

declare(strict_types=1);

namespace Sports\BasketballReboundingStats;

class BasketballReboundingStatsService implements IBasketballReboundingStatsService
{
    private IBasketballReboundingStatsRepository $repository;

    public function __construct(IBasketballReboundingStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(BasketballReboundingStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(BasketballReboundingStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?BasketballReboundingStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new BasketballReboundingStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var BasketballReboundingStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new BasketballReboundingStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?BasketballReboundingStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new BasketballReboundingStatsDto($row);

        return new BasketballReboundingStatsModel($dto);
    }
}