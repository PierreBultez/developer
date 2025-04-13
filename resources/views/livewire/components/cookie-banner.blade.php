<div class="{{ $showBanner ? '' : 'hidden' }} fixed bottom-0 inset-x-0 z-50 p-4 bg-base-200 shadow-lg">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
        <div>
            <p class="text-base-content">
                Ce site utilise des cookies pour améliorer votre expérience.
                <a href="{{ route('privacy') }}" class="link link-primary">En savoir plus</a>
            </p>
        </div>
        <div class="flex gap-2">
            <button
                class="btn btn-sm"
                wire:click="acceptMinimal"
            >
                Accepter l'essentiel
            </button>
            <button
                class="btn btn-sm btn-primary"
                wire:click="acceptAll"
            >
                Tout accepter
            </button>
        </div>
    </div>
</div>
