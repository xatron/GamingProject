@extends('profile.partials.header')
@section('content')



<h1> Counter-Strike: Global Offensive </h1> </br>
<img src="/images/logos/csgo_header.jpg" alt="..."></br></br></br>
<p class="border">
<div class="container-float"> {{--  --}}


<div class="row"> {{-- Börjar Row för Stats --}}

  <div class="col-sm-5 offset-col-sm-3"> {{-- Sätter Stats till 6 col --}}
  {{-- <p class="border"> {{--  Border runt allt --}}




{{--     <div class="row"> {{-- Börjar Row för General Stats --}}
      <div class="col-sm-12"> {{-- Sätter col för General stats till 6 --}}
    <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1"><b>General Stats</b></a>
        </h4>
      </div>
    </p>
      <div id="collapse1" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item">Steam Username: Ninsew</li>
          <li class="list-group-item">Steam Rank: 82</li>
          <li class="list-group-item">CS:GO Rank: Global Elite</li>
        </ul>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div>




<div class="col-sm-12">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse2"><b>Weapon Stats</b></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item">Deagle Kills: 321</li>
          <li class="list-group-item">Glock Kills: 123</li>
          <li class="list-group-item">AK-47 Kills: 823</li>
        </ul>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
  </div>



<div class="col-md-12">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse3"><b>Map Stats</b></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item">Dust2 Games Played: 82</li>
          <li class="list-group-item">Dust2 Games Won: 72</li>
          <li class="list-group-item">Mirage Games Played: 82</li>
          <li class="list-group-item">Mirage Games Won: 72</li>
          <li class="list-group-item">Inferno Games Played: 82</li>
          <li class="list-group-item">Inferno Games Won: 72</li>
          <li class="list-group-item">Overpass Games Played: 82</li>
          <li class="list-group-item">Overpass Games Won: 72</li>
          <li class="list-group-item">Cobblestone Games Played: 82</li>
          <li class="list-group-item">Cobblestone Games Won: 72</li>
          <li class="list-group-item">Nuke Games Played: 82</li>
          <li class="list-group-item">Nuke Games Won: 72</li>
          <li class="list-group-item">Cache Games Played: 82</li>
          <li class="list-group-item">Cache Games Won: 72</li>
          <li class="list-group-item">Train Games Played: 82</li>
          <li class="list-group-item">Train Games Won: 72</li>
        </ul>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
  </div>
</br>


<div class="col-md-12">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse4"><b>Competitive Stats</b></a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item">Competetive Games Played: 182</li>
          <li class="list-group-item">Cometetive Games Won: 127</li>
          <li class="list-group-item">Competetive Kills: 3827</li>
        </ul>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div>



</div>
<div class="row">
  <div class"col-md-12 ">


<div class="dropdown">

  <button class="btn btn-default dropdown-toggle" type="button" id="sortby" data-toggle="dropdown">
    Sort by
    <span class="caret"></span>

  </button>
  <ul class="dropdown-menu" aria-labelled-by="sortby">
    <li><a href="#">Most valuable skin</li>
  <li><a href="#">Recent</li>
    <li><a href="#">Old</li>

  </ul>

</div>





  </div>
</div>






</div>
</p>




@stop
@extends('profile.partials.footer')
