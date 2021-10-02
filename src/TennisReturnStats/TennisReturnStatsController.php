<?php

declare(strict_types=1);

namespace Sports\TennisReturnStats;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface as RequestInterface;
use Laminas\Diactoros\Response\JsonResponse;

class TennisReturnStatsController 
{
    const ERROR_INVALID_INPUT = "Invalid input";

    private ITennisReturnStatsService $service;

    public function __construct(ITennisReturnStatsService $service)
    {
        $this->service = $service;        
    }

    public function insert(RequestInterface $request, array $args): ResponseInterface
    {
        $data = json_decode($request->getBody()->getContents(), true);
        if (empty($data)) {
            $data = $request->getParsedBody();
        }

        /** @var TennisReturnStatsModel $model */
        $model = $this->service->createModel($data);

        $result = $this->service->insert($model);

        return new JsonResponse(["result" => $result]);
    }

    public function update(RequestInterface $request, array $args): ResponseInterface
    {
        $id = (int) ($args["id"] ?? 0);
        if ($id <= 0) {
            return new JsonResponse(["result" => $id, "message" => self::ERROR_INVALID_INPUT]);
        }

        $data = json_decode($request->getBody()->getContents(), true);
        if (empty($data)) {
            $data = $request->getParsedBody();
        }

        /** @var TennisReturnStatsModel $model */
        $model = $this->service->createModel($data);
        $model->setId($id);

        $result = $this->service->update($model);

        return new JsonResponse(["result" => $result]);
    }

    public function get(RequestInterface $request, array $args): ResponseInterface
    {
        $id = (int) ($args["id"] ?? 0);
        if ($id <= 0) {
            return new JsonResponse(["result" => $id, "message" => self::ERROR_INVALID_INPUT]);
        }

        /** @var TennisReturnStatsModel $model */
        $model = $this->service->get($id);

        return new JsonResponse(["result" => $model->jsonSerialize()]);
    }

    public function getAll(RequestInterface $request, array $args): ResponseInterface
    {
        $models = $this->service->getAll();

        $result = [];

        /** @var TennisReturnStatsModel $model */
        foreach ($models as $model) {
            $result[] = $model->jsonSerialize();
        }

        return new JsonResponse(["result" => $result]);
    }

    public function delete(RequestInterface $request, array $args): ResponseInterface
    {
        $id = (int) ($args["id"] ?? 0);
        if ($id <= 0) {
            return new JsonResponse(["result" => $id, "message" => self::ERROR_INVALID_INPUT]);
        }

        $result = $this->service->delete($id);

        return new JsonResponse(["result" => $result]);
    }
}