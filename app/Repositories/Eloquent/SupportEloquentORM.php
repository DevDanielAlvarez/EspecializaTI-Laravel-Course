<?php

namespace App\Repositories\Eloquent;

use App\DTO\Support\StoreSupportDTO;
use App\DTO\Support\UpdateSupportDTO;
use App\Models\Support;
use App\Repositories\Interfaces\SupportRepositoryInterface;
use stdClass;

class SupportEloquentORM implements SupportRepositoryInterface{

    public function __construct(
        protected Support $model
    )
    {

    }

    public function all($filter = null): array{
        return $this->model

        //(where)

        ->where(function($query) use ($filter){

            $query->where('subject', $filter);
            $query->orWhere('body', 'like', "%{$filter}%");

        })->get()->toArray();
    }

    public function find(string $id): stdClass| null{

        $supportFound = $this->model->find($id);

        if(!$supportFound){
            return null;
        }

        return (object) $supportFound->toArray();

    }

    public function store(StoreSupportDTO $dto): stdClass{
        return (object) $this->model->create((array) $dto)->toArray();
    }

    public function update(UpdateSupportDTO $dto): stdClass | null{
        $supportFound = $this->model->find($dto->id);

        if(!$supportFound){
            return null;
        }

        $supportFound->update((array) $dto);

        return (object) $supportFound->toArray();
    }

    public function destroy(string $id): void{
        $this->model->findOrFail($id)->destroy();
    }

}
