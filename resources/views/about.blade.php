@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 100px;">
        <div class="wrapper row2">
            <div id="container" class="clear">

                <div id="about-us" class="clear">
                    <section id="statements" class="clear">
                        <div class="col-md-8 col-md-offset-2">
                            <img src="{{asset('assets/img/people.png')}}" alt="" style="width:650px; height: 500px;">
                           {{-- <div class="col-md-6"><img src="{{asset('assets/img/sell-tickets.png')}}" alt=""></div>--}}
                        </div>

                        <div class="col-md-6 col-xs-12">
                            <h2>Vivamuslibero Auguer</h2>
                            <blockquote>
                                <p>Sed pulvinar, tellus in venenatis vehicula, lorem magna dignissim erat.</p>
                            </blockquote>
                            <p class="right">&quot;Vivamus accumsan / Company Director&quot;</p>
                            <p>Vivamus accumsan. Donec molestie pede vel urna. Curabitur eget sem ornare felis gravida vestibulum.Sed pulvinar, tellus in venenatis vehicula, lorem magna dignissim erat, in accumsan ante lorem sit amet lorem.</p>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <h2>Vivamuslibero Auguer</h2>
                            <p>In sed neque id libero pretium luctus. Vivamus faucibus. Ut vitae elit. In hac habitasse platea dictumst. Proin et nisl ac orci tempus luctus. Aenean lacinia justo at nisi. Vestibulum sed eros sit amet nisl lobortis commodo.</p>
                            <ul>
                                <li>Aliquam venenatis leo et orci.</li>
                                <li>Pellentesque eleifend vulputate massa.</li>
                                <li>Vivamus eleifend sollicitudin eros.</li>
                                <li>Maecenas vitae nunc.</li>
                            </ul>
                            <p>Vivamus accumsan. Donec molestie pede vel urna. Curabitur eget sem ornare felis gravida vestibulum.Sed pulvinar, tellus in venenatis vehicula.</p>
                        </div>
                    </section>

                </div>

            </div>
        </div>
    </div>

@endsection