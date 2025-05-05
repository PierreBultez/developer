<div class="w-full h-[500px] perspective-1000">
    <div
        class="relative w-full h-full duration-700 preserve-3d cursor-pointer {{ $isFlipped ? 'rotate-y-180' : '' }}"
        wire:click="flipCard"
    >
        {{-- Face avant (Recto) avec Browser Mockup --}}
        <div class="absolute w-full h-full backface-hidden rounded-xl shadow-lg overflow-hidden">
            <div class="mockup-browser border bg-base-300 w-full h-full">
                <div class="mockup-browser-toolbar">
                    <div class="input border border-base-300 px-1">{{ $project['url'] }}</div>
                </div>
                <div class="relative flex flex-col bg-base-200 w-full h-full overflow-hidden">
                    <img
                        src="{{ $project['image'] }}"
                        alt="{{ $project['title'] }}"
                        class="w-full h-full object-cover"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-base-300/90 via-base-300/40 to-transparent flex flex-col justify-end p-6 text-base-content">
                        <h3 class="text-2xl font-bold mb-2">{{ $project['title'] }}</h3>
                        <p class="mb-4 opacity-90">{{ $project['shortDesc'] }}</p>
                        <div class="flex space-x-3 mb-2">
                            @foreach(array_slice($project['technologies'], 0, 4) as $tech)
                                <div class="group relative">
                                    <div class="w-10 h-10 flex items-center justify-center bg-base-100 rounded-full shadow-md p-1">
                                        {!! $tech['icon'] !!}
                                    </div>
                                    <div class="tooltip tooltip-secondary" data-tip="{{ $tech['name'] }}"></div>
                                </div>
                            @endforeach

                            @if(count($project['technologies']) > 4)
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-base-content/20 text-base-content font-semibold">
                                    +{{ count($project['technologies']) - 4 }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Face arrière (Verso) --}}
        <div class="absolute w-full h-full backface-hidden rounded-xl shadow-lg overflow-hidden rotate-y-180 bg-base-100">
            <!-- <div class="w-full h-2" style="background-color: {{ $project['colorHex'] }}"></div> -->
            @php
                // 1. Enlever les espaces superflus au début/fin et séparer les couleurs
                $colors = array_filter(explode(' ', trim($project['colorHex'])));
                $style = ''; // Initialise la variable de style

                if (count($colors) > 1) {
                    // 2. Si on a plusieurs couleurs, créer la chaîne pour linear-gradient
                    $gradientColors = implode(', ', $colors);
                    // Vous pouvez changer la direction (ex: 'to bottom', '45deg')
                    $style = 'background: linear-gradient(to right, ' . $gradientColors . ');';
                } elseif (count($colors) === 1) {
                    // 3. Si une seule couleur, utiliser background-color
                    $style = 'background-color: ' . $colors[0] . ';';
                }
                // Si $colors est vide, $style restera vide (pas de couleur de fond)
            @endphp

            {{-- Appliquer le style généré --}}
            <div class="w-full h-2" style="{{ $style }}"></div>
            <div class="p-6 flex flex-col h-full">
                <h3 class="text-2xl font-bold mb-4">{{ $project['title'] }}</h3>
                <p class="text-base-content/80 mb-6">{{ $project['description'] }}</p>

                <div class="mb-6">
                    <h4 class="text-xl tracking-wider text-base-content/70 font-semibold mb-3">Technologies utilisées</h4>
                    <div class="flex flex-wrap gap-3">
                        @foreach($project['technologies'] as $tech)
                            <div class="flex items-center gap-2 px-3 py-2 rounded-md bg-base-200">
                                <div class="w-6 h-6">{!! $tech['icon'] !!}</div>
                                <span class="text-base-content">{{ $tech['name'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="flex justify-between mt-auto">
                    <div class="flex space-x-3">
                        <a
                            href="{{ $project['githubUrl'] }}"
                            target="_blank"
                            class="btn btn-sm btn-neutral gap-2"
                            wire:click.stop
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>
                            <span>Code</span>
                        </a>
                        <a
                            href="{{ $project['liveUrl'] }}"
                            target="_blank"
                            class="btn btn-sm btn-primary gap-2"
                            wire:click.stop
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                            <span>Live</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

