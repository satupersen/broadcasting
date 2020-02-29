<?php

namespace Satupersen\Broadcasting;

use Satupersen\Http\Request;
use Satupersen\Routing\Controller;
use Satupersen\Support\Facades\Broadcast;

class BroadcastController extends Controller
{
    /**
     * Authenticate the request for channel access.
     *
     * @param  \Satupersen\Http\Request  $request
     * @return \Satupersen\Http\Response
     */
    public function authenticate(Request $request)
    {
        if ($request->hasSession()) {
            $request->session()->reflash();
        }

        return Broadcast::auth($request);
    }
}
