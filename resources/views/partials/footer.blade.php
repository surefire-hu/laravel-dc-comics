<footer>
    <nav>
        <ul>
            <h3>DC COMICS</h3>
            @foreach ($menuLinksDcComics as $link)
                <li>
                    <a href="{{ $link['link'] }}">{{ $link['name'] }}</a>
                </li>
            @endforeach
        </ul>
        <ul>
            <h3>SHOP</h3>
            @foreach ($menuLinksShop as $link)
                <li>
                    <a href="{{ $link['link'] }}">{{ $link['name'] }}</a>
                </li>
            @endforeach
        </ul>  
        <ul>
            <h3>DC</h3>
            @foreach ($menuLinksDc as $link)
                <li>
                    <a href="{{ $link['link'] }}">{{ $link['name'] }}</a>
                </li>
            @endforeach
        </ul>   
        <ul>
            <h3>SITES</h3>
            @foreach ($menuLinksSites as $link)
                <li>
                    <a href="{{ $link['link'] }}">{{ $link['name'] }}</a>
                </li>
            @endforeach
        </ul>   
    </nav> 
    
    <p>All site content TM Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui porro alias amet aut. Quasi, voluptatum?</p>
    <figure>
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
    </figure>
</div>
</footer>
<div class="follow-us">
        <div class="container">
            <div>
                <button> SIGN UP NOW!</button>
            </div>
            <div class="social">
                <h4><strong>FOLLOW US</strong></h4>
                <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Facebook">
                <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="periscope">
                <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="pinterest">
                <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="twitter">
                <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="youtube">
            </div>
        </div>
    </div>