<?php

namespace App\Services;

use Closure;
use DB;

class BaseService
{
    public function __construct()
    {
    }

    protected function atomic(Closure $callback)
    {
        return DB::transaction($callback);
    }

    protected function dataWrapper($data)
    {
        $results = [];

        if (isset($data['data'])) {
            $results['data'] = $data['data'];

            unset($data['data']);

            $results['meta'] = $data;
        } else {
            $results['data'] = $data;
        }

        return $results;
    }
}
