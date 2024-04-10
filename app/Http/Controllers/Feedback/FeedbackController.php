<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\Controller;
use App\Http\Requests\Feedback\FeedbackRequest;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function create(FeedbackRequest $request)
    {
        Feedback::query()->create($request->validated());
        return Redirect()->back()->with('success', 'Request sent successfully!');
    }
}
