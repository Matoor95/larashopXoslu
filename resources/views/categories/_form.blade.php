<div class="space-y-4">

    <div>
        <label class="block font-medium " >Entrer le nom</label>
        <input type="text" name="name" value="{{ old('name', $category->name ??  ' ') }}" class="w-full border rounded p-2">
        @error('name')
        <p class="text-red-600 text-sm">{{ $message }}</p>
            
        @enderror

    </div>
</div>