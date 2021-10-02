<?php

declare(strict_types=1);

namespace Sports\Tests\BasketballEventStates;

use PHPUnit\Framework\TestCase;
use Sports\BasketballEventStates\{ BasketballEventStatesDto, BasketballEventStatesModel };

class BasketballEventStatesModelTest extends TestCase
{
    private array $input;
    private BasketballEventStatesDto $dto;
    private BasketballEventStatesModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 8604,
            "event_id" => 2655,
            "current_state" => 2252,
            "sequence_number" => 5383,
            "period_value" => "improve",
            "period_time_elapsed" => "language",
            "period_time_remaining" => "together",
            "context" => "security",
        ];
        $this->dto = new BasketballEventStatesDto($this->input);
        $this->model = new BasketballEventStatesModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new BasketballEventStatesModel(null);

        $this->assertInstanceOf(BasketballEventStatesModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 96;
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
        $expected = 2169;
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
        $expected = 3286;
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
        $expected = 9032;
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
        $expected = "lay";
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
        $expected = "idea";
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
        $expected = "building";
        $model = $this->model;
        $model->setPeriodTimeRemaining($expected);

        $this->assertEquals($expected, $model->getPeriodTimeRemaining());
    }

    public function testGetContext(): void
    {
        $this->assertEquals($this->dto->context, $this->model->getContext());
    }

    public function testSetContext(): void
    {
        $expected = "work";
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