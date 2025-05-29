<h2>
    {{ $job->title }}
</h2>

<p>
    Congrats! your job has been posted to our website.
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">view the job</a>
</p>