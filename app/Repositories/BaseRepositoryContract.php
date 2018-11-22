<?php namespace App\Repositories;

/**
 * Interface BaseRepositoryContract
 * @package App\Repositories
 */
interface BaseRepositoryContract
{
    /**
     * @param $id
     * @return \Illuminate\Support\Collection|null|static
     */
    public function findOrFail($id);

    /**
     * @param $field
     * @param $value
     * @return \Illuminate\Support\Collection|null|static
     */
    public function findBy($field, $value);

    /**
     * @param array $params
     * @param array $fields Which fields to select
     * @return \Illuminate\Support\Collection|null|static
     */
    public function findByProperties(array $params, array $fields = ['*']);

    /**
     * @param array $params
     * @param array $fields Which fields to select
     * @return Model|null|static
     */
    public function findOneByProperties(array $params, array $fields = ['*']);

    /**
     * @param $field
     * @param $value
     * @return \Illuminate\Support\Collection|null|static
     */
    public function findOneBy($field, $value);

    /**
     * @param array $ids
     * @return \Illuminate\Support\Collection|null|static
     */
    public function findByIds($ids);

    /**
     * @param $id
     * @return \Illuminate\Support\Collection|null|static
     */
    public function getAll();

    /**
     * @param $resource
     * @return \Illuminate\Support\Collection|null|static
     */
    public function save($resource);

    /**
     * @param array|Collection $resources
     * @return \Illuminate\Support\Collection|null|static
     */
    public function saveMany($resources);

    /**
     * @param $resource
     * @param $data
     * @return \Illuminate\Support\Collection|null|static
     */
    public function update($resource, $data = []);

    /**
     * @param $resource
     * @return \Illuminate\Support\Collection|null|static
     */
    public function delete($resource);

    /**
     * @return Model
     */
    public function getModel();

    /**
     * Creates a new model from properties
     *
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties);
}
