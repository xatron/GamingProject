@extends('profile.partials.header')




@section('content')

<div> Owned games: </div>

    <div class="row">
      <div class="col-sm-4 col-md-2">
        <div class="thumbnail">
          <img src="/images/logos/csgo_header.jpg" alt="...">
          <div class="caption">
            <h3>CS:GO</h3>
            <div>Rank: Global Elite</div>
            <div>Total inventory value: $474</div>
            <div>Favorite Weapon: AK-47</div>
            <p><a href="#" class="btn btn-primary" role="button">Go to CS:GO</a> <a href="#" class="btn btn-default" role="button">Edit...</a></p>
          </div>
        </div>
      </div>


        <div class="col-sm-4 col-md-2">
          <div class="thumbnail">
            <img src="/images/logos/clickerheroes_header.jpg" alt="...">
            <div class="caption">
              <h3>Clicker Heroes</h3>
              <div>Highest Zone Ever: 8749</div>
              <div>Number of Trancendeces: 52</div>
              <div>Number of T-Souls: 8372</div>
              <p><a href="#" class="btn btn-primary" role="button">Go to CS:GO</a> <a href="#" class="btn btn-default" role="button">Edit...</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-2">
          <div class="thumbnail">
            <img src="/images/logos/dota2_header.jpg" alt="...">
            <div class="caption">
              <h3>Dota 2</h3>
              <div>Rank: Golden Plastic</div>
              <div>Total inventory value: $12</div>
              <div>Favorite Champion: Pyromancer</div>
              <p><a href="#" class="btn btn-primary" role="button">Go to CS:GO</a> <a href="#" class="btn btn-default" role="button">Edit...</a></p>
            </div>
          </div>
        </div>

    </div>

    <div class="row">

    </div>


@stop



@extends('profile.partials.footer')
