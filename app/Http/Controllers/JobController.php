<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobPosted;



class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view(
            'jobs.index',
            ['jobs' => $jobs]
        );
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 3,
        ]);

        Mail::to($job->employer->user)->queue(new JobPosted($job));

        return redirect('/jobs');
    }

    public function edit(Job $job)
    {
        // authorize user
        // if(Auth::guest()){
        //     return redirect('/login');
        // }

        // check if the user is the owner of the job post using gate
        //   Gate::define('edit-job', function(User $user, Job $job){
        //      return $job->employer->user->is($user);
        //   });

        // check if the user is the owner of the job post
        // if($job->employer->user->isNot(Auth::user())){
        //      abort(403);
        // }

        // Gate::authorize('edit-job', $job);

        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        // Gate::authorize('edit-job', $job);

        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        return redirect('/jobs/' .  $job->id);
    }

    public function delete(Job $job)
    {

        // Gate::authorize('edit-job', $job);

        $job->delete();
        return redirect('/jobs');
    }
}
