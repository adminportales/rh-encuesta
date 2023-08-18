<div>
    @php
        $classes="btn btn-ligth "   
    @endphp

    <div class="card shadow card-total">                
        <a {{ $attributes->merge(['class'=>$classes]) }}  role="button"> <img src="{{ asset('img/Microsoft_Office_Excel_(2019–present).svg.png') }}" width="50px" height="50px" alt="">
            
        </a>
    </div>
</div>