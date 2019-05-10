@extends('layout.layouts')
@section('content')
<body background="{{asset('/images/wall4.png')}}" style="background-position:center" >
  
  <nav>
    <ul style="margin-top:10px;margin-bottom:-35px;">
    <a href="{{url('/jadwals/1')}}" class="skew-wrapper orange-outline" style="margin-left:290px;">
          <li class="unskew">SENIN</li>
        </a>
        <a href="{{url('/jadwals/2')}}" class="skew-wrapper orange-outline" style="margin-left:10px;">
          <li class="unskew">SELASA</li>
        </a>
        <a href="{{url('/jadwals/3')}}" class="skew-wrapper orange-outline" style="margin-left:10px;">
          <li class="unskew">RABU</li>
        </a>
        <a href="{{url('/jadwals/4')}}" class="skew-wrapper orange-outline" style="margin-left:10px;">
          <li class="unskew">KAMIS</li>
        </a>
        <a href="{{url('/jadwals/5')}}" class="skew-wrapper orange-outline" style="margin-left:10px;">
          <li class="unskew">JUMAT</li>
        </a>
    </ul>
</nav>

  <div class="cd-schedule cd-schedule--loading margin-top--lg margin-bottom--lg js-cd-schedule">
    <div class="cd-schedule__timeline" style="font-weight:bold;color:whitesmoke">
	      <li><span>07:00</span></li>
	    	<li><span>07:30</span></li>
        <li><span>08:00</span></li>
		    <li><span>08:30</span></li>
        <li><span>09:00</span></li>
        <li><span>09:30</span></li>
        <li><span>10:00</span></li>
        <li><span>10:30</span></li>
        <li><span>11:00</span></li>
        <li><span>11:30</span></li>
        <li><span>12:00</span></li>
        <li><span>12:30</span></li>
        <li><span>13:00</span></li>
        <li><span>13:30</span></li>
        <li><span>14:00</span></li>
        <li><span>14:30</span></li>
        <li><span>15:00</span></li>
        <li><span>15:30</span></li>
        <li><span>16:00</span></li>
        <li><span>16:30</span></li>
        <li style="margin-top:-15px;"><span >17:00</span></li>
      </ul>
    </div> <!-- .cd-schedule__timeline -->
	
    <div class="cd-schedule__events" >
      <ul style="height:1050px">

        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>9120</span></div>
		
          <ul>
            @foreach($allJadwal as $jadwal)
              <li class="cd-schedule__event">
                <a data-start="{{$jadwal->timeStart}}" data-end="{{$jadwal->timeEnd}}" data-content="event-abs-circuit" data-event="event-1" href="#0">
                  <em class="cd-schedule__name">{{$jadwal->singkatan}}</em>
                </a>
              </li>
            @endforeach
          </ul>
        </li>

        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>9121</span></div>
		
          <ul>
            @foreach($allJadwal2 as $jadwal)
              <li class="cd-schedule__event">
                <a data-start="{{$jadwal->timeStart}}" data-end="{{$jadwal->timeEnd}}" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">{{$jadwal->singkatan}}</em>
                </a>
              </li>
            @endforeach
          </ul>
        </li>

        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>9122</span></div>
		
          <ul>
            @foreach($allJadwal3 as $jadwal)
              <li class="cd-schedule__event">
                <a data-start="{{$jadwal->timeStart}}" data-end="{{$jadwal->timeEnd}}" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">{{$jadwal->singkatan}}</em>
                </a>
              </li>
            @endforeach
          </ul>
        </li>

        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>10316</span></div>
		
          <ul>
            @foreach($allJadwal4 as $jadwal)
              <li class="cd-schedule__event">
                <a data-start="{{$jadwal->timeStart}}" data-end="{{$jadwal->timeEnd}}" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">{{$jadwal->singkatan}}</em>
                </a>
              </li>
            @endforeach
          </ul>
        </li>

        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>10317</span></div>
		
          <ul>
            @foreach($allJadwal5 as $jadwal)
              <li class="cd-schedule__event">
                <a data-start="{{$jadwal->timeStart}}" data-end="{{$jadwal->timeEnd}}" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">{{$jadwal->singkatan}}</em>
                </a>
              </li>
            @endforeach
          </ul>
        </li>

        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>10322</span></div>
		
          <ul>
            @foreach($allJadwal6 as $jadwal)
              <li class="cd-schedule__event">
                <a data-start="{{$jadwal->timeStart}}" data-end="{{$jadwal->timeEnd}}" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">{{$jadwal->singkatan}}</em>
                </a>
              </li>
            @endforeach
          </ul>
        </li>

        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>10307</span></div>
		
          <ul>
            @foreach($allJadwal7 as $jadwal)
              <li class="cd-schedule__event">
                <a data-start="{{$jadwal->timeStart}}" data-end="{{$jadwal->timeEnd}}" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">{{$jadwal->singkatan}}</em>
                </a>
              </li>
            @endforeach
          </ul>
        </li>

        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>SB-914</span></div>
		
          <ul>
            @foreach($allJadwal8 as $jadwal)
              <li class="cd-schedule__event">
                <a data-start="{{$jadwal->timeStart}}" data-end="{{$jadwal->timeEnd}}" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">{{$jadwal->singkatan}}</em>
                </a>
              </li>
            @endforeach
          </ul>
        </li>

        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>SB-913</span></div>
		
          <ul>
            @foreach($allJadwal9 as $jadwal)
              <li class="cd-schedule__event">
                <a data-start="{{$jadwal->timeStart}}" data-end="{{$jadwal->timeEnd}}" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">{{$jadwal->singkatan}}</em>
                </a>
              </li>
            @endforeach
          </ul>
        </li>

        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>SB-915</span></div>
		
          <ul>
            @foreach($allJadwal10 as $jadwal)
              <li class="cd-schedule__event">
                <a data-start="{{$jadwal->timeStart}}" data-end="{{$jadwal->timeEnd}}" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">{{$jadwal->singkatan}}</em>
                </a>
              </li>
            @endforeach
          </ul>
        </li>

        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>SB-916</span></div>
		
          <ul>
            @foreach($allJadwal11 as $jadwal)
              <li class="cd-schedule__event">
                <a data-start="{{$jadwal->timeStart}}" data-end="{{$jadwal->timeEnd}}" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">{{$jadwal->singkatan}}</em>
                </a>
              </li>
            @endforeach
          </ul>
        </li>

        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>SB-917</span></div>
		
          <ul>
            @foreach($allJadwal12 as $jadwal)
              <li class="cd-schedule__event">
                <a data-start="{{$jadwal->timeStart}}" data-end="{{$jadwal->timeEnd}}" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">{{$jadwal->singkatan}}</em>
                </a>
              </li>
            @endforeach
          </ul>
        </li>

        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>SB-918</span></div>
		
          <ul>
            @foreach($allJadwal13 as $jadwal)
              <li class="cd-schedule__event">
                <a data-start="{{$jadwal->timeStart}}" data-end="{{$jadwal->timeEnd}}" data-content="event-abs-circuit" data-event="event-1" href="#0">
                    <em class="cd-schedule__name">{{$jadwal->singkatan}}</em>
                </a>
              </li>
            @endforeach
          </ul>
        </li>
        
      </ul>
    </div>
  
    <div class="cd-schedule-modal">
      <header class="cd-schedule-modal__header">
        <div class="cd-schedule-modal__content">
          
          <span class="cd-schedule-modal__date"></span>
          <h3 class="cd-schedule-modal__name"></h3>
        </div>
  
        <div class="cd-schedule-modal__header-bg"></div>
      </header>
  
      <div class="cd-schedule-modal__body">
        <div class="cd-schedule-modal__event-info"></div>
        <div class="cd-schedule-modal__body-bg"></div>
      </div>
  
      <a href="#0" class="cd-schedule-modal__close text--replace">Close</a>
    </div>
  
    <div class="cd-schedule__cover-layer"></div>
  </div> <!-- .cd-schedule -->

</body>
@endsection