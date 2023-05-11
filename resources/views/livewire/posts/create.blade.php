<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card shadow p-4">
                <h3 class="text-center postcard mb-4">Post</h3>     
                <form wire:submit.prevent="store()">
                    <div class="card-body mb-3">
                        
                        <input type="text" class="form-control" id="author" placeholder="Author" wire:model="author">
                    </div>
                    <div class="card-body mb-3">
                        
                        <input type="text" class="form-control createcolor" id="title" placeholder="Title" wire:model="title">
                    </div>
                    <div class="card-body mb-3">
                        
                        <select class="form-select" id="category" wire:model="category_id">
                            <option value="" disabled>Select a Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="card-body mb-3">
                        
                        <textarea class="form-control form-control-lg" id="content" rows="5" placeholder="What's in Your Mind?" wire:model="content"></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-lg mt-3">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>