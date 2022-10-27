<x-layout>
    
    <x-setting heading="Employees Report">


        <div class="py-2">
            <x-day-dropdown :days="$days" :currentDay="$currentDay"/>
        </div>

        <div class="flex flex-col">
            
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                        Username
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                        Check In
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                        Check Out
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                        Office Hour
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">

                                @if ($reports->count())

                                    @foreach ($reports as $report)
                                        
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="/owner/employees/report/{{ $report->employee->id }}">
                                                <div class="flex items-center">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        
                                                        {{ $report->employee->username }}
                                                        
                                                    </div>
                                                </div>
                                                </a>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="/owner/employees/report/{{ $report->employee->id }}">
                                                <div class="flex items-center">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        
                                                        {{ $report->getCheckInTime() ?? '--' }}
                                                        
                                                        
                                                    </div>
                                                </div>
                                                </a>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="/owner/employees/report/{{ $report->employee->id }}">
                                                <div class="flex items-center">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        
                                                        {{ $report->getCheckOutTime() ?? '-- ' }}
                                                        
                                                    </div>
                                                </div>
                                                </a>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="/owner/employees/report/{{ $report->employee->id }}">
                                                <div class="flex items-center">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        
                                                    {{$report->calculateOfficeHour() ?? '--' }}
                                                        
                                                    </div>
                                                </div>
                                                </a>
                                            </td>
                                        </tr>
                                
                                    @endforeach

                                @else
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm font-medium text-gray-900">
                                                    No entry for this date
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-setting>
    
</x-layout>