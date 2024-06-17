@include('home.includes.header')

<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    @include('home.includes.nav')

    <!-- Page Header Start -->
    <div class="container-xxl py-5 page-header position-relative mb-5">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Events</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Event</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Events Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Events</h1>
                <p>Update of Upcoming events at FRC.</p>
            </div>

            <!-- Filters Start -->
            <d<div class="row mb-4">
                <form action="{{ route('event') }}" method="GET" class="w-100">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="filter_location" name="filter_location" placeholder="Filter by Location" value="{{ request('filter_location') }}">
                        </div>
                        <div class="col-md-4">
                            <select id="filter_type" name="filter_type" class="form-control">
                                <option selected disabled>Choose Activity Type</option>
                                <option {{ request('filter_type') == 'Play Session' ? 'selected' : '' }}>Play Session</option>
                                <option {{ request('filter_type') == 'Recreatiing and Learning' ? 'selected' : '' }}>Recreatiing and Learning</option>
                                <option {{ request('filter_type') == 'Health & Wellness' ? 'selected' : '' }}>Health & Wellness</option>
                                <option {{ request('filter_type') == 'Music & Movement' ? 'selected' : '' }}>Music & Movement</option>
                                <option {{ request('filter_type') == 'Playtime' ? 'selected' : '' }}>Playtime</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select id="filter_age_group" name="filter_age_group" class="form-control">
                                <option selected disabled>Choose Age Group</option>
                                <option {{ request('filter_age_group') == '0-3 years' ? 'selected' : '' }}>0-3 years</option>
                                <option {{ request('filter_age_group') == '3-6 years' ? 'selected' : '' }}>3-6 years</option>
                                <option {{ request('filter_age_group') == '1-6 years' ? 'selected' : '' }}>1-6 years</option>
                                <option {{ request('filter_age_group') == '0-2 years' ? 'selected' : '' }}>0-2 years</option>
                                <option {{ request('filter_age_group') == '3-5 years' ? 'selected' : '' }}>3-5 years</option>
                                <option {{ request('filter_age_group') == '2-4 years' ? 'selected' : '' }}>2-4 years</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row mt-3">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row g-4" id="events-container">
                @foreach($events as $event)
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="gallery-item">
                            <img src="{{ asset($event->image) }}" alt="Event Image" class="img-fluid rounded" style="width: 100%; height: 200px; object-fit: cover; object-position: center;">
                            <div class="gallery-item-info">
                                <h5>{{ $event->title }}</h5>
                                <p>{{ $event->location }}</p>
                                <p>{{ $event->type }}</p>
                                <p>{{ $event->age_group }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if($events->count() > 0)
                <!-- Pagination Section -->
                <div class="pagination-section">
                    <div class="d-flex justify-content-center" style="margin-top: 30px">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center flex-wrap">
                                @if ($events->onFirstPage())
                                    <li class="page-item disabled"><span class="page-link">Prev</span></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $events->previousPageUrl() }}">Prev</a></li>
                                @endif

                                @foreach ($events->getUrlRange(1, $events->lastPage()) as $page => $url)
                                    <li class="page-item {{ ($page == $events->currentPage()) ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach

                                @if ($events->hasMorePages())
                                    <li class="page-item"><a class="page-link" href="{{ $events->nextPageUrl() }}">Next</a></li>
                                @else
                                    <li class="page-item disabled"><span class="page-link">Next</span></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Events Section End -->

    @include('home.includes.footer')
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JavaScript -->
<script>
    function applyFilters() {
        const location = $('#filter_location').val();
        const type = $('#filter_type').val();
        const ageGroup = $('#filter_age_group').val();

        $.ajax({
            url: '',
            method: 'GET',
            data: {
                filter_location: location,
                filter_type: type,
                filter_age_group: ageGroup,
            },
            success: function(response) {
                $('#events-container').html(response);
            }
        });
    }
</script>
</body>
</html>
