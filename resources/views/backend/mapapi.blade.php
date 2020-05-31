@extends('backend.template')
@section('title','MapsApi')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<div class="row my-5" >
    <div class="col">

        <div class="box__map">
            <div class="map"  id='map' style="width: 100%;height: 500px;">
            </div>
        </div>
    </div>

</div>

<div class="row">
        <div class="col text-center">
            <form id="searchMap" action="{{ route('searchmapgeocode') }}" method="POST">
                @csrf
                <input type="text" id="location-map" placeholder="Nhập vào địa chỉ">
                <button class="btn btn-info" id="btn-search-location" type="submit">Search</button>
            </form>
        </div>
</div>
    <div class="row">
        <div class="col text-center">           
              <i class="fas fa-camera"></i>
            <span class="title">Latitude :</span> 
             <input type="text"  id="latitude" value="10.739714">
        </div>
        <div class="col  text-center">
            <i class="fas fa-camera"></i>
            <span class="title">Longitude :</span>
            <input type="text"  id="longitude" value="106.6781644">
        </div>
    </div>
  <script>
    $(document).on("click",'#btn-search-location',function(event){
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
        event.preventDefault();
        var getLocationInput=$('#location-map').val();
        if(getLocationInput =='')
        {
            alert('vui lòng nhật địa chỉ trước khi submit');
        }else
        {
            var url = '{{ route('searchmapgeocode') }}';
            console.log(url);
            $.ajax({
                    url:url,
                    type:'POST',
                    data:{
                       keysearch: getLocationInput,
                    },
                    success:function(data){
                        console.log(data);
                        if(data.status =='200')
                        {
                        $('#latitude').val(data.latitude);
                        $('#longitude').val(data.longitude);
                        alert('Vị Trí Bạn Muốn Tìm');
                        }else
                        {
                            $('#latitude').val(0);
                            $('#longitude').val(0);
                        }
                    }
            }).done(function(){
                initMap();
            });
        }
    
        
    });
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJx44jiP9QHAeOec2C0aLW29jiL6OQyRU&callback=initMap"
  async defer>
</script>
  <script>
    function initMap() {
        // Get value lat and lng 
        var gps_Latitude = document.getElementById('latitude').value;
        var gps_Longitude = document.getElementById('longitude').value;
        var Lat = parseFloat(gps_Latitude);
        var Lng = parseFloat(gps_Longitude);

        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: Lat, lng: Lng },
            zoom: 18,
            styles: [
                { elementType: 'geometry', stylers: [{ color: '#242f3e' }] },
                { elementType: 'labels.text.stroke', stylers: [{ color: '#242f3e' }] },
                { elementType: 'labels.text.fill', stylers: [{ color: '#746855' }] },
                {
                    featureType: 'administrative.locality',
                    elementType: 'labels.text.fill',
                    stylers: [{ color: '#d59563' }]
                },
                {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{ color: '#d59563' }]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{ color: '#263c3f' }]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{ color: '#6b9a76' }]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{ color: '#38414e' }]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry.stroke',
                    stylers: [{ color: '#212a37' }]
                },
                {
                    featureType: 'road',
                    elementType: 'labels.text.fill',
                    stylers: [{ color: '#9ca5b3' }]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{ color: '#746855' }]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry.stroke',
                    stylers: [{ color: '#1f2835' }]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{ color: '#f3d19c' }]
                },
                {
                    featureType: 'transit',
                    elementType: 'geometry',
                    stylers: [{ color: '#2f3948' }]
                },
                {
                    featureType: 'transit.station',
                    elementType: 'labels.text.fill',
                    stylers: [{ color: '#d59563' }]
                },
                {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{ color: '#17263c' }]
                },
                {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{ color: '#515c6d' }]
                },
                {
                    featureType: 'water',
                    elementType: 'labels.text.stroke',
                    stylers: [{ color: '#17263c' }]
                }
            ]
        });
    }
</script>

    
  @endsection
  

