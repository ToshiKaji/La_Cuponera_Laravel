se muestratran los cupones por autorizar
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">ID cupon</th>
      <th scope="col">Codigo de empresa</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio normal</th>
      <th scope="col">Porcentaje de oferta</th>
      <th scope="col">Precio</th>
      <th scope="col">Fecha inicio</th>
      <th scope="col">Fecha final</th>
      <th scope="col">Fecha limite</th>
      <th scope="col">Stock</th>
      <th scope="col">imagen</th>
      <th scope="col">Estado</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($cupones as $cupon)
    <tr>
      <td>{{$cupon->id_cu}}</td>
      <td>{{$cupon->cod_empresa}}</td>
      <td>{{$cupon->titulo_oferta}}</td>
      <td>{{$cupon->descripcion}}</td>
      <td>{{$cupon->precio_regular}}</td>
      <td>{{$cupon->porc_oferta}}</td>
      <td>{{$cupon->precio_cupon}}</td>
      <td>{{$cupon->fecha_ini}}</td>
      <td>{{$cupon->fecha_fin}}</td>
      <td>{{$cupon->fecha_lim}}</td>
      <td>{{$cupon->cantidad_lim}}</td>
      <td>{{$cupon->imagen}}</td>
      <td>{{$cupon->activado}}</td>
    </tr>
   @endforeach
  </tbody>
</table>
<a href="{{url('/Cupones/Cupone/edit')}}" class="action">Ver inactivos</a>
<a href="{{url('/Cupones/Cupone')}}" class="action">Ver Todos</a>
    