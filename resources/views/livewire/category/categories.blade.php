<div>
<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10">
      <div class="card-body">
        <div class="card-header text-black">
          <h3 class="text-center mb-4 ">Categories</h3>
        </div>
        <div class="">
          <div class="table-body">
            <table class="table table-bordered table-hover">
              <thead>
                <tr class="" style="background-color: rgb(255, 255, 255)">
                  <th scope="col">Category</th>
                  <th scope="col">Remarks</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                  <tr style="background-color: white">
                    <td>{{ $category->category }}</td>
                    <td>{{ $category->remarks }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="d-flex justify-content-end mt-4">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCategoryModal">New Category</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
    <div wire:ignore.self class="modal fade" id="newCategoryModal" tabindex="-1" aria-labelledby="newCategory" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header theadclr">
                     <h1 class="modal-title fs-5" id="newCategory">Add New Category</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body bgcolor">
                     <div class="form-group">
                         
                         <input type="text" class="form-control" placeholder="Enter Category" wire:model="category">
                     </div>
                     <div class="form-group">
                         
                         <textarea class="form-control form-control-lg mt-4" placeholder="Enter Remarks" wire:model="remarks"></textarea>
                     </div>
                 </div>
                 <div class="modal-footer bghdcolor">
                     <button type="button" class="btn addcatebtnclr bg-primary" wire:click.prevent="store()">Add Category</button>
                     <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
             </div>
         </div>
     </div>
 </div>