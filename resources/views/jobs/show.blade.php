<x-layout>
    <x-slot:heading>
        Job Description
    </x-slot:heading>
    <h1><strong>Employer: </strong> {{ $job->employer->name }}</h1>
    <p><strong>Job Name: </strong> {{ $job->title }}</p>
    <p><strong>Salary: </strong> {{ $job->salary }} per Year</p>

    @can('edit', $job)
    <div class = "mt-2">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit</x-button>
    </div>
    @endcan
    
</x-layout>
