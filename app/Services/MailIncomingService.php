<?php


namespace App\Services;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

class MailIncomingService
{
    public function index()
    {
        return 'index';
    }

    public function show()
    {
        return 'show';
    }

    public function store(array $data)
    
    {
        try{
            DB::beginTransaction();
            dd($data);
        }catch(\Exception $e)
        {
            DB::rollBack();
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
             DB::commit();
    }

    public function update()
    {
        return 'update';
    }

    public function destroy()
    {
        return 'destroy';
    }
}
