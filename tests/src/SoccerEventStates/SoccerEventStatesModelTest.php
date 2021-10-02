<?php

declare(strict_types=1);

namespace Sports\Tests\SoccerEventStates;

use PHPUnit\Framework\TestCase;
use Sports\SoccerEventStates\{ SoccerEventStatesDto, SoccerEventStatesModel };

class SoccerEventStatesModelTest extends TestCase
{
    private array $input;
    private SoccerEventStatesDto $dto;
    private SoccerEventStatesModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 9216,
            "event_id" => 1193,
            "current_state" => 2732,
            "sequence_number" => 9783,
            "period_value" => "teach",
            "period_time_elapsed" => "treat",
            "period_time_remaining" => "hard",
            "minutes_elapsed" => "step",
            "period_minute_elapsed" => "quickly",
            "context" => "religious",
        ];
        $this->dto = new SoccerEventStatesDto($this->input);
        $this->model = new SoccerEventStatesModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new SoccerEventStatesModel(null);

        $this->assertInstanceOf(SoccerEventStatesModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 1427;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetEventId(): void
    {
        $this->assertEquals($this->dto->eventId, $this->model->getEventId());
    }

    public function testSetEventId(): void
    {
        $expected = 6359;
        $model = $this->model;
        $model->setEventId($expected);

        $this->assertEquals($expected, $model->getEventId());
    }

    public function testGetCurrentState(): void
    {
        $this->assertEquals($this->dto->currentState, $this->model->getCurrentState());
    }

    public function testSetCurrentState(): void
    {
        $expected = 5874;
        $model = $this->model;
        $model->setCurrentState($expected);

        $this->assertEquals($expected, $model->getCurrentState());
    }

    public function testGetSequenceNumber(): void
    {
        $this->assertEquals($this->dto->sequenceNumber, $this->model->getSequenceNumber());
    }

    public function testSetSequenceNumber(): void
    {
        $expected = 104;
        $model = $this->model;
        $model->setSequenceNumber($expected);

        $this->assertEquals($expected, $model->getSequenceNumber());
    }

    public function testGetPeriodValue(): void
    {
        $this->assertEquals($this->dto->periodValue, $this->model->getPeriodValue());
    }

    public function testSetPeriodValue(): void
    {
        $expected = "natural";
        $model = $this->model;
        $model->setPeriodValue($expected);

        $this->assertEquals($expected, $model->getPeriodValue());
    }

    public function testGetPeriodTimeElapsed(): void
    {
        $this->assertEquals($this->dto->periodTimeElapsed, $this->model->getPeriodTimeElapsed());
    }

    public function testSetPeriodTimeElapsed(): void
    {
        $expected = "place";
        $model = $this->model;
        $model->setPeriodTimeElapsed($expected);

        $this->assertEquals($expected, $model->getPeriodTimeElapsed());
    }

    public function testGetPeriodTimeRemaining(): void
    {
        $this->assertEquals($this->dto->periodTimeRemaining, $this->model->getPeriodTimeRemaining());
    }

    public function testSetPeriodTimeRemaining(): void
    {
        $expected = "provide";
        $model = $this->model;
        $model->setPeriodTimeRemaining($expected);

        $this->assertEquals($expected, $model->getPeriodTimeRemaining());
    }

    public function testGetMinutesElapsed(): void
    {
        $this->assertEquals($this->dto->minutesElapsed, $this->model->getMinutesElapsed());
    }

    public function testSetMinutesElapsed(): void
    {
        $expected = "agreement";
        $model = $this->model;
        $model->setMinutesElapsed($expected);

        $this->assertEquals($expected, $model->getMinutesElapsed());
    }

    public function testGetPeriodMinuteElapsed(): void
    {
        $this->assertEquals($this->dto->periodMinuteElapsed, $this->model->getPeriodMinuteElapsed());
    }

    public function testSetPeriodMinuteElapsed(): void
    {
        $expected = "government";
        $model = $this->model;
        $model->setPeriodMinuteElapsed($expected);

        $this->assertEquals($expected, $model->getPeriodMinuteElapsed());
    }

    public function testGetContext(): void
    {
        $this->assertEquals($this->dto->context, $this->model->getContext());
    }

    public function testSetContext(): void
    {
        $expected = "become";
        $model = $this->model;
        $model->setContext($expected);

        $this->assertEquals($expected, $model->getContext());
    }

    public function testToDto(): void
    {
        $this->assertEquals($this->dto, $this->model->toDto());
    }

    public function testJsonSerialize(): void
    {
        $this->assertEquals($this->input, $this->model->jsonSerialize());
    }
}