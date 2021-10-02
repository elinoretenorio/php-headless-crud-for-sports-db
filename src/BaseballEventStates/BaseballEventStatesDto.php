<?php

declare(strict_types=1);

namespace Sports\BaseballEventStates;

class BaseballEventStatesDto 
{
    public int $id;
    public int $eventId;
    public int $currentState;
    public int $sequenceNumber;
    public int $atBatNumber;
    public int $inningValue;
    public string $inningHalf;
    public int $outs;
    public int $balls;
    public int $strikes;
    public int $runnerOnFirstId;
    public int $runnerOnSecondId;
    public int $runnerOnThirdId;
    public int $runnerOnFirst;
    public int $runnerOnSecond;
    public int $runnerOnThird;
    public int $runsThisInningHalf;
    public int $pitcherId;
    public int $batterId;
    public string $batterSide;
    public string $context;

    public function __construct(array $row = null)
    {
        if ($row === null) {
            return;
        }

        $this->id = (int) ($row["id"] ?? 0);
        $this->eventId = (int) ($row["event_id"] ?? 0);
        $this->currentState = (int) ($row["current_state"] ?? 0);
        $this->sequenceNumber = (int) ($row["sequence_number"] ?? 0);
        $this->atBatNumber = (int) ($row["at_bat_number"] ?? 0);
        $this->inningValue = (int) ($row["inning_value"] ?? 0);
        $this->inningHalf = $row["inning_half"] ?? "";
        $this->outs = (int) ($row["outs"] ?? 0);
        $this->balls = (int) ($row["balls"] ?? 0);
        $this->strikes = (int) ($row["strikes"] ?? 0);
        $this->runnerOnFirstId = (int) ($row["runner_on_first_id"] ?? 0);
        $this->runnerOnSecondId = (int) ($row["runner_on_second_id"] ?? 0);
        $this->runnerOnThirdId = (int) ($row["runner_on_third_id"] ?? 0);
        $this->runnerOnFirst = (int) ($row["runner_on_first"] ?? 0);
        $this->runnerOnSecond = (int) ($row["runner_on_second"] ?? 0);
        $this->runnerOnThird = (int) ($row["runner_on_third"] ?? 0);
        $this->runsThisInningHalf = (int) ($row["runs_this_inning_half"] ?? 0);
        $this->pitcherId = (int) ($row["pitcher_id"] ?? 0);
        $this->batterId = (int) ($row["batter_id"] ?? 0);
        $this->batterSide = $row["batter_side"] ?? "";
        $this->context = $row["context"] ?? "";
    }
}