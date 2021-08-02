<?php

namespace Datomatic\FattureInCloud\Resources;

abstract class Resource extends BaseResource
{
    public function all(array $params = [])
    {
        return $this->client->request(
            'get',
            $this->path,
            $params
        );
    }

    public function create(array $data)
    {
        return $this->client->request(
            'post',
            $this->path,
            $this->parseObjArray($data)
        )['data'];
    }

    public function edit($id, array $data)
    {
        return $this->client->request(
            'put',
            $this->path.'/'.$id,
            $this->parseObjArray($data)
        )['data'];
    }

    protected function parseObjArray($params)
    {
        return $params;
    }

    public function delete($id, array $params = [])
    {
        return $this->client->request(
            'delete',
            $this->path.'/'.$id,
            $params
        );
    }

    public function getById($id, array $params = [])
    {
        return $this->client->request(
            'get',
            $this->path.'/'.$id,
            $params
        )['data'];
    }
}
