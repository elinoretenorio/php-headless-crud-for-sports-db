<?php

declare(strict_types=1);

namespace Sports\IceHockeyActionPlays;

use JsonSerializable;

class IceHockeyActionPlaysModel implements JsonSerializable
{
    private int $id;
    private int $iceHockeyEventStateId;
    private string $playType;
    private string $scoreAttemptType;
    private string $playResult;
    private string $comment;

    public function __construct(IceHockeyActionPlaysDto $dto = null)
    {
        if ($dto === null) {
            return;
        }

        $this->id = $dto->id;
        $this->iceHockeyEventStateId = $dto->iceHockeyEventStateId;
        $this->playType = $dto->playType;
        $this->scoreAttemptType = $dto->scoreAttemptType;
        $this->playResult = $dto->playResult;
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

    public function getIceHockeyEventStateId(): int
    {
        return $this->iceHockeyEventStateId;
    }

    public function setIceHockeyEventStateId(int $iceHockeyEventStateId): void
    {
        $this->iceHockeyEventStateId = $iceHockeyEventStateId;
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

    public function getPlayResult(): string
    {
        return $this->playResult;
    }

    public function setPlayResult(string $playResult): void
    {
        $this->playResult = $playResult;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    public function toDto(): IceHockeyActionPlaysDto
    {
        $dto = new IceHockeyActionPlaysDto();
        $dto->id = (int) ($this->id ?? 0);
        $dto->iceHockeyEventStateId = (int) ($this->iceHockeyEventStateId ?? 0);
        $dto->playType = $this->playType ?? "";
        $dto->scoreAttemptType = $this->scoreAttemptType ?? "";
        $dto->playResult = $this->playResult ?? "";
        $dto->comment = $this->comment ?? "";

        return $dto;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "ice_hockey_event_state_id" => $this->iceHockeyEventStateId,
            "play_type" => $this->playType,
            "score_attempt_type" => $this->scoreAttemptType,
            "play_result" => $this->playResult,
            "comment" => $this->comment,
        ];
    }
}