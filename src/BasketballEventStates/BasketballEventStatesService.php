<?php

declare(strict_types=1);

namespace Sports\BasketballEventStates;

class BasketballEventStatesService implements IBasketballEventStatesService
{
    private IBasketballEventStatesRepository $repository;

    public function __construct(IBasketballEventStatesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(BasketballEventStatesModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(BasketballEventStatesModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?BasketballEventStatesModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new BasketballEventStatesModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var BasketballEventStatesDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new BasketballEventStatesModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?BasketballEventStatesModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new BasketballEventStatesDto($row);

        return new BasketballEventStatesModel($dto);
    }
}