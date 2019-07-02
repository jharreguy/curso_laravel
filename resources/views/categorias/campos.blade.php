<label>Nombre de la categoria</label>
{!!Form::text('nombre', null , ['class'=>'input-group'])!!}
<br>
<label>Descripcion de la categoria</label>
{!!Form::text('descripcion', null , ['class'=>'input-group'])!!}
<div class="file-field input-group">
    <div class="btn bte-info">
    <span>
        Imagen
    </span>
        {!! Form::file('imagen') !!}
    </div>
</div>
<br>