<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballEventStates;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\BaseballEventStates\{ BaseballEventStatesDto, IBaseballEventStatesRepository, BaseballEventStatesRepository };

class BaseballEventStatesRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private BaseballEventStatesDto $dto;
    private IBaseballEventStatesRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 3363,
            "event_id" => 5809,
            "current_state" => 337,
            "sequence_number" => 5204,
            "at_bat_number" => 2939,
            "inning_value" => 3665,
            "inning_half" => "grow",
            "outs" => 2317,
            "balls" => 344,
            "strikes" => 8818,
            "runner_on_first_id" => 4869,
            "runner_on_second_id" => 452,
            "runner_on_third_id" => 6124,
            "runner_on_first" => 937,
            "runner_on_second" => 1319,
            "runner_on_third" => 5485,
            "runs_this_inning_half" => 955,
            "pitcher_id" => 472,
            "batter_id" => 4839,
            "batter_side" => "grow",
            "context" => "compare",
        ];
        $this->dto = new BaseballEventStatesDto($this->input);
        $this->repository = new BaseballEventStatesRepository($this->db);
    }

    protected function tearDown(): void
    {
        unset($this->db);
        unset($this->result);
        unset($this->input);
        unset($this->dto);
        unset($this->repository);
    }

    public function testInsert_ReturnsFailedOnException(): void
    {
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->insert($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testInsert_ReturnsId(): void
    {
        $expected = 7558;

        $sql = "INSERT INTO `baseball_event_states` (`event_id`, `current_state`, `sequence_number`, `at_bat_number`, `inning_value`, `inning_half`, `outs`, `balls`, `strikes`, `runner_on_first_id`, `runner_on_second_id`, `runner_on_third_id`, `runner_on_first`, `runner_on_second`, `runner_on_third`, `runs_this_inning_half`, `pitcher_id`, `batter_id`, `batter_side`, `context`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->eventId,
                $this->dto->currentState,
                $this->dto->sequenceNumber,
                $this->dto->atBatNumber,
                $this->dto->inningValue,
                $this->dto->inningHalf,
                $this->dto->outs,
                $this->dto->balls,
                $this->dto->strikes,
                $this->dto->runnerOnFirstId,
                $this->dto->runnerOnSecondId,
                $this->dto->runnerOnThirdId,
                $this->dto->runnerOnFirst,
                $this->dto->runnerOnSecond,
                $this->dto->runnerOnThird,
                $this->dto->runsThisInningHalf,
                $this->dto->pitcherId,
                $this->dto->batterId,
                $this->dto->batterSide,
                $this->dto->context
            ]);
        $this->db->expects($this->once())
            ->method("lastInsertId")
            ->willReturn($expected);

        $actual = $this->repository->insert($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testUpdate_ReturnsFailedOnException(): void
    {
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->update($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testUpdate_ReturnsRowCount(): void
    {
        $expected = 7458;

        $sql = "UPDATE `baseball_event_states` SET `event_id` = ?, `current_state` = ?, `sequence_number` = ?, `at_bat_number` = ?, `inning_value` = ?, `inning_half` = ?, `outs` = ?, `balls` = ?, `strikes` = ?, `runner_on_first_id` = ?, `runner_on_second_id` = ?, `runner_on_third_id` = ?, `runner_on_first` = ?, `runner_on_second` = ?, `runner_on_third` = ?, `runs_this_inning_half` = ?, `pitcher_id` = ?, `batter_id` = ?, `batter_side` = ?, `context` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->eventId,
                $this->dto->currentState,
                $this->dto->sequenceNumber,
                $this->dto->atBatNumber,
                $this->dto->inningValue,
                $this->dto->inningHalf,
                $this->dto->outs,
                $this->dto->balls,
                $this->dto->strikes,
                $this->dto->runnerOnFirstId,
                $this->dto->runnerOnSecondId,
                $this->dto->runnerOnThirdId,
                $this->dto->runnerOnFirst,
                $this->dto->runnerOnSecond,
                $this->dto->runnerOnThird,
                $this->dto->runsThisInningHalf,
                $this->dto->pitcherId,
                $this->dto->batterId,
                $this->dto->batterSide,
                $this->dto->context,
                $this->dto->id
            ]);
        $this->result->expects($this->once())
            ->method("rowCount")
            ->willReturn($expected);

        $actual = $this->repository->update($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testGet_ReturnsEmptyOnException(): void
    {
        $id = 448;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 5229;

        $sql = "SELECT `id`, `event_id`, `current_state`, `sequence_number`, `at_bat_number`, `inning_value`, `inning_half`, `outs`, `balls`, `strikes`, `runner_on_first_id`, `runner_on_second_id`, `runner_on_third_id`, `runner_on_first`, `runner_on_second`, `runner_on_third`, `runs_this_inning_half`, `pitcher_id`, `batter_id`, `batter_side`, `context`
                FROM `baseball_event_states` WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([$id]);
        $this->result->expects($this->once())
            ->method("fetchAll")
            ->willReturn([$this->input]);

        $actual = $this->repository->get($id);
        $this->assertEquals($this->dto, $actual);
    }

    public function testGetAll_ReturnsEmptyOnException(): void
    {
        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->getAll();
        $this->assertEmpty($actual);
    }

    public function testGetAll_ReturnsDtos(): void
    {
        $sql = "SELECT `id`, `event_id`, `current_state`, `sequence_number`, `at_bat_number`, `inning_value`, `inning_half`, `outs`, `balls`, `strikes`, `runner_on_first_id`, `runner_on_second_id`, `runner_on_third_id`, `runner_on_first`, `runner_on_second`, `runner_on_third`, `runs_this_inning_half`, `pitcher_id`, `batter_id`, `batter_side`, `context`
                FROM `baseball_event_states`";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute");
        $this->result->expects($this->once())
            ->method("fetchAll")
            ->willReturn([$this->input]);

        $actual = $this->repository->getAll();
        $this->assertEquals([$this->dto], $actual);
    }

    public function testDelete_ReturnsFailedOnException(): void
    {
        $id = 72;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 469;
        $expected = 7779;

        $sql = "DELETE FROM `baseball_event_states` WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([$id]);
        $this->result->expects($this->once())
            ->method("rowCount")
            ->willReturn($expected);

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }
}