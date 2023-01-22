@extends('layout.layout')

@section('content')
    @vite(["resources/js/utils/textarea-plugin.js"])
    <form action="{{route("stories.create")}}" method="post" class="posts__post-form" enctype="multipart/form-data">
        @csrf
        <textarea name="title" class="post__input" placeholder="Напишите что-нибудь"></textarea>
        <input type="file" name="picture" id="post-img" class="post__file-input" rows="1">
        <label class="post__file-input-label" for="post-img">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_5_17)">
                <path d="M12.9443 9.74291C14.0183 10.8169 14.0183 12.5581 12.9443 13.6321C11.8703 14.7061 10.1291 14.7061 9.05512 13.6321C7.98114 12.5581 7.98114 10.8169 9.05512 9.74291C10.1291 8.66893 11.8703 8.66893 12.9443 9.74291Z" fill="#989898"/>
                <path d="M19.25 4.12481H17.3499L15.9742 1.37471H6.02455L4.65015 4.12616L2.75275 4.12953C1.24009 4.13224 0.00869272 5.36494 0.00738656 6.87828L0 17.8746C0 19.3913 1.23337 20.6253 2.7501 20.6253H19.25C20.7667 20.6253 22.0001 19.392 22.0001 17.8752V6.87486C22 5.35818 20.7666 4.12481 19.25 4.12481ZM10.9997 17.1877C7.9669 17.1877 5.49947 14.7203 5.49947 11.6875C5.49947 8.65475 7.9669 6.18732 10.9997 6.18732C14.0324 6.18732 16.4999 8.65475 16.4999 11.6875C16.4999 14.7203 14.0324 17.1877 10.9997 17.1877Z" fill="#989898"/>
                </g>
                <defs>
                <clipPath id="clip0_5_17">
                <rect width="22" height="22" fill="white"/>
                </clipPath>
                </defs>
            </svg>
        </label>
        <button type="submit" class="post__submit">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_5_20)">
                    <path d="M16.6479 7.94818L0.862529 0.662644C0.611178 0.548504 0.311256 0.616502 0.136404 0.83264C-0.0396636 1.04878 -0.0457348 1.35598 0.121832 1.57819L5.31278 8.49945L0.121832 15.4207C-0.0457348 15.6429 -0.0396636 15.9513 0.135189 16.1663C0.252972 16.3132 0.429039 16.3921 0.607535 16.3921C0.693747 16.3921 0.779959 16.3739 0.861314 16.3363L16.6466 9.05072C16.8628 8.95115 17 8.73623 17 8.49945C17 8.26267 16.8628 8.04775 16.6479 7.94818Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_5_20">
                    <rect width="17" height="17" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>                                
        </button>
    </form>
@endsection