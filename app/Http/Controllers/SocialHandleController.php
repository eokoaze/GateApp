<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class SocialHandleController extends Controller
{
    public function verifyHandles(Request $request): View
    {
        $platform = $request->string('platform')->trim()->toString();
        $handle = $request->string('handle')->trim()->toString();
        $verificationStatus = null;

        if ($platform !== '' || $handle !== '') {
            DB::table('social_handle_attempts')->insert([
                'platform' => $platform !== '' ? $platform : null,
                'handle' => $handle !== '' ? $handle : null,
                'ip_address' => $request->ip(),
                'user_agent' => substr((string) $request->userAgent(), 0, 512),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        $handles = DB::table('social_handles')
            ->orderBy('platform')
            ->orderBy('handle')
            ->get();

        if ($platform !== '' || $handle !== '') {
            $normalizedPlatform = strtolower($platform);
            $normalizedHandle = strtolower(ltrim($handle, '@'));
            $verificationStatus = $handles->contains(function ($row) use ($normalizedPlatform, $normalizedHandle) {
                $rowPlatform = strtolower((string) $row->platform);
                $rowHandle = strtolower(ltrim((string) $row->handle, '@'));

                $platformMatch = $normalizedPlatform === '' || $rowPlatform === $normalizedPlatform;
                $handleMatch = $normalizedHandle === '' || $rowHandle === $normalizedHandle;

                return $platformMatch && $handleMatch;
            }) ? 'success' : 'failed';
        }

        return view('verify_handles', compact('handles', 'platform', 'handle', 'verificationStatus'));
    }

    public function store(Request $request): Response
    {
        $validated = $request->validate([
            'platform' => 'required|string',
            'handle' => 'required|string',
            'url' => 'nullable|url'
        ], [
            'platform' => 'Please enter a platform name',
            'handle' => 'Please enter a handle',
            'url' => 'Please enter a valid URL'
        ]);

        $validated['platform'] = trim($validated['platform']);
        $validated['handle'] = trim($validated['handle']);
        $normalizedPlatform = strtolower($validated['platform']);
        $normalizedHandle = strtolower(ltrim($validated['handle'], '@'));

        $existing = DB::table('social_handles')
            ->select('handle')
            ->whereRaw('LOWER(platform) = ?', [$normalizedPlatform])
            ->get();

        $isDuplicate = $existing->contains(function ($row) use ($normalizedHandle) {
            return strtolower(ltrim((string) $row->handle, '@')) === $normalizedHandle;
        });

        if ($isDuplicate) {
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Handle already exists.'
                ], 422);
            }

            return Redirect()->back()
                ->withErrors(['handle' => 'Handle already exists.'])
                ->withInput();
        }

        $validated['created_at'] = now();
        $validated['updated_at'] = now();

        $id = DB::table('social_handles')->insertGetId($validated);

        if ($request->expectsJson()) {
            return response()->json([
                'id' => $id,
                'platform' => $validated['platform'],
                'handle' => $validated['handle'],
                'url' => $validated['url'] ?? null,
                'created_at' => $validated['created_at']->toDateTimeString(),
            ]);
        }

        return Redirect()->back()->with('social_success','Social handle added');
    }

    public function destroy(int $id): RedirectResponse
    {
        DB::table('social_handles')->where('id', $id)->delete();

        return Redirect()->back()->with('social_success','Social handle removed');
    }
}
