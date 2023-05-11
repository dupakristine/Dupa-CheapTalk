<div>
    @if (session()->has('message'))
        <div class="alert alert-success col-md-3 mx-auto mt-3 text-center">
            {{ session('message') }}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-3 mt-3">
            <div class="form-floating">
                <select class="form-select postcardbdclr" wire:model="postCategory">
                    <option value="" disabled>Select a Category</option>
                    <option value="all">All</option>
                    @foreach ($categories as $category )
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
                <label for="caliber" class="form-label text-dark">Select a Category</label>
            </div>
        </div>

        <div class="col-md-3 mt-3 mb-3">
            <div class="form-floating">
                <input type="text" class="form-control postcardbdclr" placeholder="Search" wire:model="postSearch">
                <label for="search" class="form-label text-dark">Search</label>
            </div>
        </div>
    </div>
    


    <section class="blog-posts">
      <div class="container mt-4">
        <div class="row">
          @foreach ($posts as $post)
          <div class="container" style="display: grid; place-content:center;">
            <div class="content" style="width: 650px;">
              <article class="mb-4">
                <div class="card shadow border-0">
                  <header class="card-header p-4">
                    <h3 class="text-uppercase text-center mb-0">{{ $post->author }}</h3>
                    <div class="d-flex justify-content-center mt-2">
                      <div>{{ $post->category->category }}</div>
                    </div>
                  </header>
                  <div class="card-body bg-white">
                    <h2 class="text-primary mb-3">{{ $post->title }}</h2>
                    <p class="card-text mb-4">{{ $post->content }}</p>
                  </div>
                </div>
              </article>
            </div>
          </div>
          
          @endforeach
        </div>
      </div>
    </section>

    <div class="offset-md-8 mt-3">
        {{ $posts }}
    </div>
</div>
