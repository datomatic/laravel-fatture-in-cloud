<?php

namespace Datomatic\FattureInCloud\Resources;

use Illuminate\Support\LazyCollection;

abstract class Resource extends BaseResource
{
    public function all(array $data = []): array
    {
        if (isset($data['page'])) {
            $this->requestData(
                method: 'get',
                data: $data
            );
        }

        return LazyCollection::make(
            function () use ($data) {
                $page = 1;
                do {
                    $data['page'] = $page;
                    $response = $this->request(
                        method: 'get',
                        data: $data
                    );
                    foreach ($response['data'] as $result) {
                        yield $result;
                    }
                    $page++;
                } while (array_key_exists('next_page_url',$response) && $response['next_page_url'] !== null);
            }
        )->all();
    }

    public function create(array $data): array
    {
        return $this->requestData(
            method: 'post',
            data: $data
        );
    }

    public function edit(int $id, array $data): array
    {
        return $this->requestData(
            method: 'put',
            path: $id,
            data: $data
        );
    }

    public function delete(int $id, array $data = []): ?array
    {
        return $this->request(
            method: 'delete',
            path: $id,
            data: $data
        );
    }

    public function getById(int $id, array $data = []): array
    {
        return $this->requestData(
            method: 'get',
            path: $id,
            data: $data
        );
    }
}
