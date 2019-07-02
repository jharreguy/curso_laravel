<label>Nombre de la producto</label>
{!!Form::text('nombre', null , ['class'=>'input-group'])!!}
<br>
<label>Descripcion del producto</label>
{!!Form::text('descripcion', null , ['class'=>'input-group'])!!}
<br>
<label>Precio z</label>
{!!Form::text('precio', null , ['class'=>'input-group'])!!}
<br>
<div class="file-field input-field col l6 s12">
  {!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder' => 'Seleccione categoria']) !!}
</div>
