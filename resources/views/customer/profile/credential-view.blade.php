@extends('customer.master')

@section('content')
    <div class="body flex-grow-1">
        <div class="container-lg px-4">
            <form action="{{url('/customer/update-credentials')}}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" name="email" value="{{$authUser->email}}" class="form-control" placeholder="Your Email*" aria-label="Username"
                        aria-describedby="basic-addon1" required>
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="old_password" value="" class="form-control" placeholder="Your Old Password*">
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" value="" class="form-control" placeholder="Your New Password*">
                </div>

                <div class="input-group mt-3">
                    <input type="submit" name="submit" id="submit" class="form-control btn btn-success text-white" value="Update">
                </div>
            </form>
        </div>
    </div>

    {{-- <form method="POST" action="{{ url('/customer/register') }}" enctype="multipart/form-data">
    @csrf

    <div class="card shadow-lg p-4" style="max-width: 500px; margin: auto; border-radius: 10px;">
        <h4 class="text-center mb-4">Customer Registration</h4>

        <!-- Name -->
        <div class="mb-3">
            <label class="form-label">Full Name *</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" name="name" value="{{$authUser->name}}" class="form-control" placeholder="Enter your full name" required>
            </div>
        </div>

        <!-- Phone -->
        <div class="mb-3">
            <label class="form-label">Phone Number *</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                <input type="text" name="phone" class="form-control" placeholder="01XXXXXXXXX" required>
            </div>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label class="form-label">Email Address *</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
            </div>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label class="form-label">Password *</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Enter password" required>
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label class="form-label">Confirm Password *</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password" required>
            </div>
        </div>

        <!-- Image Upload -->
        <div class="mb-3">
            <label class="form-label">Profile Image (Optional)</label>
            <input type="file" name="image" class="form-control" id="imageInput" accept="image/*">

            <!-- Preview -->
            <div class="mt-3 text-center">
                <img id="previewImage" src="https://placehold.co/100x100"
                     style="width:100px;height:100px;border-radius:50%;object-fit:cover;border:2px solid #ddd;">
            </div>
        </div>

        <!-- Submit -->
        <div class="d-grid mt-3">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-user-plus"></i> Register Now
            </button>
        </div>

        <!-- Login -->
        <div class="text-center mt-3">
            <small>Already have an account? 
                <a href="{{ url('/customer/login') }}">Login</a>
            </small>
        </div>
    </div>
    </form> --}}
@endsection
