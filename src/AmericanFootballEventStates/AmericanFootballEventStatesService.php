<?php

declare(strict_types=1);

namespace Sports\AmericanFootballEventStates;

class AmericanFootballEventStatesService implements IAmericanFootballEventStatesService
{
    private IAmericanFootballEventStatesRepository $repository;

    public function __construct(IAmericanFootballEventStatesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(AmericanFootballEventStatesModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(AmericanFootballEventStatesModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?AmericanFootballEventStatesModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new AmericanFootballEventStatesModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var AmericanFootballEventStatesDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new AmericanFootballEventStatesModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?AmericanFootballEventStatesModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new AmericanFootballEventStatesDto($row);

        return new AmericanFootballEventStatesModel($dto);
    }
}