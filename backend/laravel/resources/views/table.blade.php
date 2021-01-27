@extends('layouts.master')

@section('content')
                   
    <!-- Normal Table area Start-->
    <div class="normal-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>Documents</h2>
                        </div>
                        <div class="bsc-tbl-hvr">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>title</th>
                                        <th>作成日</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (range(0, count($contents->{'docs'})-1) as $num)
                                    <tr data-href="{{ route('show',['num' => $num])}}">
                                        <td>{{ $contents->{'docs'}[$num]->{'head'}->{'id'} }}</td>
                                        <td>{{ $contents->{'docs'}[$num]->{'head'}->{'title'} }}</td>
                                        <td>{{ $contents->{'docs'}[$num]->{'head'}->{'createdAt'} }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Normal Table area -->

@endsection

@section('script')
<script>
    $('tr[data-href]').addClass('clickable')
        .click(function(e){
            if(!$(e.target).is('a')){
                window.location = $(e.target).closest('tr').data('href');
            }
        });
</script>
    
@endsection