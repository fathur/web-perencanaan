<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h2 class='text-center'>Agenda</h2>
        </div>
    </div>

    <div class="row">

        @foreach($agendas as $agenda)

            <div class="col-sm-4">
                <div class="image-wrapper">

                    <div class="image">
                        <img src="{{$agenda->thumbnail->attachment->url}}"
                             alt="{{$agenda->thumbnail->attachment->caption}}" class="img-responsive">
                    </div>

                    <div class="date-wrapper">
                        <div class="date">{{two_digit($agenda->acf->dateTimePicker('date')->day)}}</div>
                        <div class="month-year">

                            <div class="month">{{two_digit($agenda->acf->dateTimePicker('date')->month)}}</div>
                            <div class="year">{{two_digit($agenda->acf->dateTimePicker('date')->year)}}</div>
                        </div>
                    </div>
                </div>

                <a href="{{url('/agenda/' . $agenda->slug)}}">
                    <h3>{{$agenda->post_title}}</h3>
                </a>

                <div class="attribute">
                    <span class="venue">{{$agenda->acf->text('venue')}}</span>
                </div>
            </div>
        @endforeach

    </div>
</div>
