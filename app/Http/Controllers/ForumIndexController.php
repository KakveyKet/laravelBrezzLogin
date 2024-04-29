<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\DisscussionResource;
use App\Models\Discussion;
use Illuminate\Http\Request;

class ForumIndexController extends Controller
{

    public function __invoke()
    {
        return inertia()->render('Forum/Index', ['discussions' => DisscussionResource::collection(

            Discussion::with(['topic'])->paginate(10)
        )]);
    }
}
