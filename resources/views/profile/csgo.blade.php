@extends('profile.partials.header')
@section('content')



  <div class="col-sm-12 col-md-2">
    <div class="thumbnail">
      <img src="/images/logos/csgo_header.jpg" alt="...">
      <div class="caption">
        <h3>CS:GO</h3>
        <div>Rank: Global Elite</div>
        <div>Total inventory value: $474</div>
        <div>Favorite Weapon: AK-47</div></br>
        <p><a href="#" class="btn btn-primary" role="button">Go to CS:GO</a> <a href="#" class="btn btn-default" role="button">Edit...</a></p>
      </div>
    </div>
  </div>
<p class="border">
<div class="container-float"> {{--  --}}


<div class="row"> {{-- Börjar Row för Stats --}}

  <div class="col-sm-5 offset-col-sm-0"> {{-- Sätter Stats till 6 col --}}
  {{-- <p class="border"> {{--  Border runt allt --}}




{{--     <div class="row"> {{-- Börjar Row för General Stats --}}
<div class="col-sm-12">
<div class="panel-group panel-bottom-margin">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1"><b>General Stats</b></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item">Username: Ninsew</li>
          <li class="list-group-item">Rank: Global Elite</li>
          <li class="list-group-item">Total inventory Value: $283</li>
        </ul>
      </div>
    </div>
  </div>
  </div>




<div class="col-sm-12">
<div class="panel-group panel-bottom-margin">
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
      </div>
    </div>
  </div>
  </div>



<div class="col-md-12">
  <div class="panel-group panel-bottom-margin">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse3"><b>Map Stats</b></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <ul class="list-group">


          <li class="list-group-item"><div class="panel-group">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" href="#collapse3-1"><b>Dust 2 Map Stats</b></a>
                </h4>
              </div>
              <div id="collapse3-1" class="panel-collapse collapse">
                <ul class="list-group">
                  <li class="list-group-item">Dust2 Games Played: 82</li>
                  <li class="list-group-item">Dust2 Games Won: 72</li>
                </ul>

              </div>
            </div>
          </div></li>
          <li class="list-group-item"><div class="panel-group">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" href="#collapse3-2"><b>Mirage Map Stats</b></a>
                </h4>
              </div>
              <div id="collapse3-2" class="panel-collapse collapse">
                <ul class="list-group">
                  <li class="list-group-item">Mirage Games Played: 82</li>
                  <li class="list-group-item">Mirage Games Won: 72</li>
                </ul>

              </div>
            </div>
          </div></li>

          <li class="list-group-item"><div class="panel-group">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" href="#collapse3-3"><b>Inferno Map Stats</b></a>
                </h4>
              </div>
              <div id="collapse3-3" class="panel-collapse collapse">
                <ul class="list-group">
                  <li class="list-group-item">Inferno Games Played: 82</li>
                  <li class="list-group-item">Inferno Games Won: 72</li>
                </ul>
              </div>
            </div>
          </div></li>

          <li class="list-group-item"><div class="panel-group">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" href="#collapse3-4"><b>Cache Map Stats</b></a>
                </h4>
              </div>
              <div id="collapse3-4" class="panel-collapse collapse">
                <ul class="list-group">
                  <li class="list-group-item">Cache Games Played: 82</li>
                  <li class="list-group-item">Cache Games Won: 72</li>
                </ul>
              </div>
            </div>
          </div></li>

          <li class="list-group-item"><div class="panel-group">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" href="#collapse3-5"><b>Overpass Map Stats</b></a>
                </h4>
              </div>
              <div id="collapse3-5" class="panel-collapse collapse">
                <ul class="list-group">
                  <li class="list-group-item">Overpass Games Played: 82</li>
                  <li class="list-group-item">Overpass Games Won: 72</li>
                </ul>
              </div>
            </div>
          </div></li>


          <li class="list-group-item"><div class="panel-group">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" href="#collapse3-6"><b>Nuke Map Stats</b></a>
                </h4>
              </div>
              <div id="collapse3-6" class="panel-collapse collapse">
                <ul class="list-group">
                  <li class="list-group-item">Nuke Games Played: 82</li>
                  <li class="list-group-item">Nuke Games Won: 72</li>
                </ul>
              </div>
            </div>
          </div></li>


          <li class="list-group-item"><div class="panel-group">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" href="#collapse3-7"><b>Train Map Stats</b></a>
                </h4>
              </div>
              <div id="collapse3-7" class="panel-collapse collapse">
                <ul class="list-group">
                  <li class="list-group-item">Train Games Played: 82</li>
                  <li class="list-group-item">Train Games Won: 72</li>
                </ul>
              </div>
            </div>
          </div></li>



          <li class="list-group-item"><div class="panel-group">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" href="#collapse3-8"><b>Cobblestone Map Stats</b></a>
                </h4>
              </div>
              <div id="collapse3-8" class="panel-collapse collapse">
                <ul class="list-group">
                  <li class="list-group-item">Cobblestone Games Played: 82</li>
                  <li class="list-group-item">Cobblestone Games Won: 72</li>
                </ul>
              </div>
            </div>
          </div></li>



        </ul>
      </div>
    </div>
  </div>
</div>


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






</br>
<div class="row">
  <div class="col-xs-2 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/csgoskins/awpasiimov.png" alt="..." style="max-height:50px;height:50px;"  >
      <p align="center">AWP Asiimov</br>Factory New</p>
    </a>
  </div>
  <div class="col-xs-2 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/csgoskins/akredline.png" alt="..." style="max-height:50px;height:50px;"  >
    <p align="center">AK-47 Redline</br>Factory New</p>
    </a>
  </div>
  <div class="col-xs-2 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/csgoskins/akredline.png" alt="..." style="max-height:50px;height:50px;"  >
      <p align="center">AK-47 Redline</br>Factory New</p>
    </a>
  </div>
  <div class="col-xs-2 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/csgoskins/awpasiimov.png" alt="..." style="max-height:50px;height:50px;"  >
      <p align="center">AWP Asiimov</br>Field Tested</p>
    </a>
  </div><div class="col-xs-2 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/csgoskins/awpasiimov.png" alt="..." style="max-height:50px;height:50px;"  >
    <p align="center">AWP Asiimov</br>Battle Scared</p>
    </a>
  </div>

  <div class="col-xs-2 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/csgoskins/awpasiimov.png" alt="..." style="max-height:50px;height:50px;"  >
      <p align="center">AWP Asiimov</br>Factory New</p>
    </a>
  </div>
  <div class="col-xs-2 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/csgoskins/akredline.png" alt="..." style="max-height:50px;height:50px;"  >
    <p align="center">AK-47 Redline</br>Factory New</p>
    </a>
  </div>
  <div class="col-xs-2 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/csgoskins/akredline.png" alt="..." style="max-height:50px;height:50px;"  >
      <p align="center">AK-47 Redline</br>Factory New</p>
    </a>
  </div>
  <div class="col-xs-2 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/csgoskins/awpasiimov.png" alt="..." style="max-height:50px;height:50px;"  >
      <p align="center">AWP Asiimov</br>Field Tested</p>
    </a>
  </div><div class="col-xs-2 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/csgoskins/awpasiimov.png" alt="..." style="max-height:50px;height:50px;"  >
    <p align="center">AWP Asiimov</br>Battle Scared</p>
    </a>
  </div>

  <div class="col-xs-2 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/csgoskins/awpasiimov.png" alt="..." style="max-height:50px;height:50px;"  >
      <p align="center">AWP Asiimov</br>Factory New</p>
    </a>
  </div>
  <div class="col-xs-2 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/csgoskins/akredline.png" alt="..." style="max-height:50px;height:50px;"  >
    <p align="center">AK-47 Redline</br>Factory New</p>
    </a>
  </div>
  <div class="col-xs-2 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/csgoskins/akredline.png" alt="..." style="max-height:50px;height:50px;"  >
      <p align="center">AK-47 Redline</br>Factory New</p>
    </a>
  </div>
  <div class="col-xs-2 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/csgoskins/awpasiimov.png" alt="..." style="max-height:50px;height:50px;"  >
      <p align="center">AWP Asiimov</br>Field Tested</p>
    </a>
  </div><div class="col-xs-2 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/csgoskins/awpasiimov.png" alt="..." style="max-height:50px;height:50px;"  >
    <p align="center">AWP Asiimov</br>Battle Scared</p>
    </a>
  </div>
</div>


<nav aria-label="...">
  <ul class="pagination">
    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
      <li><a href="#">2 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
          <li><a href="#">4 <span class="sr-only">(current)</span></a></li>

  </ul>
</nav>




  </div>
</div>






</div>
</p>




@stop
@extends('profile.partials.footer')
