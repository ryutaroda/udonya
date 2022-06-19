<?php

namespace App\Infrastracture\EloquentRepository;

use Closure;
use App\Domain\CommonRepository\DataStoreTransactionInterface;
use Illuminate\Support\Facades\DB;
use Exception;

class DataStoreTransactionRepository implements DataStoreTransactionInterface
{
    /**
     * @param Closure $function
     * @return mixed
     * @throws Exception
     */
    public function start(Closure $function): mixed
    {
        DB::beginTransaction();
        try {
            $response = $function();
            DB::commit();
        } catch (Exception $e) {
            report($e);
            DB::rollBack();
            throw $e;
        }

        return $response;
    }
}
