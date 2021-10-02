<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballEventStates;

use PHPUnit\Framework\TestCase;
use Sports\BaseballEventStates\{ BaseballEventStatesDto, BaseballEventStatesModel };

class BaseballEventStatesModelTest extends TestCase
{
    private array $input;
    private BaseballEventStatesDto $dto;
    private BaseballEventStatesModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 8857,
            "event_id" => 2216,
            "current_state" => 6307,
            "sequence_number" => 3189,
            "at_bat_number" => 8615,
            "inning_value" => 5291,
            "inning_half" => "resource",
            "outs" => 4603,
            "balls" => 3527,
            "strikes" => 1300,
            "runner_on_first_id" => 616,
            "runner_on_second_id" => 6900,
            "runner_on_third_id" => 5382,
            "runner_on_first" => 2397,
            "runner_on_second" => 8995,
            "runner_on_third" => 7935,
            "runs_this_inning_half" => 1685,
            "pitcher_id" => 7635,
            "batter_id" => 4554,
            "batter_side" => "rise",
            "context" => "central",
        ];
        $this->dto = new BaseballEventStatesDto($this->input);
        $this->model = new BaseballEventStatesModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new BaseballEventStatesModel(null);

        $this->assertInstanceOf(BaseballEventStatesModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 9682;
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
        $expected = 2617;
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
        $expected = 845;
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
        $expected = 1349;
        $model = $this->model;
        $model->setSequenceNumber($expected);

        $this->assertEquals($expected, $model->getSequenceNumber());
    }

    public function testGetAtBatNumber(): void
    {
        $this->assertEquals($this->dto->atBatNumber, $this->model->getAtBatNumber());
    }

    public function testSetAtBatNumber(): void
    {
        $expected = 90;
        $model = $this->model;
        $model->setAtBatNumber($expected);

        $this->assertEquals($expected, $model->getAtBatNumber());
    }

    public function testGetInningValue(): void
    {
        $this->assertEquals($this->dto->inningValue, $this->model->getInningValue());
    }

    public function testSetInningValue(): void
    {
        $expected = 1158;
        $model = $this->model;
        $model->setInningValue($expected);

        $this->assertEquals($expected, $model->getInningValue());
    }

    public function testGetInningHalf(): void
    {
        $this->assertEquals($this->dto->inningHalf, $this->model->getInningHalf());
    }

    public function testSetInningHalf(): void
    {
        $expected = "through";
        $model = $this->model;
        $model->setInningHalf($expected);

        $this->assertEquals($expected, $model->getInningHalf());
    }

    public function testGetOuts(): void
    {
        $this->assertEquals($this->dto->outs, $this->model->getOuts());
    }

    public function testSetOuts(): void
    {
        $expected = 5084;
        $model = $this->model;
        $model->setOuts($expected);

        $this->assertEquals($expected, $model->getOuts());
    }

    public function testGetBalls(): void
    {
        $this->assertEquals($this->dto->balls, $this->model->getBalls());
    }

    public function testSetBalls(): void
    {
        $expected = 3910;
        $model = $this->model;
        $model->setBalls($expected);

        $this->assertEquals($expected, $model->getBalls());
    }

    public function testGetStrikes(): void
    {
        $this->assertEquals($this->dto->strikes, $this->model->getStrikes());
    }

    public function testSetStrikes(): void
    {
        $expected = 5480;
        $model = $this->model;
        $model->setStrikes($expected);

        $this->assertEquals($expected, $model->getStrikes());
    }

    public function testGetRunnerOnFirstId(): void
    {
        $this->assertEquals($this->dto->runnerOnFirstId, $this->model->getRunnerOnFirstId());
    }

    public function testSetRunnerOnFirstId(): void
    {
        $expected = 3639;
        $model = $this->model;
        $model->setRunnerOnFirstId($expected);

        $this->assertEquals($expected, $model->getRunnerOnFirstId());
    }

    public function testGetRunnerOnSecondId(): void
    {
        $this->assertEquals($this->dto->runnerOnSecondId, $this->model->getRunnerOnSecondId());
    }

    public function testSetRunnerOnSecondId(): void
    {
        $expected = 3949;
        $model = $this->model;
        $model->setRunnerOnSecondId($expected);

        $this->assertEquals($expected, $model->getRunnerOnSecondId());
    }

    public function testGetRunnerOnThirdId(): void
    {
        $this->assertEquals($this->dto->runnerOnThirdId, $this->model->getRunnerOnThirdId());
    }

    public function testSetRunnerOnThirdId(): void
    {
        $expected = 8366;
        $model = $this->model;
        $model->setRunnerOnThirdId($expected);

        $this->assertEquals($expected, $model->getRunnerOnThirdId());
    }

    public function testGetRunnerOnFirst(): void
    {
        $this->assertEquals($this->dto->runnerOnFirst, $this->model->getRunnerOnFirst());
    }

    public function testSetRunnerOnFirst(): void
    {
        $expected = 3713;
        $model = $this->model;
        $model->setRunnerOnFirst($expected);

        $this->assertEquals($expected, $model->getRunnerOnFirst());
    }

    public function testGetRunnerOnSecond(): void
    {
        $this->assertEquals($this->dto->runnerOnSecond, $this->model->getRunnerOnSecond());
    }

    public function testSetRunnerOnSecond(): void
    {
        $expected = 95;
        $model = $this->model;
        $model->setRunnerOnSecond($expected);

        $this->assertEquals($expected, $model->getRunnerOnSecond());
    }

    public function testGetRunnerOnThird(): void
    {
        $this->assertEquals($this->dto->runnerOnThird, $this->model->getRunnerOnThird());
    }

    public function testSetRunnerOnThird(): void
    {
        $expected = 9001;
        $model = $this->model;
        $model->setRunnerOnThird($expected);

        $this->assertEquals($expected, $model->getRunnerOnThird());
    }

    public function testGetRunsThisInningHalf(): void
    {
        $this->assertEquals($this->dto->runsThisInningHalf, $this->model->getRunsThisInningHalf());
    }

    public function testSetRunsThisInningHalf(): void
    {
        $expected = 7224;
        $model = $this->model;
        $model->setRunsThisInningHalf($expected);

        $this->assertEquals($expected, $model->getRunsThisInningHalf());
    }

    public function testGetPitcherId(): void
    {
        $this->assertEquals($this->dto->pitcherId, $this->model->getPitcherId());
    }

    public function testSetPitcherId(): void
    {
        $expected = 5106;
        $model = $this->model;
        $model->setPitcherId($expected);

        $this->assertEquals($expected, $model->getPitcherId());
    }

    public function testGetBatterId(): void
    {
        $this->assertEquals($this->dto->batterId, $this->model->getBatterId());
    }

    public function testSetBatterId(): void
    {
        $expected = 7804;
        $model = $this->model;
        $model->setBatterId($expected);

        $this->assertEquals($expected, $model->getBatterId());
    }

    public function testGetBatterSide(): void
    {
        $this->assertEquals($this->dto->batterSide, $this->model->getBatterSide());
    }

    public function testSetBatterSide(): void
    {
        $expected = "agreement";
        $model = $this->model;
        $model->setBatterSide($expected);

        $this->assertEquals($expected, $model->getBatterSide());
    }

    public function testGetContext(): void
    {
        $this->assertEquals($this->dto->context, $this->model->getContext());
    }

    public function testSetContext(): void
    {
        $expected = "even";
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