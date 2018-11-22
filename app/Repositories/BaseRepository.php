<?php
/**
 * Created by PhpStorm.
 * User: pathao
 * Date: 8/16/18
 * Time: 5:15 PM
 */

namespace App\Repositories;


class BaseRepository implements BaseRepositoryContract
{
    /**
     * Stores the model object.
     *
     * @var Eloquent
     */
    protected $model;

    /**
     * @param $id
     * @return \Illuminate\Support\Collection|null|static
     */
    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * @param $field
     * @param $value
     * @return \Illuminate\Support\Collection|null|static
     */
    public function findBy($field, $value)
    {
        return $this->model->where($field, '=', $value)->get();
    }

    /**
     * @param array $params
     * @param array $fields Which fields to select
     * @return \Illuminate\Support\Collection|null|static
     */
    public function findByProperties(array $params, array $fields = ['*'])
    {
        $query = $this->model->query();

        foreach ($params as $key => $value) {
            $query->where($key, $value);
        }

        return $query->get($fields);
    }

    /**
     * @param array $params
     * @param array $fields Which fields to select
     * @return Model|null|static
     */
    public function findOneByProperties(array $params, array $fields = ['*'])
    {
        $query = $this->model->query();

        foreach ($params as $key => $value) {
            $query->where($key, $value);
        }

        return $query->first($fields);
    }

    /**
     * @param $field
     * @param $value
     * @return \Illuminate\Support\Collection|null|static
     */
    public function findOneBy($field, $value)
    {
        return $this->model->where($field, '=', $value)->first();
    }

    /**
     * @param array $ids
     * @return \Illuminate\Support\Collection|null|static
     */
    public function findByIds($ids)
    {
        return $this->model->whereIn('id', $ids)->get();
    }

    /**
     * @param $id
     * @return \Illuminate\Support\Collection|null|static
     */
    public function getAll()
    {
        return $this->model->get();
    }

    /**
     * @param $resource
     * @return \Illuminate\Support\Collection|null|static
     */
    public function save($resource)
    {
        $attributes = $resource->getDirty();

        if (!empty($attributes) || !$resource->exists) {
            return $resource->save();
        }
    }

    /**
     * @param array|Collection $resources
     * @return mixed
     */
    public function saveMany($resources)
    {
        DB::transaction(function () use ($resources) {
            foreach ($resources as $resource) {
                $this->save($resource);
            }
        });
    }

    /**
     * @param $resource
     * @param $data
     * @return \Illuminate\Support\Collection|null|static
     */
    public function update($resource, $data = [])
    {
        if (is_array($data) && count($data) > 0) {
            $resource->fill($data);
        }

        $this->save($resource);

        return $resource;
    }

    /**
     * @param $resource
     * @return \Illuminate\Support\Collection|null|static
     */
    public function delete($resource)
    {
        $resource->delete();

        return $resource;
    }

    /**
     * @return Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Creates a new model from properties
     *
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties)
    {
        if (is_array($properties) && count($properties)) {
            return $this->model->create($properties);
        }

        return null;
    }


}