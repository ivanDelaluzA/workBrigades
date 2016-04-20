<div class="col-sm-6 col-md-3">
	<div class="thumbnail">
		<button type="button" class="btn btn-link btn-lg" data-toggle="modal" data-target="#{{ $contact->id }}">
			<img  class="img-responsive alt="Responsive image" src="{{ asset( 'images/porfiles/'.$contact->image)}}"/></button>

			<div class="row">
				<div class="caption col-sm-9"> <!-- caption -->
					<button type="button" class="btn btn-link btn-lg" data-toggle="modal" data-target="#{{ $contact->id }}">
						{{$contact->name}}</button>
				</div>
				<div class="caption col-sm-1">
					<a href="{{ route('contacts.edit', $contact->id ) }}"><button type="button" class="btn btn-info btn-sm " data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
				</div>

			</div>


			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade bs-example-modal-md" id="{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" >
			<div class="modal-dialog modal-sm" style="text-align: center" >
				<div class="modal-content" style=" background-color: #0480be;">
					<div class="modal-header " style="color: white;">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">{{$contact-> name." ".$contact-> last_name." ".$contact-> middle_name}}</h4> <img   style="width:150px;height:150px;" class="img-circle" src="{{ asset( 'images/porfiles/'.$contact->image)}}"/>
					</div>
					<div class="modal-body" style="background-color: white; color: black">
						<table class="table table-hover" style="text-align: center" >
							<tr class="info" >
								<td><H4>TELEFONOS</H4></td>
							</tr>
							<tr>
								<td style="color: grey" >
									@foreach ($contact->phones as $pho)
									<h5>{{ $pho->telephone }}</h5>
									@endforeach
								</td>
							</tr>
							<tr class="info">
								<td><H4>E-MAILS</H4></td>
							</tr>
							<tr>
								<td style="color: grey">
									@foreach ($contact->mails as $mail)
									<h5>{{ $mail->email }}</h5>
									@endforeach
								</td>
							</tr>
							<tr class="info">
								<td><H4>DIRECCION</H4></TD>
								</tr>
								<tr>
									<td style="color: grey"> {{ $contact->address}}</td>
								</tr>
							</table>
						</div>
						<div class="modal-footer">

							{!! Form::open(['route'=> ['contacts.destroy', $contact->id], 'method' => 'DELETE', 'novalidate' => 'novalidate', 'files' => true]) !!}
							<a href="{{ route('contacts.edit', $contact->id ) }}"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
							<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>

							{!! Form::close() !!}


						</div>
					</div>
				</div>
			</div>
