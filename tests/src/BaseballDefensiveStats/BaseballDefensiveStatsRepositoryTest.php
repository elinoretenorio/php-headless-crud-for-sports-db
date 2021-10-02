<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballDefensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\BaseballDefensiveStats\{ BaseballDefensiveStatsDto, IBaseballDefensiveStatsRepository, BaseballDefensiveStatsRepository };

class BaseballDefensiveStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private BaseballDefensiveStatsDto $dto;
    private IBaseballDefensiveStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 8555,
            "double_plays" => 7134,
            "triple_plays" => 6404,
            "putouts" => 112,
            "assists" => 9632,
            "errors" => 808,
            "fielding_percentage" => 741.27,
            "defensive_average" => 601.19,
            "errors_passed_ball" => 4035,
            "errors_catchers_interference" => 9172,
        ];
        $this->dto = new BaseballDefensiveStatsDto($this->input);
        $this->repository = new BaseballDefensiveStatsRepository($this->db);
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
        $expected = 1566;

        $sql = "INSERT INTO `baseball_defensive_stats` (`double_plays`, `triple_plays`, `putouts`, `assists`, `errors`, `fielding_percentage`, `defensive_average`, `errors_passed_ball`, `errors_catchers_interference`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->doublePlays,
                $this->dto->triplePlays,
                $this->dto->putouts,
                $this->dto->assists,
                $this->dto->errors,
                $this->dto->fieldingPercentage,
                $this->dto->defensiveAverage,
                $this->dto->errorsPassedBall,
                $this->dto->errorsCatchersInterference
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
        $expected = 4649;

        $sql = "UPDATE `baseball_defensive_stats` SET `double_plays` = ?, `triple_plays` = ?, `putouts` = ?, `assists` = ?, `errors` = ?, `fielding_percentage` = ?, `defensive_average` = ?, `errors_passed_ball` = ?, `errors_catchers_interference` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->doublePlays,
                $this->dto->triplePlays,
                $this->dto->putouts,
                $this->dto->assists,
                $this->dto->errors,
                $this->dto->fieldingPercentage,
                $this->dto->defensiveAverage,
                $this->dto->errorsPassedBall,
                $this->dto->errorsCatchersInterference,
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
        $id = 595;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 3241;

        $sql = "SELECT `id`, `double_plays`, `triple_plays`, `putouts`, `assists`, `errors`, `fielding_percentage`, `defensive_average`, `errors_passed_ball`, `errors_catchers_interference`
                FROM `baseball_defensive_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `double_plays`, `triple_plays`, `putouts`, `assists`, `errors`, `fielding_percentage`, `defensive_average`, `errors_passed_ball`, `errors_catchers_interference`
                FROM `baseball_defensive_stats`";

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
        $id = 606;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 6049;
        $expected = 7918;

        $sql = "DELETE FROM `baseball_defensive_stats` WHERE `id` = ?";

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