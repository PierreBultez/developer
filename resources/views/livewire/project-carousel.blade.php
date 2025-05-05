<div class="relative max-w-5xl mx-auto">
    {{-- Carte de projet actuelle --}}
    <livewire:project-card :project="$currentProject" wire:key="project-{{ $currentProject['id'] }}" />

    {{-- Contrôles de navigation --}}
    <div class="flex justify-center gap-36 mt-6">
        <div>
            <button
                class="btn btn-circle btn-ghost bg-base-100 shadow-md hover:bg-base-200"
                wire:click="prevProject"
            >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-chevron-left">
                    <path d="m15 18-6-6 6-6"/>
                </svg>
            </button>
        </div>

        <div>
            <button
                class="btn btn-circle btn-ghost bg-base-100 shadow-md hover:bg-base-200"
                wire:click="nextProject"
            >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-chevron-right">
                    <path d="m9 18 6-6-6-6"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Indicateurs de position
    <div class="flex justify-center mt-6 space-x-2">
        @foreach($projects as $index => $project)
            <button
                wire:click="goToProject({{ $index }})"
                class="w-3 h-3 rounded-full {{ $index === $currentIndex ? 'bg-primary' : 'bg-base-300' }}"
                aria-label="Voir le projet {{ $project['title'] }}"
            ></button>
        @endforeach
    </div> --}}
</div>
