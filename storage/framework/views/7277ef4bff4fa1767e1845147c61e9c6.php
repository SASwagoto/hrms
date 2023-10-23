

<?php $__env->startSection('title'); ?>
    Add Review
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<style>
.rating-container {
  display: inline-block;
}

.star {
  cursor: pointer;
  font-size: 20px;
  color: #ccc;
  display: inline-block;
}

.star.selected, .star.hovered {
  color: #ff9900; /* Color for full star */
}

.star.half.hovered::before {
  content: "\00BD"; /* Unicode for half-star character */
  color: #ccc; /* Color for half-star */
}

</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
    Add Review
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <div>
                                <label class="form-label text-primary">Employee Name<span class="required">*</span></label>
                                <input type="text" required name="emp_name" class="form-control input-default"
                                placeholder="Employee Name">
                            </div><br>
                            <div>
                                <label class="form-label text-primary">Date<span class="required">*</span></label>
                                <input type="date" class="form-control">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div>
                                <label class="form-label text-primary">Rating<span class="required">*</span></label><br>
                                <div class="rating-container">
                                    <div class="rating-stars">
                                      <span data-rating="1" class="star">&#9733;</span>
                                      <span data-rating="2" class="star">&#9733;</span>
                                      <span data-rating="3" class="star">&#9733;</span>
                                      <span data-rating="4" class="star">&#9733;</span>
                                      <span data-rating="5" class="star">&#9733;</span>
                                    </div>
                                    <div class="rating-value">0</div>
                                    <input type="hidden" name="rating" id="rating" value="0">
                                  </div> 
                            </div>
                            <div style="padding-top: 10px">
                                <label class="form-label text-primary">Comments<span class="required">*</span></label>
                                <textarea class="form-control" id="exampleFormControlTextarea2" rows="1"></textarea>
                            </div><br>
                            <div>
                                <button type="button" class="btn btn-primary float-end" id="addMore">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script>
const stars = document.querySelectorAll('.star');
const ratingValue = document.querySelector('.rating-value');
const ratingInput = document.getElementById('rating');

stars.forEach(star => {
  star.addEventListener('mouseenter', () => {
    const rating = parseFloat(star.getAttribute('data-rating'));
    ratingInput.value = rating;
    updateStars(rating);
    ratingValue.textContent = rating; // Update the displayed rating value
  });

  star.addEventListener('mouseleave', () => {
    const currentRating = parseFloat(ratingInput.value);
    updateStars(currentRating);
    ratingValue.textContent = currentRating; // Update the displayed rating value
  });
});

function updateStars(rating) {
  stars.forEach(star => {
    const starRating = parseFloat(star.getAttribute('data-rating'));
    star.classList.remove('selected', 'half', 'hovered');
    if (starRating <= rating) {
      star.classList.add('selected');
    }
    if (starRating === rating - 0.5) {
      star.classList.add('half', 'hovered');
    }
  });
}

updateStars(parseFloat(ratingInput.value));

</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/review/add.blade.php ENDPATH**/ ?>