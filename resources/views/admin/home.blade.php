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
                @include('admin.body')
                {{-- End BOdy or Main Panel Section --}}
                {{-- Footer Section --}}
                @include('admin.footer')
                {{-- End Footer Section --}}
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    {{-- Include Script --}}
    @include('admin.script')
    {{-- End Include Script --}}
</body>

</html>
