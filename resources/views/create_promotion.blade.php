<!-- Modal using Bootstrap 5 with enhanced design and functionality -->
<div class="modal fade" id="addPromotion" tabindex="-1" aria-labelledby="addPromotionLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow">
      <!-- Enhanced header with icon and improved styling -->
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="addPromotionLabel">
          <i class="bi bi-tag-fill me-2"></i>Add New Promotion
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <form action="" method="POST" id="promotionForm">
          @csrf
          <div class="mb-4">
            <label for="title" class="form-label fw-bold">Promotion Title</label>
            <input type="text" id="title" name="title" class="form-control form-control-lg" placeholder="Enter promotion title" required>
          </div>
          <div class="mb-4">
            <label for="description" class="form-label fw-bold">Description</label>
            <textarea id="description" name="description" class="form-control" rows="4" placeholder="Describe your promotion details" required></textarea>
            <div class="form-text text-muted">Briefly explain the promotion terms and conditions</div>
          </div>
          <div class="row mb-4">
            <div class="col-md-6 mb-3 mb-md-0">
              <label for="startdate" class="form-label fw-bold">Start Date</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>
                <input type="date" id="startdate" name="start_date" class="form-control" required>
              </div>
            </div>
            <div class="col-md-6">
              <label for="expireddate" class="form-label fw-bold">End Date</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar-x"></i></span>
                <input type="date" id="expireddate" name="expired_date" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label for="promotionType" class="form-label fw-bold">Promotion Type</label>
            <select id="promotionType" name="promotion_type" class="form-select">
              <option value="" selected disabled>Select promotion type</option>
              <option value="discount">Discount</option>
              <option value="bogo">Buy One Get One</option>
              <option value="gift">Free Gift</option>
              <option value="shipping">Free Shipping</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="mb-4">
            <label for="discountAmount" class="form-label fw-bold">Discount Amount/Percentage</label>
            <div class="input-group">
              <input type="number" id="discountAmount" name="discount_amount" class="form-control" placeholder="e.g., 10">
              <select class="form-select" id="discountType" name="discount_type" style="max-width: 100px;">
                <option value="percent">%</option>
                <option value="fixed">$</option>
              </select>
            </div>
          </div>
          <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" id="isActive" name="is_active" checked>
            <label class="form-check-label" for="isActive">
              Active immediately after start date
            </label>
          </div>
        </form>
      </div>
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          <i class="bi bi-x-circle me-1"></i>Cancel
        </button>
        <button type="submit" form="promotionForm" class="btn btn-primary px-4">
          <i class="bi bi-save me-1"></i>Save Promotion
        </button>
      </div>
    </div>
  </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">