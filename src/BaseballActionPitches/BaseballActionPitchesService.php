<?php

declare(strict_types=1);

namespace Sports\BaseballActionPitches;

class BaseballActionPitchesService implements IBaseballActionPitchesService
{
    private IBaseballActionPitchesRepository $repository;

    public function __construct(IBaseballActionPitchesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(BaseballActionPitchesModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(BaseballActionPitchesModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?BaseballActionPitchesModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new BaseballActionPitchesModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var BaseballActionPitchesDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new BaseballActionPitchesModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?BaseballActionPitchesModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new BaseballActionPitchesDto($row);

        return new BaseballActionPitchesModel($dto);
    }
}