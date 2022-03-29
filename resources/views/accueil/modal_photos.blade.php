<div class="modal fade" tabindex="-1" role="dialog" id="modal_photos">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="display_errors"></div>
			<div class="modal-header">
				<h5 class="modal-title">{{$titre}}</h5>
				<button type="button" class="close fermer_modal" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						@foreach($nombre_photos as $nbre)
							<li data-target="#carouselExampleIndicators" data-slide-to="{{$nbre}}" @if($loop->first) class="active" @endif></li>	
						@endforeach
					</ol>
					<div class="carousel-inner">
						@foreach($photos as $photo)
							<div class="carousel-item @if($loop->first) active @endif test">
								<!-- <img class="d-block w-100" src="{{asset($photo)}}" alt="{{$titre}}"> -->
								<div style="background:linear-gradient(0deg, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)),center / cover url('{{$photo}}'); height: 80vh;"></div>
							</div>
						@endforeach
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>