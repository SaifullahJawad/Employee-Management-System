<x-layout>
    
    @can('owner')
        
        <x-setting heading="List of Employees">
            <div class="py-2">
                <a href="/owner/employee/create" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-xl hover:bg-blue-600">
                    Add Employee</a>
            </div>

            <div class="flex flex-col">
                
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($employees as $employee)
                                        
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="/owner/employees/report/{{ $employee->id }}">
                                                <div class="flex items-center">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        
                                                        {{ $employee->username }}
                                                        
                                                    </div>
                                                </div>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </x-setting>
        
    @else
        <x-setting heading="Employee Activity">
            <div class="flex flex-col">
                    
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200" >
                                
                                <tbody class="bg-white divide-y divide-gray-200">

                                        
                                    <tr>
                                        <td class="px-20 py-20 whitespace-nowrap flex items-center justify-center">
                                            <a href="#">
                                            <div class="flex items-center" >
                                                <div class="text-sm font-medium text-gray-900">

                                                    <div class="py-2 flex items-center justify-center">
                                                        {{ Carbon\Carbon::now()->format('F j, Y') }}
                                                    </div>
                                        
                                                    <div class="py-6 px-20">
                                                        <form action="/employee/check-in" method="POST">
                                                            @csrf
                                                            <button type="submit" class="bg-green-600 text-white uppercase font-semibold text-xs py-3 px-12 rounded-xl hover:bg-green-800">
                                                                Check In</button>
                                                        </form>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            </a>
                                        </td>
                                    </tr>
                                        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </x-setting>
    @endcan
    
    
</x-layout>