<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballEventStates;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\AmericanFootballEventStates\{ AmericanFootballEventStatesDto, IAmericanFootballEventStatesRepository, AmericanFootballEventStatesRepository };

class AmericanFootballEventStatesRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private AmericanFootballEventStatesDto $dto;
    private IAmericanFootballEventStatesRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 6731,
            "event_id" => 9827,
            "current_state" => 504,
            "sequence_number" => 9273,
            "period_value" => 1738,
            "period_time_elapsed" => "return",
            "period_time_remaining" => "activity",
            "clock_state" => "turn",
            "down" => 8128,
            "team_in_possession_id" => 9423,
            "distance_for_1st_down" => 8619,
            "field_side" => "suddenly",
            "field_line" => 4802,
            "context" => "need",
        ];
        $this->dto = new AmericanFootballEventStatesDto($this->input);
        $this->repository = new AmericanFootballEventStatesRepository($this->db);
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
        $expected = 4610;

        $sql = "INSERT INTO `american_football_event_states` (`event_id`, `current_state`, `sequence_number`, `period_value`, `period_time_elapsed`, `period_time_remaining`, `clock_state`, `down`, `team_in_possession_id`, `distance_for_1st_down`, `field_side`, `field_line`, `context`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

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
                $this->dto->periodValue,
                $this->dto->periodTimeElapsed,
                $this->dto->periodTimeRemaining,
                $this->dto->clockState,
                $this->dto->down,
                $this->dto->teamInPossessionId,
                $this->dto->distanceFor1stDown,
                $this->dto->fieldSide,
                $this->dto->fieldLine,
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
        $expected = 4350;

        $sql = "UPDATE `american_football_event_states` SET `event_id` = ?, `current_state` = ?, `sequence_number` = ?, `period_value` = ?, `period_time_elapsed` = ?, `period_time_remaining` = ?, `clock_state` = ?, `down` = ?, `team_in_possession_id` = ?, `distance_for_1st_down` = ?, `field_side` = ?, `field_line` = ?, `context` = ?
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
                $this->dto->periodValue,
                $this->dto->periodTimeElapsed,
                $this->dto->periodTimeRemaining,
                $this->dto->clockState,
                $this->dto->down,
                $this->dto->teamInPossessionId,
                $this->dto->distanceFor1stDown,
                $this->dto->fieldSide,
                $this->dto->fieldLine,
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
        $id = 1801;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 8606;

        $sql = "SELECT `id`, `event_id`, `current_state`, `sequence_number`, `period_value`, `period_time_elapsed`, `period_time_remaining`, `clock_state`, `down`, `team_in_possession_id`, `distance_for_1st_down`, `field_side`, `field_line`, `context`
                FROM `american_football_event_states` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `event_id`, `current_state`, `sequence_number`, `period_value`, `period_time_elapsed`, `period_time_remaining`, `clock_state`, `down`, `team_in_possession_id`, `distance_for_1st_down`, `field_side`, `field_line`, `context`
                FROM `american_football_event_states`";

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
        $id = 8087;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 6103;
        $expected = 7754;

        $sql = "DELETE FROM `american_football_event_states` WHERE `id` = ?";

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