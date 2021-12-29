
<div class="space-y-8 divide-y divide-gray-200 w-3/4 mt-10">
    

    @if (count($errors) > 0)
		<div class="rounded-md bg-red-100 rounded-lg p-4">
			<div class="flex">
				<div class="flex-shrink-0">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
				</div>
				<div class="ml-3">
					<h3 class="text-sm font-medium text-red-800">Sorry, invalid input.</h3>
					<div class="mt-2 text-sm text-red-700">
						<ul style="list-style-type:none;">
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
    @endif

	@if($saveSuccess)
		<div class="rounded-md bg-green-100 rounded-lg p-4">
			<div class="flex">
				<div class="flex-shrink-0">
					<svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
					</svg>
				</div>
				<div class="ml-3">
					<h3 class="text-sm font-medium text-green-800">Successfully Saved Info</h3>
					<div class="mt-2 text-sm text-green-700">
						<p>New semester has been saved.</p>
					</div>
				</div>
			</div>
		</div>
	@endif
	
    @if($updateMode)
        @include('livewire.semester.update')
    @else
        @include('livewire.semester.create')
    @endif


    <table class="w-3/4 border">
        <thead>
			<tr class="bg-gray-50 border-b">
				<th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
					<div class="flex items-center justify-center">
						No
						<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
						</svg>
					</div>
				</th>
				<th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
					<div class="flex items-center justify-center">
						Name
						<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
						</svg>
					</div>
				</th>                   
				<th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
					<div class="flex items-center justify-center">
						Action
						<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
						</svg>
					</div>
				</th>
			</tr>
		</thead>
		
		<tbody>   
        @foreach($data as $row)
            <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                <td class="p-2 border-r">{{$loop->index + 1}}</td>
                <td class="p-2 border-r">{{$row->semester_name}}</td>
                <td>
                    <button wire:click="edit({{$row->id}})" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Edit</button> | 
                    <button wire:click="destroy({{$row->id}})" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Delete</button>
                </td>
            </tr>
        @endforeach
		</tbody>   
    </table>
	


</div> 
