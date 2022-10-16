<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">

      
        <div class="col-8">
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $tarea->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
        <div class="col-4">
        <div class="form-group">
            {{ Form::label('fechalimite') }}
            {{ Form::date('fechalimite', $tarea->fechalimite, ['class' => 'form-control' . ($errors->has('fechalimite') ? ' is-invalid' : ''), 'placeholder' => 'Fechalimite']) }}
            {!! $errors->first('fechalimite', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
     <div class="col-8">
     <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $tarea->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
     </div>
     <div class="col-4">
     <div class="form-group">
            {{ Form::label('grado_id') }}
            {{ Form::select('grado_id', $grados, $tarea->grado_id, ['class' => 'form-control' . ($errors->has('grado_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar Grado']) }}
            {!! $errors->first('grado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
     

     </div>
     <div class="col-12">
     <!-- <div class="form-group">
            {{ Form::label('archivo') }}
            {{ Form::file('archivo', $tarea->archivo, ['class' => 'form-control' . ($errors->has('archivo') ? ' is-invalid' : ''), 'placeholder' => 'Archivo']) }}
            {!! $errors->first('archivo', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->

        <div class="formbold-mb-5 formbold-file-input">
          <input type="file" name="archivo" id="file" accept=".pdf" />
          <label for="file">
            <div>
              <span class="formbold-drop-file"> Arrastrar Archivos </span>
              <span class="formbold-or"> O </span>
              <span class="formbold-browse"> Seleccionar </span>
            </div>
          </label>
        </div>
     </div>
      
        
       

    </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">GUARDAR</button>
    </div>
</div>





<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: "Inter", sans-serif;
  }
  .formbold-mb-5 {
    margin-bottom: 20px;
  }
  .formbold-pt-3 {
    padding-top: 12px;
  }
  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 550px;
    width: 100%;
    background: white;
  }
  .formbold-form-label {
    display: block;
    font-weight: 500;
    font-size: 16px;
    color: #07074d;
    margin-bottom: 12px;
  }
  .formbold-form-label-2 {
    font-weight: 600;
    font-size: 20px;
    margin-bottom: 20px;
  }

  .formbold-form-input {
    width: 100%;
    padding: 12px 24px;
    border-radius: 6px;
    border: 1px solid #e0e0e0;
    background: white;
    font-weight: 500;
    font-size: 16px;
    color: #6b7280;
    outline: none;
    resize: none;
  }
  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold-btn {
    text-align: center;
    font-size: 16px;
    border-radius: 6px;
    padding: 14px 32px;
    border: none;
    font-weight: 600;
    background-color: #6a64f1;
    color: white;
    cursor: pointer;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold--mx-3 {
    margin-left: -12px;
    margin-right: -12px;
  }
  .formbold-px-3 {
    padding-left: 12px;
    padding-right: 12px;
  }
  .flex {
    display: flex;
  }
  .flex-wrap {
    flex-wrap: wrap;
  }
  .w-full {
    width: 100%;
  }

  .formbold-file-input input {
    opacity: 0;
    position: absolute;
    width: 100%;
    height: 100%;
  }

  .formbold-file-input label {
    position: relative;
    border: 1px dashed #e0e0e0;
    border-radius: 6px;
    min-height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
    text-align: center;
  }
  .formbold-drop-file {
    display: block;
    font-weight: 600;
    color: #07074d;
    font-size: 20px;
    margin-bottom: 8px;
  }

  .formbold-or {
    font-weight: 500;
    font-size: 16px;
    color: #6b7280;
    display: block;
    margin-bottom: 8px;
  }
  .formbold-browse {
    font-weight: 500;
    font-size: 16px;
    color: #07074d;
    display: inline-block;
    padding: 8px 28px;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
  }

  .formbold-file-list {
    border-radius: 6px;
    background: #f5f7fb;
    padding: 16px 32px;
  }

  .formbold-file-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .formbold-file-item button {
    color: #07074d;
    border: none;
    background: transparent;
    cursor: pointer;
  }

  .formbold-file-name {
    font-weight: 500;
    font-size: 16px;
    color: #07074d;
    padding-right: 12px;
  }
  .formbold-progress-bar {
    margin-top: 20px;
    position: relative;
    width: 100%;
    height: 6px;
    border-radius: 8px;
    background: #e2e5ef;
  }

  .formbold-progress {
    position: absolute;
    width: 75%;
    height: 100%;
    left: 0;
    top: 0;
    background: #6a64f1;
    border-radius: 8px;
  }

  @media (min-width: 540px) {
    .sm\:w-half {
      width: 50%;
    }
  }
</style>