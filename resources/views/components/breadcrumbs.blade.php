<link rel="stylesheet" href="css/breadcrumb.css">
<div class="breadcrumbs">
    <div class="breadcrumbs-container container">
        <div>
            {{ $slot }}
        </div>
        <div>
            @include('layouts.partials.search')
        </div>
    </div>
</div> <!-- end breadcrumbs -->
