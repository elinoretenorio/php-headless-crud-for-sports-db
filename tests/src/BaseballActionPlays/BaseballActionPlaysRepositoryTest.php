<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballActionPlays;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\BaseballActionPlays\{ BaseballActionPlaysDto, IBaseballActionPlaysRepository, BaseballActionPlaysRepository };

class BaseballActionPlaysRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private BaseballActionPlaysDto $dto;
    private IBaseballActionPlaysRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 2925,
            "baseball_event_state_id" => 8739,
            "play_type" => "forward",
            "notation" => "state",
            "notation_yaml" => "Moment fly rather improve couple sort social word. Hit government forget vote model wish day.",
            "baseball_defensive_group_id" => 3658,
            "comment" => "game",
            "runner_on_first_advance" => 8908,
            "runner_on_second_advance" => 2430,
            "runner_on_third_advance" => 6798,
            "outs_recorded" => 6396,
            "rbi" => 9424,
            "runs_scored" => 7023,
            "earned_runs_scored" => "capital",
        ];
        $this->dto = new BaseballActionPlaysDto($this->input);
        $this->repository = new BaseballActionPlaysRepository($this->db);
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
        $expected = 5848;

        $sql = "INSERT INTO `baseball_action_plays` (`baseball_event_state_id`, `play_type`, `notation`, `notation_yaml`, `baseball_defensive_group_id`, `comment`, `runner_on_first_advance`, `runner_on_second_advance`, `runner_on_third_advance`, `outs_recorded`, `rbi`, `runs_scored`, `earned_runs_scored`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->baseballEventStateId,
                $this->dto->playType,
                $this->dto->notation,
                $this->dto->notationYaml,
                $this->dto->baseballDefensiveGroupId,
                $this->dto->comment,
                $this->dto->runnerOnFirstAdvance,
                $this->dto->runnerOnSecondAdvance,
                $this->dto->runnerOnThirdAdvance,
                $this->dto->outsRecorded,
                $this->dto->rbi,
                $this->dto->runsScored,
                $this->dto->earnedRunsScored
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
        $expected = 5240;

        $sql = "UPDATE `baseball_action_plays` SET `baseball_event_state_id` = ?, `play_type` = ?, `notation` = ?, `notation_yaml` = ?, `baseball_defensive_group_id` = ?, `comment` = ?, `runner_on_first_advance` = ?, `runner_on_second_advance` = ?, `runner_on_third_advance` = ?, `outs_recorded` = ?, `rbi` = ?, `runs_scored` = ?, `earned_runs_scored` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->baseballEventStateId,
                $this->dto->playType,
                $this->dto->notation,
                $this->dto->notationYaml,
                $this->dto->baseballDefensiveGroupId,
                $this->dto->comment,
                $this->dto->runnerOnFirstAdvance,
                $this->dto->runnerOnSecondAdvance,
                $this->dto->runnerOnThirdAdvance,
                $this->dto->outsRecorded,
                $this->dto->rbi,
                $this->dto->runsScored,
                $this->dto->earnedRunsScored,
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
        $id = 3168;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 8263;

        $sql = "SELECT `id`, `baseball_event_state_id`, `play_type`, `notation`, `notation_yaml`, `baseball_defensive_group_id`, `comment`, `runner_on_first_advance`, `runner_on_second_advance`, `runner_on_third_advance`, `outs_recorded`, `rbi`, `runs_scored`, `earned_runs_scored`
                FROM `baseball_action_plays` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `baseball_event_state_id`, `play_type`, `notation`, `notation_yaml`, `baseball_defensive_group_id`, `comment`, `runner_on_first_advance`, `runner_on_second_advance`, `runner_on_third_advance`, `outs_recorded`, `rbi`, `runs_scored`, `earned_runs_scored`
                FROM `baseball_action_plays`";

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
        $id = 5923;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 2968;
        $expected = 9507;

        $sql = "DELETE FROM `baseball_action_plays` WHERE `id` = ?";

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