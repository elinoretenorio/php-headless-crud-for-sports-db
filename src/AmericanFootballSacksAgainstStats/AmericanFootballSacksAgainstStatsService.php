<?php

declare(strict_types=1);

namespace Sports\AmericanFootballSacksAgainstStats;

class AmericanFootballSacksAgainstStatsService implements IAmericanFootballSacksAgainstStatsService
{
    private IAmericanFootballSacksAgainstStatsRepository $repository;

    public function __construct(IAmericanFootballSacksAgainstStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(AmericanFootballSacksAgainstStatsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(AmericanFootballSacksAgainstStatsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?AmericanFootballSacksAgainstStatsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new AmericanFootballSacksAgainstStatsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var AmericanFootballSacksAgainstStatsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new AmericanFootballSacksAgainstStatsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?AmericanFootballSacksAgainstStatsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new AmericanFootballSacksAgainstStatsDto($row);

        return new AmericanFootballSacksAgainstStatsModel($dto);
    }
}