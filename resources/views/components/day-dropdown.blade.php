@props(['days', 'currentDay'])
<x-dropdown>

    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">

            {{ isset($currentDay) ? $currentDay->date : $days->first()->date }}

            <x-icon name="down-arrow" class="absolute pointer-events-none" style="left: 80px;" />

        </button>
    </x-slot>


    @foreach ($days as $day)
        <x-dropdown-item 
            href="/owner/employees/report?day_id={{ $day->id }}"
            :active='request()->is("owner/employees/report?day_id={$day->id}")'
        >{{ $day->date }}</x-dropdown-item>
                
    @endforeach
</x-dropdown>
