<?php
/**
 * Created by PhpStorm.
 * User: pathao
 * Date: 8/28/18
 * Time: 5:00 PM
 */

namespace App\Models;


trait Diffable
{

    protected $_diff = [];


    protected static function callDiff()
    {
        static::updating(function ($model) {
            $model->makeDiff();
        });
    }

    /**
     * @return array
     */
    public function makeDiff()
    {
        $new = $this->getDirty();

        $old = array_intersect_key($this->fresh()->toArray(), $new);

        $this->_diff['old'] = $old;
        $this->_diff['new'] = $new;

        return $this->_diff;
    }

    public function getDiff()
    {
        return $this->_diff;
    }
}