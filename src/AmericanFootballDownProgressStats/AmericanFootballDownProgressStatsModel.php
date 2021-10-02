<?php

declare(strict_types=1);

namespace Sports\AmericanFootballDownProgressStats;

use JsonSerializable;

class AmericanFootballDownProgressStatsModel implements JsonSerializable
{
    private int $id;
    private string $firstDownsTotal;
    private string $firstDownsPass;
    private string $firstDownsRun;
    private string $firstDownsPenalty;
    private string $conversionsThirdDown;
    private string $conversionsThirdDownAttempts;
    private string $conversionsThirdDownPercentage;
    private string $conversionsFourthDown;
    private string $conversionsFourthDownAttempts;
    private string $conversionsFourthDownPercentage;

    public function __construct(AmericanFootballDownProgressStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->firstDownsTotal = $dto->firstDownsTotal;
        $this->firstDownsPass = $dto->firstDownsPass;
        $this->firstDownsRun = $dto->firstDownsRun;
        $this->firstDownsPenalty = $dto->firstDownsPenalty;
        $this->conversionsThirdDown = $dto->conversionsThirdDown;
        $this->conversionsThirdDownAttempts = $dto->conversionsThirdDownAttempts;
        $this->conversionsThirdDownPercentage = $dto->conversionsThirdDownPercentage;
        $this->conversionsFourthDown = $dto->conversionsFourthDown;
        $this->conversionsFourthDownAttempts = $dto->conversionsFourthDownAttempts;
        $this->conversionsFourthDownPercentage = $dto->conversionsFourthDownPercentage;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getFirstDownsTotal(): string
    {
        return $this->firstDownsTotal;
    }

    public function setFirstDownsTotal(string $firstDownsTotal): void
    {
        $this->firstDownsTotal = $firstDownsTotal;
    }

    public function getFirstDownsPass(): string
    {
        return $this->firstDownsPass;
    }

    public function setFirstDownsPass(string $firstDownsPass): void
    {
        $this->firstDownsPass = $firstDownsPass;
    }

    public function getFirstDownsRun(): string
    {
        return $this->firstDownsRun;
    }

    public function setFirstDownsRun(string $firstDownsRun): void
    {
        $this->firstDownsRun = $firstDownsRun;
    }

    public function getFirstDownsPenalty(): string
    {
        return $this->firstDownsPenalty;
    }

    public function setFirstDownsPenalty(string $firstDownsPenalty): void
    {
        $this->firstDownsPenalty = $firstDownsPenalty;
    }

    public function getConversionsThirdDown(): string
    {
        return $this->conversionsThirdDown;
    }

    public function setConversionsThirdDown(string $conversionsThirdDown): void
    {
        $this->conversionsThirdDown = $conversionsThirdDown;
    }

    public function getConversionsThirdDownAttempts(): string
    {
        return $this->conversionsThirdDownAttempts;
    }

    public function setConversionsThirdDownAttempts(string $conversionsThirdDownAttempts): void
    {
        $this->conversionsThirdDownAttempts = $conversionsThirdDownAttempts;
    }

    public function getConversionsThirdDownPercentage(): string
    {
        return $this->conversionsThirdDownPercentage;
    }

    public function setConversionsThirdDownPercentage(string $conversionsThirdDownPercentage): void
    {
        $this->conversionsThirdDownPercentage = $conversionsThirdDownPercentage;
    }

    public function getConversionsFourthDown(): string
    {
        return $this->conversionsFourthDown;
    }

    public function setConversionsFourthDown(string $conversionsFourthDown): void
    {
        $this->conversionsFourthDown = $conversionsFourthDown;
    }

    public function getConversionsFourthDownAttempts(): string
    {
        return $this->conversionsFourthDownAttempts;
    }

    public function setConversionsFourthDownAttempts(string $conversionsFourthDownAttempts): void
    {
        $this->conversionsFourthDownAttempts = $conversionsFourthDownAttempts;
    }

    public function getConversionsFourthDownPercentage(): string
    {
        return $this->conversionsFourthDownPercentage;
    }

    public function setConversionsFourthDownPercentage(string $conversionsFourthDownPercentage): void
    {
        $this->conversionsFourthDownPercentage = $conversionsFourthDownPercentage;
    }

    public function toDto(): AmericanFootballDownProgressStatsDto
    {
        $dto = new AmericanFootballDownProgressStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->firstDownsTotal = $this->firstDownsTotal ?? "";
        $dto->firstDownsPass = $this->firstDownsPass ?? "";
        $dto->firstDownsRun = $this->firstDownsRun ?? "";
        $dto->firstDownsPenalty = $this->firstDownsPenalty ?? "";
        $dto->conversionsThirdDown = $this->conversionsThirdDown ?? "";
        $dto->conversionsThirdDownAttempts = $this->conversionsThirdDownAttempts ?? "";
        $dto->conversionsThirdDownPercentage = $this->conversionsThirdDownPercentage ?? "";
        $dto->conversionsFourthDown = $this->conversionsFourthDown ?? "";
        $dto->conversionsFourthDownAttempts = $this->conversionsFourthDownAttempts ?? "";
        $dto->conversionsFourthDownPercentage = $this->conversionsFourthDownPercentage ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "first_downs_total" => $this->firstDownsTotal,
            "first_downs_pass" => $this->firstDownsPass,
            "first_downs_run" => $this->firstDownsRun,
            "first_downs_penalty" => $this->firstDownsPenalty,
            "conversions_third_down" => $this->conversionsThirdDown,
            "conversions_third_down_attempts" => $this->conversionsThirdDownAttempts,
            "conversions_third_down_percentage" => $this->conversionsThirdDownPercentage,
            "conversions_fourth_down" => $this->conversionsFourthDown,
            "conversions_fourth_down_attempts" => $this->conversionsFourthDownAttempts,
            "conversions_fourth_down_percentage" => $this->conversionsFourthDownPercentage,
        ];
    }
}