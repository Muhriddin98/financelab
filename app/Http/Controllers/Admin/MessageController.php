<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;

class MessageController extends Controller
{
    /** Faqat ko'rish — tahrir/o'chirish yo'q. */
    public function index()
    {
        $messages = ContactMessage::orderByDesc('created_at')->paginate(20);

        return view('admin.messages.index', compact('messages'));
    }

    public function show(ContactMessage $message)
    {
        return view('admin.messages.show', compact('message'));
    }
}
