@csrf()
<div class="form-group">
    <input type="text" placeholder="Assunto" name="subject" value="{{ old('subject') }}">
</div>
<div class="form-group">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{ old('body') }}</textarea>
</div>
<button class="btn btn-primary" type="submit">Enviar</button>
