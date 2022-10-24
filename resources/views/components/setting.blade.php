@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">

    <h1 class="text-lg font-bold mb-8 pb-2 border-b">
        {{ $heading }}
    </h1>
    
    <div class="flex">

        <aside class="w-48 flex-shrink-0">
            <h4 class="font-semibold mb-4">Links</h4>

            <ul>
                <li class="py-3">
                    <a href="/dashboard" class="{{ request()->is('dashboard') ? 'text-blue-500' : ''}}">All employees</a>
                </li>
                
                <li>
                    <a href="#" class="{{ request()->is('#') ? 'text-blue-500' : ''}}">Employee Report</a>
                </li>
            </ul>
        </aside>
        
        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>

    </div>
    
</section>