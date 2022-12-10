@extend('layouts.layout')

<!-- Content -->
<section id="list">
    <div class="container">
        <div>
            <h1>My Show Room</h1>
            <p>List Show Room Faruqi - 1202204105</p>
            <div class="d-flex gap-5">
                {{-- Get data from database --}}
                @foreach ($data as $row)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $row->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5
                                class="card-title
                            @if ($row->status == 'sold') text-danger
                            @elseif ($row->status == 'available')

                            @else
                                text-warning @endif
                            ">
                                {{ $row->name }}</h5>
                            <p class="card-text">{{ $row->description }}</p>
                            <p class="card-text">Rp. {{ $row->price }}</p>
                            <p class="card-text">{{ $row->status }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>


                        </div>
                    </div>
            </div>
</section>
<!-- Content End -->
