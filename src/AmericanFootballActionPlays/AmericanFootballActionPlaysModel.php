<?php

declare(strict_types=1);

namespace Sports\AmericanFootballActionPlays;

use JsonSerializable;

class AmericanFootballActionPlaysModel implements JsonSerializable
{
    private int $id;
    private int $americanFootballEventStateId;
    private string $playType;
    private string $scoreAttemptType;
    private string $driveResult;
    private int $points;
    private string $comment;

    public function __construct(AmericanFootballActionPlaysDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->americanFootballEventStateId = $dto->americanFootballEventStateId;
        $this->playType = $dto->playType;
        $this->scoreAttemptType = $dto->scoreAttemptType;
        $this->driveResult = $dto->driveResult;
        $this->points = $dto->points;
        $this->comment = $dto->comment;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getAmericanFootballEventStateId(): int
    {
        return $this->americanFootballEventStateId;
    }

    public function setAmericanFootballEventStateId(int $americanFootballEventStateId): void
    {
        $this->americanFootballEventStateId = $americanFootballEventStateId;
    }

    public function getPlayType(): string
    {
        return $this->playType;
    }

    public function setPlayType(string $playType): void
    {
        $this->playType = $playType;
    }

    public function getScoreAttemptType(): string
    {
        return $this->scoreAttemptType;
    }

    public function setScoreAttemptType(string $scoreAttemptType): void
    {
        $this->scoreAttemptType = $scoreAttemptType;
    }

    public function getDriveResult(): string
    {
        return $this->driveResult;
    }

    public function setDriveResult(string $driveResult): void
    {
        $this->driveResult = $driveResult;
    }

    public function getPoints(): int
    {
        return $this->points;
    }

    public function setPoints(int $points): void
    {
        $this->points = $points;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    public function toDto(): AmericanFootballActionPlaysDto
    {
        $dto = new AmericanFootballActionPlaysDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->americanFootballEventStateId = (int) ($this->americanFootballEventStateId ?? 0);
        $dto->playType = $this->playType ?? "";
        $dto->scoreAttemptType = $this->scoreAttemptType ?? "";
        $dto->driveResult = $this->driveResult ?? "";
        $dto->points = (int) ($this->points ?? 0);
        $dto->comment = $this->comment ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "american_football_event_state_id" => $this->americanFootballEventStateId,
            "play_type" => $this->playType,
            "score_attempt_type" => $this->scoreAttemptType,
            "drive_result" => $this->driveResult,
            "points" => $this->points,
            "comment" => $this->comment,
        ];
    }
}