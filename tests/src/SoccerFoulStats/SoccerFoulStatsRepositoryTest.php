<?php

declare(strict_types=1);

namespace Sports\Tests\SoccerFoulStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\SoccerFoulStats\{ SoccerFoulStatsDto, ISoccerFoulStatsRepository, SoccerFoulStatsRepository };

class SoccerFoulStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private SoccerFoulStatsDto $dto;
    private ISoccerFoulStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 2211,
            "fouls_suffered" => "ability",
            "fouls_commited" => "institution",
            "cautions_total" => "worker",
            "cautions_pending" => "number",
            "caution_points_total" => "herself",
            "caution_points_pending" => "real",
            "ejections_total" => "simple",
        ];
        $this->dto = new SoccerFoulStatsDto($this->input);
        $this->repository = new SoccerFoulStatsRepository($this->db);
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
        $expected = 306;

        $sql = "INSERT INTO `soccer_foul_stats` (`fouls_suffered`, `fouls_commited`, `cautions_total`, `cautions_pending`, `caution_points_total`, `caution_points_pending`, `ejections_total`)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->foulsSuffered,
                $this->dto->foulsCommited,
                $this->dto->cautionsTotal,
                $this->dto->cautionsPending,
                $this->dto->cautionPointsTotal,
                $this->dto->cautionPointsPending,
                $this->dto->ejectionsTotal
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
        $expected = 720;

        $sql = "UPDATE `soccer_foul_stats` SET `fouls_suffered` = ?, `fouls_commited` = ?, `cautions_total` = ?, `cautions_pending` = ?, `caution_points_total` = ?, `caution_points_pending` = ?, `ejections_total` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->foulsSuffered,
                $this->dto->foulsCommited,
                $this->dto->cautionsTotal,
                $this->dto->cautionsPending,
                $this->dto->cautionPointsTotal,
                $this->dto->cautionPointsPending,
                $this->dto->ejectionsTotal,
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
        $id = 2812;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 5074;

        $sql = "SELECT `id`, `fouls_suffered`, `fouls_commited`, `cautions_total`, `cautions_pending`, `caution_points_total`, `caution_points_pending`, `ejections_total`
                FROM `soccer_foul_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `fouls_suffered`, `fouls_commited`, `cautions_total`, `cautions_pending`, `caution_points_total`, `caution_points_pending`, `ejections_total`
                FROM `soccer_foul_stats`";

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
        $id = 9252;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 7443;
        $expected = 3998;

        $sql = "DELETE FROM `soccer_foul_stats` WHERE `id` = ?";

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