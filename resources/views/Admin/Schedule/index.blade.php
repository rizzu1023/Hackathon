@extends('Admin.layouts.base')

@section('header-icon')
    @include('Admin.layouts.eventTopbar')
@endsection


@section('content')
    <section id="teamIndex">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i>Teams
                        <a class="btn btn-sm btn-primary" href="/admin/schedule/create" style="float: right">Add Team</a>
                        <div class="col-md-3" style="display: inline-block; float: right">
                            <form method="post" action="/admin/schedule/filter" onchange="submit()">
                                @csrf
                            <select class="form-control" id="event" name="event_id">
                                <option selected disabled>ALL</option>

                            </select>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Event Id</th>
                                <th>Team 1</th>
                                <th>Team 2</th>
                                <th>Status</th>
                                <th>Winner</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($schedules as $schedule)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $schedule->date }}</td>
                                    <td>{{ $schedule->time }}</td>
                                    <td>{{ $schedule->event_id }}</td>
                                    <td>{{ $schedule->team1 }}</td>
                                    <td>{{ $schedule->team2 }}</td>
                                    <td>{{ $schedule->status }}</td>
                                    <td>{{ $schedule->winner }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-square btn-primary" href="/admin/schedule/{{ $team->id }}">Detail</a>
                                        <a class="btn btn-sm btn-square btn-warning"
                                           href="/admin/schedule/{{ $team->id }}/edit">Edit</a>
                                        <form method="post" action="/admin/schedule/{{$team->id}}"
                                              style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-square btn-danger">Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                        {{--                        <ul class="pagination">--}}
                        {{--                            <li class="page-item">--}}
                        {{--                                <a class="page-link" href="#">Prev</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="page-item active">--}}
                        {{--                                <a class="page-link" href="#">1</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="page-item">--}}
                        {{--                                <a class="page-link" href="#">2</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="page-item">--}}
                        {{--                                <a class="page-link" href="#">3</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="page-item">--}}
                        {{--                                <a class="page-link" href="#">4</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="page-item">--}}
                        {{--                                <a class="page-link" href="#">Next</a>--}}
                        {{--                            </li>--}}
                        {{--                        </ul>--}}
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
    </section>
@endsection
