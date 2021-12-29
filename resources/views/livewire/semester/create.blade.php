<!--div>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter Semester Name</label>
        <input type="text" wire:model="semester_name" class="form-control input-sm"  placeholder="Semester Name">
    </div>
    <button wire:click="store()" class="btn btn-primary">Submit</button>
</div-->


<div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
	<div class="sm:col-span-6">
		<label for="title" class="block text-sm font-medium text-gray-700">
			Insert Semester Name
		</label>
		<div class="mt-1">
			<input id="title" type="text" wire:model="semester_name" name="title" placeholder="Semester Name" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
		</div>
	</div>
	<div wire:click="store()" class="inline-flex justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-indigo-500 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 cursor-pointer">Insert</div>
</div>