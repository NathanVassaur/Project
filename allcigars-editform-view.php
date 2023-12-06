
<button type="button" class="btn btn-primary btn-sm position-absolute top-0 end-0 m-2" data-bs-toggle="modal" data-bs-target="#editCigarModal<?php echo $cigar['cigar_id']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </svg>
</button>

<div class="modal fade" id="editCigarModal<?php echo $cigar['cigar_id']; ?>" tabindex="-1" aria-labelledby="editCigarModalLabel<?php echo $cigar['cigar_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editCigarModalLabel<?php echo $cigar['cigar_id']; ?>">Edit Cigar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="allcigars.php">
          <div class="mb-3">
            <label for="editCigarBrand<?php echo $cigar['cigar_id']; ?>" class="form-label">Brand</label>
            <input type="text" class="form-control" id="editCigarBrand<?php echo $cigar['cigar_id']; ?>" name="editCigarBrand" value="<?php echo $cigar['brand']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="editCigarModel<?php echo $cigar['cigar_id']; ?>" class="form-label">Model</label>
            <input type="text" class="form-control" id="editCigarModel<?php echo $cigar['cigar_id']; ?>" name="editCigarModel" value="<?php echo $cigar['model']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="editCigarSize<?php echo $cigar['cigar_id']; ?>" class="form-label">Size</label>
            <input type="text" class="form-control" id="editCigarSize<?php echo $cigar['cigar_id']; ?>" name="editCigarSize" value="<?php echo $cigar['size']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="editCigarAvailable<?php echo $cigar['cigar_id']; ?>" class="form-label">Change Available Inventory to</label>
            <input type="number" class="form-control" id="editCigarAvailable<?php echo $cigar['cigar_id']; ?>" name="editCigarAvailable" value="<?php echo $cigar['available']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="editCigarPrice<?php echo $cigar['cigar_id']; ?>" class="form-label">Price</label>
            <input type="number" class="form-control" id="editCigarPrice<?php echo $cigar['cigar_id']; ?>" name="editCigarPrice" value="<?php echo $cigar['price']; ?>" required>
          </div>
          <input type="hidden" name="cid" value="<?php echo $cigar['cigar_id']; ?>">
          <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
