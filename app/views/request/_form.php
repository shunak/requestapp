<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
				<div class="form-group">
			<?php echo Form::label('内容', 'body', array('class'=>'control-label')); ?>

				<?php echo Form::input('body', Input::post('body', isset($request) ? $request->body : ' '), array('class' => 'col-md-4 form-control', 'placeholder'=>'Body')); ?>

	</div>

		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'データベース登録', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>