@extends('front.master')
@section('title', $courseEnrollment->course_name)
@section('content')

<div class="course-details-area pt-100 pb-70">
    <div class="container">
        <div class="row card-body" style="display: flex; justify-content: center; align-items: center; background-color: #f8f9fa; border-radius: 10px; padding: 20px;">
            <div class="col-lg-8">
                <div class="course-details-wrapper">
                    <div class="course-details-thumb mb-3">
                        <img src="{{ asset($courseEnrollment->photo) }}" style="width: 200px; height: 200px; object-fit: cover; border-radius: 10px;" alt="Course Image">
                    </div>
                    <div class="course-details-content">
                        <h2>{{ $courseEnrollment->course_name }}</h2>
                        <h4>Price: {{ $courseEnrollment->price }} Tk</h4>
                        <p>{{ $courseEnrollment->short_description }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="course-sidebar">
                    <div class="course-teacher">
                        <h4 style="margin-bottom: 20px;">Choose Payment Method</h4>

                        {{-- <form action="{{ route('student.checkout', $courseEnrollment->id) }}" method="POST">
                            @csrf --}}

                            <!-- Bkash -->
                           <label class="card p-3 mb-3 shadow-sm" style="cursor: pointer;">
                                <div class="d-flex align-items-center" style="gap: 15px;">
                                    <input type="radio" name="payment_method" value="bkash" required>
                                    <img src="{{ asset('assets/front/img/payment/bkash.png') }}" alt="Bkash" width="100%" height="40">
                                    {{-- <strong class="mb-0">Bkash</strong> --}}
                                </div>
                            </label>

                            <!-- SSLCommerz -->
                            <label class="card p-3 mb-3 shadow-sm" style="cursor: pointer;">
                                <div class="d-flex align-items-center" style="gap: 15px;">
                                    <input type="radio" name="payment_method" value="sslcommerz" class="mr-3">
                                    <img src="{{ asset('assets/front/img/payment/ssl.jpeg') }}" alt="SSLCommerz" width="100%" height="40" class="mr-3">
                                    {{-- <strong>SSLCommerz</strong> --}}
                                </div>
                            </label>

                            <!-- Nagad -->
                            <label class="card p-3 mb-3 d-flex align-items-center shadow-sm" style="cursor: pointer;">
                                <input type="radio" name="payment_method" value="nagad" class="mr-3">
                                <img src="{{ asset('assets/icons/nagad.png') }}" alt="Nagad" width="40" height="40" class="mr-3">
                                <strong>Nagad</strong>
                            </label>

                            <!-- Pay Button -->
                            <div class="text-left mt-4">
                                {{-- <button type="submit" class="btn btn-primary btn-block">Pay Now</button> --}}
                                <a href="{{ route('student.checkout', $courseEnrollment->id) }}" class="btn btn-success">Pay Now</a>
                            </div>
                        {{-- </form> --}}

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
