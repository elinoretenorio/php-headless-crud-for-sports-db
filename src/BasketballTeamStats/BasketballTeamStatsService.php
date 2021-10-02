<?php

declare(strict_types=1);

namespace Sports\BasketballTeamStats;

class BasketballTeamStatsService implements IBasketballTeamStatsService
{
    private IBasketballTeamStatsRepository $repository;

    public function __construct(IBasketballTeamStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(BasketballTeamStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(BasketballTeamStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?BasketballTeamStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new BasketballTeamStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var BasketballTeamStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new BasketballTeamStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?BasketballTeamStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new BasketballTeamStatsDto($row);

        return new BasketballTeamStatsModel($dto);
    }
}