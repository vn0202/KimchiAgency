
@php
    use Filament\Support\Facades\FilamentView;

    $id = $getId();
    $statePath = $getStatePath();
//    dd($statePath);
@endphp

<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">

    @if ($isDisabled())
        <div
            x-data="{
                state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$statePath}')") }},
            }"
            x-html="state"
            class="fi-fo-rich-editor fi-disabled prose block w-full max-w-none rounded-lg bg-gray-50 px-3 py-3 text-gray-500 shadow-sm ring-1 ring-gray-950/10 dark:prose-invert dark:bg-transparent dark:text-gray-400 dark:ring-white/10 sm:text-sm"
        ></div>
    @else
        <div   x-data="{
                state: $wire.{{ $applyStateBindingModifiers("\$entangle('{$statePath}')") }},
            }">
            <div
                class="tinymce"></div>
            <input type="text" id="test" x-model="state">
        </div>


    @endif


</x-dynamic-component>
