<?php

declare(strict_types=1);

namespace Sports\IceHockeyDefensiveStats;

use JsonSerializable;

class IceHockeyDefensiveStatsModel implements JsonSerializable
{
    private int $id;
    private string $shotsPowerPlayAllowed;
    private string $shotsPenaltyShotAllowed;
    private string $goalsPowerPlayAllowed;
    private string $goalsPenaltyShotAllowed;
    private string $goalsAgainstAverage;
    private string $saves;
    private string $savePercentage;
    private string $penaltyKillingAmount;
    private string $penaltyKillingPercentage;
    private string $shotsBlocked;
    private string $takeaways;
    private string $shutouts;
    private string $minutesPenaltyKilling;
    private string $hits;
    private string $goalsEmptyNetAllowed;
    private string $goalsShortHandedAllowed;
    private string $goalsShootoutAllowed;
    private string $shotsShootoutAllowed;

    public function __construct(IceHockeyDefensiveStatsDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->shotsPowerPlayAllowed = $dto->shotsPowerPlayAllowed;
        $this->shotsPenaltyShotAllowed = $dto->shotsPenaltyShotAllowed;
        $this->goalsPowerPlayAllowed = $dto->goalsPowerPlayAllowed;
        $this->goalsPenaltyShotAllowed = $dto->goalsPenaltyShotAllowed;
        $this->goalsAgainstAverage = $dto->goalsAgainstAverage;
        $this->saves = $dto->saves;
        $this->savePercentage = $dto->savePercentage;
        $this->penaltyKillingAmount = $dto->penaltyKillingAmount;
        $this->penaltyKillingPercentage = $dto->penaltyKillingPercentage;
        $this->shotsBlocked = $dto->shotsBlocked;
        $this->takeaways = $dto->takeaways;
        $this->shutouts = $dto->shutouts;
        $this->minutesPenaltyKilling = $dto->minutesPenaltyKilling;
        $this->hits = $dto->hits;
        $this->goalsEmptyNetAllowed = $dto->goalsEmptyNetAllowed;
        $this->goalsShortHandedAllowed = $dto->goalsShortHandedAllowed;
        $this->goalsShootoutAllowed = $dto->goalsShootoutAllowed;
        $this->shotsShootoutAllowed = $dto->shotsShootoutAllowed;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getShotsPowerPlayAllowed(): string
    {
        return $this->shotsPowerPlayAllowed;
    }

    public function setShotsPowerPlayAllowed(string $shotsPowerPlayAllowed): void
    {
        $this->shotsPowerPlayAllowed = $shotsPowerPlayAllowed;
    }

    public function getShotsPenaltyShotAllowed(): string
    {
        return $this->shotsPenaltyShotAllowed;
    }

    public function setShotsPenaltyShotAllowed(string $shotsPenaltyShotAllowed): void
    {
        $this->shotsPenaltyShotAllowed = $shotsPenaltyShotAllowed;
    }

    public function getGoalsPowerPlayAllowed(): string
    {
        return $this->goalsPowerPlayAllowed;
    }

    public function setGoalsPowerPlayAllowed(string $goalsPowerPlayAllowed): void
    {
        $this->goalsPowerPlayAllowed = $goalsPowerPlayAllowed;
    }

    public function getGoalsPenaltyShotAllowed(): string
    {
        return $this->goalsPenaltyShotAllowed;
    }

    public function setGoalsPenaltyShotAllowed(string $goalsPenaltyShotAllowed): void
    {
        $this->goalsPenaltyShotAllowed = $goalsPenaltyShotAllowed;
    }

    public function getGoalsAgainstAverage(): string
    {
        return $this->goalsAgainstAverage;
    }

    public function setGoalsAgainstAverage(string $goalsAgainstAverage): void
    {
        $this->goalsAgainstAverage = $goalsAgainstAverage;
    }

    public function getSaves(): string
    {
        return $this->saves;
    }

    public function setSaves(string $saves): void
    {
        $this->saves = $saves;
    }

    public function getSavePercentage(): string
    {
        return $this->savePercentage;
    }

    public function setSavePercentage(string $savePercentage): void
    {
        $this->savePercentage = $savePercentage;
    }

    public function getPenaltyKillingAmount(): string
    {
        return $this->penaltyKillingAmount;
    }

    public function setPenaltyKillingAmount(string $penaltyKillingAmount): void
    {
        $this->penaltyKillingAmount = $penaltyKillingAmount;
    }

    public function getPenaltyKillingPercentage(): string
    {
        return $this->penaltyKillingPercentage;
    }

    public function setPenaltyKillingPercentage(string $penaltyKillingPercentage): void
    {
        $this->penaltyKillingPercentage = $penaltyKillingPercentage;
    }

    public function getShotsBlocked(): string
    {
        return $this->shotsBlocked;
    }

    public function setShotsBlocked(string $shotsBlocked): void
    {
        $this->shotsBlocked = $shotsBlocked;
    }

    public function getTakeaways(): string
    {
        return $this->takeaways;
    }

    public function setTakeaways(string $takeaways): void
    {
        $this->takeaways = $takeaways;
    }

    public function getShutouts(): string
    {
        return $this->shutouts;
    }

    public function setShutouts(string $shutouts): void
    {
        $this->shutouts = $shutouts;
    }

    public function getMinutesPenaltyKilling(): string
    {
        return $this->minutesPenaltyKilling;
    }

    public function setMinutesPenaltyKilling(string $minutesPenaltyKilling): void
    {
        $this->minutesPenaltyKilling = $minutesPenaltyKilling;
    }

    public function getHits(): string
    {
        return $this->hits;
    }

    public function setHits(string $hits): void
    {
        $this->hits = $hits;
    }

    public function getGoalsEmptyNetAllowed(): string
    {
        return $this->goalsEmptyNetAllowed;
    }

    public function setGoalsEmptyNetAllowed(string $goalsEmptyNetAllowed): void
    {
        $this->goalsEmptyNetAllowed = $goalsEmptyNetAllowed;
    }

    public function getGoalsShortHandedAllowed(): string
    {
        return $this->goalsShortHandedAllowed;
    }

    public function setGoalsShortHandedAllowed(string $goalsShortHandedAllowed): void
    {
        $this->goalsShortHandedAllowed = $goalsShortHandedAllowed;
    }

    public function getGoalsShootoutAllowed(): string
    {
        return $this->goalsShootoutAllowed;
    }

    public function setGoalsShootoutAllowed(string $goalsShootoutAllowed): void
    {
        $this->goalsShootoutAllowed = $goalsShootoutAllowed;
    }

    public function getShotsShootoutAllowed(): string
    {
        return $this->shotsShootoutAllowed;
    }

    public function setShotsShootoutAllowed(string $shotsShootoutAllowed): void
    {
        $this->shotsShootoutAllowed = $shotsShootoutAllowed;
    }

    public function toDto(): IceHockeyDefensiveStatsDto
    {
        $dto = new IceHockeyDefensiveStatsDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->shotsPowerPlayAllowed = $this->shotsPowerPlayAllowed ?? "";
        $dto->shotsPenaltyShotAllowed = $this->shotsPenaltyShotAllowed ?? "";
        $dto->goalsPowerPlayAllowed = $this->goalsPowerPlayAllowed ?? "";
        $dto->goalsPenaltyShotAllowed = $this->goalsPenaltyShotAllowed ?? "";
        $dto->goalsAgainstAverage = $this->goalsAgainstAverage ?? "";
        $dto->saves = $this->saves ?? "";
        $dto->savePercentage = $this->savePercentage ?? "";
        $dto->penaltyKillingAmount = $this->penaltyKillingAmount ?? "";
        $dto->penaltyKillingPercentage = $this->penaltyKillingPercentage ?? "";
        $dto->shotsBlocked = $this->shotsBlocked ?? "";
        $dto->takeaways = $this->takeaways ?? "";
        $dto->shutouts = $this->shutouts ?? "";
        $dto->minutesPenaltyKilling = $this->minutesPenaltyKilling ?? "";
        $dto->hits = $this->hits ?? "";
        $dto->goalsEmptyNetAllowed = $this->goalsEmptyNetAllowed ?? "";
        $dto->goalsShortHandedAllowed = $this->goalsShortHandedAllowed ?? "";
        $dto->goalsShootoutAllowed = $this->goalsShootoutAllowed ?? "";
        $dto->shotsShootoutAllowed = $this->shotsShootoutAllowed ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "shots_power_play_allowed" => $this->shotsPowerPlayAllowed,
            "shots_penalty_shot_allowed" => $this->shotsPenaltyShotAllowed,
            "goals_power_play_allowed" => $this->goalsPowerPlayAllowed,
            "goals_penalty_shot_allowed" => $this->goalsPenaltyShotAllowed,
            "goals_against_average" => $this->goalsAgainstAverage,
            "saves" => $this->saves,
            "save_percentage" => $this->savePercentage,
            "penalty_killing_amount" => $this->penaltyKillingAmount,
            "penalty_killing_percentage" => $this->penaltyKillingPercentage,
            "shots_blocked" => $this->shotsBlocked,
            "takeaways" => $this->takeaways,
            "shutouts" => $this->shutouts,
            "minutes_penalty_killing" => $this->minutesPenaltyKilling,
            "hits" => $this->hits,
            "goals_empty_net_allowed" => $this->goalsEmptyNetAllowed,
            "goals_short_handed_allowed" => $this->goalsShortHandedAllowed,
            "goals_shootout_allowed" => $this->goalsShootoutAllowed,
            "shots_shootout_allowed" => $this->shotsShootoutAllowed,
        ];
    }
}