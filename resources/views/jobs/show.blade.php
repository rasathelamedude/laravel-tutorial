<x-layout>
    <x-slot:heading>
        About
    </x-slot:heading>

    <h2>{{ $job->title }}</h2>

    <p>
        This job pays {{ $job->salary }} per year
    </p>

    <div class="mt-4">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </div>
</x-layout>