<?php

declare(strict_types=1);

namespace Sports\BaseballActionContactDetails;

class BaseballActionContactDetailsService implements IBaseballActionContactDetailsService
{
    private IBaseballActionContactDetailsRepository $repository;

    public function __construct(IBaseballActionContactDetailsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function insert(BaseballActionContactDetailsModel $model): int
    {
        return $this->repository->insert($model->toDto());
    }

    public function update(BaseballActionContactDetailsModel $model): int
    {
        return $this->repository->update($model->toDto());
    }

    public function get(int $id): ?BaseballActionContactDetailsModel
    {
        $dto = $this->repository->get($id);
        if ($dto === null) {
            return null;
        }

        return new BaseballActionContactDetailsModel($dto);
    }

    public function getAll(): array
    {
        $dtos = $this->repository->getAll();

        $result = [];
        /* @var BaseballActionContactDetailsDto $dto */
        foreach ($dtos as $dto) {
            $result[] = new BaseballActionContactDetailsModel($dto);
        }

        return $result;
    }

    public function delete(int $id): int
    {
        return $this->repository->delete($id);
    }

    public function createModel(array $row): ?BaseballActionContactDetailsModel
    {
        if (empty($row)) {
            return null;
        }

        $dto = new BaseballActionContactDetailsDto($row);

        return new BaseballActionContactDetailsModel($dto);
    }
}