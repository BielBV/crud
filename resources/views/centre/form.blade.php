<div class="w-full">
    <div class="flex flex-wrap">
        <h1 class="mb-5">{{ $title }}</h1>
    </div>
</div>

<form method="POST" action="{{ $route }}" class="needs-validation">
    @csrf
    @isset($update)
        @method("PUT")
    @endisset
    <div class="mb-3">
        <label for="id" class="form-label">{{ __("Id") }}</label>
        <input name="id" type="text" class="form-control" value="{{ old("id") ?? $centre->id }}">
        @error("nom")
        <div class="fs-6 text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="nom" class="form-label">{{ __("Nom") }}</label>
        <input name="nom" type="text" class="form-control" value="{{ old("nom") ?? $centre->nom }}">
        @error("cognoms")
        <div class="fs-6 text-danger">{{ $message }}</div>
        @enderror
    </div>


    <div class="mb-3">
        <button class="btn btn-primary" type="submit">
            {{ $textButton }}
        </button>
    </div>
    <div class="mb-3">
        <button class="btn btn-danger" type="submit">
            <a href="/centre" style="text-decoration: none; color: white;"> Tornar al CRUD <a>
        </button>
    </div>
</form>