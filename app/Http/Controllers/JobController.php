<?php

namespace App\Http\Controllers;

use App\Data\JobData;
use App\Models\Job;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application as ApplicationAlias;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class JobController extends Controller
{

    public function store(JobData $jobData): RedirectResponse
    {
        $job = new Job();
        $job->title = $jobData->title;
        $job->description = $jobData->description;
        $job->location = $jobData->location;
        $job->url = $jobData->url;
        $job->save();
        return back()->with('success','Job added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function index(Job $job): View|ApplicationAlias|Factory|Application
    {
        $jobs = Job::all();
        return view('jobs', compact('jobs'));
    }

}
