<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\Controller;
use App\Http\Requests\Feedback\FeedbackRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FeedbackController extends Controller
{
    public function create(FeedbackRequest $request, Feedback $feedback)
    {
        Feedback::query()->create($request->validated());
        return Redirect()->back()->with('success', 'Обращение успешно отправлено!');
    }
}
