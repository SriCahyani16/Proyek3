<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        {{-- Sidebar Section --}}
        @include('admin.sidebar')
        {{-- End Sidebar Section --}}

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            {{-- Navbar Section --}}
            @include('admin.navbar')
            {{-- End Navbar Section --}}
            <!-- partial -->
            <div class="main-panel">
                {{-- Body or Main Panel Section --}}
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> New Doctor </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Doctor</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Data doctor</h4>
                                    <p class="card-description"> All fields are required </p>
                                    <form class="forms-sample" enctype="multipart/form-data" method="POST"
                                        action="{{ url('upload_doctor') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="doctor_name">Doctor name</label>
                                            <input type="text" class="form-control text-white" id="doctor_name"
                                                placeholder="Full name" name="name" autocomplete="off">
                                            @error('name')
                                                <small class="text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="phone_number">Phone</label>
                                            <input type="text" class="form-control text-white" id="phone_number"
                                                placeholder="Phone number" name="phone_number" autocomplete="off">
                                            @error('phone_number')
                                                <small class="text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="speciality">Speciality</label>
                                            <select class="form-control text-white" id="speciality" name="speciality">
                                                <option value="" selected disabled>Doctor specialist</option>
                                                <option value="skin">Skin</option>
                                                <option value="heart">Heart</option>
                                                <option value="eye">Eye</option>
                                                <option value="nose">Nose</option>
                                            </select>
                                            @error('speciality')
                                                <small class="text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="room_number">Doctor room</label>
                                            <input type="number" class="form-control text-white" id="room_number"
                                                placeholder="Room number" name="room_number" autocomplete="off">
                                            @error('room_number')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="doctor_image">Doctor Image</label>
                                            <input id="doctor_image" type="file" name="doctor_image"
                                                class="file-upload-default form-control">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled
                                                    placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary"
                                                        type="button">Upload</button>
                                                </span>
                                            </div>
                                            @error('doctor_image')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End BOdy or Main Panel Section --}}
                {{-- Footer Section --}}
                @include('admin.footer')
                {{-- End Footer Section --}}
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    @include('admin.script')
</body>

</html>
