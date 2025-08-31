<ul>
    <strong>{{ $job->title }}</strong><br>
    The job pays you {{ $job->salary }} salary
</ul>
<x-button href="/jobs/{{$job->id}}/edit" class=" text-black float-right p-1 x-2 px-3 py-2 text-sm font-medium m-1">
    Edit Job
</x-button>

<form action="{{ url('/jobs/' . $job->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

