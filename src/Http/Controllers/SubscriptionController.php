<?php

namespace CleaniqueCoders\Subscriptions\Http\Controllers;

use Auth;
use Carbon\Carbon;
use CleaniqueCoders\Subscriptions\Subscription;
use CleaniqueCoders\Subscriptions\SubscriptionUser;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptions = Subscription::orderby('created_at', 'desc')->paginate(10);
        return view('subscriptions.index', compact('subscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subscriptions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Subscription::create($request->input());
        return redirect()->route('subscriptions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subscription = Subscription::find($id);
        return view('subscriptions.show', compact('subscription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subscription = Subscription::find($id);
        return view('subscriptions.edit', compact('subscription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Subscription::where('id', $id)->update($request->except('_token', '_method', 'submit'));
        return redirect()->route('subscriptions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subscription::destroy($id);
        return redirect()->route('subscriptions.index');
    }

    public function subscribe(Request $request, $id)
    {
        if ($this->subscribeUser($id)) {
            return redirect(config('subscription.redirect.success'));
        } else {
            return redirect(config('subscription.redirect.failed'));
        }
    }

    public function subscribeUser($id)
    {
        $subscription = Subscription::find($id);
        $subscribed_at = Carbon::now();
        $type = $subscription->type;

        $subscriptionUser = SubscriptionUser::create([
            'subscription_id' => $subscription->id,
            'user_id' => Auth::user()->id,
            'status' => 1,
            'subscribed_at' => Carbon::now(),
            'expired_at' => ($type == 0) ? $subscribed_at->addMonths($subscription->duration) : $subscribed_at->addYears($subscription->duration),
        ]);

        return $subscriptionUser;
    }

    public function unsubscribed()
    {
        $subscriptions = Subscription::where('status', 1)->get();
        return view('subscriptions.unsubscribed', compact('subscriptions'));
    }

    public function expired()
    {
        $subscriptions = Subscription::where('status', 1)->get();
        return view('subscriptions.expired', compact('subscriptions'));
    }
}
