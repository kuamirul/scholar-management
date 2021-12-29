<div>
    <form wire:submit.prevent="submit">
        <div class="form-group">
			<!--label for="file" class="block text-sm font-medium text-gray-700">
				File
			</label-->
			<div class="mt-1 mb-5">
				<input type="file" wire:model="upload" name="upload">

				@error('upload') <span class="error">{{ $message }}</span> @enderror
			</div>
        </div>
        <!--div class="form-group">
            <label>File Description</label>
            <input type="input" wire:model="description">
        </div-->
        <div class="form-group">
            <!--button type="submit">Upload</button-->
			<div wire:click="save" class="inline-flex justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-indigo-500 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 cursor-pointer">Upload</div>
        </div>
    </form>
    <div class="row">
        <div class="col-sm-12">
            @if ($saveSuccess)
                <p>The file {{ $upload->getClientOriginalName() }} with the size of {{ round($upload->getSize() / 1024, 0) }} KB has been uploaded!</p>
                <p>The file can be found locally at {{ $contents }}.
            @endif
        </div>
    </div>
</div>