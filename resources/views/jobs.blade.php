<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>

    <p>These are the Job Listing page Page.</p>
    @foreach($jobs as $job)
        <ul class="m-2">
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-600 hover:underline">
                {{ $job['title'] }}
            </a>
        </ul>
    @endforeach
</x-layout>
