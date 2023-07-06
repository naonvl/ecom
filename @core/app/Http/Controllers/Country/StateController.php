<?php

namespace App\Http\Controllers\Country;

use App\Country\Country;
use App\Country\State;
use App\Helpers\FlashMsg;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StateController extends Controller
{
    const BASE_URL = 'backend.country.';

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:state-list|state-create|state-edit|state-delete', ['only', ['index']]);
        $this->middleware('permission:state-create', ['only', ['store']]);
        $this->middleware('permission:state-edit', ['only', ['update']]);
        $this->middleware('permission:state-delete', ['only', ['destroy', 'bulk_action']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_countries = Country::all();
        $all_states = State::with('country')->get();
        return view(self::BASE_URL.'all-state', compact('all_countries', 'all_states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'country_id' => 'required|exists:countries,id',
            'status' => 'required|string|max:191',
        ]);

        $state = State::create([
            'name' => $request->sanitize_html('name'),
            'country_id' => $request->sanitize_html('country_id'),
            'status' => $request->sanitize_html('status'),
        ]);

        return $state->id
            ? back()->with(FlashMsg::create_succeed('State'))
            : back()->with(FlashMsg::create_failed('State'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'country_id' => 'required|exists:countries,id',
            'status' => 'required|string|max:191',
        ]);

        $updated = State::findOrFail($request->id)->update([
            'name' => $request->sanitize_html('name'),
            'country_id' => $request->sanitize_html('country_id'),
            'status' => $request->sanitize_html('status'),
        ]);

        return $updated
            ? back()->with(FlashMsg::create_succeed('State'))
            : back()->with(FlashMsg::create_failed('State'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $item)
    {
        return $item->delete()
            ? back()->with(FlashMsg::delete_succeed('State'))
            : back()->with(FlashMsg::delete_failed('State'));
    }

    public function bulk_action(Request $request)
    {
        $deleted = State::whereIn('id', $request->ids)->delete();
        if ($deleted) {
            return 'ok';
        }
    }

    public function getStateByCountry(Request $request)
    {
        $this->validate($request, ['id' => 'required|exists:countries']);
        return State::select('id', 'name')
                    ->where('country_id', $request->id)
                    ->where('status', 'publish')
                    ->get();
    }
}
