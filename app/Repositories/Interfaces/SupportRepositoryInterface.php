<?php

namespace App\Repositories\Interfaces;

use App\DTO\Support\StoreSupportDTO;
use App\DTO\Support\UpdateSupportDTO;
use stdClass;

interface SupportRepositoryInterface{

    public function all($filter = null): array;

    public function find(string $id): stdClass | null;

    public function store(StoreSupportDTO $dto): stdClass;

    public function update(UpdateSupportDTO $dto): stdClass | null;

    public function destroy(string $id): void;

}
