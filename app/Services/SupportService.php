<?php

namespace App\Services;

use App\DTO\Support\StoreSupportDTO;
use App\DTO\Support\UpdateSupportDTO;
use App\Repositories\Interfaces\SupportRepositoryInterface;
use stdClass;

class SupportService{

    public function __construct(protected SupportRepositoryInterface $repository)
    {

    }

    public function all($s = null):array{

        return $this->repository->all($s);

    }

    public function find(string $id): stdClass{

        return $this->repository->find($id);

    }

    public function store(StoreSupportDTO $dto):stdClass{

        return $this->repository->store($dto);

    }

    public function update(UpdateSupportDTO $dto):stdClass{
        return $this->repository->update($dto);
    }

    public function destroy(string $id):bool{

        return $this->repository->destroy($id);

    }


}
