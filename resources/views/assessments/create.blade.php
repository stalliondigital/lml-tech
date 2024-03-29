        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Assessments') }}
                </h2>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-10 py-14">

                        <form action="{{ route('assessments.store') }}" method="POST">
                            @csrf

                            <div>
                                <div class="md:grid md:grid-cols-3 md:gap-6">
                                    <div class="md:col-span-1">
                                        <div class="px-4 sm:px-0 mt-10">
                                            <h3 class="text-2xl font-medium leading-6 text-gray-900">Field Level Hazard
                                                Assessment</h3>
                                            <p class="mt-1 text-sm text-gray-600">
                                                General Information for the hazard assessment.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-5 md:mt-0 md:col-span-2">
                                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                                <div class="grid grid-cols-3 gap-6">
                                                    <div class="col-span-3 sm:col-span-2">
                                                        <label for="date"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Date
                                                            @error('date')
                                                                <br>
                                                                <small class="text-red-600">{{ $errors->first('date') }}
                                                                </small>

                                                            @enderror
                                                        </label>
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <input type="date" value="{{ old('date') }}"
                                                                placeholder="YYYY-MM-DD (Ex. 2021-02-02)" name="date"
                                                                id="date" class="focus:ring-blue-500 
                                                                focus:border-blue-500
                                                                 flex-1 block w-full
                                                                 rounded-md sm:text-sm
                                                                 border-gray-300
                                                                 @error('date')
                                                                                                                                                                                                         border-red-600
                                                                 @enderror">
                                                        </div>
                                                    </div>

                                                    {{-- Job ID --}}
                                                    <div class="col-span-3 sm:col-span-2">
                                                        <label for="date"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Job ID
                                                            @error('jobId')
                                                                <br>
                                                                <small class="text-red-600">{{ $errors->first('jobId') }}
                                                                </small>

                                                            @enderror
                                                        </label>
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <input type="text" value="{{ old('jobId') }}"
                                                                placeholder="Enter Job ID" name="jobId" id="jobId"
                                                                class="focus:ring-blue-500 
                                                                focus:border-blue-500
                                                                 flex-1 block w-full
                                                                 rounded-md sm:text-sm
                                                                 border-gray-300
                                                                 @error('jobId')
                                                                                                                                                                                                         border-red-600
                                                                 @enderror">
                                                        </div>
                                                    </div>

                                                    {{-- Job ID --}}
                                                    <div class="col-span-3 sm:col-span-2">
                                                        <label for="date"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Tech ID
                                                            @error('techId')
                                                                <br>
                                                                <small class="text-red-600">{{ $errors->first('techId') }}
                                                                </small>

                                                            @enderror
                                                        </label>
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <input type="text" value="{{ old('techId') }}"
                                                                placeholder="Enter Tech ID" name="techId" id="techId"
                                                                class="focus:ring-blue-500 
                                                                focus:border-blue-500
                                                                    flex-1 block w-full
                                                                    rounded-md sm:text-sm
                                                                    border-gray-300
                                                                    @error('techId')
                                                                                                                                                                                                            border-red-600
                                                                    @enderror">
                                                        </div>
                                                    </div>

                                                    {{-- Supervisor or Manager Name --}}
                                                    <div class="col-span-3 sm:col-span-2">
                                                        <label for="supervisor"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Supervisor or Manager Name
                                                            @error('supervisor')
                                                                <br>
                                                                <small
                                                                    class="text-red-600">{{ $errors->first('supervisor') }}
                                                                </small>

                                                            @enderror
                                                        </label>
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <input placeholder="Enter Supervisor or Manager name"
                                                                type="text" value="{{ old('supervisor') }}"
                                                                name="supervisor" id="supervisor" class="focus:ring-blue-500
                                                                focus:border-blue-500
                                                                 flex-1 block w-full
                                                                 rounded-md sm:text-sm
                                                                 border-gray-300
                                                                 @error('supervisor')
                                                                                                                                                                                                                                                                    border-red-600
                                                                 @enderror">

                                                        </div>
                                                    </div>
                                                    {{-- Weather Conditions --}}
                                                    <div class="col-span-3 sm:col-span-2">
                                                        <label for="weatherConditions"
                                                            class="block text-sm font-medium text-gray-700">Weather
                                                            Conditions</label>
                                                        @error('weatherConditions')
                                                            <br>
                                                            <small
                                                                class="text-red-600">{{ $errors->first('weatherConditions') }}
                                                            </small>
                                                        @enderror
                                                        <select id="weatherConditions" name="weatherConditions"
                                                            autocomplete="weatherConditions" value="Rain" class="mt-1 
                                                            block w-full 
                                                            py-2 px-3 border 
                                                            border-gray-300 
                                                            @error('weatherConditions')
                                                                                                                                                                                                                                    border-red-600
                                                            @enderror 
                                                            bg-white rounded-md shadow-sm focus:outline-none
                                                            focus:ring-blue-500 focus:border-blue-500 sm:text-sm ">
                                                            <option selected>{{ old('weatherConditions') }}</option>
                                                            <option>Sunny</option>
                                                            <option>Partially Cloudy</option>
                                                            <option>Cloudy</option>
                                                            <option>Rain</option>
                                                            <option>Snow</option>
                                                            <option>Stormy</option>
                                                            <option>Fog</option>
                                                            <option>Hurricanes</option>
                                                        </select>
                                                    </div>
                                                    {{-- Type of Work --}}
                                                    <div class=" col-span-3 sm:col-span-2">
                                                        <label for="workType"
                                                            class="block text-sm font-medium text-gray-700">
                                                            Type of Work
                                                            @error('workType')
                                                                <br>
                                                                <small
                                                                    class="text-red-600">{{ $errors->first('workType') }}
                                                                </small>

                                                            @enderror
                                                        </label>
                                                        <div class="mt-1 flex rounded-md shadow-sm">
                                                            <input placeholder="Enter the type of work" type="text"
                                                                name="workType" id="workType"
                                                                value="{{ old('workType') }}" class="focus:ring-blue-500
                                                                 focus:border-blue-500
                                                                  flex-1 block w-full
                                                                  rounded-md sm:text-sm
                                                                  border-gray-300
                                                                  @error('workType')
                                                                                                                                                                                                        border-red-600
                                                                 @enderror">
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hidden sm:block" aria-hidden="true">
                                <div class="py-5">
                                    <div class="border-t border-gray-200"></div>
                                </div>
                            </div>

                            <div class="mt-10 sm:mt-0">
                                <div class="md:grid md:grid-cols-3 md:gap-6">
                                    <div class="md:col-span-1 mt-10">
                                        <div class="px-4 sm:px-0">
                                            <h3 class="text-2xl font-medium leading-6 text-gray-900">Pre-Work Checklist
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="mt-5 md:mt-0 md:col-span-2">
                                        <div class="shadow overflow-hidden sm:rounded-md">
                                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                                <fieldset>
                                                    <div class="mt-4 space-y-4">
                                                        <div class="flex items-start">
                                                            <div class="flex items-center h-5">
                                                                <input id="ppeInspected" name="ppeInspected"
                                                                    type="checkbox"
                                                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                                            </div>
                                                            <div class="ml-3 text-sm">
                                                                <label for="ppeInspected"
                                                                    class="font-medium text-gray-700">PPE
                                                                    Inspected</label>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-start">
                                                            <div class="flex items-center h-5">
                                                                <input id="preUseInspections" name="preUseInspections"
                                                                    type="checkbox"
                                                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                                            </div>
                                                            <div class="ml-3 text-sm">
                                                                <label for="preUseInspections"
                                                                    class="font-medium text-gray-700">Pre-use
                                                                    Inspections completed</label>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-start">
                                                            <div class="flex items-center h-5">
                                                                <input id="jobSafety" name="jobSafety" type="checkbox"
                                                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                                            </div>
                                                            <div class="ml-3 text-sm">
                                                                <label for="jobSafety"
                                                                    class="font-medium text-gray-700">Trained on Safe
                                                                    Job Procedure</label>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-start">
                                                            <div class="flex items-center h-5">
                                                                <input id="visualInspections" name="visualInspections"
                                                                    type="checkbox" value="1"
                                                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                                            </div>
                                                            <div class="ml-3 text-sm">
                                                                <label for="visualInspections"
                                                                    class="font-medium text-gray-700">Visual
                                                                    inspections
                                                                    of areas completed</label>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-start">
                                                            <div class="flex items-center h-5">
                                                                <input id="updatedAssessment" name="updatedAssessment"
                                                                    type="checkbox"
                                                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                                            </div>
                                                            <div class="ml-3 text-sm">
                                                                <label for="updatedAssessment"
                                                                    class="font-medium text-gray-700">Field Level
                                                                    Hazard
                                                                    Assessment updated for each site visited</label>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-start">
                                                            <div class="flex items-center h-5">
                                                                <input id="toolCondition" name="toolCondition"
                                                                    type="checkbox"
                                                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                                            </div>
                                                            <div class="ml-3 text-sm">
                                                                <label for="toolCondition"
                                                                    class="font-medium text-gray-700">Tools in good
                                                                    working conditions</label>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-start">
                                                            <div class="flex items-center h-5">
                                                                <input id="controlZones" name="controlZones"
                                                                    type="checkbox"
                                                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                                            </div>
                                                            <div class="ml-3 text-sm">
                                                                <label for="controlZones"
                                                                    class="font-medium text-gray-700">Control zones in
                                                                    place as required</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hidden sm:block" aria-hidden="true">
                                <div class="py-5">
                                    <div class="border-t border-gray-200"></div>
                                </div>
                            </div>

                            <div class="mt-10 sm:mt-0">
                                <div class="md:grid md:grid-cols-3 md:gap-6">
                                    <div class="md:col-span-1">
                                        <div class="px-4 sm:px-0 mt-10">
                                            <h3 class="text-2xl font-medium leading-6 text-gray-900">Required PPE
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="mt-5 md:mt-0 md:col-span-2">
                                        <div class="shadow overflow-hidden sm:rounded-md">
                                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                                <fieldset>
                                                    <div class="mt-4 space-y-4">
                                                        <div class="flex items-start">
                                                            <div class="flex items-center h-5">
                                                                <input id="boots" name="boots" type="checkbox"
                                                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                                            </div>
                                                            <div class="ml-3 text-sm">
                                                                <label for="boots"
                                                                    class="font-medium text-gray-700">Steel toe
                                                                    boots</label>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-start">
                                                            <div class="flex items-center h-5">
                                                                <input id="vest" name="vest" type="checkbox"
                                                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                                            </div>
                                                            <div class="ml-3 text-sm">
                                                                <label for="vest"
                                                                    class="font-medium text-gray-700">Hi-Vis
                                                                    Vest</label>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-start">
                                                            <div class="flex items-center h-5">
                                                                <input id="hat" name="hat" type="checkbox"
                                                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                                            </div>
                                                            <div class="ml-3 text-sm">
                                                                <label for="hat" class="font-medium text-gray-700">Hard
                                                                    Hat</label>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-start">
                                                            <div class="flex items-center h-5">
                                                                <input id="glasses" name="glasses" type="checkbox"
                                                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                                            </div>
                                                            <div class="ml-3 text-sm">
                                                                <label for="glasses"
                                                                    class="font-medium text-gray-700">Safety
                                                                    Glasses</label>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-start">
                                                            <div class="flex items-center h-5">
                                                                <input id="gloves" name="gloves" type="checkbox"
                                                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                                            </div>
                                                            <div class="ml-3 text-sm">
                                                                <label for="gloves"
                                                                    class="font-medium text-gray-700">Safety
                                                                    Gloves</label>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-start">
                                                            <div class="flex items-center h-5">
                                                                <input id="harness" name="harness" type="checkbox"
                                                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                                            </div>
                                                            <div class="ml-3 text-sm">
                                                                <label for="harness"
                                                                    class="font-medium text-gray-700">Safety Harness
                                                                    &amp; Lanyard</label>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-start">
                                                            <div class="flex items-center h-5">
                                                                <input id="covid" name="covid" type="checkbox"
                                                                    class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                                            </div>
                                                            <div class="ml-3 text-sm">
                                                                <label for="covid"
                                                                    class="font-medium text-gray-700">COVID required
                                                                    mask/gloves/boot cover</label>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-start">
                                                            <div class="col-span-3 sm:col-span-2">
                                                                <label for="otherPPE"
                                                                    class="block text-sm font-medium text-gray-700">
                                                                    Other
                                                                </label>
                                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                                    <input type="text" name="otherPPE" id="otherPPE"
                                                                        class="focus:ring-blue-500 focus:border-blue-500 flex-1 block w-full  rounded-md sm:text-sm border-gray-300">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="hidden sm:block" aria-hidden="true">
                                <div class="py-5">
                                    <div class="border-t border-gray-200"></div>
                                </div>
                            </div>

                            @livewire('tasks')


                            <div class="hidden sm:block" aria-hidden="true">
                                <div class="py-5">
                                    <div class="border-t border-gray-200"></div>
                                </div>
                            </div>

                            <div class="mt-5 md:grid-cols-3">
                                <button
                                    class="bg-blue-400 hover:bg-blue-500 transition-colors  p-3 rounded text-white font-semibold uppercase"
                                    type="submit">Submit Assessment
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </x-app-layout>
