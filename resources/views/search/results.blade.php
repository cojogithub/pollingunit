@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4" style="color: white !important;">Search Results for: <strong>{{ $query }}</strong></h1>

    @if (empty($results))
        <div class="alert alert-info" role="alert" style="color: white !important;">
            No results found for "{{ $query }}".
        </div>
    @else
        @foreach ($results as $result)
            <div class="search-result mb-5">
                <h3>{{ $result['heading'] }}</h3>
                <p class="file-info">{!! $result['file'] !!}</p>
                <p>{!! $result['snippet'] !!}</p>
            </div>
        @endforeach

        <!-- Pagination -->
        <div class="pagination-container">
            @php
                $totalPages = ceil($totalResults / $perPage);
            @endphp
            
            @if ($currentPage > 1)
                <a href="{{ request()->fullUrlWithQuery(['page' => $currentPage - 1]) }}" class="pagination-button">Previous</a>
            @endif
            
            @for ($i = 1; $i <= $totalPages; $i++)
                <a href="{{ request()->fullUrlWithQuery(['page' => $i]) }}" class="pagination-button {{ $currentPage == $i ? 'current' : '' }}">{{ $i }}</a>
            @endfor
            
            @if ($currentPage < $totalPages)
                <a href="{{ request()->fullUrlWithQuery(['page' => $currentPage + 1]) }}" class="pagination-button">Next</a>
            @endif
        </div>
    @endif
</div>

<style>
    body {
        color: white;
        background-color: #000000;
    }

    .container {
        padding: 20px;
        border-radius: 10px;
    }

    .search-result h3 {
        font-size: 1.5rem;
        color: #ffcc00;
        margin-bottom: 0.5rem;
    }

    .search-result p.file-info {
        font-size: 0.9rem;
        color: #ffcc00;
        margin-bottom: 1rem;
    }

    .search-result p {
        font-size: 1rem;
        line-height: 1.5;
        color: white;
    }

    .search-result strong {
        background-color: #ffff00;
        font-weight: bold;
        color: black;
    }

    .alert.alert-info {
        background-color: #333;
        color: white;
        border: none;
    }

    a {
        color: #1a73e8;
    }

    .pagination-container {
        margin-top: 20px;
        text-align: center;
    }

    .pagination-button {
        display: inline-block;
        padding: 10px 15px;
        margin: 0 5px;
        border-radius: 25px;
        background-color: #fff;
        color: red;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .pagination-button:hover {
        background-color: #e0e0e0;
    }

    .pagination-button.current {
        background-color: blue;
        color: white;
    }
</style>
@endsection
