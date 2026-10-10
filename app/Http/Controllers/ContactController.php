<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use App\Models\ContactMessage;
use App\Services\SiteContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request, SiteContent $content)
    {
        $options = $content->common()['contactCopy']['options'];

        $data = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:200'],
            'organization' => ['nullable', 'string', 'max:200'],
            'interest' => ['required', 'string', 'in:'.implode(',', $options)],
            'message' => ['required', 'string', 'min:20', 'max:5000'],
        ]);

        $contact = ContactMessage::create($data + [
            'locale' => app()->getLocale(),
            'ip' => $request->ip(),
        ]);

        try {
            Mail::to(config('site.contact.email'))->send(new ContactMessageMail($contact));
        } catch (\Throwable $e) {
            Log::error('Contact mail failed: '.$e->getMessage());
            report($e);

            return response()->json([
                'ok' => false,
                'message' => __('ui.form_error'),
            ], 500);
        }

        return response()->json([
            'ok' => true,
            'message' => $content->common()['contactCopy']['success'],
        ]);
    }
}
