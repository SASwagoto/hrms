@extends('layouts.admin')

@section('title')
    Add Leave Request
@endsection

@section('header')
    Add Leave Request 
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Add Leave Request</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label text-primary">Leave Reason<span class="required">*</span></label>
                            <input type="text" required name="emp_id" class="form-control input-default"
                                placeholder="Enter Employee ID">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-primary">Start Date<span class="required">*</span></label>
                            <input type="date" required name="start_date" class="form-control input-default"
                                id="start_date">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-primary">Day<span class="required">*</span></label>
                            <input type="number" required name="day" class="form-control input-default"
                                id="day" readonly>
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label text-primary">Leave Type<span class="required">*</span></label>
                            <select name="position" class="default-select form-control wide form-control mb-3">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-primary">End Date<span class="required">*</span></label>
                            <input type="date" required name="end_date" class="form-control input-default"
                                id="end_date">
                        </div><br>
                        <div class="mb-3" style="padding-top: 5px">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    // Get references to the input elements
    const startDateInput = document.getElementById("start_date");
    const endDateInput = document.getElementById("end_date");
    const dayInput = document.getElementById("day");

    // Add event listeners to the start and end date inputs
    startDateInput.addEventListener("change", updateDayDifference);
    endDateInput.addEventListener("change", updateDayDifference);

    // Function to calculate the difference including both start and end dates
    function updateDayDifference() {
        const startDate = new Date(startDateInput.value);
        const endDate = new Date(endDateInput.value);

        // Check if both dates are valid
        if (!isNaN(startDate) && !isNaN(endDate)) {
            const timeDifference = endDate - startDate;
            const dayDifference = Math.ceil(timeDifference / (1000 * 60 * 60 * 24)) + 1; // Add 1 day
            dayInput.value = dayDifference;
        } else {
            dayInput.value = "";
        }
    }
</script>
@endpush