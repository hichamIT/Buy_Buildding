@if(count($bu)>0)

    @foreach($bu as $b)
        <div class="col-md-4 column productbox">
            <img src="{{ checkimage($b->bu_image) }}" class="img-responsive">
            <div class="producttitle">{{$b->bu_name}}</div>
            <div class="productprice">
                <div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">BUY</a></div>
                <div class="pull-right"><a href="{{url('/singlebu/'.$b->id)}}" class="btn btn-danger btn-sm" role="button">info</a></div>
                <div class="pricetext">{{$b->bu_price}}</div></div>
        </div>
    @endforeach
    <div class="clear"></div>
    @else
    <div class="alert alert-warning">No buillding s to display</div>
@endif
