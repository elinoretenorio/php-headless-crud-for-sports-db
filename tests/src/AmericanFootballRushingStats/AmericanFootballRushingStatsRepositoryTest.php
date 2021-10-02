<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballRushingStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\AmericanFootballRushingStats\{ AmericanFootballRushingStatsDto, IAmericanFootballRushingStatsRepository, AmericanFootballRushingStatsRepository };

class AmericanFootballRushingStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private AmericanFootballRushingStatsDto $dto;
    private IAmericanFootballRushingStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 7210,
            "rushes_attempts" => "these",
            "rushes_yards" => "simply",
            "rushes_touchdowns" => "like",
            "rushing_average_yards_per" => "free",
            "rushes_first_down" => "scientist",
            "rushes_longest" => "possible",
        ];
        $this->dto = new AmericanFootballRushingStatsDto($this->input);
        $this->repository = new AmericanFootballRushingStatsRepository($this->db);
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
        $expected = 3645;

        $sql = "INSERT INTO `american_football_rushing_stats` (`rushes_attempts`, `rushes_yards`, `rushes_touchdowns`, `rushing_average_yards_per`, `rushes_first_down`, `rushes_longest`)
                VALUES (?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->rushesAttempts,
                $this->dto->rushesYards,
                $this->dto->rushesTouchdowns,
                $this->dto->rushingAverageYardsPer,
                $this->dto->rushesFirstDown,
                $this->dto->rushesLongest
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
        $expected = 7254;

        $sql = "UPDATE `american_football_rushing_stats` SET `rushes_attempts` = ?, `rushes_yards` = ?, `rushes_touchdowns` = ?, `rushing_average_yards_per` = ?, `rushes_first_down` = ?, `rushes_longest` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->rushesAttempts,
                $this->dto->rushesYards,
                $this->dto->rushesTouchdowns,
                $this->dto->rushingAverageYardsPer,
                $this->dto->rushesFirstDown,
                $this->dto->rushesLongest,
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
        $id = 4892;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 1858;

        $sql = "SELECT `id`, `rushes_attempts`, `rushes_yards`, `rushes_touchdowns`, `rushing_average_yards_per`, `rushes_first_down`, `rushes_longest`
                FROM `american_football_rushing_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `rushes_attempts`, `rushes_yards`, `rushes_touchdowns`, `rushing_average_yards_per`, `rushes_first_down`, `rushes_longest`
                FROM `american_football_rushing_stats`";

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
        $id = 2913;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 1372;
        $expected = 5555;

        $sql = "DELETE FROM `american_football_rushing_stats` WHERE `id` = ?";

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