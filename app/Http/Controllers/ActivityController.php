<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    public function logVisit(Request $request, ?string $formType = null): void
    {
        DB::table('activity_logs')->insert([
            'activity_type' => 'visit',
            'form_type' => $formType,
            'path' => $request->path(),
            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 512),
            'meta' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function logSubmission(Request $request, string $formType, array $meta): void
    {
        DB::table('activity_logs')->insert([
            'activity_type' => 'submission',
            'form_type' => $formType,
            'path' => $request->path(),
            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 512),
            'meta' => json_encode($meta),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function getActivityLogs(): LengthAwarePaginator
    {
        return DB::table('activity_logs')->latest()->paginate(5, ['*'], 'activity_page');
    }
}
