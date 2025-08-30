<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>

    <p>These are the Job Listing page Page.</p>
    @foreach($jobs as $job)
        <ul class="m-2">
            <a href="/jobs/{{ $job['id'] }}" class=" block px-4 border border-b-gray-100 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">
                    {{$job->employer->name}}
                </div>
                <div>
                    <strong> {{ $job->title }}</strong>Pays {{$job->salary}} per year
                </div>
            </a>
        </ul>
    @endforeach
    <div>
        {{$jobs->links()}}
    </div>
</x-layout>
