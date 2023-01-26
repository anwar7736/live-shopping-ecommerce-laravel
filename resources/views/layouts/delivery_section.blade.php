<section>
            <div class="features pt-4 pb-4 ps-3 pe-3" style="background-color: #ed6c00;">
                <div class="container-fluid">
                    <div class="row feature-row">
                        @foreach($data as $row)
                            <div class="col-lg col-md-4 col-12 feature-col m-auto text-start p-2">
                                <div class="d-flex feature-flex">
                                    <div class="icon text-center">
                                        <img src="{{ $row['image'] }}" alt="" height="40" class="mt-2 pe-2">
                                    </div>
                                    <div class="text text-light">
                                        <h6><b>{{ $row['title'] }}</b></h6>
                                        <p>{{ $row['short_desc'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>