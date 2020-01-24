<?php

namespace App\Traits;

use App\User;
use Illuminate\Support\Facades\Cache;

trait Sponsorship
{
    protected $value_for_parent = 2.5;

    protected $value_for_son = 0.5;

    /**
     * Get username.
     *
     * @return mixed
     */
    public function username()
    {
        return $this->name;
    }

    /**
     * Get sponsor.
     *
     * @return mixed
     */
    public function sponsor()
    {
        return $this->sponsorship;
    }

    /**
     * Get parent values.
     *
     * @return mixed
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Get son values.
     *
     * @return mixed
     */
    public function getSon()
    {
        return $this->son;
    }

    /**
     * Get parents values.
     *
     * @return mixed
     */
    public function getAllParents()
    {
        $parents = User::where('parent_id', $this->id)->get();

        if ( count($parents) != 0 ) {
            return $parents;
        }

        return null;
    }

    /**
     * Get sons values.
     *
     * @return mixed
     */
    public function getAllSons()
    {
        $sons = User::where('son_id', $this->id)->get();

        if ( count($sons) != 0 ) {
            return $sons;
        }

        return null;
    }

    /**
     * Get number of parents.
     *
     * @return mixed
     */
    public function parentCount()
    {
        return User::where('parent_id', $this->id)->count();
    }

    /**
     * Get number of sons.
     *
     * @return mixed
     */
    public function sonCount()
    {
        return User::where('son_id', $this->id)->count();
    }

    /**
     * Get value payment parents.
     *
     * @return mixed
     */
    public function valueParentsPayment()
    {
        return $this->parentCount() * $this->value_for_parent;
    }

    /**
     * Get value payment sons.
     *
     * @return mixed
     */
    public function valueSonsPayment()
    {
        return $this->sonCount() * $this->value_for_son;
    }

    /**
     * Get value payment.
     *
     * @return mixed
     */
    public function totalPayment()
    {
        return $this->valueParentsPayment() + $this->valueSonsPayment();
    }
}