@extends('admin.master')
@section('content')
    <!--begin::App Main-->
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Update Website Plicies</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Website Plicies</li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row g-4">
                    <!--begin::Col-->
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <div class="card card-primary card-outline mb-4">
                            <!--begin::Header-->
                            <div class="card-header">
                                <div class="card-title">Input Policy Data</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Form-->
                            <form method="POST" action="{{ url('/manage/website-policy/update') }}" enctype="multipart/form-data">
                                @csrf
                                <!--begin::Body-->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-12">
                                            <div class="mb-3">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="summernote" class="form-label">Privacy Policy</label>
                                                <textarea name="privacy_policy" class="form-control" id="summernote">{{$websitePolicy->privacy_policy}}</textarea>
                                                @error('privacy_policy')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="summernote_two" class="form-label">Terms & Conditions</label>
                                                <textarea name="terms_conditions" class="form-control" id="summernote_two">{{$websitePolicy->terms_conditions}}</textarea>
                                                @error('terms_conditions')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="summernote_three" class="form-label">Refund Policy</label>
                                                <textarea name="refund_policy" class="form-control" id="summernote_three">{{$websitePolicy->refund_policy}}</textarea>
                                                @error('refund_policy')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="summernote_four" class="form-label">Payment Policy</label>
                                                <textarea name="payment_policy" class="form-control" id="summernote_four">{{$websitePolicy->payment_policy}}</textarea>
                                                @error('payment_policy')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="summernote_five" class="form-label">About Us</label>
                                                <textarea name="about_us" class="form-control" id="summernote_five">{{$websitePolicy->about_us}}</textarea>
                                                @error('about_us')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <!--end::Footer-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Quick Example-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>
    <!--end::App Main-->
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#summernote_two').summernote();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#summernote_three').summernote();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#summernote_four').summernote();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote_five').summernote();
        });
    </script>

    {{-- Add More Color --}}
    <script>
        $(document).ready(function() {
            $("#add_color").click(function() {
                $(this).before(
                    '<input type="text" class="form-control mb-2" name="color_name[]" placeholder="Color Name" id="color_name"/>'
                )
            })
        });
    </script>

    {{-- Add More Size --}}
    <script>
        $(document).ready(function() {
            $("#add_size").click(function() {
                $(this).before(
                    '<input type="text" class="form-control mb-2" name="size_name[]" placeholder="Size Name" id="size_name"/>'
                )
            })
        });
    </script>
@endpush
