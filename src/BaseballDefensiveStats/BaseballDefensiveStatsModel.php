<?php

declare(strict_types=1);

namespace Sports\BaseballDefensiveStats;

use JsonSerializable;

class BaseballDefensiveStatsModel implements JsonSerializable
{
    private int $id;
    private int $doublePlays;
    private int $triplePlays;
    private int $putouts;
    private int $assists;
    private int $errors;
    private float $fieldingPercentage;
    private float $defensiveAverage;
    private int $errorsPassedBall;
    private int $errorsCatchersInterference;

    public function __construct(BaseballDefensiveStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->doublePlays = $dto->doublePlays;
        $this->triplePlays = $dto->triplePlays;
        $this->putouts = $dto->putouts;
        $this->assists = $dto->assists;
        $this->errors = $dto->errors;
        $this->fieldingPercentage = $dto->fieldingPercentage;
        $this->defensiveAverage = $dto->defensiveAverage;
        $this->errorsPassedBall = $dto->errorsPassedBall;
        $this->errorsCatchersInterference = $dto->errorsCatchersInterference;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDoublePlays(): int
    {
        return $this->doublePlays;
    }

    public function setDoublePlays(int $doublePlays): void
    {
        $this->doublePlays = $doublePlays;
    }

    public function getTriplePlays(): int
    {
        return $this->triplePlays;
    }

    public function setTriplePlays(int $triplePlays): void
    {
        $this->triplePlays = $triplePlays;
    }

    public function getPutouts(): int
    {
        return $this->putouts;
    }

    public function setPutouts(int $putouts): void
    {
        $this->putouts = $putouts;
    }

    public function getAssists(): int
    {
        return $this->assists;
    }

    public function setAssists(int $assists): void
    {
        $this->assists = $assists;
    }

    public function getErrors(): int
    {
        return $this->errors;
    }

    public function setErrors(int $errors): void
    {
        $this->errors = $errors;
    }

    public function getFieldingPercentage(): float
    {
        return $this->fieldingPercentage;
    }

    public function setFieldingPercentage(float $fieldingPercentage): void
    {
        $this->fieldingPercentage = $fieldingPercentage;
    }

    public function getDefensiveAverage(): float
    {
        return $this->defensiveAverage;
    }

    public function setDefensiveAverage(float $defensiveAverage): void
    {
        $this->defensiveAverage = $defensiveAverage;
    }

    public function getErrorsPassedBall(): int
    {
        return $this->errorsPassedBall;
    }

    public function setErrorsPassedBall(int $errorsPassedBall): void
    {
        $this->errorsPassedBall = $errorsPassedBall;
    }

    public function getErrorsCatchersInterference(): int
    {
        return $this->errorsCatchersInterference;
    }

    public function setErrorsCatchersInterference(int $errorsCatchersInterference): void
    {
        $this->errorsCatchersInterference = $errorsCatchersInterference;
    }

    public function toDto(): BaseballDefensiveStatsDto
    {
        $dto = new BaseballDefensiveStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->doublePlays = (int) ($this->doublePlays ?? 0);
        $dto->triplePlays = (int) ($this->triplePlays ?? 0);
        $dto->putouts = (int) ($this->putouts ?? 0);
        $dto->assists = (int) ($this->assists ?? 0);
        $dto->errors = (int) ($this->errors ?? 0);
        $dto->fieldingPercentage = (float) ($this->fieldingPercentage ?? 0);
        $dto->defensiveAverage = (float) ($this->defensiveAverage ?? 0);
        $dto->errorsPassedBall = (int) ($this->errorsPassedBall ?? 0);
        $dto->errorsCatchersInterference = (int) ($this->errorsCatchersInterference ?? 0);

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "double_plays" => $this->doublePlays,
            "triple_plays" => $this->triplePlays,
            "putouts" => $this->putouts,
            "assists" => $this->assists,
            "errors" => $this->errors,
            "fielding_percentage" => $this->fieldingPercentage,
            "defensive_average" => $this->defensiveAverage,
            "errors_passed_ball" => $this->errorsPassedBall,
            "errors_catchers_interference" => $this->errorsCatchersInterference,
        ];
    }
}