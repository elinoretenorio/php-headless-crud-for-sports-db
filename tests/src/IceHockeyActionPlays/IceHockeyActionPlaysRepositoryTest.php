<?php

declare(strict_types=1);

namespace Sports\Tests\IceHockeyActionPlays;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\IceHockeyActionPlays\{ IceHockeyActionPlaysDto, IIceHockeyActionPlaysRepository, IceHockeyActionPlaysRepository };

class IceHockeyActionPlaysRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private IceHockeyActionPlaysDto $dto;
    private IIceHockeyActionPlaysRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 3112,
            "ice_hockey_event_state_id" => 5770,
            "play_type" => "bring",
            "score_attempt_type" => "require",
            "play_result" => "work",
            "comment" => "there",
        ];
        $this->dto = new IceHockeyActionPlaysDto($this->input);
        $this->repository = new IceHockeyActionPlaysRepository($this->db);
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
        $expected = 4473;

        $sql = "INSERT INTO `ice_hockey_action_plays` (`ice_hockey_event_state_id`, `play_type`, `score_attempt_type`, `play_result`, `comment`)
                VALUES (?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->iceHockeyEventStateId,
                $this->dto->playType,
                $this->dto->scoreAttemptType,
                $this->dto->playResult,
                $this->dto->comment
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
        $expected = 3337;

        $sql = "UPDATE `ice_hockey_action_plays` SET `ice_hockey_event_state_id` = ?, `play_type` = ?, `score_attempt_type` = ?, `play_result` = ?, `comment` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->iceHockeyEventStateId,
                $this->dto->playType,
                $this->dto->scoreAttemptType,
                $this->dto->playResult,
                $this->dto->comment,
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
        $id = 204;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 9279;

        $sql = "SELECT `id`, `ice_hockey_event_state_id`, `play_type`, `score_attempt_type`, `play_result`, `comment`
                FROM `ice_hockey_action_plays` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `ice_hockey_event_state_id`, `play_type`, `score_attempt_type`, `play_result`, `comment`
                FROM `ice_hockey_action_plays`";

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
        $id = 4498;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 4961;
        $expected = 3217;

        $sql = "DELETE FROM `ice_hockey_action_plays` WHERE `id` = ?";

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