<?php

declare(strict_types=1);

namespace Sports\BasketballDefensiveStats;

class BasketballDefensiveStatsService implements IBasketballDefensiveStatsService
{
    private IBasketballDefensiveStatsRepository $repository;

    public function __construct(IBasketballDefensiveStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(BasketballDefensiveStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(BasketballDefensiveStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?BasketballDefensiveStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new BasketballDefensiveStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var BasketballDefensiveStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new BasketballDefensiveStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?BasketballDefensiveStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new BasketballDefensiveStatsDto($row);

        return new BasketballDefensiveStatsModel($dto);
    }
}