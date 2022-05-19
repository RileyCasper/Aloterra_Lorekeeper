@extends('user.layout')

@section('profile-title') {{ $user->name }}'s geno Slots @endsection

@section('profile-content')
{!! breadcrumbs(['Users' => 'users', $user->name => $user->url, 'geno Slots' => $user->url . '/genos']) !!}

<h1>
    {!! $user->displayName !!}'s geno Slots
</h1>

@if($genos->count())
    <div class="row">
        @foreach($genos as $geno)
            <div class="col-md-3 col-6 text-center mb-2">
                <div>
                    <a href="{{ $geno->url }}"><img src="{{ $geno->image->thumbnailUrl }}" class="img-thumbnail" alt="{{ $geno->fullName }}" /></a>
                </div>
                <div class="mt-1 h5">
                    @if(!$geno->is_visible) <i class="fas fa-eye-slash"></i> @endif {!! $geno->displayName !!}
                </div>
            </div>
        @endforeach
    </div>
@else
    <p>No geno slots found.</p>
@endif

@endsection
